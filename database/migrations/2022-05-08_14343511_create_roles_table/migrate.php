<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('roles', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->boolean('visible');
});