<?php

use PHPUnit\Framework\TestCase;

class IsOffensiveTest extends TestCase
{
    public function testIfOffensive()
    {
        $words = ['fuck', 'fuk', 'fuker', 'motherfucker', 'mutherfuker', 'cunt', 'tit'];

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

    public function testWhitelistedWords()
    {
        $words = ['hello', 'Hello', 'HELLO', 'middlesex', 'tittesworth', 'scunthorpe'];

        foreach($words as $word) {
            $this->assertFalse(is_offensive($word));
        }
    }
}