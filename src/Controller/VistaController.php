<?php

namespace App\Controller;

use App\Entity\Filtro;
use App\Entity\ProductsData;
use App\Form\Filtro2Type;
use App\Form\FiltroType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VistaController extends AbstractController
{
    /**
     * @Route("/vista", name="vista")
     */
    public function index(Request $request)
    {
        $Ver = new Filtro();
        $form = $this->createForm(Filtro2Type::class,$Ver);
        $form->handleRequest($request);
        if($form->getClickedButton() && 'name' === $form->getClickedButton()->getName()){

            $em=$this->getDoctrine()->getManager();
            $em->persist($Ver);
            $em->flush();
            $this->addFlash('Exito',ProductsData::registro);
            return  $this->redirectToRoute('vista');
        }
        if($form->getClickedButton() && 'back' === $form->getClickedButton()->getName()){
          return  $this->redirectToRoute('menu');
        }
        $em = $this->getDoctrine()->getManager();
        $nombre=$Ver->getName();
        //$pregunta=$Ver->getParametro();
        $ver2 = $em->getRepository(ProductsData::class)->findOneBy(['trademark'=>$nombre]);
        $vis= $em->getRepository(ProductsData::class)->findAll();

        return $this->render('vista/index.html.twig', [
            'controller_name' => 'VistaController',
            'formulario' => $form->createView(),
            'Ver'=>$ver2,
            'Vis'=>$vis,
        ]);
    }
}
