<?php
  require('../connect.php');
  $response = array();
  $return = 'Location: '.BASE_URL.'market/testmarket.php';

  if(isset($_POST['route_id']) ){
    $userchange = "UPDATE route SET status = 'FINISHED'  WHERE user_id = {$_POST['route_id']}";
    $res = mysqli_query($db, $userchange) or die(mysqli_query());
    if($res){
        header($return);
    }
}