<?php session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid'] == 0)) {
	header('location:logout.php');
} else {

	if (isset($_POST['submit'])) {

		$cshortname = $_POST['course-short'];
		$cfullname = $_POST['course-full'];
		$cdate = $_POST['cdate'];
		$query = mysqli_query($con, "insert into tbl_course(cshort,cfull,cdate)values('$cshortname','$cfullname','$cdate')");
		if ($query) {
			echo "<script>window.location.href='manage-courses.php'</script>";
		} else {
			echo '<script>alert("Something went wrong. Please try again")</script>';
			echo '<script>window.location.href=add-course.php</script>';
		}
	}
?>

<!DOCTYPE html>

<head>
	<title>Add Course</title>
	<!-- Bootstrap Core CSS -->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	<link href="dist/css/sb-admin-2.css" rel="stylesheet">
</head>

<body>
	<form method="post">
		<div id="wrapper">

			<!-- Navigation -->
			<?php include('leftbar.php') ?>

			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="page-header">ADD COURSE</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-10">
									<div class="form-group">
										<div class="col-lg-4">
											<label>Course Short Name<span id="" style="font-size:11px;color:red">*</span> </label>
										</div>
										<div class="col-lg-6">
											<input class="form-control" name="course-short" id="cshort" required="required">
											<span id="course-availability-status" style="font-size:12px;"></span>
										</div>
									</div>
									<br><br>
									<div class="form-group">
										<div class="col-lg-4">
											<label>Course Full Name<span id="" style="font-size:11px;color:red">*</span></label>
										</div>
										<div class="col-lg-6">
											<input class="form-control" name="course-full" id="cfull" required="required">
											<span id="course-status" style="font-size:12px;"></span>
										</div>
									</div>
									<br><br>
									<div class="form-group">
										<div class="col-lg-4">
											<label>Creation Date</label>
										</div>
										<div class="col-lg-6">
											<input class="form-control" value="<?php echo date('d-m-Y'); ?>" readonly="readonly" name="cdate">

										</div>
									</div>
								</div>
								<br><br>
								<div class="form-group">
									<div class="col-lg-4">
									</div>
									<div class="col-lg-6"><br><br>
										<input type="submit" class="btn btn-primary" name="submit" value="Add Course">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>

</html>
<?php } ?>