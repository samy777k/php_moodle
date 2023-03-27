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
$query="SELECT * FROM questions WHERE id2 =$id";
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
					<h4 class="card-title" id="basic-layout-form">Add Quize</h4>
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
					
				</div>
				<div class="card-content collapse show">
					<div class="card-body">
					
						<form class="form" action="editQuastionDB.php?id=<?php echo $row['id2'] ?>" method="POST">
							<div class="form-body">
								
              
								<div class="row">
									<div class="col-md-9">
										<div class="form-group">
											<label for="projectinput1">Question</label>
											<input type="text" id="projectinput1" class="form-control" value=<?php echo $row['questionName'] ?> name="question_name">
                      										</div>
									</div>

									<div class="col-md-7">
										<div class="form-group">
											<label for="projectinput2">Option 1</label>
											<input type="text" id="projectinput2" class="form-control" name="o1" value=<?php echo $row['option1'] ?>>
										</div>
									</div>

                                    <div class="col-md-7">
										<div class="form-group">
											<label for="projectinput2">Option 2</label>
											<input type="text" id="projectinput2" class="form-control" name="o2" value=<?php echo $row['option2'] ?>>
										</div>
									</div>

                                    <div class="col-md-7">
										<div class="form-group">
											<label for="projectinput2">Option 3</label>
											<input type="text" id="projectinput2" class="form-control" name="o3" value=<?php echo $row['option3'] ?>>
										</div>
									</div>

                                    <div class="col-md-7">
										<div class="form-group">
											<label for="projectinput2">total marks</label>
											<input type="number" id="projectinput2" class="form-control" name="num_mark" min="1" max="10" value=<?php echo $row['mark'] ?>>
										</div>
									</div>


                                    <div class="col-md-7">
										<div class="form-group">
										<h5><label for="projectinput2">answer</label></h5>
											<div class="input-group mt-0">
                                           <select name="answer" class="form-control">
                                               
                                        <option value="1">option1</option>;
                                        <option value="2">option2</option>;
                                        <option value="3">option3</option>;
                                                
                                               </select>
										</div>
									</div>

                                    <div class="col-md-7">
										<div class="form-group">
										<h5><label for="projectinput2">Course Name</label></h5>
											<div class="input-group mt-0">
                                           <select name="course" class="form-control">
                                               <?php
                                               include_once('../connect/connection.php');
                                                  $query="SELECT * FROM courses";
                                                  $result=mysqli_query($connection,$query);
                                                  if(mysqli_num_rows($result)>0){
                                                      while($row=mysqli_fetch_assoc($result)){
                                                          echo "<option value=".$row['id'].">".$row['name']."</option>";
                                                      }
                                                  }
                                               ?>
                                               </select>
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