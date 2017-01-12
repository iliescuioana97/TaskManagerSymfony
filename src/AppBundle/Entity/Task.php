<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TasksRepository")
 */
class Task {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $descriere=NULL;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     * @Assert\Type("\date")
     */
    private $deadline;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    private $autor;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $executor;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="integer", length=2)
     */
    private $prioritate;

    public function getPrioritate() {
        return $this->prioritate;
    }

    public function setPrioritate($prioritate) {
        $this->prioritate = $prioritate;
    }

    public function getDeadline() {
        return $this->deadline;
    }

    public function setDeadline(\DateTime $deadline = null) {
        $this->deadline = $deadline;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getDescriere() {
        return $this->descriere;
    }

    /**
     * Set name
     *
     * @param string $executor
     *
     * @return Task
     */
    public function setDescriere($descriere) {
        $this->descriere = $descriere;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getAutor() {
        return $this->autor;
    }

    /**
     * Set name
     *
     * @param string $executor
     *
     * @return Category
     */
    public function setAutor($autor) {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Set name
     *
     * @param string $executor
     *
     * @return Category
     */
    public function setExecutor($executor) {
        $this->executor = $executor;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getExecutor() {
        return $this->executor;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


}
