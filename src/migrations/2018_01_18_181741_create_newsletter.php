<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsletter extends Migration
{
    public function up()
    {
        Schema::create('newsletters', function ($table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('newsletters');
    }
}
