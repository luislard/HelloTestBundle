<?php
/**
 * Created by PhpStorm.
 * User: lrosales
 * Date: 26/04/18
 * Time: 13:49
 */

namespace DiarioAs\HelloTestBundle\Service;


class HelloTest
{
    private $name;

    public function __construct($name = 'world')
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return strtoupper($this->name);
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSentence()
    {
        return 'Hello ' . $this->getName() . ' from our bundle';
    }

}