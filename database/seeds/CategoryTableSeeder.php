<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cate= [
            ['name'=>'Bóng đá','slug'=>'bong-da','is_menu'=>1],
            ['name'=>'Thế giới','slug'=>'the-gioi','is_menu'=>1],
            ['name'=>'Thời trang','slug'=>'thoi-trang','is_menu'=>0],
            ['name'=>'An ninh xã hội','slug'=>'an-ninh-xa-hoi','is_menu'=>1],
            ['name'=>'Thời trang HI-tech','slug'=>'thoi-trang-hi-tech','is_menu'=>0],
            ['name'=>'Tài chính','slug'=>'tai-chinh','is_menu'=>1],
            ['name'=>'Ẩm thực','slug'=>'am-thuc','is_menu'=>1],
            ['name'=>'Làm đẹp','slug'=>'lam-dep','is_menu'=>0],
            ['name'=>'Giải trí','slug'=>'giai-tri','is_menu'=>1],
            ['name'=>'Thể thao','slug'=>'the-thao','is_menu'=>0],
            ['name'=>"Công nghệ thông tin",'slug'=>'cong-nghe-thong-tin','is_menu'=>1],
            ['name'=>'Du lịch','slug'=>'du-lich','is_menu'=>0],


        ];
        DB::table('categories')->insert($cate);
    }

}
