<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


use AppBundle\Event\ExampleEvent;

class UserController extends Controller
{
    /**
     * @Route("/allUsers/", name="allUsers")
     */
    public function getAllUsers(Request $request)
    {
        $dispatcher = $this->get('event_dispatcher');

        $user = new User();
        $event = new ExampleEvent();        

        $dispatcher->dispatch('app.event.get_user', $event);

        $user = $event->getUser();

        //return new JsonResponse(['user' => $user]);
        // ou, pour coller à la demande de l'exercice...
        $serializer = $this->get('serializer');
        $data = $serializer->serialize($user, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/findOneUser/{id}", name="findOneUser")
     */
    public function oneUser(Request $request, $id)
    {
        $dispatcher = $this->get('event_dispatcher');

        $user = new User();
        $event = new ExampleEvent();       
        $event->setUserId($id); 

        $dispatcher->dispatch('app.event.get_one_user', $event);

        $user = $event->getUser();

        //return new JsonResponse(['user' => $user]);
        // ou, pour coller à la demande de l'exercice...
        $serializer = $this->get('serializer');
        $data = $serializer->serialize($user, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
