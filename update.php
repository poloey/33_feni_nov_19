<?php
require 'vendor/autoload.php';

$city = City::find(2);
$city->update([
  'name' => 'Aungpur'
]);
