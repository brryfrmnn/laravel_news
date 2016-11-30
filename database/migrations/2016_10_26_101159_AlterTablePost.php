<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->nullable();
            //unsigned menyatakan bahwa nilai integer ini dimulai dari 0
            //nullable menyatakan bahwa field ini memperbolehkan isian kosong
            $table->integer('user_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('category_id');
            $table->dropColumn('user_id');
            // jika method up berfungsi untuk membuat field maka method down untuk menghapus field
        });
    }
}
