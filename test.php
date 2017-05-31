<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>


<?php
$server = 'artgips.mysql.ukraine.com.ua';
$user = 'artgips_db';
$password = 'cJtxUKa3';
$database = 'artgips_db';

$link = mysqli_connect($server, $user, $password, $database);

if($link)
echo 'Connection established.';
else
die('Error connecting to the database server.');

mysqli_set_charset($link, "utf8") or die("Не установлена кодировка");










$query = "SELECT * FROM products";
$result = mysqli_query($link, $query) or die("error " . mysqli_error($link)); 
if($result)
{
	$rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th><th>Производитель</th><th>Производитель</th><th>Производитель</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);







    // echo " good";
    // echo "<ul>";
    // while ($row = mysqli_fetch_row($result)) {
    //     echo "<li>$row[0]</li>";
    // }
    // echo "</ul>";
     
    // mysqli_free_result($result);

}
 

mysqli_close($link);



// $query ="SELECT name FROM tovars";
 
// $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
// if($result)
// {
//     echo "<ul>";
//     while ($row = mysqli_fetch_row($result)) {
//         echo "<li>$row[0]</li>";
//     }
//     echo "</ul>";
     
//     mysqli_free_result($result);
// }

















?>
 <?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    if (mail("roobotik@gmail.com", "Test mail", "Проверка отправки почты")) {
          echo "ok";
    } else {
           echo "error";}
    ?>
</body>
</html>