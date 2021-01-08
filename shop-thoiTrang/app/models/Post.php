<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{

    protected $table = 'posts';
    public $timestamps = false;
    protected $fillable = ['name','updated_at','short_desc', 'comment', 'detail','image','tags'];
}
 
?> 