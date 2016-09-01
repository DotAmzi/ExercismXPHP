<?php
  function raindrops($value) {

    $return = (string) '';
    if(is_int($value/3)){
      $return .= 'Pling';
    }

    if(is_int($value/5)){
      $return .= 'Plang';
    }

    if(is_int($value/7)){
      $return .= 'Plong';
    }

    if($return === ''){
      $return = (string) $value;
    }

    return $return;
  }
?>
