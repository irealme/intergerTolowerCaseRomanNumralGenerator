<?php

namespace Larowlan\RomanNumeral\Tests;

use Larowlan\RomanNumeral\RomanNumeralGenerator;

/**
 * Defines a class for testing roman numeral generation.
 *
 * @group Unit
 */
class RomanNumeralGeneratorTest extends \PHPUnit_Framework_TestCase {

  /**
   * Generator under test.
   *
   * @var \Larowlan\RomanNumeral\RomanNumeralGenerator
   */
  protected $generator;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $this->generator = new RomanNumeralGenerator();
  }

  /**
   * Tests roman numeral generation.
   *
   * @dataProvider providerTestGeneration
   */
  public function testGeneration($number, $expected) {
    $this->assertEquals($expected, $this->generator->generate($number));
  }

  /**
   * Data provider for testGeneration().
   *
   * @return array
   *   Test cases.
   */
  public function providerTestGeneration() {
    return [
        1 => [1, "I","i"],
        2 => [2, "II","ii"],
        3 => [3, "III","iii"],
        4 => [4, "IV","iv"],
        5 => [5, "V","v"],
        6 => [6, "VI","vi"],
        9 => [9, "IX","ix"],
        27 => [27, "XXVII","xxvii"],
        48 => [48, "XLVIII","xlviii"],
        59 => [59, "LIX","lix"],
        93 => [93, "XCIII","xciii"],
        141 => [141, "CXLI","cxli"],
        163 => [163, "CLXIII","clxiii"],
        402 => [402, "CDII","cdii"],
        575 => [575, "DLXXV","dlxxv"],
        911 => [911, "CMXI","cmxi"],
        1024 => [1024, "MXXIV","mxxiv"],
        3000 => [3000, "MMM","mmm"],
    ];
  }
}
