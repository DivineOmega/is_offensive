<?php

use PHPUnit\Framework\TestCase;

class FalsePositiveNamesTest extends TestCase
{
    const FAKER_SEED = 1234;
    const NUMBER_OF_NAMES_TO_TEST = 5000;

    public function testForFalsePositivesInUSNames()
    {
        $faker = Faker\Factory::create('en_US');
        $faker->seed(self::FAKER_SEED);

        for ($i = 0; $i < self::NUMBER_OF_NAMES_TO_TEST; $i++) {
            $name = $faker->name;
            $this->assertFalse(is_offensive($name));
        }
    }

    public function testForFalsePositivesInUKNames()
    {
        $faker = Faker\Factory::create('en_GB');
        $faker->seed(self::FAKER_SEED);

        for ($i = 0; $i < self::NUMBER_OF_NAMES_TO_TEST; $i++) {
            $name = $faker->name;
            $this->assertFalse(is_offensive($name));
        }
    }
}
