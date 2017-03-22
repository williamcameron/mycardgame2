<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Game\Card;

class CardTest extends TestCase {
	/** @test */
	public function card_is_a_card_object(){
		$card = new Card;
		$this->assertInstanceOf(Card::class, $card);
	}
}
