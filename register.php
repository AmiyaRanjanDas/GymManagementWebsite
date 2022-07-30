<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>

<?php

$conn=mysqli_connect("localhost","root","","Gymdatabase");

    $name=$_POST["name"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $gen=$_POST["gen"];
    $password=$_POST["password"];
    $address=$_POST["address"];
    $mobile=$_POST["mobile"];
    $rpassword=$_POST["rpass"];

if($name==NULL || $mobile==NULL || $email==NULL || $password==NULL || 
$age==NULL || $gen==NULL || $address==NULL || $rpassword==NULL)
    {
        echo '<script>
                alert("Datafields are not filled Properly!");
                window.location = "register.html";
            </script>'; 
    }
elseif(mb_strlen($mobile)!=10)
    {
        echo '<script>
                alert("Mobile NO are not properly inserted!");
                window.location = "register.html";
            </script>'; 
    }
elseif($password !=$rpassword)
    {
      echo '<script>
                alert("Password not matched!");
                window.location = "register.html";
            </script>'; 
    }    
else
{
    $sql10="select Email from gymmember where Email='$email'";
    $res=mysqli_query($conn,$sql10);
    $count=mysqli_num_rows($res);
    if($count>0)
    {
        echo '<script>
                alert("This Email is already Registered !");
                window.location = "register.html";
            </script>'; 
    }
    else
    {
        $sql_query="INSERT INTO gymmember (Name,Age,Gender,Mobile,Email,Password,Address)
        VALUES ('$name','$age','$gen','$mobile','$email','$password','$address')";
    
        if(mysqli_query($conn,$sql_query))
        {
            echo '<script>
                alert("Registered sucessfully !");
                window.location = "login.html";
            </script>'; 
        }
        else{
            echo '<script>
                alert("Error !");
                window.location = "register.html";
            </script>';    
        }   
    }
}    
mysqli_close($conn);
?>

</head>
<body>
</body>
</html>




