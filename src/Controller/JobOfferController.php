<?php

namespace App\Controller;

use App\Entity\JobOffer;
use App\Repository\JobOfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class JobOfferController extends AbstractController
{
    #[Route('/job/offer/{id}', name: 'app_job_offer')]
    public function index(JobOffer $job): Response
    {
      

        return $this->render('job_offer/job.html.twig', [
            "job"  => $job,
            'controller_name' => 'JobOfferController',
        ]);
    }


}
