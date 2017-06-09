<?php

namespace VOD\QubitArgentinaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use VOD\BaseBundle\Controller\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use VOD\BaseBundle\Services\Client\Content\Model\Order;
use VOD\BaseBundle\Services\Client\Content\Model\SearchCondition;
use VOD\BaseBundle\Services\Client\User\Model\User;

class PlayerController extends BaseController
{
    /**
     * @Route("/_______player/", name="new_player_crazy");
     *
     */
    public function newPlayerWayAction(Request $request)
    {
        $user = $this->getUser();

        $rendered = $this->render('@VODQubitArgentina/Player/no-data.html.twig');

        if ($user instanceof User) {
            $order = new Order();
            $searchCondition = new SearchCondition();
            $searchCondition->setOrder([$order->getAsArray()]);

            $contents = $this->get('vod_base.content_client')->getPublicContent(
                'search_mix',
                $searchCondition,
                5,
                1,
                20,
                'search'
            );

            $rendered = $this->render('@VODQubitArgentina/Player/index.html.twig', array(
                'autologin_hash' => $user->getAutoLoginHash(),
                'username' => $user->getDisplayIdentifier(),
                'contents' => $contents->getData(),
            ));
        }

        return $rendered;
    }
}