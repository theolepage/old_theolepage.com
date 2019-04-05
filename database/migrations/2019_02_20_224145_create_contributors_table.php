<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('website_url')->nullable();
            $table->string('picture_url')->nullable();
            $table->timestamps();
        });

        Schema::create('contributor_project', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('project_id')->index();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

            $table->unsignedInteger('contributor_id')->index();
            $table->foreign('contributor_id')->references('id')->on('contributors')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contributors');
        Schema::dropIfExists('contributors_projects');
    }
}
