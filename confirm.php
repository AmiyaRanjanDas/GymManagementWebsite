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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <link rel="stylesheet" href="style2.css">
</head>
<form action="" method="get"></form>
<body>
    <!DOCTYPE html>
    <html>

    <body>
        <section id="home">
            <div>
                <img src="images/21391882.jpg" alt="log1">
                <h1>SHREEMAYA GYM OR WOT</h1>
                <h3>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a><br>
                    <a href="#" class="fa fa-youtube"></a>
                    <a href="#" class="fa fa-twitter"></a>
                </h3>
            </div>
        </section>

        <div style="padding:15px">
            <a href="admin.php">Home</a>
            <a style="margin-left:1000px;color:orange">Welcom Admin</a>
        </div>
        <br><br>
        <?php
        $conn=mysqli_connect("localhost","root","","Gymdatabase");
        $email=$_POST['email'];
       ?>
            <form action="" style="text-align:center;background-color:rgba(255,255,255,0.5);margin:0px 500px;
            padding:70px 30px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:25px;" method="post">
                <h3 style="font-size:22px;color:rgb(188 47 0);">Customer's Email:</h3>
                <h2 style="font-size:25px;color:rgb(188 47 0);"><?php echo $email;?></h2><br>
                Upload the G-Card<br><input style="height:30px;text-align: center; border: 3px solid black;"
                    type="file" placeholder="" name="file"><br><br>
                <input type="hidden" name="email" value="<?php echo $email?>">
                <input style="text-decoration:unset; color:rgb(255, 255, 255); background-color: rgb(0, 0, 0);
        border: cyan;padding: 7px 30px;font-size: large; font-size: x-large; cursor: pointer;" 
        onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'white'" type="submit">
        <p style="font-size:16px;color:red;padding:5px">*You can Verify automatically this account by clicking the Submit Button</p>
            </form>

       <?php
       if(isset($_POST['file']) && isset($_POST['email']))
       {
           $file=$_POST['file'];
           $email1=$_POST['email'];
          $sql="UPDATE request SET Confirm='1',File='$file' WHERE Email='$email1'";
          if($file==NULL && $email1==NULL)
          {  
            echo '<script>
                 alert(" No File Exist !");
                 window.location = "verify.php";
             </script>'; 
          }
          else if(mysqli_query($conn,$sql))
          {  
            echo '<script>
                 alert("Verified Sucessfully !");
                 window.location = "verify.php";
             </script>'; 
          }
          else{
            echo '<script>
                alert("Error !");
                window.location = "verify.php";
            </script>';   
       } 
       }
   
    ?>
    </body>

    </html>