<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('role_permissions', function (Blueprint $table) {
    $table->unsignedBigInteger('role_id');
    $table->foreign('role_id')->references('id')->on('roles');
    $table->unsignedBigInteger('permission_id');
    $table->foreign('permission_id')->references('id')->on('permissions');
});