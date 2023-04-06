<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RestaurantRepository;


class RestaurantController extends AbstractController
{
    /**
     * @Route("/restaurant/{id}", name="app_restaurant_show", requirements={"id": "\d+"})
     */
    public function show(int $id, RestaurantRepository $restaurantRepo): Response
    {

        $restaurant = $restaurantRepo->find($id);


        return $this->render('restaurant/show.html.twig', [
            'restaurant' => $restaurant,
        ]);
    }

















}
