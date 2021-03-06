<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
              'title' => 'Публикация 1',
                'slug' => 'post_1',
                'image' => null,
                'content' => 'Рандомный контент 1',
                'description' => 'Краткое описание 1',
                'category_id' => '1',
                'user_id' => '1',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 11',
                'slug' => 'post_11',
                'image' => null,
                'content' => 'Рандомный контент 11',
                'description' => 'Краткое описание 11',
                'category_id' => '1',
                'user_id' => '1',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 111',
                'slug' => 'post_111',
                'image' => null,
                'content' => 'Рандомный контент 111',
                'description' => 'Краткое описание 111',
                'category_id' => '1',
                'user_id' => '1',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 2',
                'slug' => 'post_2',
                'image' => null,
                'content' => 'Рандомный контент 2',
                'description' => 'Краткое описание 2',
                'category_id' => '2',
                'user_id' => '2',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 22',
                'slug' => 'post_22',
                'image' => null,
                'content' => 'Рандомный контент 22',
                'description' => 'Краткое описание 22',
                'category_id' => '2',
                'user_id' => '2',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 222',
                'slug' => 'post_222',
                'image' => null,
                'content' => 'Рандомный контент 222',
                'description' => 'Краткое описание 222',
                'category_id' => '2',
                'user_id' => '2',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 3',
                'slug' => 'post_3',
                'image' => null,
                'content' => 'Рандомный контент 3',
                'description' => 'Краткое описание 3',
                'category_id' => '3',
                'user_id' => '3',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 33',
                'slug' => 'post_33',
                'image' => null,
                'content' => 'Рандомный контент 33',
                'description' => 'Краткое описание 33',
                'category_id' => '3',
                'user_id' => '3',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 333',
                'slug' => 'post_333',
                'image' => null,
                'content' => 'Рандомный контент 333',
                'description' => 'Краткое описание 333',
                'category_id' => '3',
                'user_id' => '3',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 4',
                'slug' => 'post_4',
                'image' => null,
                'content' => 'Рандомный контент 4',
                'description' => 'Краткое описание 4',
                'category_id' => '4',
                'user_id' => '4',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 44',
                'slug' => 'post_44',
                'image' => null,
                'content' => 'Рандомный контент 44',
                'description' => 'Краткое описание 44',
                'category_id' => '4',
                'user_id' => '4',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 444',
                'slug' => 'post_4',
                'image' => null,
                'content' => 'Рандомный контент 444',
                'description' => 'Краткое описание 444',
                'category_id' => '4',
                'user_id' => '4',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 5',
                'slug' => 'post_5',
                'image' => null,
                'content' => 'Рандомный контент 5',
                'description' => 'Краткое описание 5',
                'category_id' => '5',
                'user_id' => '5',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 55',
                'slug' => 'post_55',
                'image' => null,
                'content' => 'Рандомный контент 55',
                'description' => 'Краткое описание 55',
                'category_id' => '5',
                'user_id' => '5',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 555',
                'slug' => 'post_555',
                'image' => null,
                'content' => 'Рандомный контент 555',
                'description' => 'Краткое описание 555',
                'category_id' => '5',
                'user_id' => '5',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 6',
                'slug' => 'post_6',
                'image' => null,
                'content' => 'Рандомный контент 6',
                'description' => 'Краткое описание 6',
                'category_id' => '5',
                'user_id' => '6',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 65',
                'slug' => 'post_65',
                'image' => null,
                'content' => 'Рандомный контент 65',
                'description' => 'Краткое описание 65',
                'category_id' => '2',
                'user_id' => '6',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 63',
                'slug' => 'post_63',
                'image' => null,
                'content' => 'Рандомный контент 63',
                'description' => 'Краткое описание 63',
                'category_id' => '3',
                'user_id' => '6',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
            [
                'title' => 'Публикация 61',
                'slug' => 'post_61',
                'image' => null,
                'content' => 'Рандомный контент 61',
                'description' => 'Краткое описание 61',
                'category_id' => '1',
                'user_id' => '6',
                'is_published' => true,
                'is_recommended' => true,
                'views' => rand(100,10000),
            ],
        ]);
    }
}
