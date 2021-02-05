<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
	echo"数据库连接失败".$conn->connect_error;
}else{
	echo"连接数据成功<br/>";
	
}
/* 输出所有数据 */

$sql = "SELECT * FROM login";
/* 在数据库查找是否存在查找的东西，并复s制到新的变量里面  */
$result = $conn->query($sql);
/* 判断查找的数据条数是否大于0，大于则存在数据 */
if($result->num_rows >0){
	/* while循环输出 ，先变成关联数组*/
	while($row = $result->ferch_assoc()){		
		echo"账号:".$row["name"]."密码:".$row["passwor"]."<br/>";
		
}

}

	

