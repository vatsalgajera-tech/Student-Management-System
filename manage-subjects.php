<?php session_start();
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_GET['del'])){  
$courseid=$_GET['del'];
$query=mysqli_query($con,"delete from subject where subid='$courseid'");
echo "<script>window.location.href='manage-subjects.php'</script>";

}
?>

<!DOCTYPE html>

<head>
    <title>View Subject</title>
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
                    <h4 class="page-header">VIEW SUBJECTS</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tr>
                            <th>S No</th>
                            <th>Course</th>
                            <th>Subject1</th>
                            <th>Subject2</th>
                            <th>Subject3</th>
                            <th>Subject4</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                        <?php $query=mysqli_query($con,"SELECT * FROM `subject`");
                                   $sn=1;
                                while($res=mysqli_fetch_array($query)){?>	
                                        <tr class="odd gradeX">
                                            <td><?php echo $sn?></td>
                                               <td><?php echo htmlentities(strtoupper($res['cfull']));?></td>
                                            <td><?php echo htmlentities( strtoupper($res['sub1']));?></td>
                                             <td><?php echo htmlentities( strtoupper($res['sub2']));?></td>
                                             <td><?php echo htmlentities( strtoupper($res['sub3']));?></td>
                                              <td><?php echo htmlentities( strtoupper($res['sub4']));?></td>
                                            <td width="100">&nbsp;
                                             <a href="manage-subjects.php?del=<?php echo htmlentities($res['subid']); ?>" class="btn btn-danger">Delete </a></td>
                                            
                                        </tr>
                                        
                                    <?php $sn++;}?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php }  ?>