<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Tmdb\ApiToken;
use Tmdb\Client;


class MovieController extends AbstractController
{

    /**
     * @Route("/search",name="search")
     * @param Request $request
     * @return Response
     */
    public function search(Request $request)
    {
        $search = trim($request->get('search'));
        if($search==""){
            return $this->render('movies_list/no_match.html.twig');
        }
        else{

            $token = new ApiToken("d972dbfa37295cd09b02b8019dbd7c70");
            $client = new Client($token);


            /*$client = $this->get('tmdb.client');
            $movie = $this->get('tmdb.movie_repository')->load(13);*/
            //recherche par titre de films
            $bytitle = $client->getSearchApi()->searchMovies($search);
            //recherche par acteurs
            $actors = $client->getSearchApi()->searchPersons($search);
            foreach($actors["results"] as $key => $value){
                foreach($value["known_for"] as $key => $value){
                    $id[]=$value["id"];
                };
            };

            $length=count($id);
            for($i=0;$i<$length;$i++){
                try {
                    $byactor[] = $client->getMoviesApi()->getMovie($id[$i]);
                }catch(\Exception $e){
                    error_log($e->getMessage());
                }
            }
            dump($byactor);
            return $this->render('movie/search.html.twig', [
                'bytitles' => $bytitle["results"],
                'byactor' => $byactor
            ]);
        }

    }

     /**
     * @return Response
     * @Route("/moviz", name="one")
     */
    public function movie(){


        $token = new ApiToken("d972dbfa37295cd09b02b8019dbd7c70");
        $client = new Client($token);
        $movie = $client->getMoviesApi()->getMovie(550);

        var_dump($movie);

        return $this->render('test/movie.html.twig',[
            'moviz' => $movie
        ]);

    }

    /**
     * @return Response
     * @Route("/movie", name="movie")
     */
    public function index(){
        $token = new ApiToken("d972dbfa37295cd09b02b8019dbd7c70");
        $client = new Client($token);

        $movie = $client->getMoviesApi()->getMovie($_POST['id']);
        dump($movie);

        return $this->render('test/movie.html.twig', [
            'movie' => $movie,
        ]);
    }

    /**
     * @return Response
     * @Route("/top", name="bests")
     */
    public function top()
    {
        $token = new ApiToken("d972dbfa37295cd09b02b8019dbd7c70");
        $client = new Client($token);

        $top = $client->getMoviesApi()->getTopRated([
            'language' => 'fr'
        ]);

        dump($top);
        return $this->render('movie/top.html.twig', [
            'tops' => $top
        ]);
    }

    /**
     * @Route("movie/{id}", name="show_movie")
     */
    public function show($id){

        $token = new ApiToken("d972dbfa37295cd09b02b8019dbd7c70");
        $client = new Client($token);

        $movie = $client->getMoviesApi()->getMovie($id, [
            'language' => 'fr'
        ]);
        $credits = $client->getMoviesApi()->getCredits($id, [
            'language' => 'fr'
        ]);
        $trailers = $client->getMoviesApi()->getTrailers($id);

        dump($credits);
        dump($movie);
        return $this->render('movie/show.html.twig',[
            'movie' => $movie,
            'credits' => $credits,
            'trailers'=> $trailers
        ]);
    }


}