<?php

use PHPUnit\Framework\TestCase;

require_once('./src/Main.php');

class MainTest extends TestCase {
    public function testCalculateFactorial() {
        $this->assertEquals(Main::calcFact(0), 1);
        $this->assertEquals(Main::calcFact(2), 2);
        $this->assertEquals(Main::calcFact(5), 120);
        $this->assertNull(Main::calcFact(-1), null);
        $this->assertNull(Main::calcFact(1.5, null));
        $this->assertNull(Main::calcFact(false), null);
        $this->assertNull(Main::calcFact('qwe'), null);

        $random = rand(3, getrandmax());
        $factorial = 1;
        for ($i = 2; $i <= $random; $i++) {
            $factorial *= $i;
        }
        $this->assertEquals($factorial, Main::calcFact($random));
    }
}

?>