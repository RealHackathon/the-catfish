<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table(name="movie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MovieRepository")
 */
class Movie
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
     * @var int
     *
     * @ORM\Column(name="apiId", type="integer")
     */
    private $apiId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @ORM\ManyToMany(targetEntity="KeyWord")
     */
    private $keyWords;

    /**
     * @return mixed
     */
    public function getKeyWords()
    {
        return $this->keyWords;
    }

    /**
     * @param mixed $keyWords
     * @return Movie
     */
    public function setKeyWords($keyWords)
    {
        $this->keyWords = $keyWords;
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
     * Set apiId
     *
     * @param integer $apiId
     *
     * @return Movie
     */
    public function setApiId($apiId)
    {
        $this->apiId = $apiId;

        return $this;
    }

    /**
     * Get apiId
     *
     * @return int
     */
    public function getApiId()
    {
        return $this->apiId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Movie
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}

