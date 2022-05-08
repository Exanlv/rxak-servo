<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('permissions', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('technical_name');
});