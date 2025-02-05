<?php 
include "config.php";
?>

<!doctype html>
<html>
    <head>
        <title>How to Delete Record from MySQL Table with AJAX</title>
        <link href='style.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='script.js' type='text/javascript'></script>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <style>
      * {
      box-sizing: border-box;
      }
      body {
      font-family: Roboto, Helvetica, sans-serif;
      }
      /* Fix the button on the left side of the page */
      .open-btn {
      display: flex;
      justify-content: left;
      }
      /* Style and fix the button on the page */
      .open-button {
      background-color: #1c87c9;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      }
      /* Position the Popup form */
      .login-popup {
      position: static;
      text-align: center;
      width: 100%;
      }
      /* Hide the Popup form */
      .form-popup {
     display: none;
      position: fixed;
      left: 45%;
      top:5%;
      width: 40%;
      transform: translate(-50%,5%);
      border: 2px solid #666;
      height: 80%;
      z-index: 9;
      overflow-y : scroll;

      }
      /* Styles for the form container */
      .form-container {
      max-width: 700px;
      padding: 20px;
      }
      /* Full-width for input fields */
      .form-container input[type=text], .form-container input[type=password], .form-container input[type=date] {
      width: 50%;
      padding: 10px;
      margin: 5px 0 22px 0;
      border: none;
      background: #eee;
      }
      /* When the inputs get focus, do something */
      .form-container input[type=text]:focus, .form-container input[type=password]:focus, .form-container input[type=date]:focus {
      background-color: #ddd;
      outline: none;
      }
      /* Style submit/login button */
      .form-container .btn{
       background-color: #000044;
      color: #fff;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
      }
      .form-container input[type=submit]  {
       background-color: #000044;
      color: #fff;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      width: 40%;
      margin-bottom:10px;
      opacity: 0.8;
      }
      /* Style cancel button */
      .form-container .cancel {
      background-color: #cc0000;
      }
      /* Hover effects for buttons */
      .form-container .btn:hover, .open-button:hover, .form-container input[type=submit]:hover {
      opacity: 1;
      }
      table
      {
        border-radius:20px;
      overflow: hidden;
      border-collapse: collapse;
      border-color:white;

      }
      th
      {
        background-color:#009efb;
        padding:10px;
        border-color:#009efb;
        height:60px;
        color:white;
      }
      tr:hover{background-color:#80d0ff;}
      td
      {
       
        height:45px;
        padding:9px;
      }
    </style>
    </head>
    <body>
      <div class="main-wrapper" style="padding:20px">
        <div class="header">
      <div class="header-left">
        <a href="patient_dashboard.php" class="logo">
          <img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
        </a>
      </div>
       <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
               
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
                            <span class="status online"></span>
                        </span> 
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                       
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        
                        <li class="active">
                            <a href="patient_dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        
                         <!-- <li class="active">
                            <a href="patient_allergy_habit.php"><i class="fa fa-dashboard"></i><span>Allergy And Habit</span></a>
                        </li> -->
                            </ul>
                        </li>
                    </ul>
                </div>

            </div> </div> <center><br><br><br><br><br><br> <div style="width:800px;margin-left:15%; "> 
              
     
       <div class="container" style="width:800px;">
        <form action="#" method="post" class="form-container" style="width:400px;height:150px;margin-left:-400px;">
                    <br> 
                    <table  class="date" style="background-color:white;margin-left:170px;" border="0">
                      <tr><th>From:</th><th>To:</th></tr>
                      <tr><td>
                    <input  type="date" name="date1" value="<?php echo date('d-m-Y');?>" style="width:150px;"></td><td style="width:1000px;">
                    <input type="date" name="date2" value="<?php echo date('d-m-Y');?>" style="width:150px;"></td></tr> </table>
                    <br>
                     <input type="submit" name="submit" style="background-color: #009efb;border-radius:10%;margin-left:260px;">
               
          </form> 
        <br><br><br><br><br><br><br>
            <table border="1" style="width:900px;margin-left:-70px;">
                <tr style='background:whitesmoke;width:400px;'>
                    <th>S.no</th>
                    <th>Date of prescription</th>
                    <th>Prescribed by</th>
                    <th>Medicine</th>
                    <th>Dosage</th>
                    <th>Frequency</th>
                    <th>Notes</th>
                </tr>

                <?php 
                $dt1=date('d-m-Y');
                 $dt2=date('d-m-Y');
                
                if(isset($_POST['submit']))
                {
                        $dt1=$_POST['date1'];
                        $dt2=$_POST['date2'];
                    
                }
        $query = "SELECT * FROM patient_1 where TRIM(medicine) > '' AND  date between '$dt1' and '$dt2' ";
                $result = mysqli_query($con,$query);
                    
                $count = 1;
                while($row = mysqli_fetch_array($result) ){
                    $date= $row['date'];
                    $id = $row['id']; 
                    $med = $row['medicine'];
                    $med_arr = explode (",", $med);
                    $note = $row['note'];
                    $dosage = $row['dosage'];
                    $dose = $row['dosage_type'];
                    $f = $row['frequency'];
                    $day = $row['frequency_days'];
                ?>
                    <tr>
                        <td align='center'><?php echo $count; ?></td>
                        <td><?php echo $date; ?></td>
                        <td></td>
                        <td><ul><?php $ite=0; $var=sizeof($med_arr);
                        while($ite!=$var) {?><li><?php echo $med_arr[$ite]; ?></li><?php $ite=$ite+1; } ?></ul></td>
                        <td><?php echo $dosage." ".$dose ?> </td>
                        <td><?php echo $f." time a day for ".$day." days" ?> </td>
                        <td><?php echo $note; ?></td>      
                    </tr>
                <?php
                    $count++;
                }
                
                ?>
                
            </table>
        </div>
        <br>
      </div>
</center>
    </body>
</html>