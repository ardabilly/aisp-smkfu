<?php 
include_once("config/Class_User.php");
$db = new Class_User();


$username = "";
if (isset($_POST["username"]) && strlen(trim($_POST["username"])) !=0)
    $username = trim($_POST["username"]);

$password = "";
if (isset($_POST["password"]) && strlen(trim($_POST["password"])) !=0)
    $password = trim($_POST["password"]);

session_start();

if (isset($_SESSION["username"])) {

    echo "<script>alert('Anda sudah login!'); window.location.href='index.php';</script>";

}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Aplikasi Inventaris</title>
  
    <?php include_once("includes/header.php"); ?>
    
<?php 
 ?>    
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <?php 

                            if (isset($_POST["submit"])) {

                                if (strlen($username) != 0 && strlen($password) != 0 && !$db->login($username,$password)) {

                                    echo "<div class='label label-danger'> username atau password salah! </div>";

                                }
                                else{

                                    $db->login($_POST["username"],$_POST["password"]);
                                }
                            }
                            else{
                         ?>
                        <h3 class="panel-title">Please Sign In</h3>
                        <?php } ?>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="Login" class="btn btn-lg btn-primary btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include_once("includes/footer.php"); ?>

</body>
<style>
    .panel-heading
    {
        /*padding: 50px;*/
    }
</style>
</html>
