<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class CommentBlog extends Model{
    public function getUserName(){
        $parent= User::find($this->id_user);
        if($parent) return $parent->name;
        return null;
    }
    public function getBlogName(){
        $parent= Post::find($this->id_blog);
        if($parent) return $parent->name;
        return null;
    }
    public function getAvatar(){
        $parent= User::find($this->id_user);
        // var_dump($parent);
        if($parent)return $parent->avatar;
        return null;
    }

    protected $table = 'Comment_blog';
    public $timestamps = false;
    protected $fillable = ['id', 'content', 'id_blog', 'id_user','updated_at'];
}
 
?> 