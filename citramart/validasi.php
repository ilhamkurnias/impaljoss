<?php
include "conn.php";
$username = $_POST['user'];
$pass     = $_POST['password'];
$login = mysqli_query($con, "SELECT * FROM dataadmin WHERE uname = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);
if ($row['uname'] == $username AND $row['password'] == $pass)
{
  session_start();
  $_SESSION['uname'] = $row['uname'];
  $_SESSION['password'] = $row['password'];
  header('location:menu.php');
}
else
{
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
        Username atau Password Anda tidak benar.<br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='login.php'></a></center>";

}
?>
