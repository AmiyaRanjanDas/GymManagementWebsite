<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="margin: 0px 70px;">
    <div style="border:3px solid red;background-color:rgb(32, 0, 0);color:white;font-size:10px
    ;padding: 20px 30px;font-family: Arial, Helvetica, sans-serif;">
     <h2 style="font-size:30px;text-align:center;padding:10px">NOTICE<hr></h2>
        <?php
             $conn=mysqli_connect("localhost","root","","");
                           
                 $sql="select * from project4table2";
                 $res= mysqli_query($conn,$sql);
                 $num=mysqli_num_rows($res);
                 if($num>0)
                 {
                 ?>
                 <div style="display:flex;justify-content:space-between">
                    <p style="font-size:20px;padding:5px;color:red;text-align: center;">Content</p>
                    <p style="font-size:20px;opacity:0.5;padding:5px;color:red;text-align: center;">Date</p>
                </div>   
                 </tr>  
                 <?php
                 $item=0;
                 while($item = mysqli_fetch_array($res))
                 {  
                 ?>  
                 <div style="display:flex;justify-content:space-between">
                    <p style="font-size:20px;padding:2px;text-align: center;">-- <?php echo $item["content"]; ?></p>
                    <p style="font-size:20px;opacity:0.5;padding:2px;text-align: center;"><?php echo $item["date"]; ?></p>   
                 </div>
                 <?php                  
                 }
                 }
             mysqli_close($conn);
        ?>
    </div>
</div>
</body>
</html>