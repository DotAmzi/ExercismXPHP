<?php

function from(datetime $date){
  $gigasecondValue = (int) pow(10, 9);
  $maroka = clone $date;
  $maroka -> add(new DateInterval('PT'. $gigasecondValue .'S'));

  return $maroka;
}
