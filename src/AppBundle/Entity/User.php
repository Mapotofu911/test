<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 *
 */
class User
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(name="nom", type="string", length=255)
   */
  protected $nom;

  /**
   * @ORM\Column(name="prenom", type="string", length=255)
   */
  protected $prenom;

  /**
   * @ORM\Column(name="age", type="integer")
   */
  protected $age;
  
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  
  public function setNom($nom)
  {
    $this->nom = $nom;
  }
  public function getNom()
  {
    return $this->nom;
  }
  
  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;
  }
  public function getPrenom()
  {
    return $this->prenom;
  }
  
  public function setAge($age)
  {
    $this->age = $age;
  }
  public function getAge()
  {
    return $this->age;
  }

}