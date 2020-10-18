<?php

namespace App\Controller;

use App\Entity\Borrar2;
use App\Entity\ProductCategory;
use App\Entity\ProductsData;
use App\Form\Delet2Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Delet2Controller extends AbstractController
{
    /**
     * @Route("/delet2", name="delet2")
     */
    public function index(Request $request)
    {
       $delet2= new Borrar2();
       $form = $this->createForm(Delet2Type::class, $delet2);
       $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $nombre=$delet2->getName();
        $Post = $em->getRepository(ProductCategory::class)->findOneBy(['name' =>$nombre]);
        $Post1  = $em->getRepository(ProductCategory::class)->findAll();
        if ($form->getClickedButton() && 'del' === $form->getClickedButton()->getName()) {
            $em->remove($Post);
            $em->flush();
            return $this->redirectToRoute('delet2');
        }
        if ($form->getClickedButton() && 'back' === $form->getClickedButton()->getName()) {
            return $this->redirectToRoute('menu');
        }



        return $this->render('delet2/index.html.twig', [
            'controller_name' => 'Delet2Controller',
            'formulario' => $form->createView(),
            'post' => $Post1,
        ]);
    }
}
