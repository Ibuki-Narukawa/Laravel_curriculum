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
        ];
        $post->fill($param)->save();
        
        $post = new Post;
        $param = [
            'title' => 'title02',
            'contents' => 'This is sample02.',
        ];
        $post->fill($param)->save();
        
        $post = new Post;
        $param = [
            'title' => 'title03',
            'contents' => 'This is sample03.',
        ];
        $post->fill($param)->save();
    }
}
