<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
    	for($i=0;$i<1000000;$i++){
    		$title = $faker->realText(100,1);
    		$slug = str_slug($title.'-'.microtime(), '-');
    		$post =[
    			'title'=>$title,
    			'content'=>$faker->realText(400,1),
    			'short_dess'=>$faker->realText(200,1),
    			'author'=> $faker->name(),
    			'created_by'=>-1,
    			'slug'=>$slug,
    			'cate_id'=>rand(1,10),
                'view'=>rand(100,1000),
                'publish_date'=>$faker->dateTimeThisYear('now',date_default_timezone_get())

    		];
    		 DB::table('posts')->insert($post);
    	}
	}
}
