<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Flex\Response;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'page_title' => 'Home',
        ]);
    }

    /**
     * @Route("/roomOverview", name="roomOverview")
     */
    public function roomOverview()
    {
        return $this->render('index/roomOverview.html.twig', [
            'page_title' => 'Rooms',
        ]);
    }
}
