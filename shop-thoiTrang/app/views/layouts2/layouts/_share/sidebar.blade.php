<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./" class="brand-link">
      <span class="brand-text font-weight-light">Quản Trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="#" class="img-circle elevation-2" alt="User Image"> -->
          <?php session_start();?>
          <?php if(isset($_SESSION['auth']['name']) == "name"){
                            ?>
                            <img class='avatar' style="border-radius:50%; margin:5px;"
                            src="<?php echo ($_SESSION['auth']['avatar']) ?>" width="100%" height="100%">
                            <?php
                            echo "<a style='color: #ddd;padding: 0 25px 0 0px;' class='flex-c-m trans-04 p-lr-25'>".($_SESSION['auth']['name']."</a>");
          }?>
          <!-- <a  href="#"><img style="color: #ddd;" src="#" class="img-circle " alt="admin"></a>  -->

        </div>
        <div class="info">
          <!-- <a href="#" class="d-block">tên đăng nhập</a> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview ">
                    <a href="{{getClientUrl('admin')}}" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        bảng điều khiển
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="javascript:;" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Tài khoản
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{getClientUrl('user')}}" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách tài khoản</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{getClientUrl('add-user')}}" class="nav-link">
                                <i class="fa fa-user-plus nav-icon"></i>
                                <p>Tạo tài khoản</p>
                            </a>
                        </li>
                    </ul>
                </li>
               <li class="nav-item has-treeview">
                    <a href="javascript:;" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Danh mục
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{getClientUrl('category')}}" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách danh mục</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{getClientUrl('add-category')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Tạo danh mục</p>
                            </a>
                        </li>
                     </ul>
                </li>
          <li class="nav-item has-treeview">
                    <a href="javascript:;" class="nav-link">
                        <i class="nav-icon fa fa-truck"></i>
                        <p>
                            Sản phẩm
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{getClientUrl('product')}}" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{getClientUrl('add-product')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Tạo sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="javascript:;" class="nav-link">

                    <i class="nav-icon fas">
                    <svg style="font-size: 22px; " width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-sliders" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 3.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM11.5 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM7 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM4.5 10a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9.5 3.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM11.5 15a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                    <path fill-rule="evenodd" d="M9.5 4H0V3h9.5v1zM16 4h-2.5V3H16v1zM9.5 14H0v-1h9.5v1zm6.5 0h-2.5v-1H16v1zM6.5 9H16V8H6.5v1zM0 9h2.5V8H0v1z"/>
                    </svg></i>
                    <p>
                        Cài Đặt
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{getClientUrl('setting')}}" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách Cài Đặt</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="javascript:;" class="nav-link">

                    <i class="nav-icon fas" >
                    <svg style="font-size: 22px; " width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-collection" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.5 13.5h-13A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5zm-13 1A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
                    </svg></i>

                        <p>
                            Slide
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{getClientUrl('slide')}}" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách slide</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{getClientUrl('add-slide')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Tạo slide</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="javascript:;" class="nav-link">
                        <i class="nav-icon fa ">
                        <svg style="font-size: 22px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-newspaper" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 2A1.5 1.5 0 0 1 1.5.5h11A1.5 1.5 0 0 1 14 2v12a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 0 14V2zm1.5-.5A.5.5 0 0 0 1 2v12a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V2a.5.5 0 0 0-.5-.5h-11z"/>
                        <path fill-rule="evenodd" d="M15.5 3a.5.5 0 0 1 .5.5V14a1.5 1.5 0 0 1-1.5 1.5h-3v-1h3a.5.5 0 0 0 .5-.5V3.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                        </svg>
                        </i>
                        <p>
                        Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{getClientUrl('post')}}" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{getClientUrl('add-post')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Tạo Blog</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="javascript:;" class="nav-link">
                        <i class="nav-icon fa fa-truck"></i>
                        <p>
                            Bình luận
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{getClientUrl('comment')}}" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách Bình luận</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{getClientUrl('add-comment')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Tạo Bình luận</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="javascript:;" class="nav-link">
                        <i class="nav-icon fa fa-truck"></i>
                        <p>
                            Sản phẩm
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{getClientUrl('product')}}" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{getClientUrl('add-product')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Tạo sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
