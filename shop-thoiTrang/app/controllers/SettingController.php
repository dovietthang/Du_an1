<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Setting;
use App\Models\Role;

class SettingController extends BaseController{

    public function editForm(){
        $id = $_GET['id'];
        $model = Setting::find($id);
        $this->render('admin.setting.edit', [ 'model' => $model ]); //ko kế thừa
    }
    public function saveEdit(){
        $id = $_GET['id'];
        $model = Setting::find($id);
        // gán dữ liệu cho model
        $model->fill($_POST);
        $addres = $_POST['addres'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $err=[];

        if(strlen($addres) == 0 )
        {
           $err['addres'] = "Tên danh mục không được để trống!";
        }
        if(strlen($phone_number) == 0 )
        {
           $err['phone_number'] = "Tên danh mục không được để trống!";
        }
        if(strlen($email) == 0 )
        {
           $err['email'] = "email không được để trống!";
        }
        if(count($err)>0){
            $this->render('admin.setting.edit', ['err'=>$err, 'model'=>$model]);
        }
        
        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL ."setting". '');
        die;
    }
}
?>