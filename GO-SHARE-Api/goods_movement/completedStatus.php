<?php
include '../connect.php';

// Get the pool_id sent from Flutter using the 'pool_id' key
$gm_id = $_POST['gm_id'];

// Update the status column in the offer_pool table for the received pool_id
$sql = mysqli_query($con, "UPDATE goods_movement SET status = 'completed' WHERE gm_id = '" . mysqli_real_escape_string($con, $gm_id) . "';");

if ($sql) {
    $response['result'] = 'success';
} else {
    $response['result'] = 'failed';
}

echo json_encode([$response]);
?>
