<?php
include "../assets/php/connection.php";
$errors = [];
if (isset($_POST['submit'])) {
    print_r("hi");
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $pwd = $_POST['password'];
        $query = "SELECT * FROM `admin` WHERE (admin_email = '" . $_POST['email'] . "' OR username = '".$_POST['email']."' ) AND  admin_password = '" . $pwd . "'";
        $query = mysqli_query($connection, $query);
        if (mysqli_num_rows($query)) {
            $result = mysqli_fetch_assoc($query);
            $userid = $result[0];
            $userid = json_encode($userid);
            setcookie("admin","$userid" , time()+ 60*60*24*365, "/");
            header("Location: dashboard.php");
        }else{
            array_push($errors, "there was an error to fetch your data!");
        }
    }
        else{
        array_push($errors, "please fill all the inputs!");
    }
}

?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php
        include ("assets/php/head.php");
    ?>
    <title>login</title>
</head>

<!--main-->
<body class="">
    <div class="wrapper ">
        <div class="main-panel" style="width: 100%;">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4" style="float: none;margin: auto;">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">ورود به داشبورد</h4>
                                    <p class="card-category"><a href="www.teamseo.ir">teamseo.ir</a></p>
                                </div>
                                <div class="card-body">
                                    <form method="post" name="login">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating"> نام کاربری یا ایمیل </label>
                                                    <input type="text" class="form-control" name="email" value="<?php if(isset($_POST['submit'])){echo $_POST['username'];}?>" style="text-align: center;direction: ltr;">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">رمز عبور</label>
                                                    <input type="password" class="form-control" name="password" style="text-align: center;direction: ltr;">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary pull-right">ورود</button>
                                        <div class="clearfix"></div>
                                    </form>
                                    <ul>
                                        <?php
                                            foreach($errors as $error){
                                                echo '<li>'.$error.'</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
 include "assets/php/script.php";
?>
</body>
</html>