<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('article', function (Blueprint $table)
         {
             $table->id();
             $table->string('title', 100)->index();;
             $table->text('content');
             $table->string('image', 300);
             $table->datetime('created_at');
             $table->datetime('updated_at');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('article');
     }
}
