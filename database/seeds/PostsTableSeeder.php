<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Database;

use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $param = [
            'title' => 'title01',
            'contents' => 'This is sample01.',
            'user_id' => 1,
        ];
        $post->fill($param)->save();
        
        $post = new Post;
        $param = [
            'title' => 'title02',
            'contents' => 'This is sample02.',
            'user_id' => 1,
        ];
        $post->fill($param)->save();
        
        $post = new Post;
        $param = [
            'title' => 'title03',
            'contents' => 'This is sample03.',
            'user_id' => 1,
        ];
        $post->fill($param)->save();
        
         $post = new Post;
        $param = [
            'title' => 'title04',
            'contents' => 'This is sample04.',
            'user_id' => 1,
        ];
        $post->fill($param)->save();
        
         $post = new Post;
        $param = [
            'title' => 'title05',
            'contents' => 'This is sample05.',
            'user_id' => 1,
        ];
        $post->fill($param)->save();
        
         $post = new Post;
        $param = [
            'title' => 'title06',
            'contents' => 'This is sample06.',
            'user_id' => 1,
        ];
        $post->fill($param)->save();
    }
}
