<?php
include '../connect.php';
$uid=$_POST['log_id'];
  $sql = mysqli_query($con, "SELECT * FROM offer where log_id='$uid' order by offer_id desc");
  if($sql->num_rows > 0){
    $list = array();
    while($row = mysqli_fetch_assoc($sql)){
      $myarray = array();
      $myarray['message'] = 'viewed';
      $myarray['result'] = 'success';
      $myarray['company_name'] = $row['company_name'];
      $myarray['voucher'] = $row['voucher'];
      
      array_push($list, $myarray);
    } 

    echo json_encode($list);
  } else {
    
    $myarray = array('message' => 'failed');
    echo json_encode($myarray);
  }

?>
