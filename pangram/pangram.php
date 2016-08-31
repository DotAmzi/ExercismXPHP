<?php

  function isPangram(string $value){

    if(empty($value)){
      return false;
    }

    $letters = range('A', 'Z');
    $value = strtoupper($value);
    $value = str_replace('_', '', $value);

    foreach($letters as $letter){
      if(strpos($value, $letter) === false){
        return false;
      }
    }

    return true;

  }

 ?>
