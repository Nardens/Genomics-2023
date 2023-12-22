<?php

$id=$_REQUEST['id'];
$fullname=$_REQUEST['full-name'];
$username=$_REQUEST['username'];
$Password=$_REQUEST['Password'];

if(isset($_POST['btntest']))
{

    $host="localhost";
    $user="root";
    $Password="";
    $db="tbl-admin";


    $conn= mysqli_connect($host,$user,$Password,$db);

    $insert="insert into tbl-order inf values('$id','$fullname','$username','$password' )";


    mysqli_query($conn,$insert);
     
    if($conn){
echo("<h2 style ='color:blue;'>Your login is Done</h2>");
        
    }
    else{
        echo("<h2 style ='color:red;'>Your login is Failed" );

    }


}


?>