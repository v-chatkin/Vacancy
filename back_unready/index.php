
<?
include('/db_connect.php');
function create_tables() // функция создания таблиц
	{
		$query = mysql_query("CREATE TABLE `users` ( `id` INT NOT NULL AUTO_INCREMENT , `type` INT NOT NULL , 
		`name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL ,
		`company` VARCHAR(255) NOT NULL , `position` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`))");
		$query = mysql_query("CREATE TABLE `vacancy_list` ( `id` INT NOT NULL AUTO_INCREMENT , `id_creator` INT NOT NULL ,
	 	`name` VARCHAR(255) NOT NULL , `price` INT NOT NULL , `edu` VARCHAR(255) NOT NULL , `exp` VARCHAR(255) NOT NULL ,
	  	`dis` TEXT NOT NULL , `schedule` TEXT NOT NULL , `duties` TEXT NOT NULL , `conditions` TEXT NOT NULL , `req` TEXT NOT NULL , PRIMARY KEY (`id`))");
	  	$query = mysql_query("CREATE TABLE `user_vacancy` ( `id` INT NOT NULL AUTO_INCREMENT , `id_vac` INT NOT NULL , `id_user` INT NOT NULL , PRIMARY KEY (`id`))");
	}
	//create_tables();
function create_testdata() // функция добавления тестовых данных о пользователе
	{
		$query = mysql_query("insert into users(type,name,email,password,company,position) values (1,'Иван','123','123','Солнышко','дворник')");
	}
	//create_testdata();
//$test_login = "123";
//$test_password = "123";


if (isset($_POST["submit"])) { //collect data

		$email = $_POST["email"];
		$password = $_POST["password"];
		
		}
function send_data($login, $password) // отправляет данные о пользователе
	{
		$query = mysql_query("select * from users where email= '".$login."' and password='".$password."'");
		$myrow = mysql_fetch_array($query, MYSQL_ASSOC);
		
		$myrow["name"] = mb_convert_encoding($myrow["name"], "UTF-8", "cp1251");
		$myrow["email"] = mb_convert_encoding($myrow["email"], "UTF-8", "cp1251");
		$myrow["company"] = mb_convert_encoding($myrow["company"], "UTF-8", "cp1251");
		$myrow["position"] = mb_convert_encoding($myrow["position"], "UTF-8", "cp1251");
		$user_dat = array('id' => $myrow["id"],'name'=>$myrow["name"],'type'=>$myrow["type"],'email'=>$myrow['email'],'company'=>$myrow["company"],'position'=>$myrow["position"]);
		echo json_encode($user_dat, JSON_UNESCAPED_UNICODE);
		//echo "<br>";
		//echo json_encode($myrow, JSON_UNESCAPED_UNICODE); //- второй метод вывода
	}
send_data($email,$password);

function send_vacancy($id)
	{
		$query = mysql_query("select * from vacancy_list where id_creator='".$id."'");
		while ($myrow=mysql_fetch_array($query, MYSQL_ASSOC))
		{
			$myrow["name"] = mb_convert_encoding($myrow["name"], "UTF-8", "cp1251");
			$myrow["edu"] = mb_convert_encoding($myrow["edu"], "UTF-8", "cp1251");
			$myrow["exp"] = mb_convert_encoding($myrow["exp"], "UTF-8", "cp1251");
			$myrow["dis"] = mb_convert_encoding($myrow["dis"], "UTF-8", "cp1251");
			$myrow["shedule"] = mb_convert_encoding($myrow["shedule"], "UTF-8", "cp1251");
			$myrow["duties"] = mb_convert_encoding($myrow["duties"], "UTF-8", "cp1251");
			$myrow["conditions"] = mb_convert_encoding($myrow["conditions"], "UTF-8", "cp1251");
			$myrow["req"] = mb_convert_encoding($myrow["req"], "UTF-8", "cp1251");
			echo json_encode($myrow, JSON_UNESCAPED_UNICODE);
			echo "<br>";
			
		}
	}
//send_vacancy(1);





?>
