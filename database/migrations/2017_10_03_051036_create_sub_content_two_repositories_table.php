<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatesubContentTwoRepositoriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_content_two_repositories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sub_number');
            $table->string('title');
            $table->text('body');
            $table->integer('sub_content_one_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sub_content_two_repositories');
    }
}
