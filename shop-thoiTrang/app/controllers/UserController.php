<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;

class UserController extends BaseController{
 
    public function delete(){
    	$id = $_GET['id']; // lấy id từ đường dẫn
    	User::destroy($id);
    	header("location: " . BASE_URL ."user". "?msg=Xóa thành công!");
    }
    public function addForm(){
        $role = Role::all();
        $model = User::all();
        $this->render('admin.user.add', ['role' => $role,'model' => $model]);die;
        // include_once './app/views/home/add.php';
    }
    public function editForm(){
        $id = $_GET['id'];
        $model = User::find($id);
        if(!$model){
            header("location: " . BASE_URL ."user". "?msg=sản phẩm không tồn tại!");
        }
        $role = Role::all();
        // $this->render('product.edit', [ 'model' => $model ]); //ko kế thừa

        $this->render('admin.user.edit', [
            'role' => $role,
            'model' => $model
        ]);
        // include_once './app/views/product/edit.blade.php';

    }
    public function saveAdd(){
        $model = new User();
        $role = Role::all();
        // gán dữ liệu cho model
        $model->fill($_POST);
        $err=[];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $check = User::where('name',$name)->get();
        $check2 = User::where('email',$email)->get();


        if(strlen($name) == 0 )
        {
           $err['name'] = "Tên Người dùng không được để trống!";
        }
        if( strlen($name) <= 5 || strlen($name) >= 30 )
        {
           $err['name'] = "Tên sản phẩm nằm trong khoảng 5-30 ký tự!";
        }
        if( count($check) > 0 ){
            $err['name'] = "chùng tên !"; 
        }
        if(strlen($email) == 0 )
        {
           $err['email'] = "email không được để trống!";
        }
        if( count($check2) > 0 ){
            $err['email'] = "chùng email !"; 
        }
        if(strlen($password) == 0 )
        {
           $err['password'] = "password không được để trống!";
        }
        if(strlen($phone_number) == 0 )
        {
           $err['phone_number'] = "số đt không không được để trống!";
        }
        if(strlen($address) == 0 )
        {
           $err['address'] = "địa chỉ không không được để trống!";
        }
        if(count($err)>0){
            $this->render('admin.user.add', ['err'=>$err , 'role' => $role, 'model'=>$model ] );
            die;
        }
         
        // upload ảnh
        $file = $_FILES['avatar']; //image
        if($file['size'] > 0){
            $filename = uniqid() . '-' . $file['name'];
            $destination = "./public/uploads/users/" . $filename;
            move_uploaded_file($file['tmp_name'], $destination);
            $model->avatar = ltrim($destination, './');
        }
        
        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL ."user");
        die;
    }

    public function saveEdit(){
        $id = $_GET['id'];
        $model = User::find($id);
        $role = Role::all();

        $model->fill($_POST);
        $err=[];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $address = $_POST['address'];



        if(strlen($name) == 0 )
        {
           $err['name'] = "Tên Người dùng không được để trống!";
        }
        if( strlen($name) <= 5 || strlen($name) >= 30 )
        {
           $err['name'] = "Tên sản phẩm nằm trong khoảng 5-30 ký tự!";
        }
        if(strlen($email) == 0 )
        {
           $err['email'] = "email không được để trống!";
        }
        if(strlen($password) == 0 )
        {
           $err['password'] = "password không được để trống!";
        }
        if(strlen($phone_number) == 0 )
        {
           $err['phone_number'] = "số đt không không được để trống!";
        }
        if(strlen($address) == 0 )
        {
           $err['address'] = "địa chỉ không không được để trống!";
        }
        if(count($err)>0){
            $this->render('admin.user.edit', ['err'=>$err ,'model'=>$model , 'role' => $role ] );die;
        }
        
        // upload ảnh
        $file = $_FILES['avatar'];
        if($file['size'] > 0){
            $filename = uniqid() . '-' . $file['name'];
            $destination = "./public/uploads/users/" . $filename;
            move_uploaded_file($file['tmp_name'], $destination);
            $model->avatar = ltrim($destination, './');
        }
        
        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL ."user". '');
        die;
    }
    public function posLogup(){
        $model = new User();
        $role = Role::where('id_role','1')->get();
        // gán dữ liệu cho model
        $model->fill($_POST);
        $err=[];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $check = User::where('name',$name)->get();
        $check2 = User::where('email',$email)->get();


        if(strlen($name) == 0 )
        {
           $err['name'] = "Tên Người dùng không được để trống!";
        }
        if( strlen($name) <= 5 || strlen($name) >= 30 )
        {
           $err['name'] = "Tên sản phẩm nằm trong khoảng 5-30 ký tự!";
        }
        if( count($check) > 0 ){
            $err['name'] = "chùng tên !"; 
        }
        if(strlen($email) == 0 )
        {
           $err['email'] = "email không được để trống!";
        }
        if( count($check2) > 0 ){
            $err['email'] = "chùng email !"; 
        }
        if(strlen($password) == 0 )
        {
           $err['password'] = "password không được để trống!";
        }
        if(strlen($phone_number) == 0 )
        {
           $err['phone_number'] = "số đt không không được để trống!";
        }
        if(strlen($address) == 0 )
        {
           $err['address'] = "địa chỉ không không được để trống!";
        }
        if(count($err)>0){
            $this->render('dangnhap.logup', ['err'=>$err , 'role' => $role ] );
            die;
        }
         
        // upload ảnh
        $file = $_FILES['avatar']; //image
        if($file['size'] > 0){
            $filename = uniqid() . '-' . $file['name'];
            $destination = "./public/uploads/users/" . $filename;
            move_uploaded_file($file['tmp_name'], $destination);
            $model->avatar = ltrim($destination, './');
        }
        
        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL ."login". '');
        die;
    }

}
?>