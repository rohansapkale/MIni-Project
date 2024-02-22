<?php

include  'header-admin.php';
$q="select * from appointment_request where confirm=0 and deny=0";
$result=mysqli_query($connect,$q);
if($result){
    

?>

<div class="col-lg-10 d-flex ">
            <div class="card w-100">
              <div class="card-body p-6">
                <h5 class="card-title fw-semibold mb-4"></h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Appointment Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">With</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">User</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Date</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">TIme Slot</h6>
                        </th>
                       <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Subject</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Confirm</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Deny</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                         while($row=mysqli_fetch_array($result)){
                            echo "<tr><td>".$row['appointment_id']."</td>
                            <td>".$row['appoint_with']."</td>
                            <td>".$row['request_from']."</td>
                            <td>".$row['date']."</td>
                            <td>".$row['time_slot']."</td>
                            <td>".$row['subject']."</td>
                            <td><a href='confirmation.php?appointment_id=".$row['appointment_id']."' class='text-success'>Confirm</a></td>
                            <td><a onclick='deny()' href='#'  class='text-danger'>Deny</a></td></tr>";
                        }
                  
                        ?>
                    </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>         
<script>
    function deny(){
        confirm("connfirm to deny??");
    }
</script>
<?php
} 
include  'footer.php';
?>