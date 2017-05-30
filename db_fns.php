<?
	include ('db_link.php');

	// if (db_connect())
	// {
	// 	echo 'ok';
	// }
	function db_result_to_array($result)
    {
        $res_array = array();
        
        $count = 0;
        
        while($row = mysqli_fetch_array($result))
        {
            $res_array[$count] = $row;
            $count++;
        }
        return $res_array;
    }


     function get_products()
    {
        $db = db_connect();
        
        $query = "SELECT * FROM products ORDER BY popular ";
        
        $result = mysqli_query($db,$query);
        
        $result = db_result_to_array($result);
        
        return $result;
    }

 	function get_product($id) 
    {
         $db = db_connect();
        
        $query = ("SELECT * FROM products WHERE id='$id' ");
        
        $result = mysqli_query($db,$query);
        
        $row = mysqli_fetch_array($result);
        
        return $row;
    }

?>