<?php 
require('../session.php');
require('../dbcon/dbconnection.php');
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
    $brgys  = $row["brgy"];
    $brgy_destination_staff  = $row["brgy_destination"];
    $status  = $row["status"];
    $user_type  = $row["user_type"];
    }
  }
?>


<?php
$output = '';

  $searchq = $_POST['year'];
  $baranggay = $_POST['baranggay'];
if($baranggay =="All")
{
    $query = mysqli_query($con, "SELECT farmer_name ,  avg(income) as income from tblcrop where year=$searchq  group by brgy;");
    $sql = "SELECT farmer_name ,  avg(income) as income from tblcrop where year=$searchq  group by brgy;";
}  
else{
    $query = mysqli_query($con, "SELECT farmer_name,  avg(income) as income from tblcrop where year=$searchq and brgy like '%$baranggay%' group by brgy;");
    $sql =  "SELECT farmer_name,  avg(income) as income from tblcrop where year=$searchq and brgy like '%$baranggay%' group by brgy;";
}

  $count = mysqli_num_rows($query);



$result = $con-> query($sql);

if ($result-> num_rows > 0) {

  while($row = $result-> fetch_assoc()){
     $brgy[]  = $row['farmer_name'];
    // print_r($row['farmer_name']);
        $income[] = $row['income'];
       // print_r($row['income']);

?>

<?php
}
}



?>
 <div style="width:90%;height:20%;text-align:center">
           <h3?>Baranggay  : </h3> <?php echo $baranggay;?>   
        </div>

 <div style="width:90%;height:20%;text-align:center">
            <canvas  id="chartjs_bar"></canvas> 
            
        </div>



<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($brgy); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($income); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: '',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 15,
                        }
                    },
 
 
                }
                });
    </script>
