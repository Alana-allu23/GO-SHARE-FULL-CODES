<?php
include '../connect.php';
$log_id=$_POST['log_id'];
$starting_point=$_POST['starting_point'];
$destination=$_POST['destination'];
$vehicle_no=$_POST['vehicle_no'];
$goodsType=$_POST['goodsType'];
$weightLeft=$_POST['weightLeft'];
$vehModel=$_POST['vehModel'];
$date=$_POST['date'];
$time=$_POST['time'];
$sql=mysqli_query($con,"INSERT INTO goods_movement(log_id,starting_point,destination,vehicle_no,date,time,goodsType,weightLeft,vehModel) VALUES ('$log_id','$starting_point','$destination','$vehicle_no','$date','$time','$goodsType','$weightLeft','$vehModel')");
if ($sql){
    $myarray['result']='success';
}
else{
    $myarray['result']='failed';
}
echo json_encode($myarray);
?>