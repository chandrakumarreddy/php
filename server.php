<?php include 'databaseconnection.php'; 
if(isset($_POST['submit'])){
    $user=($_POST['username']);
    $message=($_POST['message']);
    date_default_timezone_set('Asia/Kolkata');
    $time=date('h:i:s a');
    $query="insert into shoutmealoud(user,message,time) values('$user','$message','$time')";
    $result=mysqli_query($conn,$query);
    if($result){
        header('Location: index.php');
    }else{
    echo "error".mysqli_error();
    }
    }
?>