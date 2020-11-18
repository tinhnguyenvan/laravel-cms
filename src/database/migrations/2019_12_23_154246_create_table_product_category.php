<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by TablePlus 2.10(268)
 * @author https://tableplus.com
 * @source https://github.com/TablePlus/tabledump
 */
class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
            $table->integer('parent_id')->nullable()->default(0);
            $table->string('title', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->smallInteger('level')->default(0);
            $table->text('description')->nullable();
            $table->integer('total_usage')->nullable()->default(0);
            $table->string('image_url', 255)->nullable();
            $table->integer('image_id')->nullable()->default(0);
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 255)->nullable();
            $table->integer('creator_id')->nullable()->default(0);
            $table->integer('editor_id')->nullable()->default(0);
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
        Schema::dropIfExists('product_categories');
    }
}
