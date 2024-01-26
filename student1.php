<?php
session_start();
if (isset($_SESSION['id']))
{
$id = $_SESSION['id'];
$nm = $_SESSION['name'];
}
else
header('location:index.php');

$_SESSION["file"]='users';

if (isset($_POST['add']))
{        
    $d=$_POST["d"];  
    $e=$_POST["e"]; 
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];
    $prn=$_POST["prn"];
    $roll_no=$_POST["roll_no"];
    $class=$_POST["class"];

    //echo $val;                          
    $_SESSION["file"]='student1';
    include 'config.php'; 
    $sql = "INSERT INTO users (student_name, department, mobile, email,prn,roll_no,class, status1) 
    VALUES ('".$d."', '".$e."','".$mobile."','".$email."','".$prn."','".$roll_no."','".$class."', 'student')";

      // echo $sql; exit;
    mysqli_set_charset($conn, 'utf8');

  // echo $sql; exit;
    if (mysqli_query($conn, $sql)) 
        {
        header('location:student1.php');
    } else {
        echo "Error:". mysqli_error($conn);
    }
    mysqli_close($conn);
    }
    
    

?>



<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Add/Delete Student </title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== 
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <?php include 'topbar.php';?>
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
             <div class="scroll-sidebar">
               <?php include 'adminsidebar.php';?>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
           
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                                     <?php include 'stat.php';?>


                                   
                                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                 <form method="POST" action="#" accept-charset="UTF-8" ><input name="_token" type="hidden">
                <div class="row">
                    <div class="col-md-8">
                      
                           
                                
                                    <div>
                                        <h4 class="card-title">Add Users- Add Student </h4>
                                         <div class="form-group row">
                                      
                                            <input type="text" class="form-control" name ="d" placeholder="Add Student Name"><p><p>

                                    </div>

                                    <div class="form-group row">
                                      
                                            <input type="int" class="form-control" name ="mobile" placeholder="Student's mobile number"><p><p>

                                    </div>
                                    <div class="form-group row">
                                      
                                            <input type="email" class="form-control" name ="email" placeholder="E-mail"><p><p>

                                    </div>
                                    
                                    <div class="form-group row">
                                      
                                            <input type="text" class="form-control" name ="prn" placeholder="PRN"><p><p>

                                    </div>

                                    <div class="form-group row">
                                      
                                            <input type="int" class="form-control" name ="roll_no" placeholder="roll_no"><p><p>

                                    </div></div>  
                                                            <div class="dropdown">
                                                            <label for="dropdown">Select Class:</label>
                                                        <select id="dropdown" name="class">
                                                        <option value="FY-A">FY-A</option>
                                                        <option value="FY-B">FY-B</option>
                                                        <option value="SY-A">SY-A</option>
                                                        <option value="SY-B">SY-B</option>
                                                        <option value="TY-A">TY-A</option>
                                                        <option value="TY-B">TY-B</option>
                                                        <option value="BTech-A">BTech-A</option>
                                                        <option value="BTech-B">BTech-B</option>
                                                       
                                                        </select>

                                </div>
                               <!-- <div class="dropdown">
                                                            <label for="dropdown">Select Status:</label>
                                                        <select id="dropdown" name="status1">
                                                        <option value="Student">Student</option>
                                                        <option value="Teacher">Teacher</option>
                                                        
                                                        
                                                       
                                                        </select>

                                </div>
    -->


                                        <div class="form-group row">
                                       <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr style="background-color: lightskyblue; font-weight: bolder;">
                                                <th>Student Name</th>    <th>Department</th>    <th>mobile</th>   <th>email</th>    <th>prn</th> <th>roll_no</th> <th>Class</th>                                  
                                            </tr>
                                        </thead>
                                        

                                        <div class="form-group row">
                                      
                                      <select class="form-control" name ="e">
                                          <option value=""> Select Department</option>
                                          
                                           <?php
                                           include 'config.php';
                                                  $sql = "SELECT * from dept ORDER BY department ASC";
                                                  //echo $sql; exit;
                                                  mysqli_set_charset( $conn, 'utf8');
                                                  $result = mysqli_query($conn, $sql);
                                                  
                                                  if (mysqli_num_rows($result) > 0) 
                                                  {
                                                  
                                                      // output data of each row
                                                      while($row = mysqli_fetch_assoc($result)) 
                                                      {
                                                       
                                                          $e=$row["department"];
                                                         
                                                  ?>
                                                  <option value="<?php echo $e;?>"><?php echo $e;?></option>
                                                
                                                   <?php
                                                  }
                                                  }
                                                  mysqli_close($conn);
                                                  ?>


                                            
                                      </select>

                              </div>  

                              
                                     
                                                                                            <div class="form-group row">
                                      
                                      <input class="btn btn-info" id="to-recover" type="submit" value="Submit" name="add">

                              </div>
                                               
 <?php

                                                        include 'config.php';
                                                        $sql = "SELECT *
                                                        FROM users
                                                        WHERE status1 = 'student' ORDER BY student_name ASC";
                                                        //echo $sql; exit;
                                                        mysqli_set_charset( $conn, 'utf8');
                                                        $result = mysqli_query($conn, $sql);
                                                        
                                                        if (mysqli_num_rows($result) > 0) {
                                                        
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                             
                                                                $d=$row["student_name"];
                                                                $e=$row["department"];
                                                                $mobile=$row["mobile"];
                                                                $email=$row["email"];
                                                                $prn=$row["prn"];
                                                                $roll_no=$row["roll_no"];
                                                                $class=$row["class"];

                                                        ?>
                                                        <tr><td><?php echo $d;?></td>
                                                        <td><?php echo $e;?></td>
                                                        <td><?php echo $mobile;?></td>
                                                        <td><?php echo $email;?></td>
                                                        <td><?php echo $prn;?></td>
                                                        <td><?php echo $roll_no;?></td>
                                                        <td><?php echo $class;?></td>
                                                       <td><?php echo "<a href=\"delete.php?id=".$row['id']."\">Delete</a>";?></td>
                                                        </tr>
                                                        <?php
                                                        }
                                                        }
                                                        mysqli_close($conn);
                                                        ?>


                                                    
                                        </table>

                                    </div>
                                    </div>

                                
                                
                            
                       
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                   

                
        </form>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Right Reserved . Designed and Developed by Shelar.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>