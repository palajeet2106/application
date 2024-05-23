<?php

include("connection.php");

if( isset($_POST['cmd']) && $_POST['cmd'] == 'login'){
  $msg = $user ->admin();
  echo $msg;
}
if(isset($_POST['update'])){
 $user ->update($_POST['userId']);

}
if(isset($_REQUEST['id']) && isset($_REQUEST['cmd']) && $_REQUEST['cmd'] == 'delete'){
   $user -> delete($_REQUEST['id']);
}
if(isset($_POST['updatebtn'])){
  $user ->stcUpdate($_POST['userid']);

 }

if(isset($_REQUEST['id']) && isset($_REQUEST['cmd']) && $_REQUEST['cmd'] == 'delete'){
 $user -> stcDelete($_REQUEST['id']);
}


?>
