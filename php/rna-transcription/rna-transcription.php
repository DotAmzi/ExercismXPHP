<?php
  function toRna($value){

    $valueArray = str_split($value);

  	$return = (string) '';
  	foreach($valueArray as $valueIndex){
      $return .= replaceIndex($valueIndex);
  	}

    return $return;

  }

  function replaceIndex($value) {
    if($value === "G"){
      return str_replace("G", "C", $value);
    }elseif($value === "C"){
      return str_replace("C", "G", $value);
    }else{
      return str_replace(array("A", "T"), array("U", "A"), $value);
    }
  }
?>
