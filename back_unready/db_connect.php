<?
function db_connect()
	{
        
//        $db=mysql_connect("test2.ru","test2_a","123") or DIE("Не могу создать соединение");
        $db=mysql_connect("vakansy","root") or DIE("Не могу создать соединение");
     mysql_query("SET NAMES 'cp1251'");
        mysql_select_db("test")  or die(mysql_error());

        return $db;
	}
db_connect();
?>