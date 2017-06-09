<?php

namespace VOD\QubitArgentinaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use VOD\BaseBundle\Controller\SecurityController as BaseController;

class SecurityController extends  BaseController
{
    /*
     * Si el usuario viene por red movistar, tenemos que guardar en session esta variable para que
     * en el checkout se cambie el orden de los medios de pago disponibles.
     */
    protected function preRegistrationExecution(Request $request)
    {
        if ($request->query->get('utm_source', false) === 'redmovistar') {
            $this->get('session')->set('movistar_campaign', true);
        }
    }
}