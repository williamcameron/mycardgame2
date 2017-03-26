<?php

namespace Tests;

use Game\Cards\Card;
use Game\Cards\CardFactory;
use Game\Deck;
use PHPUnit\Framework\TestCase;

class DeckTest extends TestCase
{
    /** @test */
    public function deck_has_60_cards()
    {
        $deck = new Deck();
        $this->assertEquals(60, $deck->size());
    }

    /** @test */
    public function drawing_a_card_reduces_deck_size()
    {
        $deck = new Deck();
        $deck->draw();
        $this->assertEquals(59, $deck->size());
    }

    /** @test */
    public function drawing_a_card_returns_a_card()
    {
        $deck = new Deck();
        $card = $deck->draw();
        $this->assertInstanceOf(Card::class, $card);
    }

    /** @test */
    public function deck_is_legal_when_contains_at_least_one_pokemon()
    {
        $deck = new Deck(60, [CardFactory::makeByName('Pikachu')]);
        $this->assertTrue($deck->legal());
    }

    /** @test */
    public function deck_with_no_pokemon_is_not_legal()
    {
        $deck = new Deck();
        $this->assertFalse($deck->legal());
    }
}
