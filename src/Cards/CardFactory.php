<?php

namespace Game\Cards;

class CardFactory
{
    public static function makeByName($name)
    {
        $name = strtolower($name);
        switch ($name) {
            case 'water':
                return new BasicEnergy($name);
            default:
                return new Card();
        }
    }
}
