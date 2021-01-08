<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;
use App\Models\Order;
use App\Models\Invoice;
use App\Models\Statu;


class InvoiceController extends BaseController{
    public function delete(){
    	$id = $_GET['id']; // lấy id từ đường dẫn
    	Invoice::destroy($id);
        header("location: " . BASE_URL ."invoice". "?msg=Xóa thành công!");
         
    }
    public function deleteInvoice(){
        $id = $_GET['id']; // lấy id từ đường dẫn
        // var_dump($id);die;  

        Invoice::destroy($id);
        header("location: " . BASE_URL ."invoice-blade". "?msg=Xóa thành công!");
    }
    public function deleteIndex(){
        session_start();
        $idsp = intval($_GET['id']);
        unset($_SESSION['cart'][$idsp]);
        header('location:./');
        die;
    }
    public function deleteShop(){
        session_start();
        $idsp = intval($_GET['id']);
        unset($_SESSION['cart'][$idsp]);
        header('location:shop');
        die;
    }

    public function addForm(){
    	$invoice = Invoice::all();
        $this->render('layouts2.shoping-cart', ['invoice' => $invoice]);
        // include_once './app/views/home/add.php';
    }
    public function editForm(){
        $id = $_GET['id'];
        $model = Invoice::find($id);
        $product = Product::all();
        $user = User::all();
        if(!$model){
            header("location: " . BASE_URL ."invoice". "?msg=sản phẩm không tồn tại!");
        }
        $statu = Statu::all();
        // $this->render('product.edit', [ 'model' => $model ]); //ko kế thừa

        $this->render('admin.invoice.edit', [
            'statu' => $statu,
            'user' => $user,
            'product' => $product,
            'model' => $model
        ]);


        // include_once './app/views/product/edit.blade.php';

    }
    public function invoiceDetail(){
        $id = $_GET['id'];
        $model = Invoice::find($id);
        $statu = Statu::all();
        $this->render('admin.invoice.detail', [
            'statu' => $statu,
            'model' => $model
        ]);

    }
    public function saveAdd(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        if(isset($_SESSION['cart']) != null ){
            
            $model = new Invoice();
            $products = Product::all();
            $status = Statu::where('id', '=', '1')->get();
    
            // gán dữ liệu cho model
            $dataSave = [
                'id_user' => $_SESSION['auth']['id'],
                'id_product' => $_POST['id_product'],
                'updated_at' => $_POST['updated_at'],
                'number' => $_POST['number'],
                'notepad' => $_POST['notepad'],
                'statu_id' => $_POST['statu_id'],
                'total_price' => $_POST['total_price'],
                'address' => $_POST['address'],
                'address_2' => $_POST['address_2'],
                'phone_number' => $_POST['phone_number']
            ];
            $model->fill($dataSave);
            // print($model);die;
            $err=[];
            $address_2 = $_POST['address_2'];
            $phone_number = $_POST['phone_number'];
            $address = $_POST['address'];
            if(strlen($address_2) == 0 )
            {
               $err['address_2'] = "quốc gia không được để trống!";
            }
            if(strlen($phone_number) == 0 )
            {
               $err['phone_number'] = "số điện thoại không được để trống!";
            }
            if(strlen($address) == 0 )
            {
               $err['detail'] = "địa chỉ không được để trống!";
            }

            if(count($err)>0){
                $this->render('layouts2.shoping-cart', ['err'=>$err , 'products' => $products , 'status' => $status ] );
                die;
            }
            
            // lưu dữ liệu với csdl
            $model->save();

            // lưu xong xóa sp đi
            // $idsp = intval($_POST['id_product']);
            // unset($_SESSION['cart'][$idsp]);

            header('location: ' . BASE_URL ."invoice-blade". "?msg=Thêm mới thành công");
        }else{

            header('location: ' . BASE_URL ."shoping-cart");
            die;
        }
    }


    public function saveEdit(){
        $id = $_GET['id'];
        $model = Invoice::find($id);
        $statu = Statu::all();
        $product = Product::all();
        $user = User::all();
        // gán dữ liệu cho model
        $model->fill($_POST);

        
        // lưu dữ liệu với csdl
        $model->save();
        header('location: ' . BASE_URL ."invoice" );
        die;
    }


}
?>