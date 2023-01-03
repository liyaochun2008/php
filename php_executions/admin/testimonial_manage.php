<?php
// when receive the post request from shop page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  //insert into database
      $sql_name ="update comments set state=".($_POST["state"]==1?0:1)." where id=".$_POST["id"].";";
	  //echo $sql_name;
	  $result_name = $conn->query($sql_name);
      if($result_name===false){
        $result= "server error pls try again";
      }else{
		 //mention success
		   echo "<script> 
		    alert('change successfully!')
		 </script>";
      }
}
?>