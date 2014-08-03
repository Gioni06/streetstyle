<?php

class TagsTableSeeder extends Seeder {

	public function run()
	{
  
    Post::create([
          'tag' => 'Gesichtspflege'
      ]);
    Post::create([
          'tag' => 'Gewinnspiel'
      ]);
  
  }

}