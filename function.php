<?php
function total_num_users($mysqli)
{
$sql = "SELECT COUNT(user_id) FROM register";
$res=mysqli_query($mysqli,$sql);
$row = mysqli_fetch_row($res);
return $row[0];
}

function users_list($mysqli)
{
$sql = "SELECT username FROM register";
$res=mysqli_query($mysqli,$sql);
$row_u = mysqli_fetch_row($res);
return $row_u[0];
}
?>