<?php
class Bark
{
    private $sound;

    public function __construct($sound)
    {
        $this->sound = $sound;
    }

    public function getSound()
    {
        return $this->sound;
    }

    public function equals(Bark $objectBark)
    {
        if($objectBark instanceof Bark)
        {
            if(!strcasecmp($this->getSound(), $objectBark->getSound()))
            {
                return true;
            }
        }
        return false;
    }
}