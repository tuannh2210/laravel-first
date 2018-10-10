<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'Users';

    // public $fillable =['name','slug','parent_id','is_menu'];

    // public function getParentName(){
    // 	$parent = self::find($this->parent_id);
    // 	if(!$parent) return "Null";
   	// 	return $parent->name;
   	// }
    // 	// public function getParentName(){
   	// 	// $parent = self::find($this->parent_id);
   	// 	// if(!$parent) return "Null";
   	// 	// return $parent->name;
   	// }
    
}
