<!DOCTYPE html>
<html lang="en">
<?php

include("connection.php");
session_start();

    $id=$_SESSION['lab_id'];

        
     $sql = "SELECT * FROM laboratory where lab_id = '$id'";
     $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result)>0) {
        
    while($row = mysqli_fetch_assoc($result)) {
         $lab_name = $row["lab_name"];
        $lab_assistant_name = $row["lab_assistant_name"];
        $lab_address = $row["lab_address"];
        $lab_contact_no = $row["lab_contact_no"];
        $city = $row["city"];
        $state=$row["state"];
        $pincode=$row["pincode"];
        $email=$row["email"];
    }
    }
    
?>

<!-- index22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="lab_dashboard.php" class="logo">
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
                            <a href="lab_dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <!-- <li class="active">
                            <a href="#"><i class="fa fa-wheelchair"></i> <span>Patient Information</span></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper" style="margin-top:-80px;">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="lab_edit-profile.php" class="btn btn-primary"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>
                </div>
                <div class="card-box profile-header" style="background-color:powderblue;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap" style="border-radius:80px;">
                                    <div class="profile-img" >
                                        <a href="#"><img class="avatar" src="<?php echo $img ?>" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $lab_assistant_name ?></h3>
                                                <small class="text-muted"><?php echo $email ?></small>
                                                <div class="staff-id"><?php echo $id  ?><br><br><br><br><br></div>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Lab Name:</span>
                                                    <span class="text"><?php echo $lab_name ?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><?php echo $lab_contact_no ?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><?php echo $lab_address ?></span>
                                                </li>
                                                <li>
                                                    <span class="title">City:</span>
                                                    <span class="text"><?php echo $city ?></span>
                                                </li>
                                                <li>
                                                    <span class="title">State:</span>
                                                    <span class="text"><?php echo $state ?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Pincode:</span>
                                                    <span class="text"><?php echo $pincode ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
          
            </div>
            <center><div>
                                  <label style="font-size:20px;margin-left:700px;">Enter Patient ID:</label>
                                   <input type="text" name="patient_id" style="height:32px;"><!-- <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->&nbsp;&nbsp;&nbsp;<button name="submit" value="Submit" class="btn btn-primary" style="width:120px;height:34px;margin-left: -10;margin-left: -10;margin-right: 59px;"><a href="index_lab_report.php" style="color:white;">Submit</a></button><br><a href="#" style="margin-left:850px;font-size:20px;text-decoration:underline;">Scan QR</a>
                                </div></center>
                                <br>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>


<!-- index22:59-->
</html>