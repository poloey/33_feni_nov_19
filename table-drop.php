<?php
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
Capsule::schema()->dropIfExists('cities');
Capsule::schema()->dropIfExists('doctors');
Capsule::schema()->dropIfExists('hospitals');
Capsule::schema()->dropIfExists('specialities');
