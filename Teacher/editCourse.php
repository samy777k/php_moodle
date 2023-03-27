<?php
session_start();
if(isset($_SESSION['is_Login']) && $_SESSION['is_Login']==true){

}else{
    header('location: ../Login/teach/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">


<?php
include_once('../things/head.php');
?>

<?php

include_once('../connect/connection.php');
$id=$_GET['id'];
$query="SELECT * FROM courses WHERE id = $id";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include_once('../things/sidebar.php');
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
                   

                    <!-- Content Row -->
                    <div class="row">


                    <div class="col-md-9">
			<div class="card" style="">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Add Course</h4>
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
					
				</div>
				<div class="card-content collapse show">
					<div class="card-body">
					
						<form class="form" action="editCourseDB.php?id=<?php echo $row['id']  ?>" method="POST">
							<div class="form-body">
								
              
								<div class="row">
									<div class="col-md-9">
										<div class="form-group">
											<label for="projectinput1">Course Name</label>
											<input type="text" id="projectinput1" value="<?php echo $row["name"] ?>" class="form-control" name="course_nameE" placeholder="course name">
                      										</div>
									</div>
									<div class="col-md-9">
										<div class="form-group">
											<label for="projectinput2">Total Mark</label>
											<input type="text" id="projectinput2" value="<?php echo $row["totalMarks"] ?>" class="form-control" name="course markE" placeholder="total mark">
										</div>
									</div>
								</div>

	
								</div>
							</div>

							<div class="form-actions">
								<button type="button" class="btn btn-warning mr-1">
									<i class="ft-x"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
									<i class="la la-check-square-o"></i> Save
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
                       
                    </div>

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