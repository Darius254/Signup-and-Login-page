<?php
session_start();
include("dbcon.php");
if(isset($_POST['signup']) && $_POST['signup']=='signup')
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$adm=$_POST['adm'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];

//insert data

$qry="Insert into person(fname,lname,email,adm,phone,gender,password)
values('$fname','$lname','$email','$adm','$phone','$gender','$pass')";

$r=mysqli_query($con,$qry) or die(mysqli_error($con));
if($r)
{
echo "Signed up Successfully";
}
else{
echo "Sometrhing wrong happenned. Sign up failed";
}
}

//login
if(isset($_POST['signin'])&& $_POST['signin']=='LOGIN') {
$username=$_POST['username'];
$pwd=$_POST['pass'];

$qry="Select * from person where email = '$username' and password='$pwd'";
$rs=mysqli_query($con,$qry);
if($rs)
{
$n=mysqli_num_rows($rs);
$rst=mysqli_fetch_array($rs);
$_SESSION['name'] = $rst['fname'];
$_SESSION['email'] = $rst['email'];
if($n==1)
{
header('location:index.php');
}
else
{
header('location:login.html');
}

}
}