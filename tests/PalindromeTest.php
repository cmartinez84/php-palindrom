<?php

    require_once "src/Palindrome.php";

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {

        function test_playFindAndReplace(){
          $test_Palindrome = new Palindrome;
          $input_string = "hannah";
          //Act
          $result = $test_Palindrome->playPalindrome($input_string);

          //Assert
          $this->assertEquals(true, $result);
        }
        function test_playFindAndReplace_removeSpaces(){
          $test_Palindrome = new Palindrome;
          $input_string = "taco cat";
          //Act
          $result = $test_Palindrome->playPalindromeWithArrayReverse($input_string);

          //Assert
          $this->assertEquals(true, $result);
        }
        function test_compareWithArrays(){
          $test_Palindrome = new Palindrome;
          $input_string = "taco cat";
          //Act
          $result = $test_Palindrome->compareWithArrays($input_string);

          //Assert
          $this->assertEquals(true, $result);
        }
    }
?>
