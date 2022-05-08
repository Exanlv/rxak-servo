<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('replies', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('thread_id');
    $table->foreign('thread_id')->references('id')->on('threads');
    $table->unsignedBigInteger('user_id');
    $table->foreign('user_id')->references('id')->on('users');
    $table->text('content');
});