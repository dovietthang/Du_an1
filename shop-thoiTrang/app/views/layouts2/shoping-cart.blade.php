<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shoping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
                        <?php 

                        if(isset($_SESSION['auth']['name']) == "name"){
                            ?>
                            <img class='avatar' style="border-radius:50%; margin:5px;"
                            src="<?php echo ($_SESSION['auth']['avatar']) ?>" width="30" height="30">
                            <?php
                            echo "<a style='color: #ddd;padding: 0 25px 0 0px;' class='flex-c-m trans-04 p-lr-25'>".($_SESSION['auth']['name']."</a>");


                            if(($_SESSION['auth']['role']) == 2){
                                echo " <a href='admin'  class='flex-c-m trans-04 p-lr-25'> Quản trị</a>";
                            }
                            echo " <a href='logout' class='flex-c-m trans-04 p-lr-25'> Đăng xuất </a>";

                        }else{
                        
                            echo "<a href='login' class='flex-c-m trans-04 p-lr-25'>Đăng nhập</a>";
                            echo "<a href='logup' class='flex-c-m trans-04 p-lr-25'>Đăng kí</a>";
                        }?>


                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="./" class="logo">
                        <img src="images/icons/logo-01.png" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li >
                                <a href="./">Home</a>
                            </li>

                            <li>
                                <a href="shop">Shop</a>
                            </li>

                            <li>
                                <a href="blog">Blog</a>
                            </li>

                            <li>
                                <a href="about">About</a>
                            </li>

                            <li>
                                <a href="contact">Contact</a>
                            </li>
                        </ul>
                    </div>	

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>
                        <?php
                        if(isset($_SESSION['auth']['name']) == "name"){
                            ?> <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" 
                            data-notify=" <?php
                                            if(isset($_SESSION['cart']) == true ){
                                                echo count($_SESSION['cart']);
                                             }else{
                                                 echo "0";
                                             }
                                              ?>">
                            <i class="zmdi zmdi-shopping-cart"></i>
                            </div><?php
                        }
                        ?>


                        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
            <img src="images/icons/logo-003.png" alt="IMG-LOGO" width="140" height="50" >
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <?php
                        if(isset($_SESSION['auth']['name']) == "name"){
                            ?> <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" 
                            data-notify=" <?php
                                            if(isset($_SESSION['cart']) == true ){
                                                echo count($_SESSION['cart']);
                                             }else{
                                                 echo "0";
                                             }
                                              ?>">
                            <i class="zmdi zmdi-shopping-cart"></i>
                            </div><?php
                        }
                        ?>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>
                </li>

                <li>
                    <div class="right-top-bar flex-w h-full">

                        <?php 
                        if(isset($_SESSION['auth']['name']) == "name"){
                            ?>
                            <img class='avatar' style="border-radius:50%; margin:5px;"
                            src="<?php echo ($_SESSION['auth']['avatar']) ?>" width="30" height="30">
                            <?php
                            echo "<a style='color: #ddd;padding: 0 25px 0 0px;' class='flex-c-m p-lr-10 trans-04'>".($_SESSION['auth']['name']."</a>");


                            if(($_SESSION['auth']['role']) == 2){
                                echo " <a href='admin'  class='flex-c-m p-lr-10 trans-04'> Quản trị</a>";
                            }
                            echo " <a href='logout' class='flex-c-m p-lr-10 trans-04'> Đăng xuất </a>";

                        }else{
                        
                            echo "<a href='login' class='flex-c-m p-lr-10 trans-04'>Đăng nhập</a>";
                            echo "<a href='logup' class='flex-c-m p-lr-10 trans-04'>Đăng kí</a>";
                        }?>
                    </div>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="./">Home</a>


                </li>

                <li>
                    <a href="shop">Shop</a>
                </li>
                <li>
                    <a href="blog">Blog</a>
                </li>

                <li>
                    <a href="about">About</a>
                </li>

                <li>
                    <a href="contact">Contact</a>
                </li>
            </ul>
        </div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
					Your Cart
				</span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">

				<?php 
					if(isset($_SESSION['cart']) == true ){

					$tongTien = 0;
					foreach($_SESSION['cart'] as $id_product=>$number){	
						foreach($products as $sp){
						if($sp['id'] == $id_product){	
							$tien_sp = $number * $sp['price'];
							$tongTien += $tien_sp;
							$tien_sp_fm = number_format($tien_sp);
				?>	                  

						<li class="header-cart-item flex-w flex-t m-b-12">
							<a href="<?php echo "delete-cart?id={$sp['id']}" ?>">
								<div class="how-itemcart1">
								<img src="{{getClientUrl($sp->image)}}" alt="IMG"></div>
							</a>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							<?php echo"{$sp['name']}" ?>
							</a>

							<span class="header-cart-item-info">
							<?php echo $number ?> x $ <?php echo number_format($sp['price'])?>
							<?php

							?>
							</span>
						</div>
					</li>
				<?php 
				}  }  }
				}else{
					echo " không có sản phẩm nào";
				}

					
				?>

                </ul>

                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: $ <?php
                        if(isset($_SESSION['cart']) == true )
                        {
							echo number_format($tongTien); 
                        }
                        else{
                            echo "0";
                        } 
                        ?>

                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="shoping-cart" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

                        <a href="order-detail" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
						your order
						</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
	<!-- <p class="stext-109 cl4" style="margin: 200px 40%;font-size: 20px;">không có sản phẩm nào</p> -->



	<!-- Shoping Cart -->
	<!-- form -->
	<!-- <form> -->

<!-- <?php if(in_array("2" || "1" , $_SESSION['cart']) == false ){ ?> -->
		<p  style="margin: 200px 40%;font-size: 20px;">không có sản phẩm nào</p>	
	<!-- <?php }else{ ?> -->

	<?php
        include './connect_db.php';
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        }
        $error = false;
        $success = false;
        if (isset($_GET['action'])) {

            function update_cart($add = false) {
                foreach ($_POST['quantity'] as $id => $quantity) {
                    if ($quantity == 0) {
                        unset($_SESSION["cart"][$id]);
                    } else {
                        if ($add) {
                            $_SESSION["cart"][$id] += $quantity;
                        } else {
                            $_SESSION["cart"][$id] = $quantity;
                        }
                    }
                }
            }

            switch ($_GET['action']) {
                case "add":
                    update_cart(true);
                    header('Location: shoping-cart');
                    break;
                case "delete":
                    if (isset($_GET['id'])) {
                        unset($_SESSION["cart"][$_GET['id']]);
                    }
                    header('Location: shoping-cart');
                    break;
                case "submit":
                    if (isset($_POST['update_click'])) { //Cập nhật số lượng sản phẩm
                        update_cart();
                        header('Location:shoping-cart');
                    } elseif ($_POST['order_click']) { //Đặt hàng sản phẩm
                        if (empty($_POST['name'])) {
                            $error = "Bạn chưa nhập tên của người nhận";
                        } elseif (empty($_POST['phone'])) {
                            $error = "Bạn chưa nhập số điện thoại người nhận";
                        } elseif (empty($_POST['address'])) {
                            $error = "Bạn chưa nhập địa chỉ người nhận";
                        } elseif (empty($_POST['quantity'])) {
                            $error = "Giỏ hàng rỗng";
                        }
                        if ($error == false && !empty($_POST['quantity'])) { //Xử lý lưu giỏ hàng vào db
                            $products = mysqli_query($con, "SELECT * FROM `products` WHERE `id` IN (" . implode(",", array_keys($_POST['quantity'])) . ")");
                            $total = 0;
                            $orderProducts = array();
                            while ($row = mysqli_fetch_array($products)) {
                                $orderProducts[] = $row;
                                $total += $row['price'] * $_POST['quantity'][$row['id']];
                            }
                            $insertOrder = mysqli_query($con, "INSERT INTO `order` (`id`, `name`, `statu_id`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`) VALUES (NULL, '" . $_POST['name'] . "', '" . $_POST['statu_id'] . "', '" . $_POST['phone'] . "', '" . $_POST['address'] . "', '" . $_POST['note'] . "', '" . $total . "', '" . time() . "', '" . time() . "');");
                            $orderID = $con->insert_id;
                            $insertString = "";
                            foreach ($orderProducts as $key => $product) {
                                $insertString .= "(NULL, '" . $orderID . "', '" . $product['id'] . "', '" . $_POST['quantity'][$product['id']] . "', '" . $product['price'] . "', '" . time() . "', '" . time() . "')";
                                if ($key != count($orderProducts) - 1) {
                                    $insertString .= ",";
                                }
                            }
                            $insertOrder = mysqli_query($con, "INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_time`, `last_updated`) VALUES " . $insertString . ";");
							$success = "Đặt hàng thành công";
							header('Location:shoping-cart');
                            unset($_SESSION['cart']);
                        }
                    }
                    break;
            }
        }
        if (!empty($_SESSION["cart"])) {
            $products = mysqli_query($con, "SELECT * FROM `products` WHERE `id` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
        }
//        $result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = ".$_GET['id']);
//        $product = mysqli_fetch_assoc($result);
//        $imgLibrary = mysqli_query($con, "SELECT * FROM `image_library` WHERE `product_id` = ".$_GET['id']);
//        $product['images'] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
        ?>


 <!-- end- crra -->



			<?php if (!empty($error)) { ?> 
                <div id="notify-msg">
                    <?= $error ?>. <a href="javascript:history.back()">Quay lại</a>
                </div>
            <?php } elseif (!empty($success)) { ?>
                <div id="notify-msg" style="margin: 110px;">
                    <?= $success ?>. <a href="shop">Tiếp tục mua hàng</a>
                </div>
			<?php } else { ?>
				
<form id="cart-form" action="shoping-cart?action=submit" method="POST">
<div class="bg0 p-t-75 p-b-85"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">

							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th> 
								</tr>	
								<!-- price -->
	

									
									<?php
									if (!empty($products)) {
										$total = 0;
										$num = 1;
										while ($row = mysqli_fetch_array($products)) {
									?>
									<tr class="table_row">
										<td class="column-1">
											<a href=" shoping-cart?action=delete&id=<?= $row['id'] ?>"><div class="how-itemcart1">
											<img src="<?= $row['image'] ?>" alt="IMG">
											</div></a>
										</td>
										<td class="column-2"> <?= $row['name'] ?>	</td>
										<td class="column-3">$	<?= number_format($row['price'], 0, ",", ".")  ?> </td>
										<td class="column-4">
											<div class="wrap-num-product flex-w m-l-auto m-r-0">
												<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-minus"></i>
												</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="quantity[<?= $row['id'] ?>]" value="<?= $_SESSION["cart"][$row['id']] ?>" >

												<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-plus"></i>
												</div>
											</div>
										</td>
										<td class="column-5">$ <?= number_format($row['price'] * $_SESSION["cart"][$row['id']], 0, ",", ".") ?> </td>
									</tr>
							<?php
                                $total += $row['price'] * $_SESSION["cart"][$row['id']];
                                $num++;
								} 
							}
                            ?>

							</table>
						</div>

								<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
									<div class="flex-w flex-m m-r-20 m-tb-5">
											<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
												
											<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
												Apply coupon
											</div>
											
										</div>

									<input type="submit" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10" name="update_click" value="Update Cart" />
								</div>
					</div>
				</div>
			<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
								$ <?= number_format($total, 0, ",", ".") ?>
								</span>

							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									thanh toán khi nhận hàng
								</p>
								
								<div class="p-t-15">
									<span class="stext-112 cl8">
										Calculate Shipping
									</span>

									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select name="address_2" class="js-select2" name="time">
											<option>Việt Nam</option>
											<option>UK</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>

									<input type="hidden" value="<?php echo ($_SESSION['auth']['id']) ?>" name="name" />
									<input type="hidden" value="1" name="statu_id" />

									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="nhập địa chỉ" value="<?php if(isset($_SESSION['auth']['name']) == "name"){ echo ($_SESSION['auth']['address']); } ?>">

									</div>	

									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phone" placeholder="nhập số điện thoại" value="<?php  if(isset($_SESSION['auth']['name']) == "name"){  echo ($_SESSION['auth']['phone_number']); } ?>">
									</div>

									<div class="bor8 bg0 m-b-22">
										<textarea style="height: 100px;padding: 15px;" class="stext-111 cl8 plh3 size-110 p-lr-15" type="text" name="note" placeholder="note"></textarea>
									</div>
									
									<div class="flex-w">
									</div>
										
								</div>
							</div>
						</div>








						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
								$ <?= number_format($total, 0, ",", ".") ?>
								</span>
							</div>
						</div>


					<?php 
						if(isset($_SESSION['auth']['name']) == "name"){
					?>
						<input type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" name="order_click" value="Proceed to Checkout" />

					<?php }else{ ?> 
						<a   href='login'  class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer"  >PRODUCT TO CHECKOUT</a>

						<p style="margin: 20px 25%;">
							<a href='login'>Đăng nhập</a> để mua hàng 
						</p>
					<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
    <?php } ?>

<!-- <?php } ?> -->



	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Watches
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>