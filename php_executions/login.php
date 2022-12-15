<?php
$result = '';
// when receive the post request from loging in
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $result = "username or password cannot be empty";
  } else {
    if (strlen($_POST['password']) < 6) {
      $result = "password must longer than 6";
    } else if (!preg_match('/^(?![0-9]+$)(?![_]+$)(?![a-zA-Z]+$)[A-Za-z_0-9]{1,}$/', $_POST['password'])) {
      $result = "password must include digits , letters or underscroll";
    } else {
      include 'jdbc.php';
      $sql_name ="SELECT password,nickname FROM `users` where username ='".$_POST['username']."';";
      $result_name = $conn->query($sql_name);
      if($result_name->num_rows==0){
        $result= "username not exist";
      }else{
        $row_name = $result_name->fetch_assoc();
        //$result = $row_name['password'];
        if($row_name['password']!=$_POST['password']){
         $result= "wrong password";
        }else{
			//after validate the form change to log in successfully
			// create session
          session_start(); 
          echo "SID: ".SID.""; 
          echo "session_id(): ".session_id().""; 
          echo "COOKIE: ".$_COOKIE["PHPSESSID"];
          $_SESSION['user'] = $row_name['nickname'];
          $result = 'success';
			//create localStorage to inform index page user logged in
          echo "<script> 
          localStorage.setItem('login', 'secc');
          </script>";
        }
      }
    }
  }
}
?>