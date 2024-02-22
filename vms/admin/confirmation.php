<?php
include 'db.php';
extract($_GET);
$q="update appointment_request set confirm=1 where appointment_id='$appointment_id'";
$res=mysqli_query($connect,$q);
if($res){
    echo "<script>alert('confirm!!!');
    window.location='approved.php';</script>";//api
}
else{
    echo "<script>alert('something went wrong!!!');
    window.location='request.php';</script>";
}
?>