<?php

namespace Dnu\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ActivitiesController extends Controller
{
    
    public function indexAction($attivita)
    {
        return $this->render('DnuSiteBundle:Activities:' . $attivita . '.html.twig');
    }

}
