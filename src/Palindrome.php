<<?php
  class Palindrome
  {
    function playPalindrome($input_string){
      $input_array = explode(" ", $input_string);
      $inputStringNoSpace = implode($input_array);
      $reverseStringNoSpace = strrev($inputStringNoSpace);
      return $this->compare($inputStringNoSpace, $reverseStringNoSpace);

    }
    function playPalindromeWithArrayReverse($input_string){
      $input_array = explode(" ", $input_string);
      $inputStringNoSpace = implode($input_array);
      $reverseArrayNoSpace = str_split($inputStringNoSpace);
      $reverseArrayNoSpace = array_reverse($reverseArrayNoSpace);
      $reverseStringNoSpace = implode($reverseArrayNoSpace);
      return $this->compare($inputStringNoSpace, $reverseStringNoSpace);

    }
    function compareWithArrays($input_string){
      $input_array = explode(" ", $input_string);
      $inputStringNoSpace = implode($input_array);
      $split = str_split($inputStringNoSpace);
      $counter = 1;
      for($i = 0; $i < count($split); $i++){
        if($split[$i] == $split[count($split)-($i+1)]){
          $counter *= 1;
        }
        else{
          $counter *= 0;
        }
      }
      
      if($counter ==1){
        return true;
      }
      else{
        return false;
      }
    }

    function compare($string, $reverseString){
      if($string == $reverseString ){
        return true;
      }
      else{
        return false;
      }
    }
}

 ?>
