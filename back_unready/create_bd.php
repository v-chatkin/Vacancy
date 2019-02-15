<?
// ЗАПУСТИТЬ ОДИН РАЗ!!! СОЗДАСТ БАЗУ ДАННЫХ, ТАБЛИЦЫ И ЗАПОЛНИТ ИХ ДАННЫМИ
 $db=mysql_connect("vakansy","root") or DIE("Не могу создать соединение");
 $query= mysql_query("CREATE DATABASE my_db");
 mysql_select_db("my_db")  or die(mysql_error());
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
create_tables();
function create_testdata() // функция добавления тестовых данных о пользователе
	{
		$query = mysql_query("insert into users(type,name,email,password,company,position) values (1,'Иван','ivan@mail.ru','123','','')");
		$query = mysql_query("insert into users(type,name,email,password,company,position) values (1,'Денисов Генадий','gena@mail.ru','qwerty','','')");
		$query = mysql_query("insert into users(type,name,email,password,company,position) values (2,'Диванов Петр','divan@mail.ru','divan','Диваны Петра','директор')");
		$query = mysql_query("insert into users(type,name,email,password,company,position) values (2,'Паровозов Аркадий','par@mail.ru','par','Vape-shop Паровоз','директор')");
		$query = mysql_query("insert into users(type,name,email,password,company,position) values (2,'Себастьянов Кирилл','sebas@mail.ru','sebas','Молокозавод','hr')");
		$query = mysql_query("insert into vacancy_list(id_creator,name,price,edu,exp,dis,shedule,duties,conditions,req) values (3,'Дворник',8000,'Среднее','не требуется',
		'Хорошая должность в престижной компании','2/2','Подметать разгрузочную площадку перед магазином','Дружный коллектив, хорошие инструменты','Ответственность, стрессоустойчивость, крепкие руки')");
	}
create_testdata();

 
   
?>