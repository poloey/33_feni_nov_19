<?php
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
Capsule::schema()->create('doctors', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email');
    $table->string('mobile');
    $table->text('address');
    $table->integer('hospital_id')->unsigned();
    $table->integer('city_id');
    $table->integer('speciality_id');
    $table->timestamps();
});
Capsule::schema()->create('cities', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('division');
    $table->timestamps();
});
Capsule::schema()->create('specialities', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->timestamps();
});
Capsule::schema()->create('hospitals', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->text('location');
    $table->string('phone');
    $table->timestamps();
});