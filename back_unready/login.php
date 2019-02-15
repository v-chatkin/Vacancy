<?
include('/db_connect.php');
if (isset($_POST["submit"])) { //collect data

		$email = $_POST["email"];
		$password = $_POST["password"];
		
		}
function send_data($login, $password) // отправляет данные о пользователе
	{
		$query = mysql_query("select * from users where email= '".$login."' and password='".$password."'");
		if (mysql_num_rows($query) == 0) {
			echo 'Неправильное имя пользователя или пароль';
			exit;
		}
		$myrow = mysql_fetch_array($query, MYSQL_ASSOC);
		
		$myrow["name"] = mb_convert_encoding($myrow["name"], "UTF-8", "cp1251");
		$myrow["email"] = mb_convert_encoding($myrow["email"], "UTF-8", "cp1251");
		$myrow["company"] = mb_convert_encoding($myrow["company"], "UTF-8", "cp1251");
		$myrow["position"] = mb_convert_encoding($myrow["position"], "UTF-8", "cp1251");
		$user_dat = array('id' => $myrow["id"],'name'=>$myrow["name"],'type'=>$myrow["type"],'email'=>$myrow['email'],'company'=>$myrow["company"],'position'=>$myrow["position"]);
		//echo json_encode($user_dat, JSON_UNESCAPED_UNICODE);
		//echo "<br>";
		//echo json_encode($myrow, JSON_UNESCAPED_UNICODE); //- второй метод вывода
		//return json_encode($user_dat, JSON_UNESCAPED_UNICODE);
		return $user_dat;
	}
	//$email='123';
	//$password='123';
$user_data = send_data($email,$password);
echo json_encode($user_data, JSON_UNESCAPED_UNICODE);

function send_vacancy($id, $type)
	{
		if ($type ==2) 
			$query = mysql_query("select * from vacancy_list where id_creator='".$id."'");
		elseif ($type ==1) 
			$query = mysql_query("select * from vacancy_list where id in (select id_vac from user_vacancy where id_user='".$id."')") or die(mysql_error());
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
				//echo "<br>";
			
			}
		
		
			
		
	}
send_vacancy($user_data['id'],$user_data['type']);
//send_vacancy(1,2);
?>