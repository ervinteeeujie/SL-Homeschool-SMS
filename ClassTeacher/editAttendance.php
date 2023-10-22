<?php 
error_reporting(0);
include '../Includes/dbcon.php';
include '../Includes/session.php';

if(isset($_POST['Update'])){
  
  $admissionNo=$_POST['admissionNo']; //problem might be smtg to do with student admission number
  
  $check=$_POST['check'];
  $N = count($admissionNo); # this part got error
  echo "<script type = \"text/javascript\">
  window.location = (\"editAttendance.php\")
  </script>";
  $status = "";
  

      for($i = 0; $i < $N; $i++)
      {
              $admissionNo[$i]; //admission Number
              

              if(isset($check[$i])) //the checked checkboxes
              {
                    $qquery=mysqli_query($conn,"update tblattendance set status='1' where admissionNo = '$check[$i]'");
                    $qquery=mysqli_query($conn,"update tblattendance set status='0' where !admissionNo = '$check[$i]'");

                    if ($qquery) {

                        $statusMsg = "<div class='alert alert-success'  style='margin-right:700px;'>Attendance Taken Successfully!</div>";
                         
                    }
                    else
                    {
                        $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
                      }
                
              }

              else{
                $qquery=mysqli_query($conn,"update tblattendance set status='0' where admissionNo");
              }
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/attnlg.jpg" rel="icon">
  <title>Dashboard</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
      <?php include "Includes/sidebar.php";?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
       <?php include "Includes/topbar.php";?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Class Attendance</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">View Class Attendance</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">View Class Attendance</h6>
                    <?php echo $statusMsg; ?>
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="form-group row mb-3">
                        <div class="col-xl-6">
                        <label class="form-control-label">Select Date<span class="text-danger ml-2">*</span></label>
                            <input type="date" class="form-control" name="dateTaken" id="exampleInputFirstName" placeholder="Class Arm Name">
                        </div>
                        <!-- <div class="col-xl-6">
                        <label class="form-control-label">Class Arm Name<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control" name="classArmName" value="<?php echo $row['classArmName'];?>" id="exampleInputFirstName" placeholder="Class Arm Name">
                        </div> -->
                    </div>
                    <button type="submit" name="view" class="btn btn-primary">View Attendance</button>
                  </form>
                </div>
              </div>


              <!-- Input Group -->
              <form method="post">
                 <div class="row">
              <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Class Attendance</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Other Name</th>
                        <th>Admission No</th>
                        <th>Class Subject</th>
                        <th>Class Section</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                   
                    <tbody>

                    <!-- need to be able to link the date with the status so it will only change the status for the date
                and also need to update the status (cannot reset cause what if they press wrong and go away)
                there is a clue at create class line 22 on how to do it-->
                  <?php

                    if(isset($_POST['view'])){ // choose date for attendance part
                      
                      $dateTaken =  $_POST['dateTaken'];
                      
                      $query = "SELECT tblattendance.Id,tblattendance.dateTimeTaken,tblclass.className,
                      tblclassarms.classArmName,tblsessionterm.sessionName,tblsessionterm.termId,tblterm.termName,
                      tblstudents.firstName,tblstudents.lastName,tblstudents.otherName,tblstudents.admissionNumber
                      FROM tblattendance
                      INNER JOIN tblclass ON tblclass.Id = tblattendance.classId
                      INNER JOIN tblclassarms ON tblclassarms.Id = tblattendance.classArmId
                      INNER JOIN tblsessionterm ON tblsessionterm.Id = tblattendance.sessionTermId
                      INNER JOIN tblterm ON tblterm.Id = tblsessionterm.termId
                      INNER JOIN tblstudents ON tblstudents.admissionNumber = tblattendance.admissionNo
                      where tblattendance.dateTimeTaken = '$dateTaken' and tblattendance.classId = '$_SESSION[classId]' and tblattendance.classArmId = '$_SESSION[classArmId]'"; //not important

                      $rs = $conn->query($query);
                      $num = $rs->num_rows;
                      $sn=0;
                      $status="";
                      if($num > 0)
                      { 
                        while ($rows = $rs->fetch_assoc())
                          {
                             $sn = $sn + 1;
                            echo"
                              <tr>
                                <td>".$sn."</td>
                                 <td>".$rows['firstName']."</td>
                                <td>".$rows['lastName']."</td>
                                <td>".$rows['otherName']."</td>
                                <td>".$rows['admissionNumber']."</td>
                                <td>".$rows['className']."</td>
                                <td>".$rows['classArmName']."</td>
                                <td><input name='check[]' type='checkbox' value=".$rows['admissionNumber']." class='form-control'></td>
                              </tr>";
                              echo "<input name='admissionNo[]' value=".$rows['admissionNumber']." type='visible' class='form-control'>";
                          }
                      }
                      else
                      {
                           echo   
                           "<div class='alert alert-danger' role='alert'>
                            No Record Found!
                            </div>";
                      }
                    }
                      ?>
                    </tbody>
                  </table>
                  <br>
                  <button type="submit" name="Update" class="btn btn-primary">Update</button>
                </form>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!--Row-->

          <!-- Documentation Link -->
          <!-- <div class="row">
            <div class="col-lg-12 text-center">
              <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
                  target="_blank">
                  bootstrap forms documentations.</a> and <a
                  href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                  groups documentations</a></p>
            </div>
          </div> -->

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
       <?php include "Includes/footer.php";?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
   <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
</body>

</html>