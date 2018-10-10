<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $faker = Faker\Factory::create();
       //  for($i=0;$i<10;$i++){
       //      $name = $faker->name();
       //      $post =[
       //          'name'=>$name,
       //          'email'=>$faker->domainWord.'@gmail.com',
       //          'password'=>Hash::make('123456')

       //      ];
       //       DB::table('users')->insert($post);
       //  }
        $users= [
            ['name'=>'admin','email'=>'admin@gmail.com','password'=>Hash::make('123456')],
            ['name'=>'tuan','email'=>'tuan@gmail.com','password'=>Hash::make('123456')],
        ];
         DB::table('users')->insert($users);
    }
}
