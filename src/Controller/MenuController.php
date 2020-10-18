<?php

namespace App\Controller;

use App\Entity\Menu1;
use App\Entity\ProductCategory;
use App\Entity\ProductsData;
use App\Form\MenuType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route("/menu", name="menu")
     */
    public function index(Request $request)
    {
        //$menu2 =new Menu1();
        $form = $this->createForm(MenuType::class);
        $form->handleRequest($request);

        if ($form->getClickedButton() && 'IngresarProducto' === $form->getClickedButton()->getName()) {
            return $this->redirectToRoute('Enter');
        }
        if ($form->getClickedButton() && 'IngresarCategoria' === $form->getClickedButton()->getName()) {
            return $this->redirectToRoute('Enter2');
        }
        if ($form->getClickedButton() && 'BorrarProducto' === $form->getClickedButton()->getName()) {
            return $this->redirectToRoute('delet');
        }
        if ($form->getClickedButton() && 'BorrarCategoria' === $form->getClickedButton()->getName()) {
            return $this->redirectToRoute('delet2');
        }
        if ($form->getClickedButton() && 'ActualizarProducto' === $form->getClickedButton()->getName()) {
            return $this->redirectToRoute('actuali');
        }
        if ($form->getClickedButton() && 'ActualizarCategoria' === $form->getClickedButton()->getName()) {
            return $this->redirectToRoute('actuali2');
        }
        if($form->getClickedButton() && 'vista' === $form->getClickedButton()->getName()){
            return  $this->redirectToRoute('vista');
        }
        $em = $this->getDoctrine()->getManager();
        $ver = $em->getRepository(ProductsData::class)->findAll();
        $ver2 = $em->getRepository(ProductCategory::class)->findAll();
        return $this->render('menu/index.html.twig', [
            'controller_name' => 'MenuController',
            'formulario' => $form->createView(),
            'Ver' =>$ver,
            'Ver2' => $ver2,
        ]);
    }
}
