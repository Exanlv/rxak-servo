<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('likes', function (Blueprint $table) {
    $table->bigInteger('likable')->index();
    $table->string('likable_type')->index();
    $table->unsignedBigInteger('user_id');
    $table->foreign('user_id')->references('id')->on('users');
});