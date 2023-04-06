<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RestaurantRepository;


class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_main")
     */
    public function list(RestaurantRepository $restaurants): Response
    {

        $restaurantObject = $restaurants->findAll();

        return $this->render('main/list.html.twig', [
            'restaurantObject' => $restaurantObject,
        ]);
    }
}
