<?php session_start();
include('includes/dbconnection.php');

if (isset($_POST['submit'])) {
    $uname = $_POST['id'];
    $Password = $_POST['password'];
    $query = mysqli_query($con, "select ID,loginid from tbl_login where  loginid='$uname' && password='$Password' ");
    $ret = mysqli_fetch_array($query);
    if ($ret > 0) {
        $_SESSION['aid'] = $ret['ID'];
        $_SESSION['login'] = $ret['loginid'];
        header('location:dashboard.php');
    } else {
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Student Record Management System | Login </title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: linear-gradient(to left, #1565C0, #8E24AA);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .a {
            color: white;
            font-size: 30px;
            text-align: center;
            margin: 30px;
            font-weight: bold;
        }

        .b {
            background-color: white;
            border-radius: 15px;
            margin: 50px 500px;
            padding: 20px 40px 50px 40px;
            height: auto;
        }

        .c {
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
        }

        .d {
            font-size: 12px;
        }

        .btn {
            height: 40px;
            background-image: linear-gradient(to left, #8E24AA, #1565C0);
            font-weight: bold;
            border-radius: 30px;
            border-color: white;
            color: white;
            width: 287px;
        }

        .btn:hover {
            background-image: linear-gradient(to left, #1565C0, #8E24AA);
            color: white;
        }

        .link {
            margin-left: 80px;
        }
    </style>
</head>

<body>
    <p class="a">Student Record Management System</p>

    <div class=" b">
        <br>
        <p class="c">Welcome</p>
        <br>
        <form method="post">
            <fieldset>
                <div>
                    <p class="d">Username</p>
                    <input class="form-control" placeholder="Enter Admin ID" id="id" name="id" type="text" required autofocus autocomplete="off">
                </div>
                <br>
                <div>
                    <p class="d">Password</p>
                    <input class="form-control" placeholder="Enter Password" id="password" name="password" type="password" value="" required>
                </div>
                <br><br>
                <input type="submit" value="Login" name="submit" class="btn"><br><br>
                <a href="password-recovery.php" class="link">Forget Password?</a>
            </fieldset>
        </form>
    </div>
</body>

</html>