<?php
$numbers = range(1, 10);

function remove_even($array) {
  // Define the callback function
  function is_odd($num) {
    // Check if the number is odd by using the modulo operator
    return $num % 2 != 0;
  }
  // Filter the array using the callback function
  return array_filter($array, "is_odd");
}

// Call the function with the $numbers array
$result = remove_even($numbers);
// Print the resulting array
print_r($result);
?>
