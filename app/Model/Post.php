<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public $fillable =[	
    					'title',
    					'content',
    					'short_dess',
    					'slug',
    					'cate_id',
    					'author',
    					'created_by',
                        'view'
    				];

    public function getCate(){
    	$cate = Category::find($this->cate_id);
    	return $cate;
    }

    
}
