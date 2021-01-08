<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;
use App\Models\Post;


class PostController extends BaseController{
 
    public function delete(){
    	$id = $_GET['id']; // lấy id từ đường dẫn
    	Post::destroy($id);
        header("location: " . BASE_URL ."post". "?msg=Xóa thành công!");
        
    }
    public function addForm(){
    	$post = Post::all();
        $this->render('admin.post.add', ['post' => $post]);
    }
    public function editForm(){
        $id = $_GET['id'];
        $model = Post::find($id);
        if(!$model){
            header("location: " . BASE_URL ."post". "?msg=sản phẩm không tồn tại!");
        }
        $this->render('admin.post.edit', [
            'model' => $model
        ]);


    }
    public function blogDetail(){
        $id = $_GET['id'];
        $model = Post::find($id);
        $this->render('admin.post.detail', [
            'model' => $model
        ]);

    }
    public function saveAdd(){
        $model = new Post();
        // gán dữ liệu cho model
        $model->fill($_POST);

        $err=[];
        $name = $_POST['name'];
        $short_desc = $_POST['short_desc'];
        $detail = $_POST['detail'];
        $file = $_FILES['image'];
        $check = Post::where('name',$name)->get();

        // var_dump($star);die;

        if(strlen($name) == 0 )
        {
           $err['name'] = "Tên bản tin không được để trống!";
        }
        if( count($check) > 0 ){
            $err['name'] = "chùng tên!"; 
        }
        if(strlen($short_desc) == 0 )
        {
           $err['short_desc'] = "Mô tả ngắn không được để trống!";
        }
        if(strlen($detail) == 0 )
        {
           $err['detail'] = "Chi tiết không được để trống!";
        }
        if($file['size'] == 0 )
        {
           $err['image'] = "Hãy chọn ảnh!";
        }
        
        if(count($err)>0){
            $this->render('admin.post.add', ['err'=>$err  ] );
            die;
        }

        
    
        
        // upload ảnh
        if($file['size'] > 0){
            $filename = uniqid() . '-' . $file['name'];
            $destination = "./public/uploads/products/" . $filename;
            move_uploaded_file($file['tmp_name'], $destination);
            $model->image = ltrim($destination, './');
        }
        
        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL ."post". "?msg=Thêm mới thành công");
        die;
    }


    public function saveEdit(){
        $id = $_GET['id'];
        $model = Post::find($id);

        // gán dữ liệu cho model
        $model->fill($_POST);

        $err=[];
        $name = $_POST['name'];
        $short_desc = $_POST['short_desc'];
        $detail = $_POST['detail'];

        // var_dump($star);die;

        if(strlen($name) == 0 )
        {
           $err['name'] = "Tên  không được để trống!";
        }
        if(strlen($short_desc) == 0 )
        {
           $err['short_desc'] = "Mô tả ngắn không được để trống!";
        }
        if(strlen($detail) == 0 )
        {
           $err['detail'] = "thông tin ko không được để trống!";
        }

        if(count($err)>0){
            $this->render('admin.post.edit', ['err'=>$err, 'model'=>$model ]);die;
            
        }

        $file = $_FILES['image'];
        // upload ảnh
        if($file['size'] > 0){
            $filename = uniqid() . '-' . $file['name'];
            $destination = "./public/uploads/products/" . $filename;
            move_uploaded_file($file['tmp_name'], $destination);
            $model->image = ltrim($destination, './');
        }
        
        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL ."post" );
        die;
    }

}
?>