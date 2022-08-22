<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $movieRepository = $this->em->getRepository(Movie::class);
        
        $movies = $movieRepository->findBy(['releaseYear' => 2021], ['id' => 'DESC']);

        //dd($movies);

        return $this->render(
            'index.html.twig', [
                'movies' => $movies
            ]
        );
    }

    /**
     * oldMethod
     *
     * @Route("/old", name="old")
     */
    public function oldMethod(): Response
    {
        return $this->json([
            'message' => 'Old Method',
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
}
