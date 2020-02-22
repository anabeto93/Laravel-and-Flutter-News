<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class, 1)->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'anabeto93@gmail.com'
        ]);
        factory(\App\Models\Admin::class, 1)->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'anabeto93@gmail.com'
        ]);
        factory(\App\Models\User::class, 100)->create();

        //create posts
        factory(\App\Models\Post::class, 1000)->create([
            'post_type' => 'text'
        ]);

        //create posts - video
        factory(\App\Models\Post::class, 500)->create([
            'post_type' => 'video'
        ]);

        //create categories
        factory(\App\Models\Category::class, 10)->create();

        //create tags
        factory(\App\Models\Tag::class, 50)->create();

        //create comments
        factory(\App\Models\Comment::class, 3000)->create();

        //create images
        factory(\App\Models\Image::class, 3500)->create();

        //create videos
        factory(\App\Models\Video::class, 500)->create();

        //create post tags
        try {
        foreach(\App\Models\Post::all() as $post) {
            \Illuminate\Support\Facades\DB::table('post_tag')->insert([
                'tag_id' => \App\Models\Tag::select('id')->orderByRaw('RAND()')->first()->id,
                //'post_id' => \App\Models\Post::select('id')->orderByRaw('RAND()')->first()->id,
                'post_id' => $post->id
            ]);
        }} catch (\Illuminate\Database\QueryException $e) {
            //do nothing about it
        }
    }
}
