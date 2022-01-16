<?php
error_reporting(0);
require('session.php');
include('header.php');
$sql = "SELECT * FROM tblacc where id=".$_SESSION['MEMBER_ID'];
$result = $con-> query($sql);
if ($result-> num_rows > 0) {
  while($row = $result-> fetch_assoc()){
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
    $brgy_destination_staff  = $row["brgy_destination"];
    $status  = $row["status"];
    $user_type  = $row["user_type"];
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rice Management Dashboard</title>
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
  <button  class="btn btn-primary" onclick="printpreview();">Print View</button>
</div>      
<div class="col-md-12">
 <h1 class="h3 mb-0 text-gray-900" style="font-weight: bold; padding: 10px">CROP PRODUCTION TABLE</h1>
</div>


<form action="#" method="post" style="margin-bottom: 50px">
<button type="button" class="button" onclick="tableToExcel('croptabletable','Crops','Crops')">Download Excel</button>
  <button type="button"  class="Refresh" onclick="getcroptable();" >Refresh</button>
  <input class="" type="text" name="search" onkeyup="getcroptable();" id="search" placeholder="Search . . ." >
  <select name="gain_loss" id="gain_loss" onchange="getcroptable();">
  <option value="Gain">Gain</option>
  <option value="Loss">Loss</option>

</select>
  <br/>

  <div style="width: 100%;overflow: scroll;height: 500px">
  <table id="croptabletable">

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
    <tbody id="croptable">
    </tbody>
    <!--tfoot>
        <th>Farmer name</th>
        <th>Crop income</th>
        <th>Date</th>
        <th>Gain/Loss</th>
        <th>Comment</th>
    </tfoot-->

 
 
  
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


<script>
function tableToExcel(table, name, filename) {
        let uri = 'data:application/vnd.ms-excel;base64,', 
        template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><title></title><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>', 
        base64 = function(s) { return window.btoa(decodeURIComponent(encodeURIComponent(s))) },         format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; })}
        
        if (!table.nodeType) table = document.getElementById(table)
        var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}

        var link = document.createElement('a');
        link.download = filename;
        link.href = uri + base64(format(template, ctx));
        link.click();

}
  function printpreview(){

    ///href="ztblcrop_printview.php"
    $.ajax({
        url: "ztblcrop_printview.php",
        type: "post",
        data: {"search" : $("#search").val(),
          "gain_loss": $("#gain_loss").val()
        
        
        } ,
        success: function (response) {
          window.location = "ztblcrop_printview.php?search=" + $("#search").val() + "&gain_loss=" +  $("#gain_loss").val();
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
  }


function getcroptable(){
  $.ajax({
        url: "views/croptable.php",
        type: "post",
        data: {"search" : $("#search").val(),
          "gain_loss": $("#gain_loss").val()
        
        
        } ,
        success: function (response) {
          $("#croptable").empty();
          $("#croptable").append(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });

}
getcroptable();




  </script>