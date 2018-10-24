<?php
/**
 * Created by PhpStorm.
 * User: Tomáš
 * Date: 24.10.2018
 * Time: 7:21
 */

namespace Vanik\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package Vanik\EntityBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="username", type="string")
     */
    private $username;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }



}