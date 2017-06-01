<?php

require_once dirname(__FILE__).'/DogDoor.php';

class Remote
{
    private $door;

    public function __construct(DogDoor $door)
    {
        $this->door = $door;
    }

    public function pressButton()
    {
        echo 'Nacisnieto przycisk na pilocie...';
        if($this->door->isOpen())
        {
            $this->door->close();
        }else{
            $this->door->open();
        }
    }

}