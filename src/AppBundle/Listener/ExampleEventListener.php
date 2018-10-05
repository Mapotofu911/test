<?php

namespace AppBundle\Listener;

use Doctrine\ORM\EntityManager;
use AppBundle\Event\ExampleEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

/**
 * Example à compléter...
 */
class ExampleEventListener
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function onGetUser(ExampleEvent $event)
    {
        $em = $this->em;
        $user = $em->getRepository('AppBundle:User')->findAll();

        $event->setUser($user);
    }

    public function onGetOneUser(ExampleEvent $event)
    {
        $id = $event->getUserId();

        $em = $this->em;
        $user = $em->getRepository('AppBundle:User')->find($id);

        $event->setUser($user);
    }

    public function onCreateUser(ExampleEvent $event)
    {

    }
}
