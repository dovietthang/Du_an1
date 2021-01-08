<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    public function getCategoryName(){
        $parent= Category::find($this->cate_id);
        if($parent) return $parent->cate_name;
        return null;
    }
    public function getTotalStarComment(){
        $star= Comment::find($this->total_star);
        if($star) return $star->star;
        return null; 
    }

    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = ['name', 'price', 'views', 'cate_id','updated_at',
                            'short_desc', 'more_information','star', 'detail','number','star_total'];
}
 
?> 