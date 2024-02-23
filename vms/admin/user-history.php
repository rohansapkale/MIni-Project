<?php
include 'header.php';
if(isset($_REQUEST['submit'])){
        extract($_GET);
    $q="select * from appointment_request where date='$search'";
    $result=mysqli_query($connect,$q);
    ?>        <div class="card w-100">
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
                <h6 class="fw-semibold mb-0">Start Time</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">End Time</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Subject</h6>
              </th>
            </tr>
          </thead>
          <tbody>
<?php
    if($result){
        echo true;
    }
}
?>
<html>
    <body>
            <form action="" method="get">
                <input type="search" name="search" placeholder="enter date" >
                <button type="submit">Submit</button>
            </form>        
    </body>
</html>

<?php

include 'footer.php';

?>