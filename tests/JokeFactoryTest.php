<?php

namespace Dizzy1021\LearnPackages\Tests;

use Dizzy1021\LearnPackages\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
     public function it_returns_a_random_joke()
     {
        $jokes = new JokeFactory([
           'This is a joke'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);

     }

     /** @test */
     public function it_returns_a_predefined_joke()
     {
        $listOfJokes =  [
            "I just got my doctor's test results and I'm really upset. Turns out, I'm not gonna be a doctor.",
            "As I get older, I remember all the people I lost along the way. Maybe a career as a tour guide was not the right choice.",
            "The doctor gave me some cream for my skin rash. He said I was a sight for psoriasis.",
            "A man walks into a magic forest and tries to cut down a talking tree. 'You can't cut me down,' the tree complains. 'I'm a talking tree!' The man responds, 'You may be a talking tree, but you will dialogue.'",
         ];

        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();
        
        $this->assertContains($joke, $listOfJokes);

     }
}