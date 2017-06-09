<?php

namespace VOD\QubitArgentinaBundle\Controller;

use \VOD\BaseBundle\Controller\HomeController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class HomeController
 *
 * @package VOD\QubitArgentinaBundle\Controller
 */
class HomeController extends BaseController
{
    /**
     * @Route("/clarin", name="landing_clarin");
     * 
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function landingClarinAction()
    {
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('homepage');
        }

        $productPrice = $this->get('vod_base.utils_client')->getProductPrice();

        return $this->render('VODBaseBundle:Home/Landings:clarin-landing.html.twig', compact('productPrice'));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function approvedAction()
    {
    	return $this->render('VODBaseBundle:Home:operation-approved.html.twig');
    }
}