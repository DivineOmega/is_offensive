<?php

use PHPUnit\Framework\TestCase;

class IsOffensiveTest extends TestCase
{
    public function testIfOffensive()
    {
        $words = ['fuck', 'fuk', 'fuker', 'motherfucker', 'mutherfuker', 'cunt'];

        foreach($words as $word) {
            $this->assertTrue(is_offensive($word));
        }
    }

    public function testIfNotOffensive()
    {
        $words = ['duck', 'cat', 'greetings', 'cheese'];

        foreach($words as $word) {
            $this->assertFalse(is_offensive($word));
        }
    }
}