<?php 

function db_connect()
   {    
        // $server = 'artgips.mysql.ukraine.com.ua';
		// $user = 'artgips_db';
		// $password = 'cJtxUKa3';
		// $database = 'artgips_db';

        $server = 'localhost';
		$user = 'root';
		$password = '';
		$database = 'artgips_db';

        $link = mysqli_connect($server, $user, $password, $database) or

        // if($link)
        // echo 'Connection established.';
        // else
        die('Error connecting to the database server.');
        mysqli_set_charset($link, "utf8") or die("Не установлена кодировка");

  //       $host = 'artgips.mysql.ukraine.com.ua';
		// $user = 'artgips_db';
		// $pswd = 'cJtxUKa3';
		// $db = 'artgips_db';

		// // $host = 'localhost';
		// // $user = 'root';
		// // $pswd = '';
		// // $db = 'artgips_db';
        
  //       $connection = mysql_connect($host, $user, $pswd);

  //       if(!$connection || !mysql_select_db($db,$connection))
  //       {
  //           return false;
  //       }
         return $link;
    }
?>