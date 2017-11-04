<?php include 'databaseconnection.php'; 
$query="select * from shoutmealoud ";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoutaLoud</title>
    <link rel="shortcut icon" href="img/icon.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <div class="container">
     <h1>ShoutmeLoud!!</h1>
     <ul>
     <?php while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){ ?>
     <li><?php echo $row['time']; ?> - <strong><span><?php echo $row['user']; ?> : </span></strong><?php echo $row['message']; ?></li>
     <?php } ?>
     </ul>
         <form action="server.php" method="post">
         <input type="text" name="username" placeholder="Username" autocomplete="off">
        <input type="text" name="message" placeholder="Message" autocomplete="off"><br>
        <input type="submit" value="Send" name="submit">
         </form>
     </div>
</body>
</html>