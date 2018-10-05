<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Event\ExampleEvent;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
    
    /**
     * @Route("/exercice-tip-01/{userId}", name="exercice_tip_01")
     */
    public function exerciceTip01(Request $request, $userId)
    {
        $dispatcher = $this->get('event_dispatcher');

        $event = new ExampleEvent();        
        $event->setUserId($userId);

        $dispatcher->dispatch('app.event.get_user', $event);

        $user = $event->getUser();

        return new JsonResponse(['user' =>  $user]);
        // ou, pour coller à la demande de l'exercice...
        // $serializer = $this->get('app.awesome_serializer')
        // $serializer->serialize($user)
        // $response = $serializer->getResponse(); // Paf! renverra donc qq chose du type JsonResponse... !
        // return $response;
    }

    /**
     * @Route("/exercice-tip-02", name="exercice_tip_02")
     */
    public function exerciceTip02(Request $request)
    {
        $dispatcher = $this->get('event_dispatcher');

        $event = new ExampleEvent();
        $dispatcher->dispatch('app.event.create_user', $event);

        return new JsonResponse(['result' => 'Hi']);
    }
}
