<?
include('/db_connect.php');

if (isset($_POST["submit"])) { //collect data

		$email = $_POST["email"];
		$password = $_POST["password"];
		$name = $_POST["name"];
		$company = $_POST["company"];
		$type = $_POST["type"];
		$position = $_POST["position"];
	}
$query = mysql_query("select id from users where email = '".$email."'");
if (mysql_num_rows($query) == 0) {
	$query = mysql_query("insert into users(type,name,email,password,company,position) values (".$type.",'".$name."','".$email."','".$password."','".$company."','".$position."')");
	echo "Succsess";
	}
else echo "Пользователь с таким почтовым адресом уже существует";



?>