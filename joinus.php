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
    <link rel="stylesheet" href="style.css">
</head>
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
            <a href="index.php">Home</a>
            <a style="margin-left:1000px;color:orange"><?php
                $name=$_SESSION['name'];
                $sname=strpos($name,' ');
                $fname=substr($name,0,$sname);
                echo $fname;
                ?></a>
        </div>
        <br><br><br>
<div style="display:flex;text-align:center;background-color:rgba(255,255,255,0.45)">
    <div style="width:50%;padding-top:70px">
       <?php
           $email=$_SESSION['email'];
           $conn=mysqli_connect("localhost","root","","Gymdatabase");

           $sql2="SELECT * FROM request WHERE Email='$email'";
           $res2= mysqli_query($conn,$sql2);
           $item2=0;
           $c1=0;
           $c2=0;
           while($item2 = mysqli_fetch_array($res2))
           { 
               $c2=$item2["Time"];
               $c1=$item2["Confirm"];
               $c3=$item2["File"];
           }

           if($c1==0)
           {
           if($c2==NULL)
           {
       ?>    <h2 style="color:rgb(137,9,2);padding:10px;">Fill this data & joinus</h2>
             <form action="http://localhost/Gym-management/request.php" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:25px;" method="post">
                Time<br><select style="height:30px;width: 270px; text-align: center;border: 3px solid black;" 
                    name="time">
                <option value="morning">Morning</option>
                <option value="evening">Evening</option>
                <option value="night">Night</option>
                </select>   <br><br> 
                Branch<br><select style="height:30px;width: 270px; text-align: center;border: 3px solid black;" 
                    name="branch">
                <option value="Near VIP Road ShaktiIntl.(plot no=3098)">Near VIP Road ShaktiIntl.(plot no=3098)</option>
                <option value="Near AtharNala(plot no=0861)">Near AtharNala(plot no=0861) </option>
                <option value="Near Dolamandap Sahi(plot no=6781)">Near Dolamandap Sahi(plot no=6781)</option>
                </select>    
                <input type="hidden" name="email" value="<?php echo $email;?>">
                <br><br>
                <input style="text-decoration:unset; color:rgb(255, 255, 255); background-color: rgb(0, 0, 0);
        border: cyan;padding: 7px 30px;font-size: large; font-size: x-large; cursor: pointer;" 
        onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'white'" type="submit">
            </form>
       <?php 
           }
           else{
            ?><div style="font-family: Arial, Helvetica, sans-serif;"><br><br><br>
                <h1 style="color:rgb(137,9,2);padding:10px;">Your Data is Added</h1>
                <h2>Now wait for Gym adminstrators action</h2>
                <h1  style="color:rgb(137,9,2);padding:10px;">Thanks a lot</h1>
              </div>
            <?php
           }
        }
           else{
            ?><div style="font-family: Arial, Helvetica, sans-serif;"><br><br>
            <h1 style="color:#0d5500;padding:10px;">Your Accout Verified Sucessfully</h1>
            <h2>Download Your G-card</h2><br>
            <a href="images/<?php
            echo $c3;
            ?>" download class="op12" style="background-color:#0d5500;">Download</a><br><br>
            <h2>Join your branch through this G-Card</h2><br>
          </div>
        <?php              
           }
        ?>
    </div>
    <div style="width:50%">
        <img src="images\body12.jpg" style="width:680px;padding:20px;opacity:0.9">
    </div>
</div>
</body>
</html>


