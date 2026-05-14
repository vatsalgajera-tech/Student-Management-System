<?php session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_GET['del'])) {
        $sid = $_GET['del'];
        $query = mysqli_query($con, "delete from registration where id='$sid'");
        echo "<script>window.location.href='manage-students.php'</script>";
    }
?>
    <!DOCTYPE html>

    <head>
        <title>Manage Students</title>
        <!-- Bootstrap Core CSS -->
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include('leftbar.php') ?>;

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header"> VIEW STUDENTS</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <tr>
                                <th>S No</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Income</th>
                                <th>Category</th>
                                <th>Mobile No</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <?php
                                $query = mysqli_query($con, "select * from registration left join tbl_course on tbl_course.cshort=registration.course");
                                $sn = 1;
                                while ($res = mysqli_fetch_array($query)) {
                                ?>
                            <tr class="odd gradeX">
                                <td><?php echo $sn ?></td>
                                <td><?php echo htmlentities(strtoupper($res['fname'] . " " . $res['lname'])); ?></td>
                                <td><?php echo htmlentities(strtoupper($res['gender'])); ?></td>
                                <td><?php echo htmlentities($res['income']); ?></td>
                                <td><?php echo htmlentities(strtoupper($res['category'])); ?></td>
                                <td><?php echo htmlentities(strtoupper($res['mobno'])); ?></td>
                                <td><?php echo htmlentities(strtoupper($res['emailid'])); ?></td>
                                <td><?php echo htmlentities(strtoupper($res['country'])); ?></td>
                                <td width="100">&nbsp;&nbsp;
                                    <a href="manage-students.php?del=<?php echo htmlentities($res['id']); ?>" class="btn btn-danger">Delete</a>

                                </td>

                            </tr>

                        <?php $sn++;
                                } ?>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php } ?>