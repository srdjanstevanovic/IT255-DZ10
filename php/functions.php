<?php


include("config.php");


function getGuns(){
global $conn;
$rarray = array();

$result = mysqli_query($conn, "SELECT * FROM guns");
$num_rows = mysqli_num_rows($result);
$guns = array();
if($num_rows > 0)
{

while($row = mysqli_fetch_assoc($result)) {
$one_gun = array();
$one_gun['id'] = $row['id'];
$one_gun['name'] = $row['name'];
array_push($guns,$one_gun);
}
}
$rarray['guns'] = $guns;
return json_encode($rarray);
} 



?>