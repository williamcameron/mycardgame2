<?php

namespace Tests;

use Game\Cards\CardFactory;
use Game\Cards\Card;
use Game\Cards\BasicEnergy;
use Game\Cards\Pokemon;
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
    public function water_is_energy_card()
    {
        $card = CardFactory::makeByName('Water');
        $this->assertTrue($card->energy());
        $this->assertInstanceOf(BasicEnergy::class, $card);
    }

    /** @test */
	public function water_energy_is_not_pokemon_card(){
		$card = CardFactory::makeByName("Water");
		$this->assertFalse($card->pokemon());
	}

    /** @test */
    public function pikachu_is_pokemon_card(){
       $card = CardFactory::makeByName("Pikachu");
       $this->assertTrue($card->pokemon());
       $this->assertInstanceOf(Pokemon::class, $card);
    }

    /** @test */
    public function pikachu_is_not_energy_card(){
	$card = CardFactory::makeByName("Pikachu");
	$this->assertFalse($card->energy());
    }

    /** @test */
    public function unknown_card_name_returns_card_by_default()
    {
        $card = CardFactory::makeByName('INVALID CARD NAME');
        $this->assertInstanceOf(Card::class, $card);
    }
}
