<?php

namespace App\Controller;

use App\Entity\Infos;
use App\Form\InfosType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfosController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    /**
     * @Route("/informations", name="infos")
     */
    public function index(Request $request): Response
    {
        
        $infos = new Infos();
        $form = $this->createForm(InfosType::class, $infos);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $infos = $form->getData();
            
            $this->em->persist($infos);
            $this->em->flush();

            dd($infos);
        }

        return $this->render('infos/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
