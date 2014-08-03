<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
    Eloquent::unguard();
  	Post::create([
          'title' => 'Körperpflege',
          'text' => 'some lorem ipsum text',
          'image_url' => 'http://placehold.it/300x300'
			]);
    Post::create([
          'title' => 'Gesichtspflege',
          'text' => 'some more lorem ipsum text',
          'image_url' => 'http://placehold.it/300x300'
      ]);
    Post::create([
        'title' => 'Körperpflege Gewinnspiel',
        'text' => 'some more lorem ipsum text',
        'image_url' => 'http://placehold.it/300x300'
        ]);
    Post::create([
        'title' => 'Gesichtspflege Gewinnspiel',
        'text' => 'some more lorem ipsum text',
        'image_url' => 'http://placehold.it/300x300'
        ]);
    }

}