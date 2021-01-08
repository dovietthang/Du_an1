<?php 
session_start();
$id = ($_POST['id']);
$name = trim($_POST['name']);
$password = trim($_POST['password']);
$avatar = $_POST['avatar'];
$role = trim($_POST['role']);
$email = trim($_POST['email']);
$phone_number = trim($_POST['phone_number']);
$address = trim($_POST['address']);
$updated_at = trim($_POST['updated_at']);

$host = "127.0.0.1";
$dbname = "shop-quan-ao"; // tên database - lesson6
$dbusername = "root";
$dbpassword = ""; // mật khẩu truy cập vào mysql - nếu sử dụng xampp trên windows thì để ""

try{
	$connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpassword);	
	

}catch(Exception $ex){
	var_dump($ex->getMessage());
	die;
}

// câu query
$sql = "select * from users where name = '$name' and password = '$password'";

// nạp câu truy vấn vào kết nối
$stmt = $connect->prepare($sql);

// thực thi câu truy vấn với csdl
$stmt->execute();

// thu thập kết quả trả về
$result = $stmt->fetch();
 
if($result != false){
	
	$_SESSION['auth'] = [
		'id' => $result['id'],
		'name' => $result['name'],
		'password' => $result['password'],
		'role' => $result['role'],
		'avatar' => $result['avatar'],
		'email' => $result['email'],
		'phone_number' => $result['phone_number'],
		'address' => $result['address'],
		'updated_at' => $result['updated_at']
	];
	header('location: ../');
	die;
}

$nameErr = "";
if(strlen($name) == 0){
	$nameErr = "Không được để trống tên";
}


$passwordErr = "";
if(strlen($password) == 0){
	$passwordErr = "Không được để trống tên";
}
if(isset($_SESSION['auth']['password']) != "password"){
	$passwordErr = "nhập sai pas";
}

if($nameErr != ""
    || $passwordErr != ""){
	header("location:../login?nameErr=$nameErr&passwordErr=$passwordErr");
	die;
}

header('location:login');


 ?>