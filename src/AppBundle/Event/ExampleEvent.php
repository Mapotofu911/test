<?php

namespace AppBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\User;

/**
 * A compléter... (getters/setters à remplir)
 */
class ExampleEvent extends Event
{
    private $user;
    private $userId;

    public function __construct()
    {

    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {        
        return $this->user;
    }

    public function setUserId($id)
    {
        $this->userId = $id;
    }

    public function getUserId()
    {
        return $this->userId;
    }


}
