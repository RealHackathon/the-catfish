<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lesson
 *
 * @ORM\Table(name="lesson")
 * @ORM\Entity(repositoryClass="CoursBundle\Repository\LessonRepository")
 */
class Lesson
{
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
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="urlytb", type="string", length=255)
     */
    private $urlytb;

    /**
     * @ORM\OneToMany(targetEntity="Question", mappedBy="lesson")
     */
    private $questions;

    /**
     * @ORM\OneToMany(targetEntity="Historic", mappedBy="lesson")
     */
    private $historics;

    /**
     * @return mixed
     */
    public function getHistorics()
    {
        return $this->historics;
    }

    /**
     * @param mixed $historics
     * @return Lesson
     */
    public function setHistorics($historics)
    {
        $this->historics = $historics;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * @param mixed $questions
     * @return Lesson
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;
        return $this;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Lesson
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set urlytb
     *
     * @param string $urlytb
     *
     * @return Lesson
     */
    public function setUrlytb($urlytb)
    {
        $this->urlytb = $urlytb;

        return $this;
    }

    /**
     * Get urlytb
     *
     * @return string
     */
    public function getUrlytb()
    {
        return $this->urlytb;
    }
}

