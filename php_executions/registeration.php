<?php
$result = '';
$sql_name="";
// when receive the post request from loging in
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
	  //judge username
    $result = "username or password cannot be empty";
  } else {
	    //judge username if existed
	 include 'jdbc.php';
      $sql_name ="SELECT username FROM `users` where username ='".$_POST['username']."';";
      $result_name = $conn->query($sql_name);
    if($result_name->num_rows>0){
        $result= "username already exist";
		  //judge password 
	}else if (strlen($_POST['password']) < 6) {
      $result = "password must longer than 6";
		//judge password 
    } else if (!preg_match('/^(?![0-9]+$)(?![_]+$)(?![a-zA-Z]+$)[A-Za-z_0-9]{1,}$/', $_POST['password'])) {
      $result = "password must include digits , letters or underscroll";
	}else if(!$_POST['nickname']){
		//judge nickname 
		 $result = "nickname cannot be empty";
			}else if(!$_POST['birthday']){
		 $result = "birthday cannot be empty";
			}else if(!$_POST['email']){
		//judge email 
		 $result ="email cannot be empty";
			//judge email  if valid
			}else if(!preg_match('/^\S+@\S+\.\S+$/',$_POST['email'])){
		 $result ="email address is invalid";
			}else if(!$_POST['phoneNumber']){
		 $result ="phoneNumber cannot be empty";
    } else {
      $sql_name ="INSERT INTO `users` VALUES (null,'".$_POST["username"]."','".$_POST["password"]."','".$_POST["nickname"]."','".$_POST["birthday"]."','".$_POST["email"]."','".$_POST["phoneNumber"]."',0)";
		$result_name = $conn->query($sql_name);
      if($result_name===false){
        $result= "server error pls try again";
      }else{
		  //if sign up successfully give user log in state directly
			//after validate the form change to log in successfully
			// create session
          session_start(); 
          echo "SID: ".SID.""; 
          echo "session_id(): ".session_id().""; 
          echo "COOKIE: ".$_COOKIE["PHPSESSID"];
          $_SESSION['user'] = $_POST['nickname'];
		   $_SESSION['id'] = $row_name['username'];
		   $_SESSION['admin'] = $row_name['accountState'];
          $result = 'register successfully';
			//echo $_SESSION['user'] ;
			//create localStorage to inform index page user logged in
          echo "<script> 
          localStorage.setItem({'login', 'secc'});
		  localStorage.setItem('user','".$_POST['username']."');
          </script>";
        }
    }
  }
}
?>