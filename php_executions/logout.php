<!-- remove the session when log out -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();
  if ($_SESSION['user']) {
    session_unset();
  }
}
?>