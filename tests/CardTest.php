<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Game\Cards\Card;
use Game\Cards\CardFactory;

class CardTest extends TestCase {
	/** @test */
	public function card_is_a_card_object(){
		$card = new Card;
		$this->assertInstanceOf(Card::class, $card);
	}
	
	/** @test */
	public function water_is_energy_type(){
		$card = CardFactory::makeByName("Water");
		$this->assertTrue($card->energy());
	}
}
