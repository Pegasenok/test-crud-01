<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    /**
     * @Route("/products")
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        return $this->render('Products/index.html.twig');
    }
}