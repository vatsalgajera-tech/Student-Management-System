<?php session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid'] == 0)) {
    header('location:logout.php');
} else {


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Dashboard</title>
        <!-- Bootstrap Core CSS -->
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <form method="post">
            <div id="wrapper">

                <!-- Navigation -->
                <?php include('leftbar.php') ?>

                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="page-header">WELCOME ADMIN</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <?php $query = mysqli_query($con, "SELECT cid FROM tbl_course");
                                    $listedcourses = mysqli_num_rows($query); ?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div class="huge"><?php echo htmlentities($listedcourses); ?></div>
                                        <div>Listed Courses</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-book fa-5x"></i>
                                    </div>
                                    <?php $query1 = mysqli_query($con, "SELECT subid FROM subject");
                                    $tsubjects = mysqli_num_rows($query1); ?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo htmlentities($tsubjects); ?></div>
                                        <div>Subjects</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-fw fa-5x"></i>
                                    </div>
                                    <?php $query2 = mysqli_query($con, "SELECT id FROM registration");
                                    $totalstudents = mysqli_num_rows($query2); ?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo htmlentities($totalstudents); ?></div>
                                        <div>Total Students</div>
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