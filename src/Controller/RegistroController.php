<?php

namespace App\Controller;

use App\Entity\ProductsData;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class  RegistroController extends AbstractController
{
    /**
     * @Route("/Enter", name="Enter")
     */
    public function index(Request $request)
    {
        $Product = new ProductsData();
        $form = $this->createForm(ProductType::class, $Product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
                $em=$this->getDoctrine()->getManager();
                $em->persist($Product);
                $em->flush();
                $this->addFlash('Exito',ProductsData::registro);
                return $this->redirectToRoute('menu');
        }


        $em = $this->getDoctrine()->getManager();
        $ProductData = $em->getRepository(ProductsData::class)->findAll();

        return $this->render('registro/index.html.twig', [
            'controller_name' => 'RegistroController',
            'formulario' => $form->createView(),
            'ProductData' => $ProductData,
        ]);
    }


}


