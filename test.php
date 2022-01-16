<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "dadb";
 
// Create connection and Check connection
$con = mysqli_connect($localhost, $username, $password, $database);

if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
}
?>

<html>
    <head>

    </head>
    <body>
    <?php
$sql = "SELECT * FROM `tblcrop`";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $id  = $row["id"];
    // $farmer_id  = $row["farmer_id"];
    // $farmer_name  = $row["farmer_name"];
    // $clasirice = $row["clasirice"];
    // $variety = $row["variety"];
    // $watersource = $row["watersource"];
    // $yield = $row["yield"];
    // $brgy  = $row["brgy"];
    // $income  = $row["income"];
    // $day  = $row["day"];
    // $month  = $row["month"];
    // $year  = $row["year"];
    // $gain_loss  = $row["gain_loss"];
    // $feedback  = $row["feedback"];
?>
 <table>
     <thead>

    </thead>
    <tbody>
        <tr>
            <td><?php echo $id ?></td>
        </tr>
    </tbody>
 </table>
<?php 
    }
}
?>
    </body>
</html>