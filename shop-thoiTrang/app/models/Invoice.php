<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Invoice extends Model{
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
    public function getImage(){
        $parent= Product::find($this->id_product);
        // var_dump($parent);
        if($parent)return $parent->image;
        return null;
    }
    public function getStatus(){
        $parent= Statu::find($this->statu_id);
        // var_dump($parent);
        if($parent)return $parent->name;
        return null;
    }
    protected $table = 'invoices';
    public $timestamps = false;
    protected $fillable = ['id', 'id_product','id_user','updated_at','number','notepad','statu_id','total_price'
                            ,'address','phone_number','address_2'];
    
}

?>