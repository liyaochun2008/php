<?php
$result = '';
$sql_name="";
// when receive the post request from loging in
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
	  //judge username
    $result = "name cannot be empty";
  } else {
	 if(!preg_match('/^\S+@\S+\.\S+$/',$_POST['email'])){
		 $result ="email address is invalid";
	}else if(!$_POST['phone']){
		 $result ="phone cannot be empty";
    } else {
		 include 'jdbc.php';
	  //insert into database
      $sql_name ="INSERT INTO `contacts` VALUES (null,'".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["message"]."')";
		$result_name = $conn->query($sql_name);
      if($result_name===false){
        $result= "server error pls try again";
      }else{
		  	  //go back to home page
		   echo "<script> 
		 localStorage.setItem('login', 'secc');
		 </script>";
        }
    }
  }
}
?>