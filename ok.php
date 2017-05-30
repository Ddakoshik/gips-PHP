<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artgips</title>
    <link rel="shortcut icon" href="img/Logo-icon.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<body>
<?php
 $server = 'artgips.mysql.ukraine.com.ua';
		$user = 'artgips_db';
		$password = 'cJtxUKa3';
		$database = 'artgips_db';
i

//         $server = 'localhost';
// 		$user = 'root';
// 		$password = '';
// 		$database = 'artgips_db';
$link = mysqli_connect($server, $user, $password, $database);

if($link)
echo 'Connection established.';
else
die('Error connecting to the database server.');
mysqli_set_charset($link, "utf8") or die("Не установлена кодировка");
echo "Hello привет";
 // "UPDATE products WHERE id=38 SET 'ваывывы'";
        $query = "SELECT * FROM products";
        $result = mysqli_query($link, $query) or die("error " . mysqli_error($link)); 
        while($row = mysqli_fetch_array($result))
        {
            echo "<br>|| ".$row[id]." : ";
            print_r($row[name]);    
        }

        // echo "##<pre>";
        // print_r($result);
        // echo "</pre>";
        // echo "<br>:";
        // var_dump($result);
        die();
        $result = db_result_to_array($result);

?>
</body>
</html>