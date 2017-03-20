<?php

include "methods.php";


  $name = "Saulius";
  $email = "saulius@gmail.lt";
  $phone = "+37060062640";
  $manufacturer = "Pontiac";
  $model = "GTO";
  $color = "Red";
  $years = "1966";

  $member = new CarClubMembers($name, $email, $phone, $manufacturer, $model, $color, $years );

  // __call / __callStatic
  echo "<h2> __call / __callStatic</h2>";
  CarClubMembers::carInfo();
  $member->carModel();

  // __toString
  echo "<h2>__toString</h2>";
  echo $member. "<br />";

  // __set / __get
  echo "<h2>__Set / __Get</h2>";
  $member->email = 'jack@gmail.com';
  echo $member->email.'<br />';

  // __isset / __unset
  echo "<h2>__isset / __unset </h2>";
  isset($member->email);
  unset($member->email);
  isset($member->email);


  // __invoke
  echo "<h2>__invoke </h2>";
  $member($model);

  // __invoke
  echo "<h2>__debugInfo</h2>";
  var_dump($member);
