<?php

namespace App\Controller;

use App\Entity\ProductCategory;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/Enter2", name="Enter2")
     */
    public function index(Request $request)
    {
        $Category = new ProductCategory();
        $form = $this->createForm( CategoryType::class, $Category);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Category);
            $em->flush();
            $this->addFlash('Exito1',ProductCategory::registro1);
            return $this->redirectToRoute('menu');
        }
        $em = $this->getDoctrine()->getManager();

        $ProductCategory = $em->getRepository(ProductCategory::class)->findAll();
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
            'formulario1' => $form->createView(),
            'ProductCategory' => $ProductCategory,
        ]);
    }
}
