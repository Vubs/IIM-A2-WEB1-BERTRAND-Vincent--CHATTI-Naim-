<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->foreign('id')->references('id')->on('users')->onDelete('cascade');

            $table->string('title');
            $table->string('name');
            $table->string('firstname');
            $table->string('fonction');
            $table->string('client_adress');
            $table->string('email');
            $table->string('tel');
            $table->string('follow_name');
            $table->string('contact_adress');
            $table->string('mail_contact');
            $table->string('tel_contact');
            $table->longText('description');
            $table->boolean('site')->nullable();
            $table->boolean('three_d')->nullable();
            $table->boolean('two_d')->nullable();
            $table->boolean('multi')->nullable();
            $table->boolean('jeux_video')->nullable();
            $table->boolean('dvd')->nullable();
            $table->boolean('print')->nullable();
            $table->boolean('cd_rom')->nullable();
            $table->boolean('event')->nullable();
            $table->boolean('autre')->nullable();
            $table->longText('details');
            $table->longText('context');
            $table->longText('goals');
            $table->longText('constaints');

            $table->timestamps();
            $table->rememberToken();
            $table->timestamp('published_at');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');

    }
}
