<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;
use App\Models\Slide;


class SlideController extends BaseController{

    public function delete(){
    	$id = $_GET['id']; // lấy id từ đường dẫn
    	Slide::destroy($id);
        header("location: " . BASE_URL ."slide". "?msg=Xóa thành công!");
        
    }
    public function addForm(){
    	$slide = Slide::all();
        $this->render('admin.slide.add', ['slide' => $slide]);
    }
    public function editForm(){
        $id = $_GET['id'];
        $model = Slide::find($id);
        if(!$model){
            header("location: " . BASE_URL ."slide");
        }

        $this->render('admin.slide.edit', [
            'model' => $model
        ]);



    }
    public function saveAdd(){
        $model = new Slide();
        // gán dữ liệu cho model
        $model->fill($_POST);


        $err=[];
        $name = $_POST['name'];
        $content = $_POST['content'];
        $file = $_FILES['image'];
        $check = Slide::where('name',$name)->get();

        // var_dump($star);die;

        if(strlen($name) == 0 )
        {
           $err['name'] = "Tên sản phảm không được để trống!";
        }
        if( strlen($name) <= 5 || strlen($name) >= 20 )
        {

           $err['name'] = "Tên sản phẩm nằm trong khoảng 5-20 ký tự!";
        }
        if( count($check) > 0 ){
            $err['name'] = "chùng!"; 
        }
        if(strlen($content) == 0 )
        {
           $err['content'] = "nội dung không được để trống!";
        }
        
        if($file['size'] == 0 )
        {
           $err['image'] = "Hãy chọn ảnh Sản Phảm!";
        }
        
        if(count($err)>0){
            $this->render('slide.add', ['err'=>$err ] );
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
        header('location: ' . BASE_URL ."slide". "?msg=Thêm mới thành công");
        die;
    }


    public function saveEdit(){
        $id = $_GET['id'];
        $model = Slide::find($id);

        // gán dữ liệu cho model
        $model->fill($_POST);

        $err=[];
        $name = $_POST['name'];
        $content = $_POST['content'];

        // var_dump($star);die;

        if(strlen($name) == 0 )
        {
           $err['name'] = "Tên sản phẩm không được để trống!";
        }
        if(strlen($content) == 0 )
        {
           $err['content'] = "Tên giá sản phẩm không được để trống!";
        }
        
        if(count($err)>0){
            $this->render('slide.edit', ['err'=>$err, 'model'=>$model ]);
            
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
        header('location: ' . BASE_URL ."slide" );
        die;
    }

}
?>