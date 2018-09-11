<?php

class hangMan {
	private $guessedLetters = [];
	private $word = '';
	private $lettersInWord = [];

	function getWord () {
		return $this->word;
	}

	function __construct() {
		$this->rndWord();

	}

	function rndWord () {

		$words = file('models/words.txt');
		$randomIndex = rand(0, count($words));
		$this->word = $words[$randomIndex];
		$this->lettersInWord = str_split($words[$randomIndex]);
	}

}