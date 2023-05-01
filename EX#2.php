<?php
// This Excercise contains 2 PARTS;

  // Part 1 of EX#2
	echo "Printing the largest number given the following: 21, 1 and 100." , "<br><br>";
  // function to find the largest number in an array
  function find_largest_number($numbers) {
    return max($numbers);
  }
 
  $numbers = array(21, 1, 100);
  $largest_number = find_largest_number($numbers);
  echo "The largest number is: " . $largest_number . "<br><br>";
  
  
  // Part 2 of EX#2
  echo "Printing and swapping numbers given the following: a = 26 and b = 99.<br>";
  
  // function to swap two numbers
  function swap_numbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
  }
  
  $a = 26;
  $b = 99;
  
  echo "<br>" , "a = " . $a . "<br>";
  echo "b = " . $b . "<br><br>";
  
  // Call the swap_numbers() function to swap the values of a and b
  swap_numbers($a, $b);
  
  // Print the new values of a and b after swapping
  echo "After swapping:<br>";
  echo "a = " . $a . "<br>";
  echo "b = " . $b . "<br>";
	
?>

