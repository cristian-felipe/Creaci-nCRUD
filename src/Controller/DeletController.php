<?php

namespace App\Controller;

use App\Entity\Borrar;
use App\Entity\ProductsData;
use App\Form\DeletType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DeletController extends AbstractController
{
    /**
     * @Route("/delet", name="delet")
     */
    public function index(Request $request)
    {
       $Delet = new Borrar();
       $form = $this->createForm(DeletType::class,$Delet);
       $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $nombre=$Delet->getName();
        $Post = $em->getRepository(ProductsData::class)->findOneBy(['name' =>$nombre]);
        $Post1  = $em->getRepository(ProductsData::class)->findAll();

        if ($form->getClickedButton() && 'del' === $form->getClickedButton()->getName()) {
            $em->remove($Post);
            $em->flush();
            return $this->redirectToRoute('delet');
        }
        if ($form->getClickedButton() && 'back' === $form->getClickedButton()->getName()) {
            return $this->redirectToRoute('menu');
        }

        return $this->render('delet/index.html.twig', [
            'controller_name' => 'DeletController',
            'formulario' => $form->createView(),
            'post' => $Post1,
        ]);
    }
}
