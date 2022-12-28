<?php
      include 'jdbc.php';
     $detail ="";
     $fullname="";
      $key =explode("=",$_SERVER['HTTP_REFERER'])[1];
      $sql_name ="SELECT fullname,details FROM `players` where name ='".strtolower($key)."';";
      $result_name = $conn->query($sql_name);
      if($result_name->num_rows==0){
        $result= "username not exist";
      }else{
        $row_name = $result_name->fetch_assoc();
		$detail =$row_name['details'];
	    $fullname = $row_name['fullname'];
	  }

?>