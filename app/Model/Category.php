<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Categories';

    public $fillable =['name','slug','parent_id','is_menu','desc'];

    public function getParentName(){
    	$parent = self::find($this->parent_id);
    	if(!$parent) return "Null";
   		return $parent->name;
   	}
    // 	// public function getParentName(){
   	// 	// $parent = self::find($this->parent_id);
   	// 	// if(!$parent) return "Null";
   	// 	// return $parent->name;
   	// }
    
}
