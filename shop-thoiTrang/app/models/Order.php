<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Order extends Model{
    // public function getUserName(){
    //     $parent= User::find($this->id_user);
    //     if($parent) return $parent->name;
    //     return null;
    // }
    public function getUserName(){
        $parent= User::find($this->name);
        if($parent) return $parent->name;
        return null;
    }

    public function getStatus(){
        $parent= Statu::find($this->statu_id);
        // var_dump($parent);
        if($parent)return $parent->name;
        return null;
    }
    protected $table = 'order';
    public $timestamps = false;
    protected $fillable = [ 'id_user','statu_id','id', 'name','email', 'address_2','created_time', 'address','note', 'total', 'last_updated' ];
}
 
?> 