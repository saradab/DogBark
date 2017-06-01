<?php

require_once dirname(__FILE__).'/Bark.php';

class BarkRecognizer
{
    private $door;

    public function __construct(DogDoor $door)
    {
        $this->door = $door;
    }

    public function recognize(Bark $bark)
    {
        echo 'Recognizer: usłyszano ' . $bark->getSound() . "\n";
        $allowedBarks = $this->door->getAllowedBarks();
        $flag = 0;
        foreach ($allowedBarks as $allowedBark) {
            if ($allowedBark->equals($bark)) {
                $flag = 1;
            }
        }
        if($flag === 1){
            $this->door->open();
        }else{
            echo 'Temu psu nie wolno wejść do domu.' . "\n";
        }

    }

}