<?php
require 'vendor/autoload.php';
$city = City::find(1);
$city->delete();
