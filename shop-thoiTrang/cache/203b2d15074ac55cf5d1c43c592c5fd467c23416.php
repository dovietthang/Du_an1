

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng Kí</title>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<style>
    .login100-form-title {
    display: block;
    font-family: SourceSansPro-Bold;
    font-size: 30px;
    color: #4b2354;
    line-height: 1.2;
    text-align: center;
    margin: 0 0 20px 0;
}

*, ::after, ::before {
    box-sizing: border-box;
}
.container-login100 {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
    z-index: 1;
}
*, ::after, ::before {
    box-sizing: border-box;
}
* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
.container-login100::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(93,84,240,0.5);
    background: -webkit-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
    background: -o-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
    background: -moz-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
    background: linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
    pointer-events: none;
}
p{
    color: red;
    font-size: 12px;
}
button {
    margin: 10px;
    height: 30px;
    width: 100px;
    border-radius: 20px;
}
a{
    margin: 10px;
    height: 30px;
    width: 100px;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
    border-radius: 20px;
    box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);

}
</style>

</head>
<body> 


	
	
	<div class="container-login100" style="background-image: url('images/04.jpg');opacity: 100%;">
		<div class="wrap-login100 " style=" padding: 20px 40px;margin: auto;
    background: #fff;    border-radius: 10px;">



        <form class="login100-form validate-form" id="add-user-form" action="<?= getClientUrl('pos-logup')?>" method="post" enctype="multipart/form-data">
        
        <span class="login100-form-title p-b-37" >
					Sign up
		</span>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                    <label for="">Tên tài khoản<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên tài khoản">
                        <?php if(isset($err['name'])): ?>
                         <p><?php echo e($err['name']); ?></p>
                        <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="">Password<span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control" placeholder="Nhập passwword">
                        <?php if(isset($err['password'])): ?>
                         <p ><?php echo e($err['password']); ?></p>
                        <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="">Só Phone</label>
                    <input type="number" name="phone_number" class="form-control" placeholder="Nhập số điện thoại">
                    <?php if(isset($err['phone_number'])): ?>
                         <p><?php echo e($err['phone_number']); ?></p>
                    <?php endif; ?>
                </div>
  
            </div>
            <div class="col-md-6">

            <div class="form-group">
                    <label for=""> Ảnh sản phẩm <span class="text-danger">*</span></label>
                    <input type="file" name="avatar" class="form-control" >
                </div>

                <div class="form-group">
                <input type="hidden" type="settime" value="<?php echo date("Y-m-d")?>" name="updated_at" class="form-control" placeholder="">

                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập Email">
                    <?php if(isset($err['email'])): ?>
                         <p ><?php echo e($err['email']); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
                    <?php if(isset($err['address'])): ?>
                         <p ><?php echo e($err['address']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Tạo</button>
                <a href="<?= BASE_URL."./" ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>


	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\test\shop-thoiTrang\app\views/dangnhap/logup.blade.php ENDPATH**/ ?>