<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Game\Deck;

class DeckTest extends TestCase {
	/** @test */
	public function deck_has_60_cards(){
		$deck = new Deck;
		$this->assertEquals(60, $deck->size());
	}
}
