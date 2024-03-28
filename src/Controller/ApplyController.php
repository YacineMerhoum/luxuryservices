<?php

namespace App\Controller;


use App\Entity\Candidature;
use App\Form\CandidatsType;
use App\Repository\JobOfferRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApplyController extends AbstractController
{
    #[Route('/apply', name: 'apply')]
    public function index(JobOfferRepository $jobOfferRepository, Request $request,
     EntityManagerInterface $entityManager): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $candidat = $user->getId();
    
        $candidature = New Candidature();
        /** @var Candidature $candidature */
        $jobOffer = $jobOfferRepository->find($request->request->get('apply'));
        $candidature->setIdJob($jobOffer);
        $candidature->setIdCandidat($user->getCandidats());
        $entityManager->persist($candidature);
        $entityManager->flush();
        

        return $this->redirectToRoute('app_job_offer', ['id' => $jobOffer->getId()], Response::HTTP_SEE_OTHER);
    
        
    }
    // MEME CHOSE MEME ROUTE MAIS POUR LA PAGE DETAIL 
    // #[Route('/applyDetail', name: 'applyDetail')]
    // public function applyDetail(JobOfferRepository $jobOfferRepository, Request $request,
    //  EntityManagerInterface $entityManager): Response
    // {
    //     /** @var User $user */
    //     $user = $this->getUser();
    //     $candidat = $user->getId();
    
    //     $candidature = New Candidature();
    //     /** @var Candidature $candidature */
    //     $jobOffer = $jobOfferRepository->find($request->request->get('applyDetail'));
    //     $candidature->setIdJob($jobOffer);
    //     $candidature->setIdCandidat($user->getCandidats());
    //     $entityManager->persist($candidature);
    //     $entityManager->flush();
        

    //     return $this->redirectToRoute('applyDetail', [], Response::HTTP_SEE_OTHER);
    
        
    // }
}
