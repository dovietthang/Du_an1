<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './common/util.php';
require_once './vendor/autoload.php';
require_once './common/database.php'; // bắt buộc require sau vendor/autoload OrderDetail

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Controllers\UserController;
use App\Controllers\SettingController;
use App\Controllers\SlideController;
use App\Controllers\PostController;
use App\Controllers\CommentController;
use App\Controllers\CommentblogController;
use App\Controllers\InvoiceController;
use App\Controllers\ShopingCartController;
use App\Controllers\OrderController;


switch($url){

    case 'order':
        $ctr = new HomeController();
        $ctr->orders();
        break;
    case 'order-detail':
        $ctr = new HomeController();
        $ctr->orderDetail();
        break; 
    case 'order-detail-product':
        $ctr = new OrderController();
        $ctr->orderDetailProduct();
        break; 
    case 'order-detail-blase':
        $ctr = new OrderController();
        $ctr->orderDeleteBlase();
        break;   
    // case 'order-detail':
    //     $ctr = new OrderController();
    //     $ctr->orderDetail();
    //     break; 
    case 'order-delete':
        $ctr = new OrderController();
        $ctr->orderDelete();
        break;
    case 'order-detail-delete':
        $ctr = new OrderController();
        $ctr->orderDetailDelete();
        break;
    case 'order-eidt':
        $ctr = new OrderController();
        $ctr->orderEdit();
        break; 
    case 'order-edit-save':
        $ctr = new OrderController();
        $ctr->orderEditSave();
        break; 
    case '/':
        $ctr = new HomeController();
        $ctr->testLayout2();
        break;      
    case 'admin':
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'demo-layout':
        $ctr = new HomeController();
        $ctr->testLayout();
        break;
    case 'login':
        $ctr = new HomeController();
        $ctr->logIn();
        break;   
    case 'pos-logup':
        $ctr = new UserController();
        $ctr->posLogup();
        break; 

    case 'shop':
        $ctr = new HomeController();
        $ctr->shops();
        break;  
    case 'blog':
        $ctr = new HomeController();
        $ctr->blogs();
        break;
    case 'about':
        $ctr = new HomeController();
        $ctr->abouts();
        break;
    case 'contact':
        $ctr = new HomeController();
        $ctr->contacts();
        break;
    case 'shop-detail':
        $ctr = new HomeController();
        $ctr->shopDetail();
        break;
    case 'blog-detail':
        $ctr = new HomeController();
        $ctr->blogDetail();
        break;
    case 'shoping-cart':
        $ctr = new HomeController();
        $ctr->shopingCart();
        break;
    case 'detail-blog':
        $ctr = new PostController();
        $ctr->blogDetail();
        break;


 
    case 'logout':
        $ctr = new HomeController();
        $ctr->logOut();
        break;
    case 'logup':
        $ctr = new HomeController();
        $ctr->logUp();
        break;
    case 'delete-product':
        $ctr = new ProductController();
        $ctr->delete();
        break;
    case 'add-product':
        $ctr = new ProductController();
        $ctr->addForm();
        break;
    case 'save-addproduct':
        $ctr = new ProductController();
        $ctr->saveAdd();
        break;
    case 'save-editproduct':
        $ctr = new ProductController();
        $ctr->saveEdit();
        break;
    case 'edit-product':
        $ctr = new ProductController();
        $ctr->editForm();
        break;
    case 'detail-product':
        $ctr = new ProductController();
        $ctr->details();
        break;
    case 'product':
        $ctr = new HomeController();
        $ctr->products();
        break;
    case 'category':
        $ctr = new HomeController();
        $ctr->categorys();
        break;
    case 'delete-category':
        $ctr = new CategoryController();
        $ctr->delete();
        break;
    case 'add-category':
        $ctr = new CategoryController();
        $ctr->addForm();
        break;
    case 'save-addcategory':
        $ctr = new CategoryController();
        $ctr->saveAdd();
        break;
    case 'save-editcategory':
        $ctr = new CategoryController();
       $ctr->saveEdit();
        break;
    case 'edit-category':
        $ctr = new CategoryController();
        $ctr->editForm();
        break;
        
    case 'user':
        $ctr = new HomeController();
        $ctr->users();
        break;
    case 'delete-user':
        $ctr = new UserController();
        $ctr->delete();
        break;
    case 'add-user':
        $ctr = new UserController();
        $ctr->addForm();
        break;
    case 'save-adduser':
        $ctr = new UserController();
        $ctr->saveAdd();
        break;
    case 'save-edituser':
        $ctr = new UserController();
        $ctr->saveEdit();
        break;
    case 'edit-user':
        $ctr = new UserController();
        $ctr->editForm();
        break;
    case 'setting':
        $ctr = new HomeController();
        $ctr->settings();
        break;
    case 'edit-setting':
        $ctr = new SettingController();
        $ctr->editForm();
        break;
    case 'save-editsetting':
        $ctr = new SettingController();
        $ctr->saveEdit();
        break;

    case 'slide':
        $ctr = new HomeController();
        $ctr->slides();
        break;
    case 'delete-slide':
        $ctr = new SlideController();
        $ctr->delete();
        break;
    case 'add-slide':
        $ctr = new SlideController();
        $ctr->addForm();
        break;
    case 'save-addslide':
        $ctr = new SlideController();
        $ctr->saveAdd();
        break;
    case 'save-editslide':
        $ctr = new SlideController();
        $ctr->saveEdit();
        break;
    case 'edit-slide':
        $ctr = new SlideController();
        $ctr->editForm();
        break;

    case 'post':
        $ctr = new HomeController();
        $ctr->posts();
        break;
    case 'delete-post':
        $ctr = new PostController();
        $ctr->delete();
        break;
    case 'add-post':
        $ctr = new PostController();
        $ctr->addForm();
        break;
    case 'save-addpost':
        $ctr = new PostController();
        $ctr->saveAdd();
        break;
    case 'save-editpost':
        $ctr = new PostController();
        $ctr->saveEdit();
        break;
    case 'edit-post':
        $ctr = new PostController();
        $ctr->editForm();
        break;

    case 'comment':
        $ctr = new HomeController();
        $ctr->comments();
        break;
    case 'delete-comment':
        $ctr = new CommentController();
        $ctr->delete();
        break;
    case 'add-comment':
        $ctr = new CommentController();
        $ctr->addForm();
        break;
    case 'save-addcomment':
        $ctr = new CommentController();
        $ctr->saveAdd();
        break;
    case 'save-editcomment':
        $ctr = new CommentController();
        $ctr->saveEdit();
        break;
    case 'edit-comment':
        $ctr = new CommentController();
        $ctr->editForm();
        break;

        
    case 'save-addcomment-product':
        $ctr = new CommentController();
        $ctr->saveAddCommentProduct();
        break;


        case 'comment-blog':
            $ctr = new HomeController();
            $ctr->commentBlog();
            break;
        case 'delete-comment-blog':
            $ctr = new CommentblogController();
            $ctr->delete();
            break;
        case 'add-comment-blog':
            $ctr = new CommentblogController();
            $ctr->addForm();
            break;
        case 'save-addcomment-blog':
            $ctr = new CommentblogController();
            $ctr->saveAdd();
            break;
        case 'save-editcomment-blog':
            $ctr = new CommentblogController();
            $ctr->saveEdit();
            break;
        case 'edit-comment-blog':
            $ctr = new CommentblogController();
            $ctr->editForm();
            break;
        case 'save-addcomment-detail-blog':
            $ctr = new CommentblogController();
            $ctr->saveAddCommentBlog();
            break;


        case 'save-addproduct-order':   
            $ctr = new ShopingCartController();
            $ctr->saveAddProductOrder();
            break;

        // case 'delete-shoping-cart':
        //     $ctr = new ShopingCartController();
        //     $ctr->deleteShoping();
        //     break;
        // case 'delete-home':
        //     $ctr = new ShopingCartController();
        //     $ctr->deleteHome();
        //     break;
        // case 'save-blog':   
        //     $ctr = new ShopingCartController();
        //     $ctr->deleteBlog();
        //     break;
        //  case 'delete-shop':
        //     $ctr = new ShopingCartController();
        //     $ctr->deleteShop();
        //     break;
        // case 'delete-about':
        //     $ctr = new ShopingCartController();
        //     $ctr->deleteAbout();
        //     break;
        // case 'delete-contact':   
        //     $ctr = new ShopingCartController();
        //     $ctr->deleteContact();
        //     break;
        //  case 'delete-shop-detail':
        //     $ctr = new ShopingCartController();
        //     $ctr->deleteShopDetail();
        //     break;
        // case 'delete-blog-detail':
        //     $ctr = new ShopingCartController();
        //     $ctr->deleteBlogDetail();
        //     break;
        // case 'save-edit-shoping':
        //     $ctr = new ShopingCartController(); 
        //     $ctr->saveEditShoping();
        //     break;  
 
        case 'search':
            $ctr = new HomeController();
            $ctr->search();
            break;   
        case 'account':
            $ctr = new HomeController();
            $ctr->accounts();
            break;       
            
        case 'invoice-blade':
            $ctr = new HomeController();
            $ctr->invoiceBlade();
            break;
        case 'invoice':
            $ctr = new HomeController();
            $ctr->invoices();
            break;
        case 'detail-invoice':
            $ctr = new InvoiceController();
            $ctr->invoiceDetail();
            break;

        case 'delete-invoice':
            $ctr = new InvoiceController();
            $ctr->delete();
            break;
        case 'delete-order':
            $ctr = new InvoiceController();
            $ctr->deleteInvoice();
            break;
        case 'delete-index':
            $ctr = new InvoiceController();
            $ctr->deleteIndex();
            break;
        case 'delete-shop':
            $ctr = new InvoiceController();
            $ctr->deleteShop();
            break;


        case 'add-invoice':
            $ctr = new InvoiceController();
            $ctr->addForm();
            break;
        case 'save-addinvoice':
            $ctr = new InvoiceController();
            $ctr->saveAdd();
            break;
        case 'save-editinvoice':
            $ctr = new InvoiceController();
            $ctr->saveEdit();
            break;
        case 'edit-invoice':
            $ctr = new InvoiceController();
            $ctr->editForm();
            break;

        case 'add-cart':
            $ctr = new ShopingCartController();
            $ctr->cartAdd();
            break;
        case 'update-add-cart':
            $ctr = new ShopingCartController();
            $ctr->updateCartAdd();
            break;
        case 'delete-cart':
            $ctr = new ShopingCartController();
            $ctr->deleteCart();
            break;


    default:
        echo "Đường dẫn không tồn tại";
        break;
}
?>


