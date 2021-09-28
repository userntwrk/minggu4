<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('article')->insert([
          'title' => 'Belajar Model Dengan Laravel',
        'image' => 'https://via.placeholder.com/640x480.png/00ff77?text=Belajar Model',
        'content' => 'Belajar Laravel itu menyenangkan',
        'created_at' =>  '2021-09-28',
        'updated_at' =>  '2021-09-28'
      ]);*/
      \App\Models\Article::factory()->count(10)->create();
    }
}
