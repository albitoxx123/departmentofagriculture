<?php 
require('session.php');
include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADD CROP</title>
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
$ids = $_GET["rn"];
 $sql = "SELECT * from tblfarmer where id=$ids ";
 $result = $con-> query($sql);
 if ($result-> num_rows > 0) {
    while($row = $result-> fetch_assoc()){
          $id  = $row["id"];
          $fname  = $row["fname"];
          $lname  = $row["lname"];
          $contact  = $row["contact"];
          $email  = $row["email"];
          $sex  = $row["sex"];
          $age  = $row["age"];
          $sto_street  = $row["sto_street"];
          $brgy  = $row["brgy"]; 
}}
?>
<center>
<form action="addcrop_process.php" method="post" enctype="multipart/form-data">
  <div id="container">
    <h2>ADD FARMER CROP</h2>
      <input type="hidden" name="farmer_id" value="<?php echo $ids ?>">
      <input type="hidden" name="brgy" value="<?php echo $brgy ?>">
      <div>
        <input class="inputs" type="hidden" name="farmer_name" required="" value="<?php echo $fname.' '.$lname; ?>">
        <div style="text-align: left;"> 
          <label class="inputs">Farmer name: <b><?php echo $fname.' '.$lname; ?></b></label>
        </div>
      </div>
        <div style="text-align:left;">
          <label class="inputs"  style="padding: 0px; margin: 0%;">Rice Type</label>
        <select class="inputs" name="clasirice">
          <option>Not in the List</option>
          <option>Inbred</option>
          <option>Hybrid</option>
          <option>Certified</option>
          <option>Goods Seeds</option>
        </select>
        </div>
          <div style="text-align:left;">
          <label class="inputs" style="padding: 0px; margin: 0%;">Watersource</label>
          <select class="inputs" name="watersource">
            <option>Not in the List</option>
            <option>Irrigated</option>
            <option>Glutinous</option>
            <option>Rainfed</option>    
            <option>Cool Elevated</option> 
            <option>Saline</option>       
            <option>Upland</option>
          </select>
        </div>
        <div style="text-align:left;>
          <label class="inputs style=" padding: 0px; margin: 0%;" >Rice Variety</label>
          <select class="inputs" name="variety" action="addcrop.php" value="<?php echo $clasirice;?>">
            <option>Not in the List</option>
            <option>Certified Seed - PURELINE</option>
            <option>Inbred - PSB RC2 (NAHALIN)</option>
            <option>Inbred - PSB RC4 (MOLAWIN)</option>
            <option>Inbred - PSB RC6 (CARRANGLAN)</option>
            <option>Inbred - PSB RC8 (TALAVERA)</option>
            <option>Inbred - PSB RC10 (PAGSANJAN)</option>
            <option>Inbred - PSB RC18 (ALA)</option>
            <option>Inbred - PSB RC20 (CHICO)</option>
            <option>Inbred - PSB RC22 (LILIW)</option>
            <option>Inbred - PSB RC28 (AGNO)</option>
            <option>Inbred - PSB RC30 (AGUS)</option>
            <option>Inbred - PSB RC32 (JARO)</option>
            <option>Inbred - PSB RC34 (BURDAGOL)</option>
            <option>Inbred - PSB RC52 (GANDARA)</option>
            <option>Inbred - PSB RC54 (ABRA)</option>
            <option>Inbred - PSB RC56 (DAPITAN)</option>
            <option>Inbred - PSB RC58 (MAYAPA)</option>
            <option>Inbred - PSB RC64 (KABACAN)</option>
            <option>Inbred - PSB RC66 (AGUSAN)</option>
            <option>Inbred - PSB RC74 (AKLAN)</option>
            <option>Inbred - PSB RC78 (PAMPANGA)</option>
            <option>Inbred - PSB RC80 (PASIG)</option>
            <option>Inbred - PSB RC82 (PEÑARANDA)</option>
            <option>Inbred - IR69726-29-1-2-2-2 (MATATAG2)</option>
            <option>Inbred - IR73885-1-4-3-2-1-6 (MATATAG 9)</option>
            <option>Inbred - NSIC RC 110 (TUBIGAN 1)</option>
            <option>Inbred - NSIC RC 112 (TUBIGAN 2)</option>
            <option>Inbred - NSIC RC 118 (MATATAG 3)</option>
             <option>Inbred - NSIC RC 120 (MATATAG 6)</option>
            <option>Inbred - NSIC RC 122 (ANGELICA)</option>
            <option>Inbred - NSIC RC 128 (MABANGO 1)</option>
            <option>Inbred - NSIC RC 130 (TUBIGAN 3)</option>
            <option>Inbred - NSIC RC 134 (TUBIGAN 4)</option>
            <option>Inbred - NSIC RC 138 (TUBIGAN 5)</option>
            <option>Inbred - NSIC RC 140 (TUBIGAN 6)</option>
            <option>Inbred - NSIC RC 142 (TUBIGAN 7)</option>
            <option>Inbred - NSIC RC 144 (TUBIGAN 8)</option>
            <option>Inbred - NSIC RC 146 (PJ7)</option>
            <option>Inbred - NSIC RC 148 (MABANGO 2)</option>
            <option>Inbred - NSIC RC 150 (TUBIGAN 9)</option>
            <option>Inbred - NSIC RC 152 (TUBIGAN 10)</option>
            <option>Inbred - NSIC RC 154 (TUBIGAN 11)</option>
            <option>Inbred - NSIC RC 156 (TUBIGAN 12)</option>
            <option>Inbred - NSIC RC 158 (TUBIGAN 13)</option>
            <option>Inbred - NSIC RC 160 (TUBIGAN 14)</option>
            <option>Inbred - NSIC RC 170 (MS 11)</option>
            <option>Inbred - NSIC RC 172 (MS 13)</option>
            <option>Inbred - NSIC RC 194 (SUBMARINO 1)</option>
            <option>Inbred - NSIC RC 212 (TUBIGAN 15)</option>
            <option>Inbred - NSIC RC 214 (TUBIGAN 16)</option>
            <option>Inbred - NSIC RC 216 (TUBIGAN 17)</option>
            <option>Inbred - NSIC RC 218 SR (MABANGO 3)</option>
            <option>Inbred - NSIC RC 220 SR (JAPONICA 1)</option>
            <option>Inbred - NSIC RC 222 (TUBIGAN 18)</option>
            <option>Inbred - NSIC RC 224 (TUBIGAN 19)</option>
            <option>Inbred - NSIC RC 226 (TUBIGAN 20)</option>
            <option>Inbred - NSIC RC 238 (TUBIGAN 21)</option>
            <option>Inbred - NSIC RC 240 (TUBIGAN 22)</option>
            <option>Inbred - NSIC RC 242 SR (JAPONICA 2)</option>
            <option>Inbred - NSIC RC 298 (TUBIGAN 23)</option>
            <option>Inbred - NSIC RC 300 (TUBIGAN 24)</option>
            <option>Inbred - NSIC RC 302 (TUBIGAN 25)</option>
            <option>Inbred - NSIC RC 304 (JAPONICA 3)</option>
            <option>Inbred - NSIC RC 308 (TUBIGAN 26)</option>
            <option>Inbred - NSIC RC 342 SR (MABANGO 4)</option>
            <option>Inbred - NSIC RC 352 (TUBIGAN 27)</option>
            <option>Inbred - NSIC RC 354 (TUBIGAN 28)</option>
            <option>Inbred - NSIC RC 356 (TUBIGAN 29)</option>
            <option>Inbred - NSIC RC 358 (TUBIGAN 30)</option>
            <option>Inbred - NSIC RC 360 (TUBIGAN 31)</option>
            <option>Inbred - NSIC RC 394 (TUBIGAN 32)</option>
            <option>Inbred - NSIC RC 396 (TUBIGAN 33)</option>
            <option>Inbred - NSIC RC 398 (TUBIGAN 34)</option>
            <option>Inbred - NSIC RC 400 (TUBIGAN 35)</option>
            <option>Inbred - NSIC RC 402 (TUBIGAN 36)</option>
            <option>Inbred - NSIC RC 436 (TUBIGAN 37)</option>
            <option>Inbred - NSIC RC 438 (TUBIGAN 38)</option>
             <option>Inbred - NSIC RC 440 (TUBIGAN 39)</option>
            <option>Inbred - NSIC RC 442 (TUBIGAN 40)</option>
            <option>Inbred - NSIC RC 506 (TUBIGAN 41)</option>
            <option>Inbred - NSIC RC 508 (TUBIGAN 42)</option>
            <option>Inbred - NSIC RC 510 (TUBIGAN 43)</option>
            <option>Inbred - NSIC RC 512 (TUBIGAN 44)</option>
            <option>Inbred - NSIC RC 514 (TUBIGAN 45)</option>
            <option>Inbred - NSIC RC 414 SR (JAPONICA 4)</option>
            <option>Inbred - NSIC RC 482SR (JAPONICA 5)</option>
            <option>Inbred - NSIC RC 484SR (JAPONICA 6)</option>
            <option>Hybrid - PSB RC26H (MAGAT)</option>
            <option>Hybrid - PSB RC76H (PANAY)</option>
            <option>Hybrid - PSB RC72H (MESTIZO 1)</option>
            <option>Hybrid - NSIC RC 114H (MESTISO 2)</option>
            <option>Hybrid - NSIC RC 116H (MESTISO 3)</option>
            <option>Hybrid - NSIC RC 124H (MESTISO 4)</option>
            <option>Hybrid - NSIC RC 126H (MESTISO 5)</option>
            <option>Hybrid - NSIC RC 132H (MESTISO 6)</option>
            <option>Hybrid - NSIC RC 136H (MESTISO 7)</option>
            <option>Hybrid - NSIC RC 162H (MESTISO 8)</option>
            <option>Hybrid - NSIC RC 164H (MESTISO 9)</option>
            <option>Hybrid - NSIC RC 166H (MESTISO 10)</option>
            <option>Hybrid - NSIC RC 168H (MESTISO 11)</option>
            <option>Hybrid - NSIC RC 174H (MESTISO 12)</option>
            <option>Hybrid - NSIC RC 176H (MESTISO 13)</option>
            <option>Hybrid - NSIC RC 178H (MESTISO 14)</option>
            <option>Hybrid - NSIC RC 180H (MESTISO 15)</option>
            <option>Hybrid - NSIC RC 196H (MESTISO 16)</option>
            <option>Hybrid - NSIC RC 198H (MESTISO 17)</option>
            <option>Hybrid - NSIC RC 200H (MESTISO 18)</option>
            <option>Hybrid - NSIC RC 202H (MESTISO 19)</option>
            <option>Hybrid - NSIC RC 204H (MESTISO 20)</option>
            <option>Hybrid - NSIC RC 206H (MESTISO 21)</option>
            <option>Hybrid - NSIC RC 208H (MESTISO 22)</option>
            <option>Hybrid - NSIC RC 210H (MESTISO 23)</option>
            <option>Hybrid - NSIC RC 228H (MESTISO 24)</option>
            <option>Hybrid - NSIC RC 230H (MESTISO 25)</option>
            <option>Hybrid - NSIC RC 232H (MESTISO 26)</option>
            <option>Hybrid - NSIC RC 234H (MESTISO 27)</option>
            <option>Hybrid - NSIC RC 236H (MESTISO 28)</option>
            <option>Hybrid - NSIC RC 244 (MESTISO 29)</option>
            <option>Hybrid - NSIC RC 244 (MESTISO 29)</option>
            <option>Hybrid - NSIC RC 246H (MESTISO 30)</option>
            <option>Hybrid - NSIC RC 248H (MESTISO 31)</option>
            <option>Hybrid - NSIC RC 250H (MESTISO 32)</option>
            <option>Hybrid - NSIC RC 252H (MESTISO 33)</option>
            <option>Hybrid - NSIC RC 254H (MESTISO 34)</option>
            <option>Hybrid - NSIC RC 256H (MESTISO 35)</option>
            <option>Hybrid - NSIC RC 258H (MESTISO 36)</option>
            <option>Hybrid - NSIC RC 260H (MESTISO 37)</option>
            <option>Hybrid - NSIC RC 262H (MESTISO 38)</option>
            <option>Hybrid - NSIC RC 264H (MESTISO 39)</option>
            <option>Hybrid - NSIC RC 268H (MESTISO 41)</option>
            <option>Hybrid - NSIC RC 270H (MESTISO 42)</option>
            <option>Hybrid - NSIC RC 306H (MESTISO 43)</option>
            <option>Hybrid - NSIC RC 310H (MESTISO 44)</option>
            <option>Hybrid - NSIC RC 312H (MESTISO 45)</option>
            <option>Hybrid - NSIC RC 314H (MESTISO 46)</option>
            <option>Hybrid - NSIC RC 316H (MESTISO 47)</option>
            <option>Hybrid - NSIC RC 318H (MESTISO 48)</option>
            <option>Hybrid - NSIC RC 320H (MESTISO 49)</option>
            <option>Hybrid - NSIC RC 322H (MESTISO 50)</option>
            <option>Hybrid - NSIC RC 350H (MESTISO 51)</option>
            <option>Hybrid - NSIC RC 362H (MESTISO 52)</option>
            <option>Hybrid - NSIC RC 364H (MESTISO 53)</option>
            <option>Hybrid - NSIC RC 366H (MESTISO 54)</option>
            <option>Hybrid - NSIC RC 368H (MESTISO 55)</option>
            <option>Hybrid - NSIC RC 370H (MESTISO 56)</option>
            <option>Hybrid - NSIC RC 372H (MESTISO 57)</option>
            <option>Hybrid - NSIC RC 374H (MESTISO 58)</option>
            <option>Hybrid - NSIC RC 376H (MESTISO 59)</option>
            <option>Hybrid - NSIC RC 378H (MESTISO 60)</option>
            <option>Hybrid - NSIC RC 380H (MESTISO 61)</option>
            <option>Hybrid - NSIC RC 382H (MESTISO 62)</option>
            <option>Hybrid - NSIC RC 404H (MESTISO 66)</option>
            <option>Hybrid - NSIC RC 406H (MESTISO 67)</option>
            <option>Hybrid - NSIC RC 408H (MESTISO 68)</option>
            <option>Hybrid - NSIC RC 410H (MESTISO 69)</option>
            <option>Hybrid - NSIC RC 412H (MESTISO 70)</option>
            <option>Hybrid - NSIC RC 432H (MESTISO 71)</option>
            <option>Hybrid - NSIC RC 444H (MESTISO 72)</option>
            <option>Hybrid - NSIC RC 446H (MESTISO 73)</option>
            <option>Hybrid - NSIC RC 448H (MESTISO 74)</option>
            <option>Hybrid - NSIC RC 450H (MESTISO 75)</option>
            <option>Hybrid - NSIC RC 452H (MESTISO 76)</option>
            <option>Hybrid - NSIC RC 454H (MESTISO 77)</option>
            <option>Hybrid - NSIC RC 456H (MESTISO 78)</option>
            <option>Hybrid - NSIC RC 458H (MESTISO 79)</option>
            <option>Hybrid - NSIC RC 486 (MESTISO 80)</option>
            <option>Hybrid - NSIC RC 488 (MESTISO 81)</option>
            <option>Hybrid - NSIC RC 490 (MESTISO 82)</option>
            <option>Hybrid - NSIC RC 492H (MESTISO 83)</option>
            <option>Hybrid - NSIC RC 494H (MESTISO 84)</option>
            <option>Hybrid - NSIC RC 496H (MESTISO 85)</option>
            <option>Hybrid - NSIC RC 498H (MESTISO 86)</option>
            <option>Hybrid - NSIC RC 500H (MESTISO 87)</option>
            <option>Hybrid - NSIC RC 502H (MESTISO 88)</option>
            <option>Hybrid - NSIC RC 504H (MESTISO 89)</option>
            <option>Hybrid - NSIC RC 516H (MESTISO 90)</option>
            <option>Hybrid - NSIC RC 518H (MESTISO 91)</option>
            <option>Hybrid - NSIC RC 520H (MESTISO 92)</option>
            <option>Hybrid - NSIC RC 522H (MESTISO 93)</option>
            <option>Hybrid - NSIC RC 524H (MESTISO 94)</option>
            <option>Hybrid - NSIC RC 526H (MESTISO 95)</option>
            <option>Hybrid - NSIC RC 542H (MESTISO 98)</option>
            <option>Hybrid - NSIC RC 544H (MESTISO 99)</option>
            <option>Hybrid - NSIC RC 546H (MESTISO 100)</option>
            <option>Hybrid - NSIC RC 548H (MESTISO 101)</option>
            <option>Hybrid - NSIC RC 550H (MESTISO 102)</option>
            <option>Hybrid - NSIC RC 552H (MESTISO 103)</option>
            <option>Glutinous - NSIC RC 13 (MALAGKIT 1)</option>
            <option>Glutinous - NSIC RC 15 (MALAGKIT 2)</option>
            <option>Glutinous - NSIC RC 17 (MALAGKIT 3)</option>
            <option>Glutinous - NSIC RC 19 (MALAGKIT 4)</option>
            <option>Glutinous - UPL RI1</option>
            <option>Glutinous - BPI RI1</option>
            <option>Glutinous - IR65</option>
            <option>Glutinous - NSIC RC 21 SR (MALAGKIT 5)</option>
            <option>Transplanted - PSB RC12 (CALIRAYA)</option>
            <option>Transplanted - PSB RC14 (RIO GRANDE)</option>
            <option>Transplanted - PSB RC36 (MA-AYON)</option>
            <option>Transplanted - PSB RC38 (RINARA)</option>
            <option>Transplanted - PSB RC40 (CHAYONG)</option>
            <option>Transplanted - PSB RC98 (LIAN)</option>
            <option>Transplanted - PSB RC100 (SANTIAGO)</option>
            <option>Transplanted - PSB RC102 (MAMBURAO)</option>
            <option>Transplanted - NSIC RC 192 (SAHOD ULAN 1)</option>
            <option>Transplanted - RC272 (SAHOD ULAN 2)</option>
            <option>Transplanted - RC274 (SAHOD ULAN 3)</option>
            <option>Transplanted - RC276 (SAHOD ULAN 4)</option>
            <option>Transplanted - RC278 (SAHOD ULAN 5)</option>
            <option>Transplanted - RC280 (SAHOD ULAN 6)</option>
            <option>Transplanted - RC282 (SAHOD ULAN 7)</option>
            <option>Transplanted - RC284 (SAHOD ULAN 8)</option>
            <option>Transplanted - RC288 (SAHOD ULAN 10)</option>
            <option>Transplanted - NSIC RC 416 (SAHOD ULAN 13)</option>
            <option>Transplanted - NSIC RC 418 (SAHOD ULAN 14)</option>
            <option>Transplanted - NSIC RC 420 (SAHOD ULAN 15)</option>
            <option>Transplanted - NSIC RC 422 (SAHOD ULAN 16)</option>
            <option>Transplanted - NSIC RC 424 (SAHOD ULAN 17)</option>
            <option>Transplanted - NSIC RC 426 (SAHOD ULAN 18)</option>
            <option>Transplanted - NSIC RC 428 (SAHOD ULAN 19)</option>
            <option>Transplanted -NSIC RC 430 (SAHOD ULAN 20)</option>
            <option>Transplanted - NSIC RC 434 (SAHOD ULAN 21)</option>
            <option>Transplanted - NSIC RC 472 (SAHOD ULAN 22)</option>
            <option>Transplanted - NSIC RC 474 (SAHOD ULAN 23)</option>
            <option>Transplanted - NSIC RC 476 (SAHOD ULAN 24)</option>
            <option>Transplanted - NSIC RC 478 (SAHOD ULAN 25)</option>
            <option>Transplanted - NSIC RC 480 (GSR 8)</option>
            <option>Dryseeded - PSB RC62 (NAGUILIAN)</option>
            <option>Dryseeded - PSB RC68 (SACOBIA)</option>
            <option>Dryseeded - PSB RC70 (BAMBAN)</option>
            <option>Dryseeded - PSB RC16 (ENNANO)</option>
            <option>Dryseeded - PSB RC24 (CAGAYAN)</option>
            <option>Dryseeded - PSB RC42 (BALIWAG)</option>
            <option>Dryseeded - PSB RC60 (TUGATOG)</option>
            <option>Dryseeded - PSB RC346 (SAHOD-ULAN 11)</option>
            <option>Cool Elevated - PSB RC44 (GOHANG)</option>
            <option>Cool Elevated - PSB RC46 (SUMADEL)</option>
            <option>Cool Elevated - PSB RC92 (SAGADA)</option>
            <option>Cool Elevated - PSB RC94 (HUNGDUAN)</option>
            <option>Cool Elevated - PSB RC96 (IBULAO)</option>
            <option>Cool Elevated - NSIC RC 104 (BALILI)</option>
            <option>Saline - PSB RC48 (HAGONOY)</option>
            <option>Saline - PSB RC50 (BICOL)</option>
            <option>Saline - PSB RC84 (SIPOCOT)</option>
            <option>Saline - PSB RC86 (MATNOG)</option>
            <option>Saline - PSB RC88 (NAGA)</option>
            <option>Saline - PSB RC90 (BUGUEY)</option>
            <option>Saline - NSIC RC 106 (SUMILAO)</option>
            <option>Saline - NSIC RC 108 (ANAHAWAN)</option>
            <option>Saline - NSIC RC 182 (SALINAS 1)</option>
            <option>Saline - NSIC RC 184 (SALINAS 2)</option>
            <option>Saline - NSIC RC 186 (SALINAS 3)</option>
            <option>Saline - NSIC RC 188 (SALINAS 4)</option>
            <option>Saline - NSIC RC 190 (SALINAS 5)</option>
            <option>Saline - NSIC RC 290 (SALINAS 6)</option>
            <option>Saline - NSIC RC 292 (SALINAS 7)</option>
            <option>Saline - NSIC RC 294 (SALINAS 8)</option>
            <option>Saline - NSIC RC 296 (SALINAS 9)</option>
            <option>Saline - NSIC RC 324 (SALINAS 10)</option>
            <option>Saline - NSIC RC 330 (SALINAS 13)</option>
            <option>Saline - NSIC RC 332 (SALINAS 14)</option>
            <option>Saline - NSIC RC 338 (SALINAS 17)</option>
            <option>Saline - NSIC RC 340 (SALINAS 18)</option>
            <option>Saline - NSIC RC 390 (SALINAS 19)</option>
            <option>Saline - NSIC RC 392 (SALINAS 20)</option>
            <option>Saline - NSIC RC 462 (SALINAS 21)</option>
            <option>Saline - NSIC RC 464 (SALINAS 22)</option>
            <option>Saline - NSIC RC 466 (SALINAS 23)</option>
            <option>Saline - NSIC RC 468 (SALINAS 24)</option>
            <option>Saline - NSIC RC 470 (SALINAS 25)</option>
            <option>Saline - NSIC RC 528 (SALINAS 26)</option>
            <option>Saline - NSIC RC 530 (SALINAS 27)</option>
            <option>Saline - NSIC RC 532 (SALINAS 28)</option>
            <option>Saline - NSIC RC 534 (SALINAS 29)</option>
            <option>Saline - NSIC RC 536 (SALINAS 30)</option>
            <option>Saline - NSIC RC 554 (SALINAS 31)</option>
            <option>Saline - NSIC RC 556 (SALINAS 32)</option>
            <option>Upland - PSB RC1 (MAKILING)</option>
            <option>Upland - PSB RC3 (GINILINGAN PUTI)</option>
            <option>Upland - PSB RC5 (ARAYAT)</option>
            <option>Upland - PSB RC7 (BANAHAW)</option>
            <option>Upland - NSIC RC 9 (APO)</option>
            <option>Upland - NSIC RC 11 (CANLAON)</option>
            <option>Upland - NSIC RC 23 (KATIHAN 1)</option>
            <option>Upland - NSIC RC 25 (KATIHAN 2)</option>
            <option>Upland - NSIC RC 27 (KATIHAN 3)</option>
            <option>Upland - NSIC RC 29 (KATIHAN 4)</option>
            <option>Arize Bigante Plus (NSIC Rc 314H)</option>
            <option>Arize Habilis Plus (NSIC Rc 410)</option>
            <option>Bigante (NSIC Rc 124H)</option>
            <option>Bioseed 401 (NSIC Rc 162H)</option>
            <option>Frontline S6003 (NSSIC Rc 376)</option>
        </select> 
        </div>

        <div style="text-align:left; padding-left: 0px; padding-bottom: 10px; margin-left: 0px;">
          <label>Yield</label>
          <input type="text" type="number" name="yield" min="0" placeholder="ha." required="">
        </div>
      <div>
        <input class="inputs" type="number" name="income" min="0" placeholder="Income" required="">
      </div>
      <div>
        <input class="inputs" type="number" name="day" min="1" max="32" placeholder="Day" required="">
      </div>
      <div>
        <select class="inputs" name="month">
          <option>January</option>
          <option>February</option>
          <option>March</option>
          <option>April</option>
          <option>May</option>
          <option>June</option>
          <option>July</option>
          <option>August</option>
          <option>September</option>
          <option>October</option>
          <option>November</option>
          <option>December</option>
        </select>
      </div>
      <div>
        <input class="inputs" type="number" name="year" min="0" placeholder="Year" required="">
      </div>
      <div>
        <select class="inputs" required="" name="gain_loss">
          <option>Gain</option>
          <option>Loss</option>
        </select>
      </div>
      <div>
        <textarea class="inputs" required="" rows="3" placeholder="Your crop comment" name="feedback"></textarea>
      </div>


  <input name="insert_btn" class="btn btn-primary" id="save_btn" type="submit" value="ADD"/>
   <button type="reset" class="btn btn-danger" id="reset_btn">RESET</button>
   </div>
</form>
</center>


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
