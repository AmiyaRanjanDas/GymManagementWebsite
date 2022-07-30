<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Gymdatabase";
$conn=mysqli_connect($servername,$username,$password,$dbname);
    $email =$_POST["email"];
    $password =$_POST["password"]; 
    $sql="select * from gymmember where Email='$email' and Password= '$password'";
    $res= mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if($email==NULL || $password==NULL)
    {     
        echo '<script>
                alert("Datafields are not filled Properly!");
                window.location = "login.html";
            </script>'; 
    }
    elseif($email=="admin@123gmail.com" && $password=="admin123")
        {
            echo '<script>
                window.location = "admin.php";
            </script>';
        }
    elseif($count == 1)
    {  
        $pass=mysqli_fetch_assoc($res);
        $_SESSION['name']=$pass['Name'];
        $_SESSION['email']=$pass['Email'];

        echo '<script>
                window.location = "index.php";
            </script>';
    }  
    else
    {  
        echo '<script>
        alert("Login failed. Invalid username or password.!");
        window.location = "login.html";
               </script>'; 
    }
                
mysqli_close($conn);
?>
</head>
<body>
</body>
</html>