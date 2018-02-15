<?php

use PHPUnit\Framework\TestCase;

class FalsePositiveTextsTest extends TestCase
{
    public function testForFalsePositivesInTexts()
    {
        $files = glob(__DIR__.'/texts/*.txt');

        foreach ($files as $file) {
            $content = file_get_contents($file);
            $this->assertFalse(is_offensive($content));
        }
    }
}
