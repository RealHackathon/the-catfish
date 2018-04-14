<?php

namespace AppBundle\Entity;

/**
 * Keyword
 */
class Keyword
{
    /**
     * @var string
     */
    private $keyword;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set keyword
     *
     * @param string $keyword
     *
     * @return Keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
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

