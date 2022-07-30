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
    <script>
        function logout()
        {
            {
    var r=confirm("Do you want to logout !!");
    if(r==true)
    {
        window.location.href="index.html";        
    }
}
        }
    </script>
</head>
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

        <div>
            <div class="mytabs">
                <input type="radio" id="tabfree" name="mytabs" checked="checked">
                <label for="tabfree">Home</label>
                <div class="tab">
                    <h1 style="font-size:45px;font-weight:500;padding:5px;">The Best Unisex Fitness Gym in Puri </h1>
                    <h2 style="font-size:30px;font-weight:400;letter-spacing: 2px;"> Best trainers availabe in proper timetable and with healthy Food plans </h2>
                    <br><br><a href="joinus.php" class="op12">JoinUs</a>
                </div>
            
                <input type="radio" id="tabsilver" name="mytabs">
                <label for="tabsilver">About</label>
                <div class="tab">
                    <h1 style="font-size:35px;font-weight:500; color: rgb(255, 81, 0);">About Us</h1>
                    <h2 style="font-size:25px;font-weight:400;padding:5px"> Best trainers availabe in proper timetable and with healthy Food plans </h2>  
                    <ul>
                        <li>sit amet, consectetur adipisicing eliris nihil maxime ne</li>
                        <li>Lorem ipsum dolor sit amet, consecte ne</li>
                        <li>Lorem ipsum dolor sit amet, cing elit. Corporis nihil maxime ne</li>
                        <li>Lorem ipsum . Corporis nihil maxime ne</li>
                    </ul>                
                </div>
            
                <input type="radio" id="tabgold" name="mytabs">
                <label for="tabgold">Contact</label>
                <div class="tab">
                    <h1 style="font-size:35px;font-weight:500;padding:10px;color: rgb(255, 81, 0);">Contact Us</h1>
                    <div style="display:flex;justify-content: space-around;">
                        <div style="background-color:rgba(0, 0, 0, 0.7);border-radius: 50%;padding:62px 48px;font-size:20px;">Email:<br><br>shreemayagym<br>2021@gmail.com</div>
                        <div style="background-color:rgba(0, 0, 0, 0.8);border-radius: 50%;padding:60px 65px;font-size:18px;">Contact:<br><br>9087909877<br>9563314091<br>7790874531</div>
                        <div style="background-color:rgba(0, 0, 0, 0.6);border-radius: 50%;padding:60px 50px;font-size:20px;">Office:<br><br>Near ShaktiIntl.<br>V.I.P. ROAD<br>752001,PURI</div>
                    </div>
                </div>
                <a href="branch.php">Branch</a>
                <a href="joinus.php">joinUs</a>
                <a href="#" onclick="logout()">Logout</a>
                <a style="margin-left: 500px;color:orange"><?php
                $name=$_SESSION['name'];
                $sname=strpos($name,' ');
                $fname=substr($name,0,$sname);
                echo $fname;
                ?></a>
                
                
                
        </div>
    </body>

    </html>