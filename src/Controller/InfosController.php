<?php

namespace App\Controller;

use App\Entity\Infos;
use App\Form\InfosType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfosController extends AbstractController
{
    /**
     * @Route("/informations", name="infos")
     */
    public function index(): Response
    {
        $infos = new Infos();
        $form = $this->createForm(InfosType::class, $infos);
        return $this->render('infos/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
