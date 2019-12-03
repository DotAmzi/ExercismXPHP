<?php
  class Bob{
    function respondTo ($aswer) {

      if(ctype_upper(preg_replace('/[^a-zA-Z]/s', '', $aswer))){
          return "Whoa, chill out!";
      }

      if(substr(str_replace(' ', '', $aswer), -1) === '?'){
        return "Sure.";
      }

      if(ctype_space($aswer) || empty($aswer)) {
        return "Fine. Be that way!";
      }

      return "Whatever.";
    }
  }
?>
