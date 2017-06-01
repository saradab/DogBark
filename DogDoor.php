<?php

class DogDoor
{
    private $open;
    private $allowedBarks;

    public  function __construct()
        {
            $this->open = false;
        }

    public function open()
    {
        echo 'Drzwiczki dla psa zostały otwarte';
        $this->open = true;
    }

    public function close()
    {
        echo 'Drzwiczki dla psa zostały zamknięte';
        $this->open = false;
    }

    public function isOpen()
    {
        return $this->open;
    }

    public function setAllowedBarks(Bark $allowedBark)
    {
        $this->allowedBarks[] = $allowedBark;
        //var_dump($this->allowedBarks);
    }

    public function getAllowedBarks()
    {
        return $this->allowedBarks;
    }

}