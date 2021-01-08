<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;
use App\Models\Comment;


class CommentController extends BaseController{
    public function delete(){
    	$id = $_GET['id']; // lấy id từ đường dẫn
    	Comment::destroy($id);
        header("location: " . BASE_URL ."comment". "?msg=Xóa thành công!");
        
    }
    public function addForm(){
    	$comment = Comment::all();
    	$user = User::all();
    	$product = Product::all();
        $this->render('admin.comment.add', ['user' => $user, 'product'=> $product, 'comment'=> $comment]);
        // include_once './app/views/home/add.php';
    }
    public function editForm(){
        $id = $_GET['id'];
        $model = Comment::find($id);
        // var_dump($id);die;

        if(!$model){
            header("location: " . BASE_URL ."comment". "?msg=sản phẩm không tồn tại!");
        }
        $user = User::all();
        $product = Product::all();

        $this->render('admin.comment.edit', ['product' => $product, 'user' => $user, 'model' => $model]);

    }
    public function saveAdd(){
        $model = new Comment();
        $user = User::all();
        $product = Product::all();
        // gán dữ liệu cho model
        $model->fill($_POST);


        $err=[];
        $content = $_POST['content'];
        $star = $_POST['star'];


        // var_dump($star);die;

        if(strlen($content) == 0 )
        {
           $err['content'] = "nội dung bình luận không được để trống!";
        }
   
        if(count($err)>0){
            $this->render('admin.comment.add', ['err'=>$err , 'user'=>$user, 'product'=>$product ] );
            die;
        }

        
        // lưu dữ liệu với csdl
        // var_dump($model);die;

        $model->save();

        header('location: ' . BASE_URL ."comment". "?msg=Thêm mới thành công");
        die;
    }


    public function saveEdit(){
        $id = $_GET['id'];
        $model = Comment::find($id);
        $user = User::all();
        $product = Product::all();
        // gán dữ liệu cho model
        $model->fill($_POST);

        $err=[];
        $content = $_POST['content'];
        $updated_at = $_POST['updated_at'];

        // var_dump($star);die;

        if(strlen($content) == 0 )
        {
           $err['content'] = "nội dung bình luận không được để trống!";
        }


        
        if(count($err)>0){
            $this->render('admin.comment.edit', ['err'=>$err, 'model'=>$model , 'user'=> $user, 'product'=> $product]);
            
        }
        

        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL ."comment" );
        die;
    }

    public function saveAddCommentProduct(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        $model = new Comment();
        $product = Product::all();
        $user = User::all();
        $id = $_POST['id_product'];

        // gán dữ liệu cho model

        $dataSave = [
            'id_user' => $_SESSION['auth']['id'],
            'content' => $_POST['content'],
            'id_product' => $_POST['id_product'],
            'star' => $_POST['star'],
            'updated_at' => $_POST['updated_at']

        ];
        // var_dump($model);die;

        $model->fill($dataSave);
        // print($model);echo "<pre>";die;

        // var_dump($model);die;

        $model->save();
        // id_product

        $model = Product::find($id);
        $dataSave = [
            'star_total' => $_POST['star_total']
        ];
        // var_dump($model);die;
        $model->fill($dataSave);
        // var_dump($model);die;
        $model->save();


        header('location: ' . BASE_URL ."shop-detail?id=$id");
        die;
    }

}
    // {{getClientUrl('delete-comment', ['id'=>$item->id])}}

?>
