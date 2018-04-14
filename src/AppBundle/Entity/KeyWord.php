<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KeyWord
 *
 * @ORM\Table(name="key_word")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\KeyWordRepository")
 */
class KeyWord
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
     * @ORM\Column(name="keyWord", type="string", length=255)
     */
    private $keyWord;


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
     * Set keyWord
     *
     * @param string $keyWord
     *
     * @return KeyWord
     */
    public function setKeyWord($keyWord)
    {
        $this->keyWord = $keyWord;

        return $this;
    }

    /**
     * Get keyWord
     *
     * @return string
     */
    public function getKeyWord()
    {
        return $this->keyWord;
    }
}

