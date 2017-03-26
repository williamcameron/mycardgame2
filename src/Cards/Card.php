<?php

namespace Game\Cards;

class Card
{

    public function __construct($name="Unknown"){
       $this->name = $name;
    }

    public function pokemon()
    {
        return false;
    }

    public function energy()
    {
        return false;
    }
}
