<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;
use App\Models\Order;


class ShopingCartController extends BaseController{
    // public function deleteShoping(){
    // 	$id = $_GET['id']; // lấy id từ đường dẫn
    //     Order::destroy($id);
    //     header("location: " . BASE_URL . "shoping-cart");
    // }
    // public function deleteHome(){
    //     $id = $_GET['id']; // lấy id từ đường dẫn
    //     Order::destroy($id);
    //     header("location: " . BASE_URL . "./");
        
    // }
    // public function deleteBlog(){
    //     $id = $_GET['id']; // lấy id từ đường dẫn
    //     Order::destroy($id);
    //     header("location: " . BASE_URL . "blog");
        
    // }
    // public function deleteShop(){
    // 	$id = $_GET['id']; // lấy id từ đường dẫn
    //     Order::destroy($id);
    //     header("location: " . BASE_URL . "shop");
        
    // }
    // public function deleteAbout(){
    // 	$id = $_GET['id']; // lấy id từ đường dẫn
    //     Order::destroy($id);
    //     header("location: " . BASE_URL . "about");
        
    // }
    // public function deleteContact(){
    // 	$id = $_GET['id']; // lấy id từ đường dẫn
    //     Order::destroy($id);
    //     header("location: " . BASE_URL . "contact");
        
    // }
    // public function deleteShopDetail(){

    // 	$id = $_GET['id']; // lấy id từ đường dẫn
    //     Order::destroy($id);
    //     header("location: " . BASE_URL . "shop");
        
    // }
    public function deleteBlogDetail(){
    	$id = $_GET['id']; // lấy id từ đường dẫn
        Order::destroy($id);
        header("location: " . BASE_URL . "blog");
        
    }

    public function saveAddProductOrder(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        $model = new Order();
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

    public function cartAdd(){
        session_start();
        $idsp = intval($_POST['id']);
        $sl = intval($_POST['sl']);
        // var_dump($idsp);die;
        // $_SESSION['cart'];


        // var_dump( $_SESSION['cart'][$idsp]);
        // var_dump( $sl);
        // var_dump( ($_SESSION['cart'][$idsp]) + ($sl));die;


       if(empty($_GET['id'])){
           // không có id sản phẩm thì chuyển thẳng về trang danh sách.
           header('location: ' . BASE_URL ."shop-detail?id=$idsp");
       }
              
       if($idsp <=0){
           // đầu vào không phải là số hoặc số âm thì không chấp nhận.
           header('location: ' . BASE_URL ."shop-detail?id=$idsp");
       }
       //====== kiểm tra giỏ hàng: Giỏ hàng chưa hoạt động thì khai báo sẵn mảng
       if(!isset($_SESSION['cart']))
           $_SESSION['cart'] = [];
       
       if(!isset($_SESSION['cart'][$idsp]))
       { // chưa có sản phẩm trong giỏ hàng
        $_SESSION['cart'][$idsp] = $sl;
       }else // sản phẩm này đã có rồi, cần tăng số lượng
           $_SESSION['cart'][$idsp] = ($_SESSION['cart'][$idsp]) + ($sl);


       // xong việc cho vào giỏ hàng ==> chuyển trang.
       header('location: ' . BASE_URL ."shoping-cart");

   }

   public function updateCartAdd(){
    session_start();
    $idsp = intval($_POST['id']);
    $sl = intval($_POST['sl']);

    var_dump($idsp);
    var_dump( $sl);die;


   if(empty($_GET['id'])){
       // không có id sản phẩm thì chuyển thẳng về trang danh sách.
       header('location: ' . BASE_URL ."shop-detail?id=$idsp");
   }
          
   if($idsp <=0){
       // đầu vào không phải là số hoặc số âm thì không chấp nhận.
       header('location: ' . BASE_URL ."shop-detail?id=$idsp");
   }
   //====== kiểm tra giỏ hàng: Giỏ hàng chưa hoạt động thì khai báo sẵn mảng
   if(!isset($_SESSION['cart']))
       $_SESSION['cart'] = [];
   
   if(!isset($_SESSION['cart'][$idsp]))
   { // chưa có sản phẩm trong giỏ hàng
    $_SESSION['cart'][$idsp] = $sl;
   }else // sản phẩm này đã có rồi, cần tăng số lượng
       $_SESSION['cart'][$idsp] = ($_SESSION['cart'][$idsp]) + ($sl);

   // xong việc cho vào giỏ hàng ==> chuyển trang.
   header('location: ' . BASE_URL ."shoping-cart");

}

   public function deleteCart(){
    session_start();
    $idsp = intval($_GET['id']);
    unset($_SESSION['cart'][$idsp]);
    header('location:shoping-cart');
    die;
} 

}
?>

