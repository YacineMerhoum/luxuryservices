<?php

namespace App\Controller;

use App\Entity\JobOffer;
use App\Repository\CategoryRepository;
use App\Repository\JobOfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(JobOfferRepository $jobOfferRepository, CategoryRepository $categoryRepository): Response
    {
        $categorys = $categoryRepository->findAll();
        $jobOffers = $jobOfferRepository->findAll();
        $isAuthenticated = $this->isGranted("ROLE_USER");

        return $this->render('home/index.html.twig', [
            "categorys" => $categorys,
            "jobOffers"  => $jobOffers,
            'is_authenticated' => $isAuthenticated,
            'controller_name' => 'HomeController'
        ]);
    }
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}
