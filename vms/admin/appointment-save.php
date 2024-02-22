<?php
include 'db.php';
extract($_POST);
extract($_GET);
$q="INSERT INTO `appointment_request`( `appoint_with`, `request_from`, `date`,`start_time`,`end_time`, `subject`) VALUES ('$email','$u_name','$date','$start_time','$end_time','$subject')";
$res=mysqli_query($connect,$q);
if($res){
    echo "<script>alert('please download');
     window.location='index.php';
    </script>";    
}else {
    echo "false";
    
// 
// select a.*
// from appointment_request a 
// join slots s 
// on a.start_time=s.start 
// where (a.end_time=s.end) and date='2024-02-17'
}
?>
