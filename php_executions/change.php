<?php
//the default values of menu list
$list = array("Home", "Shop", "Gallery->", "Contact Us");
$player = array("Ronaldo", "Messi", "<-Back");
$menu = $list;
if (isset($_GET['name'])) {
	// change the list when click in menu
  $require = $_GET['name'];
  if ($require == "Gallery->") {
    $menu = $player;
  } else if ($require == "<-Back") {
    $menu = $list;
  } else if (in_array($require, $list)) {
    $menu = $list;
  } else {
    $menu = $player;
  }
}
// return the temprary menu by string
echo implode(',', $menu);
?>