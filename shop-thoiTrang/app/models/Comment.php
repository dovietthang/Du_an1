<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model{
    public function getUserName(){
        $parent= User::find($this->id_user);
        if($parent) return $parent->name;
        return null;
    }
    public function getProductName(){
        $parent= Product::find($this->id_product);
        if($parent) return $parent->name;
        return null;
    }
    public function getAvatar(){
        $parent= User::find($this->id_user);
        // var_dump($parent);
        if($parent)return $parent->avatar;
        return null;
    }
    public function getProductid(){
        $parent= Product::find($this->id_product);
        // var_dump($parent);
        if($parent)return $parent->id;
        return null;
    }
    protected $table = 'comments';
    public $timestamps = false;
    protected $fillable = ['id', 'content','star', 'id_product', 'id_user','updated_at','star_total'];
}
 
?> 