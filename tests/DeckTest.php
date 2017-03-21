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
	
	/** @test */
	public function drawing_a_card_reduces_deck_size(){
		$deck = new Deck;
		$deck->draw();
		$this->assertEquals(59, $deck->size());
	}
}
