<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDocumentsTableAddSection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::disableForeignKeyConstraints();
        Schema::table('documents', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();
            $table->dropForeign(['course_id']);
            $table->dropColumn('course_id');
            $table->unsignedBigInteger('section_id')->nullable();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('CASCADE')->onUpdate('CASCADE')->nullable();
            $table->unsignedBigInteger('document_course_id')->nullable();
            $table->foreign('document_course_id')->references('id')->on('document_courses')->onDelete('CASCADE')->onUpdate('CASCADE')->nullable();
        });
        // Schema::enableForeignKeyConstraints();

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
