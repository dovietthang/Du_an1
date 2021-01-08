<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Setting;
use App\Models\Slide; 
use App\Models\Post;
use App\Models\Comment;
use App\Models\CommentBlog;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Invoice;
use App\Models\Statu;

class HomeController extends BaseController{

    public function index(){
        $invoices = Invoice::all();
        $products = Product::all();
        $orders = Order::all();
        $users = User::all();
        $posts = Post::all();

        $this->render('admin.home.trang-chu',['invoices' =>$invoices ,'posts' =>$posts ,'orders' =>$orders , 'products' => $products , 'users' =>$users ]);   
    }  
    public function accounts(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        $id_user= $_SESSION['auth']['id']; 
        $users = User::where('id', $id_user)->get();
        $this->render('layouts2.account', ['users' =>$users ]);
    }     
    public function testLayout(){
        $this->render('admin.layouts.main');
    }
    public function testLayout2(){
        session_start(); // khai báo được phép sử dụng session trong request này 
        require_once './db.php';
        if(isset($_SESSION['auth']['name']) == "name"){        
            $slides = Slide::all();
            $products = Product::orderBy('star_total','DESC')->limit(8)->get();
            // $products = Product::orderBy('star_total','DESC')->paginate(5);
            // where('star_total','>=' ,'10')->
            $categorys = Category::all();
            $settings = Setting::all();
            $id_user= $_SESSION['auth']['id']; 
            $this->render('layouts2.index', ['slides' =>$slides , 'products' => $products , 'categorys' =>$categorys ,
                                            'settings' =>$settings]);
        }else{
            $slides = Slide::all();
            $products = Product::orderBy('star_total','DESC')->limit(8)->get();
            $categorys = Category::all();
            $settings = Setting::all();
            $this->render('layouts2.index', ['slides' =>$slides , 'products' => $products , 'categorys' =>$categorys ,
                                            'settings' =>$settings]);
        };

    } 
    public function comments(){
        $comments = Comment::all();
        $this->render('admin.comment.index-comment', ['comments' => $comments]);   
    }    
    public function orders(){
        $orders = Order::all();
        $this->render('admin.order.index-order', ['orders' => $orders]);   
    }  
    public function commentBlog(){
        $commentBlog = CommentBlog::all();
        $this->render('admin.comment-blog.index-comment-blog', ['commentBlog' => $commentBlog]);   
    }  
    public function products(){
        $products = Product::all();
        $this->render('admin.product.index-product', ['products' => $products]);   
    } 
    public function categorys(){
        $categorys = Category::all();
        $this->render('admin.category.index-category', ['categorys' =>$categorys]);   
    }
    public function users(){
        $users = User::where('role','1')->get();
        $this->render('admin.user.index-user', ['users' =>$users]);   
    }
    public function settings(){
        $settings = Setting::all();
        $this->render('admin.setting.index-setting', ['settings' =>$settings]);   
    }
    public function slides(){
        $slides = Slide::all();
        $this->render('admin.slide.index-slide', ['slides' =>$slides]);   
    }    
    public function posts(){
        $posts = Post::all();
        $this->render('admin.post.index-post', ['posts' =>$posts]);   
    }
    public function invoices(){
        $invoices = Invoice::all();
        $this->render('admin.invoice.index-invoice', ['invoices' => $invoices]);die;   
    }
    public function logIn(){
        $users = User::all();
        $this->render('dangnhap.login', ['users' =>$users]);   
    }
    public function logUp(){
        $users = User::all();
        $this->render('dangnhap.logup', ['users' =>$users]);   
    }
    public function logOut(){
        $this->render('dangnhap.logout');   
    } 
    public function shops(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        if(isset($_SESSION['auth']['name']) == "name"){        
            $products = Product::all();
            $categorys = Category::all();
            $settings = Setting::all();
            $id_user= $_SESSION['auth']['id']; 
            $this->render('layouts2.product', ['products' => $products , 'categorys' => $categorys,
                                            'settings' => $settings, ]);
        }else{
            $products = Product::all();
            $categorys = Category::all();
            $settings = Setting::all();
            $this->render('layouts2.product', ['products' => $products , 'categorys' => $categorys,
                                            'settings' => $settings]);
        };
    }
    public function blogs(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        if(isset($_SESSION['auth']['name']) == "name"){        
            $posts = Post::all();
            $products = Product::where('views','>=' ,'10')->get();
            $categorys = Category::all();
            $settings = Setting::all();
            $id_user= $_SESSION['auth']['id']; 
            $this->render('layouts2.blog',['products' => $products , 'posts' => $posts,
                                           'categorys' => $categorys,'settings' => $settings]);
        }else{
            $posts = Post::all();
            $products = Product::where('views','>=' ,'10')->get();
            $categorys = Category::all();
            $settings = Setting::all();
            $this->render('layouts2.blog',['products' => $products , 'posts' => $posts,
                                           'categorys' => $categorys,'settings' => $settings]);
        };
    }
    public function abouts(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        if(isset($_SESSION['auth']['name']) == "name"){        
            $categorys = Category::all();
            $settings = Setting::all();
            $id_user= $_SESSION['auth']['id']; 
            $products = Product::all();
            $this->render('layouts2.about', ['categorys' => $categorys,'settings' => $settings, 'products'=>$products]);
        }else{
            $categorys = Category::all();
            $settings = Setting::all();
            $this->render('layouts2.about', ['categorys' => $categorys,'settings' => $settings]);
        };

    }
    public function contacts(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        if(isset($_SESSION['auth']['name']) == "name"){        
            $categorys = Category::all();
            $settings = Setting::all();
            $products = Product::all();
            $id_user= $_SESSION['auth']['id']; 
            $this->render('layouts2.contact', ['categorys' => $categorys,'settings' => $settings,'products'=>$products]);
        }else{
            $categorys = Category::all();
            $settings = Setting::all();
            $this->render('layouts2.contact', ['categorys' => $categorys,'settings' => $settings]);
        };

    }  
    public function shopDetail(){ 
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        if(isset($_SESSION['auth']['name']) == "name"){
            $id = $_GET['id'];
            $id_user= $_SESSION['auth']['id'];  
            $user = User::where('id', $id_user)->get();
            $model = Product::find($id);
            $product = Product::where('id', $id)->get();
            $products = Product::where('id', '!=' , $id)->get();
            $categorys = Category::all();
            $settings = Setting::all();    
            $comments = Comment::where('id_product', $id)->get();
            $star = $comments->SUM('star');

            // var_dump($star);

            $this->render('layouts2.product-detail', ['model' => $model , 'categorys' => $categorys, 'products' => $products,
                                                     'settings' => $settings,'comments' => $comments, 'user' => $user,
                                                     'product' => $product,'star'=>$star ]);
                                                     die;
        }else{
        $id = $_GET['id'];
        $model = Product::find($id);
        $products = Product::all();
        $categorys = Category::all();
        $settings = Setting::all();
        $comments = Comment::where('id_product', $id)->get();
        $this->render('layouts2.product-detail', ['model' => $model , 'categorys' => $categorys, 'products' => $products,
                                                 'settings' => $settings,'comments'=>$comments]);
                                                 die;
        };                                       

        // var_dump($idUser);


    }  
    public function blogDetail(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        if(isset($_SESSION['auth']['name']) == "name"){
            $id = $_GET['id'];
            $id_user= $_SESSION['auth']['id'];  
            $user = User::where('id', $id_user)->get();
            $model = Post::find($id);
            $posts = Post::where('id', $id)->get();
            $post = Post::all();
            $product = Product::all();
            // echo count($product);
            // var_dump(count($product));die;
            $products = Product::where('views','>=' ,'10')->get();
            $categorys = Category::all();
            $settings = Setting::all();    
            $commentBlog = CommentBlog::where('id_blog', $id)->get();
            $this->render('layouts2.blog-detail', ['model' => $model , 'categorys' => $categorys, 'posts' => $posts,
                                                     'settings' => $settings,'commentBlog' => $commentBlog, 'user' => $user,
                                                     'post' => $post,'products'=>$products, ]);
                                                     die;
        }else{
            session_start(); // khai báo được phép sử dụng session trong request này
            $id = $_GET['id'];
            $model = Post::find($id);
            $post = Post::all();
            $products = Product::where('views','>=' ,'10')->get();
            $categorys = Category::all();
            $settings = Setting::all();
            $commentBlog = CommentBlog::where('id_blog', $id)->get();
            $this->render('layouts2.blog-detail',['products' => $products , 'model' => $model, 'post' => $post, 
                                                 'categorys' => $categorys,'settings' => $settings,
                                                 'commentBlog' => $commentBlog, ]);
                                                 die;
        };                                       

        // var_dump($idUser); 

    }   
    public function shopingCart(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        if(isset($_SESSION['auth']['name']) == "name"){       
            $id_user= $_SESSION['auth']['id'];  
            $user = User::where('id', $id_user)->get();
            $status = Statu::where('id', '=', '1')->get();
            $products = Product::all();
            $invoices = Invoice::all();
            $this->render('layouts2.shoping-cart', ['invoices'=>$invoices,'products'=> $products,
                                                    'user'=>$user,'status'=> $status]);
        }else{
            $status = Statu::where('id', '=', '1')->get();
            $products = Product::all();
            $invoices = Invoice::all();
            $this->render('layouts2.shoping-cart', ['invoices'=>$invoices,'products'=> $products
                                                    ,'status'=> $status]);
        };
    }
    public function invoiceBlade(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
        if(isset($_SESSION['auth']['name']) == "name"){       
            $products = Product::all();
            $id_user= $_SESSION['auth']['id']; 
            $invoices = Invoice::where('id_user', $id_user)->get();
            $user = User::where('id', $id_user)->get();
            $orders = OrderDetail::where('id_user', $id_user)->get();


            $this->render('layouts2.order', ['invoices'=>$invoices,'products'=> $products,
                                                    'user'=>$user,'orders'=>$orders]);
        }else{
            $id_user= $_SESSION['auth']['id'];
            $products = Product::all();
            $this->render('layouts2.order', ['products'=> $products]);
        }   ;   
    }
    public function search(){
        session_start(); // khai báo được phép sử dụng session trong request này
        require_once './db.php';
            $search_product = $_POST['search_product'];
            // $needles = explode(',', $q);
            $products = Product::where('name','LIKE', "%{$search_product}%" )->get();
            $categorys = Category::all();
            $settings = Setting::all();
            $this->render('layouts2.search', ['products' => $products , 'categorys' => $categorys,
                                            'settings' => $settings,]);

    } 
    public function orderDetail(){
        session_start(); // khai báo được phép sử dụng session trong request này Order
        require_once './db.php';
        // $id = $_GET['id'];
        $id_user= $_SESSION['auth']['id'];  
        $user = User::where('id', $id_user)->get();
        // $orders = Order::where('name', $id_user)->get();
        $statu = Statu::all();
        $products = Product::all();
        $invoices = Invoice::all();
        // $id = Order::select(['id'])->first();

            $OrderDetail = OrderDetail::all();
            // var_dump( $orders );
            // var_dump( $id );

            // $OrderDetail = OrderDetail::where('order_id', $orders)->get();

            $this->render('layouts2.orderDetail', ['invoices'=>$invoices,'products'=> $products,
            'user'=>$user,'statu'=> $statu,'OrderDetail' => $OrderDetail]);

    } 

}

?>
