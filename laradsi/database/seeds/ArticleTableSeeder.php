<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
        	'name'   	  => 'El barril de petróleo subió',
        	'image'  	  => 'imgs/articles/petroleo.png',
        	'content'	  => 'Lorem impsum dolor sit amet.',
        	'category_id' => 1
        ]);

        Article::create([
        	'name'   	  => 'Nairo magia rosa en la etapa 10',
        	'image'  	  => 'imgs/articles/nairo.png',
        	'content'	  => 'Lorem impsum dolor sit amet.',
        	'category_id' => 3
        ]);

        Article::create([
        	'name'   	  => 'Actualización de seguridad nintendo Switch',
        	'image'  	  => 'imgs/articles/nintendo.png',
        	'content'	  => 'Lorem impsum dolor sit amet.',
        	'category_id' => 5
        ]);
    }
}
