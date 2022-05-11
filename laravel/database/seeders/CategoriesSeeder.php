<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
            'name' => 'Комментарии',
            'description' => ', отзывы, наполнение форумов',
            'im_url' => 'https://unu.im/i/conversation.svg',
        ]);
        Categorie::create([
            'name' => 'Подписчики / фолловеры',
            'description' => ' в социальных сетях',
            'im_url' => 'https://unu.im/i/rotation.svg',
        ]);
        Categorie::create([
            'name' => 'Лайки, репосты,',
            'description' => ' голосование, активность',
            'im_url' => 'https://unu.im/i/like2.svg',
        ]);
        Categorie::create([
            'name' => 'Лайки, репосты,',
            'description' => ' голосование, активность',
            'im_url' => 'https://unu.im/i/like2.svg',
        ]);
        Categorie::create([
            'name' => 'Лайки, репосты,',
            'description' => ' голосование, активность',
            'im_url' => 'https://unu.im/i/like2.svg',
        ]);
    }
}
