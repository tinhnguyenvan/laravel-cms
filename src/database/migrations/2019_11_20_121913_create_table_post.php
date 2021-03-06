<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by TablePlus 2.10(268)
 * @author https://tableplus.com
 * @source https://github.com/TablePlus/tabledump
 */
class CreateTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_posts', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
            $table->integer('category_id')->nullable()->default(0)->index();
            $table->integer('image_id')->nullable()->default(0);
            $table->string('image_url', 255)->nullable();
            $table->smallInteger('status')->nullable()->default(1);
            $table->integer('creator_id')->nullable()->default(0);
            $table->integer('editor_id')->nullable()->default(0);
            $table->tinyInteger('is_hot')->nullable()->default(0);
            $table->integer('views')->nullable()->default(0);
            $table->string('tags', 255)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
