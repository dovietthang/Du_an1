
 <?php 

function executeQuery($sqlQuery, $fetchAll = true){ 
    $host = "127.0.0.1";
    $dbname = "shop-quan-ao"; // tên database - lesson6
    $dbusername = "root";
    $dbpassword = ""; // mật khẩu truy cập vào mysql - nếu sử dụng xampp trên windows thì để ""
	try{
		$connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername,$dbpassword);	
		
	}catch(Exception $ex){
		var_dump($ex->getMessage());
		die;
	}
	// nạp câu truy vấn vào kết nối
    $stmt = $connect->prepare($sqlQuery);
    
	// thực thi câu truy vấn với csdl
    $stmt->execute();
    
	// thu thập kết quả trả về
	if($fetchAll == true){
		return $stmt->fetchAll();
	}
	return $stmt->fetch();
}

?>