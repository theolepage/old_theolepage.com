<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('description');
            $table->text('about')->nullable();

            $table->string('color');
            $table->string('technologies')->nullable();
            $table->integer('progress')->default(-1);
            $table->integer('status')->default(0);
            $table->string('version')->nullable();
            $table->boolean('large');
            $table->boolean('published')->default(true);
            $table->dateTime('creation_date');

            $table->string('youtube_video_id')->nullable();
            $table->string('github_repo_username')->nullable();
            $table->string('github_repo_name')->nullable();
            $table->string('report_url')->nullable();
            $table->string('website_url')->nullable();
            $table->string('downloads_url')->nullable();
            $table->string('screenshot_url')->nullable();

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
        Schema::dropIfExists('projects');
    }
}
