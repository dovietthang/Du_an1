<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;
use App\Models\Comment;
use App\Models\CommentBlog;
use App\Models\Post;
 


class CommentblogController extends BaseController{
    public function delete(){
    	$id = $_GET['id']; // lấy id từ đường dẫn
    	CommentBlog::destroy($id);
        header("location: " . BASE_URL ."comment-blog". "?msg=Xóa thành công!");
        
    }
    public function addForm(){
    	$model = CommentBlog::all();
    	$user = User::all();
        $posts = Post::all();
        $this->render('admin.comment-blog.add', ['user' => $user, 'model'=> $model ,
                                                 'posts'=>$posts]);
        // include_once './app/views/home/add.php';
    }
    public function editForm(){
        $id = $_GET['id'];
        $model = CommentBlog::find($id);
        $posts = Post::all();

        if(!$model){
            header("location: " . BASE_URL ."commentblog". "?msg=sản phẩm không tồn tại!");
        }
        $user = User::all();

        $this->render('admin.comment-blog.edit', [ 'user' => $user, 'model' => $model,
                                                'posts' => $posts]);

    }
    public function saveAdd(){
        $model = new CommentBlog();
        $user = User::all();
        $posts = Post::all();

        // gán dữ liệu cho model
        $model->fill($_POST);


        $err=[];
        $content = $_POST['content'];


        // var_dump($star);die;

        if(strlen($content) == 0 )
        {
           $err['content'] = "nội dung bình luận không được để trống!";
        }
   
        if(count($err)>0){
            $this->render('admin.comment-blog.add', ['err'=>$err , 'user'=>$user, 'model'=>$model,
                                                    'posts'=>$posts ]);
            die;
        }

        
        // lưu dữ liệu với csdl
        // var_dump($star);die;

        $model->save();

        header('location: ' . BASE_URL ."comment-blog". "?msg=Thêm mới thành công");
        die;
    }


    public function saveEdit(){
        $id = $_GET['id'];
        $model = CommentBlog::find($id);
        $user = User::all();
        $posts = Post::all();


        // gán dữ liệu cho model
        $model->fill($_POST);

        $err=[];
        $content = $_POST['content'];

        // var_dump($star);die;

        if(strlen($content) == 0 )
        {
           $err['content'] = "nội dung bình luận không được để trống!";
        }


        
        if(count($err)>0){
            $this->render('admin.comment-blog.edit', ['err'=>$err, 'model'=>$model , 'user'=> $user,
                                                    'posts'=> $posts]);
            
        }

        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL ."comment-blog" );
        die;
    }

    public function saveAddCommentBlog(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        $model = new CommentBlog();
        $product = Product::all();
        $user = User::all();
        $id = $_POST['id_blog'];

        // gán dữ liệu cho model

        $dataSave = [
            'id_user' => $_SESSION['auth']['id'],
            'content' => $_POST['content'],
            'id_blog' => $_POST['id_blog'],
            'updated_at' => $_POST['updated_at']

        ];

        $model->fill($dataSave);

        $model->save();

        header('location: ' . BASE_URL ."blog-detail?id=$id");
        die;
    }

}

?>
