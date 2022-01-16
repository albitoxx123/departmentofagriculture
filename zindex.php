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
  <title>Dashboard</title>
</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->  
  
    
    <?php include("menu.php") ?>
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
          <?php
            $sql = "SELECT * FROM tblannounce";
            $result = $con-> query($sql);
            if ($result-> num_rows > 0) {
              while($row = $result-> fetch_assoc()){
                $id  = $row["id"];
                $announce  = $row["announce"];
              }
            }

          ?>
          <div style="color: white; background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));padding: 20px;border-radius: 5px;box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 10px 22px 0 rgba(0, 0, 0, 0.3);">
          <h2>Announcement</h2>
          <p>
            <?php echo $announce; ?>
          </p>
        </div>
        <a class="btn btn-warning" href="update_ann.php?action=update_ann & rn=<?php echo $id ?>" style="margin-top: -20px">Update</a>
        <a class="btn btn-danger mr-4" href="update_ann.php?action=update_ann & rn=<?php echo $id ?>" style="margin-top: -20px">Delete</a>
        <a class="btn btn-success mr-3" href="ztblcrop.php" style="margin-top: -20px">Dashboard</a>
        <!-- /.container-fluid -->

      </div>
      <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          </div>
          </div>
    <h1>Department of Agriculture-Swine Flu </span> Fresh pork prices stabilizing</span></h1>
    <p>As per latest report of DA-Bantay Presyo Price Monitoring Unit, the prevailing price of kasim is now at P280/kg, down from its peak price of P360/kg in January 2021, while liempo sells at P340/kg, P60 cheaper than its peak price at P400/kg in January 2021.
      Meanwhile, frozen pork sold in wet markets continues to be cheaper by P60/kg compared to fresh pork: at P220/kg for frozen kasim; and P280/kg for frozen liempo.However, only seven out of every 100 meat stalls are selling frozen pork in NCR wet markets as frozen pork requires chillers.
      The DA projects a continuing downward movement of local pork prices at NCR wet markets.The retail prices generally follow the price movements of farmgate prices of hogs. Available data from hog producers indicate that farmgate prices have gradually declined since January 2021.
      If the trend continues, the DA projects retail prices may return back to the price level of September last year.</p>
    <div>
    <div class="btns">
    </div>
    <!--a href="#menu" class="btn-menu animated fadeInUp scrollto">Transparency</a>
    <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Comments and Sugestions</a-->
    </div>
    <div class="row">

<div class="col-lg-4">
  <div class="box" data-aos="zoom-in" data-aos-delay="100">


  
    <span>01</span>
    <h4>About</h4>
    <p>Dr. William Dollente Dar is a man fated to do great things. History does repeat itself for.. . read more</p>
  </div>
</div>

<div class="col-lg-4 mt-4 mt-lg-0">
  <div class="box" data-aos="zoom-in" data-aos-delay="200">
    <span>02</span>
    <h4>Event</h4>
    <p>Philippines with prosperous farmers and fisherfolk. The vision has over-arching twin goals of increasing productivity and.. . read more</p>
  </div>
</div>

<div class="col-lg-4 mt-4 mt-lg-0">
  <div class="box" data-aos="zoom-in" data-aos-delay="300">
    <span>03</span>
    <h4> News nd Updates</h4>
    <p>Never in the history of the DA that a vision statement has been elevated to focus on the farmers and fisherfolk.. . read more</p>
  </div>
</div>

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
