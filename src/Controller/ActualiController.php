<?php

namespace App\Controller;

use App\Entity\Actualizar;
use App\Entity\ProductsData;
use App\Form\Actualizacion1Type;
use App\Form\ActualizacionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ActualiController extends AbstractController
{
    /**
     * @Route("/actuali", name="actuali")
     */
    public function index(Request $request)
    {
        $actualizar = new Actualizar();
        $form = $this->createForm(Actualizacion1Type::class,$actualizar);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $Actualizacion = $em->getRepository(ProductsData::class)->findAll();

      if ($form->getClickedButton() && 'update' === $form->getClickedButton()->getName()){
        $em=$this->getDoctrine()->getManager();
          $id= $actualizar->getIds()*1;
        $post = $em->getRepository(ProductsData::class)->find($id);
        $post->setCode($actualizar->getCode());
       $post->setCategory ($actualizar->getCategory());
        $post->setName($actualizar->getName());
        $post->setPrice($actualizar->getPrice());
        $post->setTrademark($actualizar->getTrademark());
        $post->setDescription($actualizar->getDescription());
        $em->flush();
        $this->addFlash('corregir',ProductsData::registro);
        return $this->redirectToRoute('menu');
          }



        return $this->render('actuali/index.html.twig', [
            'controller_name' => 'ActualiController',
            'formulario2' => $form->createView(),
            'Actualizacion' => $Actualizacion,

        ]);
    }
}
