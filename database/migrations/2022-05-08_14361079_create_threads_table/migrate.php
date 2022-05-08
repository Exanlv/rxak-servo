<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('threads', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('category_id');
    $table->foreign('category_id')->references('id')->on('categories');
    $table->unsignedBigInteger('user_id');
    $table->foreign('user_id')->references('id')->on('users');
    $table->string('title');
    $table->text('content');
    $table->string('thumbnail');
});