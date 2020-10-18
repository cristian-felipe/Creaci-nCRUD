<?php

namespace App\Controller;

use App\Entity\Actualizar2;
use App\Entity\ProductCategory;
use App\Entity\ProductsData;
use App\Form\Actualizar2Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Actuali2Controller extends AbstractController
{
    /**
     * @Route("/actuali2", name="actuali2")
     */
    public function index(Request $request)
    {
        $Actualizar = new Actualizar2();
        $form = $this->createForm(Actualizar2Type::class,$Actualizar);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $Ver= $em->getRepository(ProductCategory::class)->findAll();

        If($form->getClickedButton() && 'update' === $form->getClickedButton()->getName()){
            $em=$this->getDoctrine()->getManager();
            $id= $Actualizar->getIds();
            $post = $em->getRepository(ProductCategory::class)->find($id);
            $post->setCode($Actualizar->getCode());
            $post->setName($Actualizar->getName());
            $post->setDescription($Actualizar->getDescription());
            $post->setActive($Actualizar->getActive());
            $em->flush();
            $this->addFlash('corregir',ProductCategory::registro1);
            return $this->redirectToRoute('menu');
        }

        return $this->render('actuali2/index.html.twig', [
            'controller_name' => 'Actuali2Controller',
            'formulario2' => $form->createView(),
            'Ver' => $Ver,
        ]);
    }
}
