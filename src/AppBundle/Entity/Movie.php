<?php

namespace AppBundle\Entity;

/**
 * Movie
 */
class Movie
{
    /**
     * @var integer
     */
    private $apiid;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set apiid
     *
     * @param integer $apiid
     *
     * @return Movie
     */
    public function setApiid($apiid)
    {
        $this->apiid = $apiid;

        return $this;
    }

    /**
     * Get apiid
     *
     * @return integer
     */
    public function getApiid()
    {
        return $this->apiid;
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

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

