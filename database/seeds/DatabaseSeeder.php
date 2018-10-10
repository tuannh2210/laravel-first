<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        // $this->call(PostTableSeeder::class);
        $this->call(CategoryTableSeeder::class);

        //php artisan migrate:fresh --seed =>Xóa ->tải lại
        // php artisan migrate:refresh --seed  => tải lại dữ liêu
        // php artisan db:seed 
    }
}
