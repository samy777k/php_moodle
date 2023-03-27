<?php
session_start();
if(isset($_SESSION['is_LoginS']) && $_SESSION['is_LoginS']==true){

}else{
    header('location: ../Login/stud/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">


<?php
include_once('../thingsS/head.php');
include_once('../connect/connection.php');
?>

<?php
/*
    $id=$_GET['id3'];
    $query3="INSERT INTO onlinet(id_on) VALUE ('$id')";
    $result3=mysqli_query($connection,$query3);

*/
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include_once('../thingsS/sidebar.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                   

                </nav>
             
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   
                    <div class="card shadow mb-4">
                    <h1 style="color:blue;text-align:center;"><?php echo $_GET['name'] ?></h1>
                    </div>
                    <br>
                    <!-- Content Row -->

                   
                    <?php
                       $query="SELECT * FROM questions WHERE course_id='".$_GET['id']."'";
                       $result=mysqli_query($connection,$query);
                       $mark=0;
                       $num=mysqli_num_rows($result);
                           for($i=1;$i<=$num;$i++){
                        $row=mysqli_fetch_assoc($result);
                        $mark+=$row['mark'];
                        $_SESSION['mark']=$mark;
                    ?>

                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->                       
                        <div>
                            
                                <div class="card-header py-3">
                                    
                                    <h5 class="m-0 font-weight-bold text-primary"> <?php echo "$i _ ".$row['questionName']."" ?></h5>
                                </div>
                                <div class="card-body">
                                    <form action='viewMarks.php?id=<?php echo $_GET['id'] ?>' method="POST">
                                <h5> <input type="radio" value="1" name="options[<?php echo $row['id2'] ?>]" class="radio"> <?php echo $row['option1'] ?></h5>
                                <h5> <input type="radio" value="2" name="options[<?php echo $row['id2'] ?>]" class="radio"> <?php echo $row['option2'] ?></h5>
                                <h5> <input type="radio" value="3" name="options[<?php echo $row['id2'] ?>]" class="radio"> <?php echo $row['option3'] ?></h5>
                               
                                </div>
                            </div>

                        <!-- Earnings (Monthly) Card Example -->
                       
                    </div>
<?php
                     
                    
                    }

?>
<br>

    <button style="background-color: #0096FF;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" type="submit">submit</button>
</form>
                    <!-- Content Row -->

                 

                    <!-- Content Row -->
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
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
   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>