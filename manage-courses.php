<?php session_start();
include('includes/dbconnection.php');
if (strlen($_SESSION['aid'] == 0)) {
    header('location:logout.php');
} else {

    if (isset($_GET['del'])) {
        $courseid = $_GET['del'];
        $query = mysqli_query($con, "delete from tbl_course where cid='$courseid'");
        echo '<script>window.location.href=manage-courses.php</script>';
    }
?>

    <!DOCTYPE html>

    <head>
        <title>Manage Courses</title>
        <!-- Bootstrap Core CSS -->
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    </head>

    <body>

        <div id="wrapper">
            <!-- Navigation -->
            <?php include('leftbar.php') ?>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">VIEW COURSES</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <tr>
                                <th>S No</th>
                                <th>Short Name</th>
                                <th>Full Name</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <?php $query = mysqli_query($con, "select * from tbl_course");
                                $sn = 1;
                                while ($res = mysqli_fetch_array($query)) { ?>
                            <tr class="odd gradeX">
                                <td><?php echo $sn ?></td>
                                <td><?php echo htmlentities(strtoupper($res['cshort'])); ?></td>
                                <td><?php echo htmlentities(strtoupper($res['cfull'])); ?></td>
                                <td><?php echo htmlentities($res['cdate']); ?></td>
                                <td>&nbsp;&nbsp;&nbsp;
                                    <a href="manage-courses.php?del=<?php echo htmlentities($res['cid']); ?>" class="btn btn-danger"">Delete</a>
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