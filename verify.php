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
    $sql="SELECT * FROM Request";
    $res= mysqli_query($conn,$sql);
    $num=mysqli_num_rows($res);
    if($num>0)
    {
    ?>
    <table style=" border-collapse: collapse;background-color:rgba(0,0,0,0.3);border-radius: 10px;margin: auto;" >
    <tr style="background-color:orange">
        <th style="font-size:21px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Email</th>
        <th style="font-size:21px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Branch</th>
        <th style="font-size:21px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Time</th>
        <th style="font-size:21px; border: 2px solid white;padding: 15px 30px;text-align: center;color: black;">Confirmation</th>
    </tr>  
    <?php
    $item=0;
    while($item = mysqli_fetch_array($res))
    {  
    ?>  
        <tr style="background-color:rgba(255,255,255,0.5);">
            <td style="font-size:21px; border: 2px solid white;padding: 15px 30px;text-align: center;"><?php echo $item["Email"]; ?></td>
            <td style="font-size:21px; border: 2px solid white;padding: 15px 30px;text-align: center;"><?php echo $item["Branch"];?></td>
            <td style="font-size:21px; border: 2px solid white;padding: 15px 30px;text-align: center;"><?php echo $item["Time"];?></td>
    <?php
    if($item["Confirm"]==1)
    {
        ?>
        <td style="border: 2px solid white;color:#27ff00;text-align:center;font-size:21px;">Confirmed</td>
        </tr> 
        <?php
    } 
    else{
    ?>
        <form action="confirm.php" method="post">
            <input type="hidden" name="email" value="<?php echo $item['Email'];?>">
            <td style="border: 2px solid white;text-align: center;">
            <input type="submit" name="confirm" value="Go and Verify"
            onmouseover="this.style.color='white'"onmouseout="this.style.color='black'"
            style="background-color:orange;text-decoration:none;padding:5px 10px;color:black;font-size:17px">
            </td>
        </form>
        </tr>      
    <?php                  
    }
           
    }
    }
    else
    {
        echo "No Request Yet";
    }
    ?>
    </body>

    </html>