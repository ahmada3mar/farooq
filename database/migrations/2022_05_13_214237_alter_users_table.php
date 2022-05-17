<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cover')->after('avatar')->nullable();
            $table->string('title')->after('balance')->nullable();
            $table->string('experience')->after('title')->nullable();
            $table->string('facebook')->after('experience')->nullable();
            $table->string('twitter')->after('facebook')->nullable();
            $table->string('telegram')->after('twitter')->nullable();
            $table->longText('description')->after('telegram')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
