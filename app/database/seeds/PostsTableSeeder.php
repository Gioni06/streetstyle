<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
	
  	Post::create([
          'title' => 'this is my first title',
          'text' => 'some lorem ipsum text',
          'image_url' => 'http://placehold.it/800x600'
			]);
    Post::create([
          'title' => 'this is my second title',
          'text' => 'some more lorem ipsum text',
          'image_url' => 'http://placehold.it/800x600'
      ]);
	
	}

}