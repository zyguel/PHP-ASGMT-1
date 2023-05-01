<?php
    // Part 1 of EX#3
    echo "Printing the first 20 numbers in the fibonacci_sequence: \n";
 
function fibonacci_sequence($num) {
    if ($num == 0) {
      return 0;
    }
    else if ($num == 1) {
      return 1;
    }
    else {
      return fibonacci_sequence($num - 1) + fibonacci_sequence($num - 2);
    }
  }
    // Set number of fibonacci numbers here:
  $num = 20; // First 20 Numbers;

  for ($i = 0; $i < $num; $i++) {
    echo fibonacci_sequence($i) ;
    if ($i < $num - 1){
        echo ", ";
    }
  }
  echo "\n\n\n";
  
  // Part 2 of EX#3
  function print_right_triangle($levels) {
    $triangle = "";
    for ($i = 1; $i <= $levels; $i++) {
      for ($j = 1; $j <= $i; $j++) {
        $triangle .= "*";
      }
      $triangle .= "\n";
    }
    return $triangle;
  }
  // Set number of levels Here:
  $levels = 5;
  echo "Printing a 5 level right triangle made up of (*)\n\n";
  echo print_right_triangle($levels);
?>
