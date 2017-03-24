<?php

namespace Tests;

use Game\Cards\BasicEnergy;
use Game\Cards\Card;
use Game\Cards\CardFactory;
use PHPUnit\Framework\TestCase;

class CardTest extends TestCase
{
    /** @test */
    public function card_is_a_card_object()
    {
        $card = new Card();
        $this->assertInstanceOf(Card::class, $card);
    }

    /** @test */
    public function water_is_energy_type()
    {
        $card = CardFactory::makeByName('Water');
        $this->assertTrue($card->energy());
        $this->assertInstanceOf(BasicEnergy::class, $card);
    }

    /** @test */
    public function unknown_card_name_returns_card_by_default()
    {
        $card = CardFactory::makeByName('INVALID CARD NAME');
        $this->assertInstanceOf(Card::class, $card);
    }
}
