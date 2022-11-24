<?php
namespace Ken\Hello;

class Greet
{
    private $name;

    public function __construct( $name = 'Ken' )
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function hello()
    {
        return 'Ken says hi to '.$this->name.'!';
    }
}