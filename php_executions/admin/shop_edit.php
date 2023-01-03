<?php
// when receive the post request from loging in
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 for($a=0;$a<=3;$a++){
         if (empty($_POST["item".$a])||empty($_POST["price".$a])) {
	     //judge username
         $result = "title cannot be empty";
		 return;
      } 
   }
	//include '../jdbc.php';
	  //insert into database
	   for($n=0;$n<=3;$n++){  
        $sql_name="UPDATE shop SET item ='".$_POST["item".$n]."',price='".$_POST["price".$n]."' where id=".$n.";";
		   //echo $sql_name;
		$result_name = $conn->query($sql_name);
       }  
      //$sql_name ="INSERT INTO `contacts` VALUES (null,'".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["message"]."')";
      if($result_name==false){
        $result= "server error pls try again";
      }else{
		  	  //mention success
		   echo "<script> 
		    alert('change successfully!')
		 </script>";
        }
    }
?>