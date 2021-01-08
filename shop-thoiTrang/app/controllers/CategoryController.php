<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;

class CategoryController extends BaseController{

    public function delete(){
    	$id = $_GET['id']; // lấy id từ đường dẫn
    	Category::destroy($id);
    	header("location: " . BASE_URL ."category". "?msg=Xóa thành công!");
    }
    public function addForm(){
        $this->render('admin.category.add',);
        // include_once './app/views/home/add.php';
    }
    public function editForm(){
        $id = $_GET['id'];
        $model = Category::find($id);
        $this->render('admin.category.edit', [ 'model' => $model ]); //ko kế thừa

    }
    // public function saveAdd(){
	//     $model = new Category();
    //     // gán dữ liệu cho model
    //     $model->fill($_POST);
        
    //     // upload ảnh
        
    //     // lưu dữ liệu với csdl
    //     $model->save();
    //     header('location: ' . BASE_URL ."category". '');
    //     die;
    // }
    public function saveAdd(){

        $data = $_POST;
        $err=[];
        $cate_name = $_POST['cate_name'];
        $unique = Category::where('cate_name','like',$cate_name)->where('id','!=',)->get();

        if(strlen($cate_name) == 0 )
        {
           $err['cate_name'] = "Tên danh mục không được để trống!";
        }      
        if(count($err)>0){
            $this->render('admin.category.add', ['err'=>$err]);
            die;
        }
        
        $model = new Category();
        $model->fill($data);
        $model->save();
        $msg = "Thêm mới thành công";
        header('location: ' . BASE_URL ."category". "?msg=Thêm mới thành công");
        
    }

    public function saveEdit(){
        $id = $_GET['id'];
        $model = Category::find($id);
        // gán dữ liệu cho model
        $model->fill($_POST);
        $cate_name = $_POST['cate_name'];
        $err=[];

        if(strlen($cate_name) == 0 )
        {
           $err['cate_name'] = "Tên danh mục không được để trống!";
        }
        
        if(count($err)>0){
            $this->render('admin.category.edit', ['err'=>$err, 'model'=>$model]);
        }
        
        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL ."category". '');
        die;
    }
}
?>