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
            $table->bigIncrements('post_id'); 
            //id нашего юзера 
            $table->bigInteger('author_id')->unsigned(); 
            $table->string('title', 100)->comment('заголовок'); 
            //сокращение заголовка(например чтобы отображались первые 30 символов) 
            $table->string('short_title'); 
            $table->string('img')->nullable()->comment('картинка'); 
            $table->text('descr')->comment('текст'); 
            //два поля - когда пост был создан и когда он удален 
            $table->timestamps(); 

            //объявляем вторичный ключь 
            $table->foreign('author_id')->references('id')->on('users');
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
