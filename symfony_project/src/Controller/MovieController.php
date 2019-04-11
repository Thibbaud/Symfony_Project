<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Tmdb\ApiToken;
use Tmdb\Client;

class MovieController extends AbstractController
{

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

        dump($credits);
        return $this->render('movie/show.html.twig',[
            'movie' => $movie,
            'credits' => $credits
        ]);
    }
}
