<?php

use PHPUnit\Framework\TestCase;

class FalsePositiveTest extends TestCase
{
    public function testForFalsePositives()
    {
        $files = glob(__DIR__.'/texts/*.txt');

        foreach ($files as $file) {
            $content = file_get_contents($file);
            $this->assertFalse(is_offensive($content));
        }
    }

}
