<?php

class TagsTableSeeder extends Seeder {

	public function run()
	{
    Eloquent::unguard();
    Tag::create([
          'tag' => 'Gesichtspflege'
      ]);
        Tag::create([
          'tag' => 'Gewinnspiel'
      ]);
    Tag::create([
            'tag' => 'Körperpfege'
        ]);
  
  }

}