<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('user_roles', function (Blueprint $table) {
    $table->unsignedBigInteger('user_id');
    $table->foreign('user_id')->references('id')->on('users');
    $table->unsignedBigInteger('role_id');
    $table->foreign('role_id')->references('id')->on('roles');
});