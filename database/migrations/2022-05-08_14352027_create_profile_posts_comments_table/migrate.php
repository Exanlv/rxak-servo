<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('profile_post_comments', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id');
    $table->foreign('user_id')->references('id')->on('users');
    $table->unsignedBigInteger('profile_post_id');
    $table->foreign('profile_post_id')->references('id')->on('profile_posts');
    $table->text('message');
});