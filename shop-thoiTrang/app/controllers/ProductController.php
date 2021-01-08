<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;
use App\Models\Order;


class ProductController extends BaseController{
    public function delete(){
    	$id = $_GET['id']; // lấy id từ đường dẫn
    	Product::destroy($id);
        header("location: " . BASE_URL ."product". "?msg=Xóa thành công!");
        
    }
    public function addForm(){
    	$category = Category::all();
        $this->render('admin.product.add', ['category' => $category]);
        // include_once './app/views/home/add.php';
    }
    public function editForm(){
        $id = $_GET['id'];
        $model = Product::find($id);
        if(!$model){
            header("location: " . BASE_URL ."product". "?msg=sản phẩm không tồn tại!");
        }
        $category = Category::all();
        // $this->render('product.edit', [ 'model' => $model ]); //ko kế thừa

        $this->render('admin.product.edit', [
            'category' => $category,
            'model' => $model
        ]);


        // include_once './app/views/product/edit.blade.php';

    }
    public function details(){
        $id = $_GET['id'];
        $model = Product::find($id);
        if(!$model){
            header("location: " . BASE_URL ."product". "?msg=sản phẩm không tồn tại!");
        }
        $category = Category::all();
        $this->render('admin.product.detail', [
            'category' => $category,
            'model' => $model
        ]);

    }
    public function saveAdd(){
        $model = new Product();
        $category = Category::all();
        // gán dữ liệu cho model
        $model->fill($_POST);


        $err=[];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $short_desc = $_POST['short_desc'];
        $detail = $_POST['detail'];
        $number = $_POST['number'];
        $file = $_FILES['image'];
        $check = Product::where('name',$name)->get();

        // var_dump($star);die;

        if(strlen($name) == 0 )
        {
           $err['name'] = "Tên sản phảm không được để trống!";
        }
        if( strlen($name) <= 5 || strlen($name) >= 30 )
        {

           $err['name'] = "Tên sản phẩm nằm trong khoảng 5-30 ký tự!";
        }
        if( count($check) > 0 ){
            $err['name'] = "chùng!"; 
        }
        if(strlen($price) == 0 )
        {
           $err['price'] = "Tên giá không được để trống!";
        }
        if(strlen($number) == 0 )
        {
           $err['number'] = "số lượng không được để trống!";
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
           $err['image'] = "Hãy chọn ảnh Sản Phảm!";
        }
        
        if(count($err)>0){
            $this->render('admin.product.add', ['err'=>$err , 'category' => $category ] );
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
        header('location: ' . BASE_URL ."product". "?msg=Thêm mới thành công");
        die;
    }


    public function saveEdit(){
        $id = $_GET['id'];
        $model = Product::find($id);
        $category = Category::all();

        // gán dữ liệu cho model
        $model->fill($_POST);

        $err=[];
        $name = $_POST['name'];
        $number = $_POST['number'];
        $price = $_POST['price'];
        $short_desc = $_POST['short_desc'];
        $detail = $_POST['detail'];

        // var_dump($star);die;

        if(strlen($name) == 0 )
        {
           $err['name'] = "Tên sản phẩm không được để trống!";
        }
        if(strlen($price) == 0 )
        {
           $err['price'] = "Tên giá sản phẩm không được để trống!";
        }
        if(strlen($short_desc) == 0 )
        {
           $err['short_desc'] = "short desc không được để trống!";
        }
        if(strlen($number) == 0 )
        {
           $err['number'] = "số lượng không được để trống!";
        }
        if(strlen($detail) == 0 )
        { 
           $err['detail'] = "thông tin ko không được để trống!";
        }
        
        if(count($err)>0){
            $this->render('admin.product.edit', ['err'=>$err, 'model'=>$model , 'category'=> $category]);die;
            
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
        header('location: ' . BASE_URL ."product" );
        die;
    }
    // saveAddProductOrder
    public function saveAddProductOrder(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        $model = new Order();
        $product = Product::all();
        $user = User::all();
        $id = $_POST['id_product'];

        // gán dữ liệu cho model

        $dataSave = [
            'id_user' => $_SESSION['auth']['id'],
            'amount_of' => $_POST['amount_of'],
            'id_product' => $_POST['id_product'],
            'updated_at' => $_POST['updated_at']

        ];

        $model->fill($dataSave);
        // print($model);echo "<pre>";die;

        $model->save();

        header('location: ' . BASE_URL ."shop-detail?id=$id");
        die;

    }

}
?>