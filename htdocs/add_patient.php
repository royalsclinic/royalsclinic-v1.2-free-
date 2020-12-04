
<?php
    session_start();
    include('func.php');
    if(isset($_POST['newpatientsubmit'])){
        $contact = $_POST['contact'];
        $name = $_POST['name'];
        $doctor = $_POST['doctor'];
        $schedule = $_POST['schedule'];
        $payment = $_POST['payment'];
        $amount = $_POST['amount'];
        $userid = $_SESSION['userid'];
        $query="insert into patienttb(contact,name,doctor,schedule,payment,amount,userid)values('$contact','$name','$doctor','$schedule','$payment','$amount','$userid');";
        $result = mysqli_query($con,$query);
        if($result){
            echo "";
        }
    }
   if(isset($_SESSION['userid'])){
    echo '<!doctype html>
<html lang="en"><head>
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
                <div style="width:100%;height:800px;background-color:#1D9BEE;padding-top:30px;">
                    <center><h3 style="color:white;font-weight:20px;font-size:30px;"><i class="lni lni-consulting"></i>  Royals Clinic</h3></center>
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
                <div class="container" style="margin-top:30px;">
                <h4>Add Patient</h4><br>
                  <form method="post" action="add_patient.php">
                    <input type="text" name="contact" placeholder="enter contact" class="form-control" style="border-radius:20px;"/><br>
                    <input type="text" name="name" placeholder="enter patient name" class="form-control" style="border-radius:20px;"/><br>
                    <input type="text" name="doctor" placeholder="enter doctor" class="form-control" style="border-radius:20px;"/><br>
                    <input type="text" name="schedule" placeholder="enter appointment time" class="form-control" style="border-radius:20px;"/><br>
                     <input type="text" name="amount" placeholder="enter payment amount" class="form-control" style="border-radius:20px;"/><br>
                    <select name="payment" class="form-control" style="border-radius:20px;">
                        <option>Paid</option>
                        <option>Not Paid</option>
                    </select><br>
                    <input type="submit" name="newpatientsubmit" value="Add" class="btn btn-outline-info" style="border-radius:20px;"/><br>
                  </form>
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
      header("location:index.php");
  }
?>

 