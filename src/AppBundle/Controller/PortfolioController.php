<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PortfolioController extends Controller
{
    /**
     *
     * @Route("/portfolio", name="portfolio")
     */

    public function portfolioAction(Request $request)
    {
        $sitename = "Portfolio";
        return $this->render('portfolio/portfolio.html.twig', [
            'sitename' => $sitename,
        ]);

    }

}