
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
    $brgy  = $row["brgy"];
    $brgy_destination_staff  = $row["brgy_destination"];
    $status  = $row["status"];
    $user_type  = $row["user_type"];
    }
  }

  require('../dbcon/dbconnection.php');
$output = '';
$search='';
$gainloss='';
if (isset($_POST['search'])) { $search =$_POST['search']; }
if (isset($_POST['gain_loss'])) { $gainloss =$_POST['gain_loss']; }

$sql = "SELECT * FROM tblcrop where (farmer_name like  '%$search%' or brgy like  '%$search%' or  feedback like  '%$search%'  or gain_loss like  '%$search%') and (gain_loss like '%$gainloss%')";
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
    <td><?php  echo $yield; ?></td>
    <td><?php echo $brgy; ?></td>
    <td><?php echo $income; ?></td>
    <td><?php echo $month.' '.$day.', '.$year; ?></td>
    <td><?php echo $gain_loss; ?></td>
    <td><?php echo $feedback; ?></td>
  </tr>
<?php
}
}

?>
  </tr>