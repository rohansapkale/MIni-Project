<?php session_start();
include 'header.php';
if(isset($_GET['e_id'])){
    $e_id=$_GET['e_id'];
    echo $e_id;
    $query_select2="select a.date,a.time_slot,a.request_from
    from employee_db e
    join appointment_request a 
    on  a.appoint_with=e.e_email and e.e_id='$e_id'";
    $result=mysqli_query($connect,$query_select2);
    // $employee=mysqli_fetch_assoc($result);
   
    if($result){
        echo "  <div class='col-lg-10 d-flex '>
        <div class='card w-100'>
          <div class='card-body p-6'>
            <h5 class='card-title fw-semibold mb-4'></h5>
            <div class='table-responsive'>
              <table class='table text-nowrap mb-0 align-middle'><tr><th colspan=3>Employee<br></th></tr><tr><th>Date</th><th>Slot</th><th>Visitor</th></tr>";    
        while($employee=mysqli_fetch_assoc($result)){
         
            echo "<tr><td>".$employee['date']."</td><td>".$employee['time_slot']."</td><td>".$employee['request_from']."</td></tr>";              
        }
        echo "</table></div></div></div></div>";    
        

    }
}
?>