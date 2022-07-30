<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
           $conn=mysqli_connect("localhost","root","","Gymdatabase");
           $branch=$_POST["branch"];
           $time=$_POST["time"];
           $email=$_POST["email"];
        if($branch==NULL || $time==NULL)
        { 
            echo '<script>
                alert("Datafields are not filled Properly!");
                window.location = "joinus.php";
            </script>'; 
        } 
        else
        {
             $sql_query="INSERT INTO Request (Email,Branch,Time) VALUES('$email','$branch','$time')";
    
            if(mysqli_query($conn,$sql_query))
            {
            echo '<script>
                alert("Sucessfully Added !");
                window.location = "index.php";
            </script>'; 
            }
            else{
            echo '<script>
                alert("Error !");
                window.location = "register.html";
            </script>';    
            }   
        } 
         
       ?> 
    
</body>
</html>