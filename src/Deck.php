<?php

namespace Game;

use Game\Cards\Card;

class Deck
{
    private $size = 60;
    private $cards;

    public function __construct($size = 60, $add = [])
    {
        $this->size = $size;
        $this->cards = [];
        $this->cards = array_merge($this->cards, $add);
        while (count($this->cards) < 60) {
            $this->cards[] = new Card();
        }
    }

    public function size()
    {
        return count($this->cards);
    }

    public function draw()
    {
        return array_pop($this->cards);
    }

    public function legal()
    {
        foreach ($this->cards as $card) {
            if ($card->pokemon()) {
                return true;
            }
        }

        return false;
    }
}
