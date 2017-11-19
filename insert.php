<?php
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
// query way
$cities = ['dhaka', 'chittagong', 'feni', 'comilla'];
foreach($cities as $city) {
  Capsule::table('cities')->insert([
    'name' => $city
  ]);
}

// //eloquent way
// City::insert([
//   'name' => $city
// ]);
