<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Tmdb\ApiToken;
use Tmdb\Client;

class HomeController extends AbstractController
{

    /**
     * @return Response
     * @Route("/", name="home")
     */
    public function upcoming(){
        $token  = new ApiToken("d972dbfa37295cd09b02b8019dbd7c70");
        $client = new Client($token);

        $upcoming = $client->getMoviesApi()->getUpcoming([
            'language' => 'fr'
        ]);
        dump($upcoming);

        return $this->render('home/index.html.twig', [
            'upcoming' => $upcoming
        ]);
    }
    /**
     * @Route("search", name="search_movie")
     */
    public function search(){
        $token = new ApiToken("d972dbfa37295cd09b02b8019dbd7c70");
        $client = new Client($token);
        
        $result = $client->getSearchApi()->searchMovies();
        //dump($result);

        return $this->render('home/search.html.twig',[
            'search' => $result,
        ]);
    }
}
