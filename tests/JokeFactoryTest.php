<?php

namespace Freziertz\CheckNorrisJokes\Tests;

use Freziertz\CheckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
	/** @test */
	public function it_return_a_random_joke()
	{
		// $this->assertTrue(true);

		$jokes = new JokeFactory([
			'This is the joke'
		]);

		$joke = $jokes->getRandomJoke();

		$this->assertSame('This is the joke', $joke);
	}

	/** @test */
	public function it_return_a_predefined_joke()
	{
		// $this->assertTrue(true);

	$checkNorrisJokes = [
		'Chuck Norris doesn\'t read books. He stares them down until he gets the information he wants.',
		'Time waits for no man. Unless that man is Chuck Norris.',
		'If you spell Chuck Norris in Scrabble, you win. Forever.',
		'Chuck Norris breathes air ... five times a day.',
		'In the Beginning there was nothing ... then Chuck Norris roundhouse kicked nothing and told it to get a job.',
		'When God said, “Let there be light!” Chuck said, “Say Please.”'

	];

	    $jokes = new JokeFactory();

		$joke = $jokes->getRandomJoke();

		$this->assertContains($joke, $checkNorrisJokes);
	}

}