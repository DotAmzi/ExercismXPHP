<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
  function checkValues(array $a, array $b, int $len){

  $countDiff = (int) 0;
  for ($i = 0; $i < $len; $i++) {
    if($a[$i] != $b[$i]){
      $countDiff += 1;
    }
  }

  return $countDiff;
  }

  function distance(string $a, string $b)
  {
    $aLen = (int) strlen($a);
    $bLen = (int) strlen($b);

    $aArray = (array) str_split($a);
    $bArray = (array) str_split($b);

    if($aLen == $bLen){
      return checkValues($aArray, $bArray, $aLen);
    }
    else{
      throw new InvalidArgumentException ('DNA strands must be of equal length.');
    }

  }
}
