
<?php
        
        include('func.php');
        session_start();
        if(isset($_POST['loginsubmit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "select username from users where username='$username' and password='$password';";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)>=1)
            {
                while($row=mysqli_fetch_array($result)){
                    $userid = $row['username'];
                    $_SESSION['userid'] = $userid;
                }
            }
        }
            if($_SESSION['userid']){
                echo '<!doctype html><html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <title>Clinic Management</title>
  </head>
  <style>
    ul li{
        list-style:none;
        border-bottom:1px solid white;
        padding:15px;
        width:250px;
    }
    ul li:hover{
        background-color:#17A2FF;
        cursor:pointer;
    }
    ul li a{
        text-decoration:none !important;
        color:white;

    }
      ul li a:hover{
        
        text-decoration:none !important;
        color:white;

    }
  </style>
  <body>

    <div>
        <div class="row">
            <div class="col-md-3">
                <div style="width:100%;height:800px;background-color:#1D9BEE;padding-top:30px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <center><h3 style="color:white;font-weight:20px;font-size:30px;"><i class="lni lni-consulting"></i> Royals Clinic</h3></center><br>
                    <ul>
                         <li><a href="admin-panel.php">Dashboard</a></li>
                         <li><a href="newprescription.php">New Prescription</a></li>
                        <li><a href="prescription.php">Prescriptions</a></li>
                        <li><a href="add_doctor.php">Add Doctor</a></li>
                        <li><a href="all_doctors.php">Doctors</a></li>
                        <li><a href="add_appointment.php">New Appointment</a></li>
                        <li><a href="appointments.php">Appointments</a></li>
                        <li><a href="add_patient.php">New Patient</a></li>
                        <li><a href="all_patients.php">Patients</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
             <div class="container" style="margin-top:80px;">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="width:100%;height:150px;background-image:linear-gradient(to right,#00bfa5,#00695c);padding:20px;border-radius:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                <h4 style="color:white">Total Appointments</h4>
                                <h1 style="color:white">';
                                    $userid = $_SESSION['userid'];
                                    $query = "select count(contact) as totalapp from appointmenttb where userid='$userid';";
                                    $result = mysqli_query($con,$query);
                                    while($row=mysqli_fetch_array($result)){
                                        $total=$row['totalapp'];
                                        if($total>0)
                                             echo $total;
                                        else
                                            echo '0';
                                    }
                                echo '</h1>
                            </div><br>
                        </div>
                         <div class="col-md-4">
                            <div style="width:100%;height:150px;background-image:linear-gradient(to right,#F2B062,#E88815);padding:20px;border-radius:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                <h4 style="color:white">Total Income</h4>
                                <h1 style="color:white">$';
                                    $query = "select sum(amount) as totalamount from patienttb where payment='Paid' and userid='$userid';";
                                    $result = mysqli_query($con,$query);
                                    while($row=mysqli_fetch_array($result)){
                                        $total=$row['totalamount'];
                                        if($total>0)
                                             echo $total;
                                        else
                                            echo '0';
                                    }
                                echo '</h1>
                            </div><br>
                        </div>
                          <div class="col-md-4">
                            <div style="width:100%;height:150px;background-image:linear-gradient(to right,#F95282,#F21152);padding:20px;border-radius:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                <h4 style="color:white">Total Doctors</h4>
                                <h1 style="color:white">';
                                    $query = "select count(contact) as totaldoctors from docstb where userid='$userid';";
                                    $result = mysqli_query($con,$query);
                                    while($row=mysqli_fetch_array($result)){
                                        $total=$row['totaldoctors'];
                                        if($total>0)
                                             echo $total;
                                        else
                                             echo '0';
                                    }
                                echo '</h1>
                            </div><br>
                        </div>
                    </div>
                </div><br>
                <div class="container">
                    <h4>Search Patient</h4><br>
                      <form method="post" action="search.php">
                    <input type="text" placeholder="enter contact number" name="contact" class="form-control" style="border-radius:20px;"/><br>
                    <input type="submit" value="Search" name="searchsubmit" class="btn btn-outline-info"  style="border-radius:20px;"/>
                </form><br><br>
                   <a href="logout.php" style="position:absolute;top:20px;right:30px;font-weight:bold;font-size:20px;">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>';
            }
            else
            {
                header('location:index.php');
            }
        
    ?>
