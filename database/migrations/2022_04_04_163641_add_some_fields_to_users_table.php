<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('image', '255')->nullable();
            $table->string('phone', '20')->nullable();
            $table->integer('role')->unsigned()->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('description')->nullable();
            $table->text('about')->nullable();
            $table->tinyInteger('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('phone');
            $table->dropColumn('role');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('description');
            $table->dropColumn('about');
            $table->dropColumn('status');
            $table->dropColumn('about');
        });
    }
}
