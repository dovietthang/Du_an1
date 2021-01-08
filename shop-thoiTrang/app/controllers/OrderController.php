<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;
use App\Models\Order;
use App\Models\Invoice;
use App\Models\Statu;
use App\Models\OrderDetail;


class OrderController extends BaseController{
    public function orderDelete(){
    	$id = $_GET['id']; // lấy id từ đường dẫn
    	Order::destroy($id);
        header("location: " . BASE_URL ."order");
         
    }
    public function orderDeleteBlase(){
        $id = $_GET['id']; // lấy id từ đường dẫn
        // $id_Order = $_GET['id'];
        // var_dump($id);die;

        OrderDetail::destroy($id);
        header("location: " . BASE_URL ."order-detail-product?id=$id");
         
    }
    public function orderDetailDelete(){
    	$id = $_GET['id']; // lấy id từ đường dẫn
    	OrderDetail::destroy($id);
        header("location: " . BASE_URL ."order-detail");
         
    }


    public function orderEdit(){
        $id = $_GET['id'];
        $model = Order::find($id);
        $statu = Statu::all();
        // $id_statu = $model->get('statu_id');
        // var_dump($id_statu);
        $product = Product::all();
        $user = User::all();
        // var_dump($statu);

        $this->render('admin.order.edit', [
            'statu' => $statu,
            'user' => $user,
            'product' => $product,
            'model' => $model
        ]);


        // include_once './app/views/product/edit.blade.php';orderDetailProduct

    }
    // public function orderDetail(){
    //     $id = $_GET['id'];
    //     $model = OrderDetail::find($id);
    //     $this->render('admin.Order.detail', [
    //         'model' => $model
    //     ]);

        
    // }
 
    public function orderDetailProduct(){
        $id = $_GET['id'];
        // $id_user= $_SESSION['auth']['id'];  
        // $user = User::where('id', $id_user)->get();
        $statu = Statu::all();
        $products = Product::all();
        $invoices = Invoice::all();
        $OrderDetail = OrderDetail::where('order_id', $id)->get();
        $this->render('admin.Order.detail', [
            'OrderDetail' => $OrderDetail,
            'invoices'=>$invoices,
            'products'=> $products,
            // 'user'=>$user,
            'statu'=> $statu
        ]);

        
    }
 

    public function orderEditSave(){
        $id = $_GET['id'];
        $model = Order::find($id);
        $statu = Statu::all();
        $user = User::all();
        // gán dữ liệu cho model

        $model->fill($_POST);
        // var_dump($model->statu_id);die;
        if(($model->statu_id) == '5'){
            header("location: " . BASE_URL ."order-delete?id=$model->id");die;
        }if(($model->statu_id) == '4'){
            header("location: " . BASE_URL ."order-delete?id=$model->id");die;
        }; 
        // lưu dữ liệu với csdl
        $model->save();

        header('location: ' . BASE_URL ."order" );
        die;
    }


}
?>