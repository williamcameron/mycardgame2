<?php

namespace Game;

class Deck {
	
	private $size = 60;
	
	public function size(){
		return $this->size;
	}

	public function draw(){
		$this->size--;
	}
}
