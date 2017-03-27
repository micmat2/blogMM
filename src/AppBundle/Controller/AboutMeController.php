<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutMeController extends Controller
{
    /**
     *
     * @Route("/about", name="about")
     */

    public function aboutMeAction(Request $request)
    {
        $sitename = "O mnie";
        return $this->render('aboutMe/aboutMe.html.twig', [
            'sitename' => $sitename,
        ]);

    }

}