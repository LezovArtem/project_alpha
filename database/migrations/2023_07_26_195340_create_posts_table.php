<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->integer('likes')->nullable();
            $table->bigInteger('category_id')->unsigned();/*
            $table->string('category_title');*/
            $table->boolean('is_published')->default(1);
            $table->softDeletes();
            $table->timestamps();

            $table->index('category_id', 'post_category_idx');/*
            $table->index('category_title', 'post_category_title_idx');*/
        });
        Schema::table('posts', function (Blueprint $table){
            //$table->foreign('category_title', 'post_category_title_fk')->references('title')->on('categories');
            $table->foreign('category_id', 'post_category_id_fk')->references('id')->on('categories');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
