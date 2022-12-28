<?php
$result = '';
// when receive the post request from shop page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["comments"])) {
    $result = "comments cannot be empty";
  } else {
      include 'jdbc.php';
	  //insert into database
      $sql_name ="INSERT INTO `comments` VALUES ('".$_POST["name"]."','".$_POST["user"]."','".date("Y-m-d")."','".$_POST["comments"]."')";
	  $result_name = $conn->query($sql_name);
      if($result_name===false){
        $result= "server error pls try again";
      }else{
		  // if submit successful go back to shop page
		     echo "<script> window.location.href = 'shop.php'</script>";
      }
  }
}
?>