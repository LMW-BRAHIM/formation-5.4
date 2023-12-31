<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */

    public function Home()
    {
        return $this->render('home/index.html.twig', [
            'pageHome' => 'page Home',
        ]);
    }
}
