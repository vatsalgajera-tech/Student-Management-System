<?php session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid'] == 0)) {
	header('location:logout.php');
} else {
	//id course	fname lname	gender gname ocp income	category pchal nationality mobno emailid country state dist padd
	if (isset($_POST['submit'])) {
		$cshort = $_POST['course-short'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gname = $_POST['gname'];
		$ocp = $_POST['ocp'];
		$gender = $_POST['gender'];
		$income = $_POST['income'];
		$category = $_POST['category'];
		$physicallych = $_POST['ph'];
		$nation = $_POST['nation'];
		$mobno = $_POST['mobno'];
		$email = $_POST['email'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$paddress = $_POST['padd'];

		$query = mysqli_query($con, "INSERT INTO registration(course, fname, lname, gender, gname, ocp, income, category, pchal, nationality, mobno,emailid, country, state, dist, padd)
		value('$cshort','$fname','$lname','$gender','$gname','$ocp','$income','$category','$physicallych','$nation','$mobno','$email','$country','$state','$city','$paddress')");
		if ($query) {
			echo "<script>window.location.href='manage-students.php'</script>";
		} else {
			echo '<script>alert("Something went wrong. Please try again")</script>';
			echo "<script>window.location.href='register.php'</script>";
		}
	}
?>

	<!DOCTYPE html>

	<head>
		<title>Student Registration</title>
		<!-- Bootstrap Core CSS -->
		<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
		<link href="dist/css/sb-admin-2.css" rel="stylesheet">
	</head>

	<body>
		<form method="post">
			<div id="wrapper">
				<?php include('leftbar.php'); ?>
				<div id="page-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<h4 class="page-header">STUDENT REGISTRATION</h4>
						</div>
					</div>
					<div class="row">
						<div class="panel-body">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="col-lg-2">
										<label>First Name </label>
									</div>
									<div class="col-lg-4">
										<input class="form-control" name="fname" required pattern="[A-Za-z]+$" required>
									</div>
									<div class="col-lg-2">
										<label>Last Name</label>
									</div>
									<div class="col-lg-4">
										<input class="form-control" name="lname" pattern="[A-Za-z]+$" required>
									</div>
								</div>
								<br><br>

								<div class="form-group">
									<div class="col-lg-2">
										<label>Select Course </label>
									</div>
									<div class="col-lg-4">
									<select class="form-control" name="course-short" id="cshort" onchange="showSub(this.value)" required="required">
														<option VALUE="">- - SELECT - - </option>
														<?php $query = mysqli_query($con, "select * from tbl_course");
														$sn = 1;
														while ($res = mysqli_fetch_array($query)) { ?>
															<option VALUE="<?php echo htmlentities($res['cid']); ?>"><?php echo htmlentities($res['cshort'] . "-" . $res['cfull']) ?></option>


														<?php } ?>
													</select>
									</div>
									<div class="col-lg-2">
										<label>Gender</label>
									</div>
									<div class="col-lg-4">
										<input type="radio" name="gender" id="male" value="Male"> &nbsp; Male &nbsp;
										<input type="radio" name="gender" id="female" value="female"> &nbsp; Female &nbsp;
									</div>
								</div>
								<br><br>

								<div class="form-group">
									<div class="col-lg-2">
										<label>Guardian Name </label>
									</div>
									<div class="col-lg-4">
										<input class="form-control" name="gname" required pattern="[A-Za-z]+$" required>
									</div>
									<div class="col-lg-2">
										<label>Occupation</label>
									</div>
									<div class="col-lg-4">
										<input class="form-control" name="ocp" id="ocp" required>
									</div>
								</div>
								<br><br>

								<div class="form-group">
									<div class="col-lg-2">
										<label>Family Income</label>
									</div>
									<div class="col-lg-4">
										<select class="form-control" name="income" id="income" required>
											<option VALUE="">- - SELECT - -</option>
											<option VALUE="200000">200000</option>
											<option value="500000">500000</option>
											<option value="700000">700000</option>
										</select>
									</div>
									<div class="col-lg-2">
										<label>Category</label>
									</div>
									<div class="col-lg-4">
										<select class="form-control" name="category" id="category" required>
											<option VALUE="">- - SELECT - -</option>
											<option VALUE="general">General</option>
											<option value="obc">OBC</option>
											<option value="sc">SC</option>
											<option value="st">ST</option>
											<option value="other">Other</option>
										</select>
									</div>
								</div>
								<br><br>
							</div>
							<br><br>

							<div class="col-lg-12">
								<div class="form-group">
									<div class="col-lg-2">
										<label>Mobile Number </label>
									</div>
									<div class="col-lg-4">
										<input class="form-control" type="tel" name="mobno" maxlength="10" minlength="10" required>
									</div>
									<div class="col-lg-2">
										<label>Email Id</label>
									</div>
									<div class="col-lg-4">
										<input class="form-control" type="email" name="email" required>
									</div>
								</div>
								<br><br>

								<div class="form-group">
									<div class="col-lg-2">
										<label>Physically Challenged</label>
									</div>
									<div class="col-lg-4">
										<select class="form-control" name="ph" id="ph" required>
											<option VALUE="">- - SELECT - -</option>
											<option VALUE="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
									<div class="col-lg-2">
										<label>Nationality</label>
									</div>
									<div class="col-lg-4">
										<input type="text" name="nation" id="nation" class="form-control" required>
									</div>
								</div>
								<br><br>

								<div class="form-group">
									<div class="col-lg-2">
										<label>Country</label>
									</div>
									<div class="col-lg-4">
										<input type="text" class="form-control" name="country" id="country" required>
									</div>
									<div class="col-lg-2">
										<label>State</label>
									</div>
									<div class="col-lg-4">
										<input type="text" name="state" id="state" class="form-control" required>
									</div>
								</div>

								<br><br>
								<div class="form-group">
									<div class="col-lg-2">
										<label>City </label>
									</div>
									<div class="col-lg-4">
										<input type="text" name="city" id="dist" class="form-control" required>
									</div>
									<div class="col-lg-2">
										<label>Permanent Address</label>
									</div>
									<div class="col-lg-4">
										<textarea class="form-control" rows="1" name="padd" id="padd" required></textarea>
									</div>
								</div>
							</div>
							<br><br>

							<div class="form-group">
								<div class="col-lg-4">
								</div>
								<div class="col-lg-6"><br><br>
									<input type="submit" class="btn btn-primary" name="submit" value="Register"></button>
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