<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIsActiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->boolean('superadmin')->default(0);
            $table->boolean('admin')->default(0);
            $table->boolean('childOfAdmin')->default(0);
            $table->boolean('user')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->boolean('superadmin');
            $table->boolean('admin');
            $table->boolean('childOfAdmin');
            $table->boolean('user');
        });
    }
}
