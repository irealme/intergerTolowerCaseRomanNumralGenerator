<?php
    require "../src/RomanNumeralGenerator.php";


     /**
     * Generates a roman numeral from an integer.
     *
     * @param int $number
     *   Integer to convert.
     * @param bool $lowerCase
     *   (optional) Pass TRUE to convert to lowercase. Defaults to FALSE.
     *
     * @return string
     *   Roman numeral representing the passed integer.
     */

    $numeral=5;
    $roman=new \Larowlan\RomanNumeral\RomanNumeralGenerator();
    $romanNumeral=$roman->generate($numeral);
    if($romanNumeral === "0")
    {
        echo "Roman Numeral not found";
    }
    else {
        echo $romanNumeral;
    }
?>