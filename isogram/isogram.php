<?php

  function isIsogram($value){
    $value = utf8_decode($value);
    $value = strtolower(str_replace([' ', '-'], '', $value));
    $arrayValue = str_split($value);
    $countRepetitions = array_count_values($arrayValue);

    foreach($countRepetitions as $position){
      if($position > 1){
        return false;
      }
    }

    return true;

  }
?>
