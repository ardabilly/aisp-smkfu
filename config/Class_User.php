<?php 
/**
* 
*/
class Class_User
{
    
    function login($username,$password)
    {
        $username = addslashes($username);
        $password = base64_encode(md5($password , true));
        $password = addslashes($password);

        include("config.php");

        $sql = "select * from tbl_user where username='".$username."' and password='".$password."'";
        // echo $sql;
        $data = mysqli_query($conn,$sql);

        $user_data = mysqli_fetch_object($data);

        $no_rows = mysqli_num_rows($data);
        if ($no_rows == 1) {

            session_start();
            $_SESSION['id_user'] = $user_data->id_user;
            $_SESSION['username'] = $user_data->username;
            header("location:index.php");
            return true;
        }
        else{
            return false;
        }
    }

    function cek_password($id,$password)
    {
        $password = base64_encode(md5($password, true));

        include("config.php");

        $sql = "select * from tbl_user where id_user='".$id."' and password='".$password."'";

        $data = mysqli_query($conn,$sql);
        while ($d = mysqli_fetch_assoc($data)) {

            $hasil[] = $d;
        }
        error_reporting(0);
        return $hasil;
    }

    function update_password($password,$id)
    {
        $password = base64_encode(md5($password, true));
        $password = addslashes($password);

        include("config.php");

        $sql = "update tbl_user set password='".$password."' where id_user='".$id."'";
        // echo $sql;
        $data = mysqli_query($conn,$sql);
    }

    // function cek_user($username,$password)
    // {
    //     $username = addslashes($username);
    //     $password = base64_encode(md5($password, true));
    //     $password = addslashes($password);

    //     include('config.php');

    //     $sql = "select * from user username='".$username."' and password='".$password."'";
    //     // echo $sql;

    //     $data = mysqli_query($conn,$sql);
    // }

    // function tambah_user($nama,$username,$password,$level)
    // {
    //     $nama = addslashes($nama);
    //     $username = addslashes($username);
    //     $password = base64_encode(md5($password, true));
    //     $password = addslashes($password);
    //     $level = addslashes($level);

    //     include('config.php');

    //     $sql = "insert into user (nama,username,password,level) values('".$nama."','".$username."','".$password."','".$level."')";

    //     $data = mysqli_query($conn,$sql);

    // }

    // function edit($id)
    // {
    //     include('config.php');

    //     $sql = "select * from user";

    //     $data = mysqli_query($conn,$sql);

    //     while ($d = mysqli_fetch_assoc($data)) {

    //         $hasil[] = $d;
    //     }

    //     return $hasil;
    // }

    // function update($nama,$username,$password,$level)
    // {
    //     $nama = addslashes($nama);
    //     $username = addslashes($username);
    //     $password = base64_encode(md5($password, true));
    //     $password = addslashes($password);
    //     $level = addslashes($level);

        
    // }
}

 ?>