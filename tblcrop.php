<?php 
require('session.php');
include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    
    .info_labs{
        padding: 10px;
        width: 80%;
        text-align: center;
        background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 10px 22px 0 rgba(0, 0, 0, 0.3);
      }
  </style>
  <title>CROP PRODUCTION TABLE</title>
</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->  
    <?php include("zmenu.php") ?>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['FIRST_NAME'].' '.$_SESSION['LAST_NAME'] ;?></span>
                <i class="fa fa-user"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          
<div style="text-align: right;">
  <a class="btn btn-primary" href="tblstaff_printview.php">Generate Report</a>
</div>
<div class="col-md-12">
 <h1 class="h3 mb-0 text-gray-900" style="font-weight: bold; padding: 10px">CROP PRODUCTION TABLE</h1>
</div>


<form action="tblcrop.php" method="post" style="margin-bottom: 50px">
  <a href="tblcrop.php" class="Refresh">Refresh</a>
  <input class="sear" type="text" name="search" placeholder="Search . . ." >
  <br/>
  <div style="width: 100%;overflow: scroll;height: 500px">
  <table>
  <tr>
    <thead>
    <th>Farmer name</th>
        <th>Rice Type</th>
        <th>Variety</th>
        <th>Watersource</th>
        <th>Yield</th>
        <th>Barangay</th>
        <th>Crop income</th>
        <th>Date</th>
        <th>Gain/Loss</th>
        <th>Feedback</th>
    </thead>
    <!--tfoot>
        <th>ID Image</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Sex</th>
        <th>Age</th>
        <th>Sitio/Sreet</th>
        <th>Barangay</th>
        <th>BRGY. Destination</th>
        <th>User Type</th>
        <th>Button</th>
    </tfoot-->
<?php
require('dbcon/dbconnection.php');
$output = '';
if (isset($_POST['search'])) {
  $searchq = $_POST['search'];
  $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
  $result = $con->query($sql); 
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $id  = $row["id"];
      $farmer_id  = $row["farmer_id"];
      $farmer_name  = $row["farmer_name"];
      $clasirice = $row["clasirice"];
      $variety = $row["variety"];
      $watersource = $row["watersource"];
      $yield = $row["yield"];
      $brgy  = $row["brgy"];
      $income  = $row["income"];
      $day  = $row["day"];
      $month  = $row["month"];
      $year  = $row["year"];
      $gain_loss  = $row["gain_loss"];
      $feedback  = $row["feedback"];
   ?>
    <tr>
      <td style='text-transform: uppercase;'><?php echo $farmer_name; ?></td>
      <td><?php echo $clasirice; ?></td>
      <td><?php echo $variety; ?></td>
      <td><?php echo $watersource; ?></td>
      <td><?php echo $yield; ?></td>
      <td><?php echo $brgy; ?></td>
      <td><?php echo $income; ?></td>
      <td><?php echo $month.' '.$day.', '.$year; ?></td>
      <td><?php echo $gain_loss; ?></td>
      <td><?php echo $feedback; ?></td>
    </tr>
  <?php
  }
  }
  }
  ?>
    </tr>
<?php
}
}
  }else{
    while($row = mysqli_fetch_array($query)){
    $id  = $row["id"];
    $fname  = $row["fname"];
    $lname  = $row["lname"];
    $contact  = $row["contact"];
    $email  = $row["email"];
    $id_pic  = $row["id_pic"];
    $sex  = $row["sex"];
    $age  = $row["age"];
    $sto_strt  = $row["sto_strt"];
    $brgy  = $row["brgy"];
    $brgy_destination  = $row["brgy_destination"];
    $status  = $row["status"];
    $user_type  = $row["user_type"];
 ?>
  <tr>
    <td><img style="width: 100px;height: 120px;" src="<?php echo $id_pic; ?>"></td>
    <td style='text-transform: uppercase;'><?php echo $fname.' '.$lname; ?></td>
    <td><?php echo $contact; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $sex; ?></td>
    <td><?php echo $age; ?></td>
    <td><?php echo $sto_strt; ?></td>
    <td><?php echo $brgy; ?></td>
    <td><?php echo $brgy_destination; ?></td>
    <td><?php echo $user_type; ?></td>
    <td><a class="btn btn-warning" href="update_staff.php?action=update_staff & rn=<?php echo $id ?>">UPDATE</a>
    <a class="btn btn-warning" href="update_staff.php?action=update_staff & rn=<?php echo $id ?>">CLEAR</a>
   </td>
  </tr>
<?php
 
</table>
</div>
</form>







        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer> -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Log out?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Do you really want to log out?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="logout.php">Yes</a>
        </div>
      </div>
    </div>
  </div>

 <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="admin/js/sb-admin-2.min.js"></script>
  <script src="admin/vendor/chart.js/Chart.min.js"></script>
  <script src="admin/js/demo/chart-area-demo.js"></script>
  <script src="admin/js/demo/chart-pie-demo.js"></script>


</body>
</html>
