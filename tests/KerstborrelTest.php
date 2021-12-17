<?php

namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\KerstBorrel;

class KerstborrelTest extends TestCase {
    public $kerstborrel;

    public function setUp() {
        $this->kerstborrel = new Kerstborrel();
    }

    public function tearDown() {
        unset($this->kerstborrel);
    }

    /**
     * @dataProvider provideKostenKerstpakket
     */

    public function testKostenKerstpakket($aantalPersoneelsleden, $maxBudget, $expected){
        $output = $this->kerstborrel->KostenKerstpakket($aantalPersoneelsleden, $maxBudget);
        $this->assertEquals(
            $expected,
            $output,
            "De kosten van het kerstpakket is $expected"
        );
    }

    //TESTEN\

    public function provideKostenKerstpakket() {
        return [
            [23, -5000, 83.0],
            [25, 1000, 91.0, "De tweede test"],
            [3, 300, 3.0, "De derde test" ],
            [300, 30000, 1187.0, "De vierde test"],
            [33, 5000, 123.0, "De vijfde test"],
            [21, -5000, 75.0,"De zesde test"],
            [22, 4000, 75.0, "De zevende test"],
            [21, 5000, 75.0, "De achtste test"]

        ];
    }
}

?>






