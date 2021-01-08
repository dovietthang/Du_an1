<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class OrderDetail extends Model{
    public function getProductName(){
        $parent= Product::find($this->product_id);
        if($parent) return $parent->name;
        return null;
    }
    public function getProductImg(){
        $parent= Product::find($this->product_id);
        if($parent) return $parent->image;
        return null;
    }
    // public function getTotalStarComment(){
    //     $star= Comment::find($this->total_star);
    //     if($star) return $star->star;
    //     return null;
    // }

    protected $table = 'order_detail';
    public $timestamps = false;
    protected $fillable = [ 'id', 'order_id','product_id', 'price','quantity',  ];

}
 
?> 