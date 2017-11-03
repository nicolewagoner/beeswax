<?php

function imbalanced($input_str) {
  $stack = []; // for tracking indices of opening braces

  for ($i=0; $i<strlen($input_str); $i++) {
    $char = $input_str[$i];
    if ($char == "{") { // hardcoded { for better efficiency
      array_push($stack, $i);
    }
    elseif ($char == "}") {
      if(count($stack) == 0) {
        // we ran out of opening braces to match this one to
        array_push($stack, $i);
        break;
      }

      array_pop($stack);
    }
  }

  // an empty stack means we are balanced
  return count($stack) == 0 ? -1 : $stack[0];
}

?>
