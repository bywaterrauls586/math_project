<?php
  function random_string($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
  }

  function random_number($length) {
    $randomNumber = '';
    for ($i = 0; $i < $length; $i++) {
      $randomNumber .= str_pad(rand(0, 9), $length, '0', STR_PAD_LEFT);
    }
    return $randomNumber;
  }

  function random_array($length) {
    $array = array_fill(0, $length, null);
    for ($i = 0; $i < $length; $i++) {
      $array[$i] = rand(-10, 10);
    }
    return $array;
  }

  function random_date($format) {
    return new DateTime(implode(' ', $format));
  }

?>
