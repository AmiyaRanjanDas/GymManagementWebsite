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
            <a href="index.php">Home</a>
            <a style="margin-left:1000px;color:orange"><?php
                $name=$_SESSION['name'];
                $sname=strpos($name,' ');
                $fname=substr($name,0,$sname);
                echo $fname;
                ?></a>
        </div>
        <br>
        <div class="mytabs">
            <input type="radio" id="tabfree" name="mytabs" checked="checked">
            <label for="tabfree">Near VIP Road ShaktiIntl.(plot no=3098)</label>
            <div class="tab" >
                <table>
                    <tr>
                        <th></th>
                    <th>MonDay</th><th>TuesDay</th><th>ThursDay</th>
                    <th>FriDay</th><th>SaturDay</th><th>SunDay</th>
                    </tr>
                    <tr>
                        <td rowspan='5'>Morning</td>
                        <td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td>
                        <td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td>
                    </tr>
                    <tr>
                    <td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td>
                    <td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td>
                    </tr>
                    <tr>
                    <td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td>
                    <td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td>
                    </tr>
                    <tr>
                    <td>DanceMix<br>8.00-9.30</td><td>DanceMix<br>8.00-9.30</td><td>DanceMix<br>8.00-9.30</td>
                    <td>DanceMix<br>8.00-9.30</td><td></td><td>DanceMix<br>8.00-9.30</td>
                    </tr>
                    <tr>
                        <td>BodyBalance<br>10.00-12.00</td><td>BodyBalance<br>10.00-12.00</td><td></td>
                        <td>BodyBalance<br>10.00-12.00</td><td>BodyBalance<br>10.00-12.00</td><td></td>
                    </tr>
                    <tr>
                    <td rowspan='2'>Evening</td>
                        <td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td>
                        <td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td>
                    </tr>
                    <tr>
                    <td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td>
                    <td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td>
                    </tr>
                    <tr>
                        <td rowspan='2'>Night</td>
                        <td>DanceMix<br>18.00-17.30</td><td>DanceMix<br>18.00-17.30</td><td></td>
                        <td>DanceMix<br>18.00-17.30</td><td>DanceMix<br>18.00-17.30</td><td></td>
                    </tr>
                    <tr>
                    <td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td>
                    <td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td>
                    </tr>
                </table>
                   
            </div>
            
            <input type="radio" id="tabsilver" name="mytabs">
            <label for="tabsilver">Near AtharNala(plot no=0861) </label>
            <div class="tab">
            <table>
                    <tr>
                        <th></th>
                    <th>MonDay</th><th>TuesDay</th><th>ThursDay</th>
                    <th>FriDay</th><th>SaturDay</th><th>SunDay</th>
                    </tr>
                    <tr>
                        <td rowspan='5'>Morning</td>
                        <td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td>
                        <td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td>
                    </tr>
                    <tr>
                    <td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td>
                    <td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td>
                    </tr>
                    <tr>
                    <td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td>
                    <td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td>
                    </tr>
                    <tr>
                    <td>DanceMix<br>8.00-9.30</td><td>DanceMix<br>8.00-9.30</td><td>DanceMix<br>8.00-9.30</td>
                    <td>DanceMix<br>8.00-9.30</td><td></td><td>DanceMix<br>8.00-9.30</td>
                    </tr>
                    <tr>
                        <td>BodyBalance<br>10.00-12.00</td><td>BodyBalance<br>10.00-12.00</td><td></td>
                        <td>BodyBalance<br>10.00-12.00</td><td>BodyBalance<br>10.00-12.00</td><td></td>
                    </tr>
                    <tr>
                    <td rowspan='2'>Evening</td>
                        <td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td>
                        <td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td>
                    </tr>
                    <tr>
                    <td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td>
                    <td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td>
                    </tr>
                    <tr>
                        <td rowspan='2'>Night</td>
                        <td>DanceMix<br>18.00-17.30</td><td>DanceMix<br>18.00-17.30</td><td></td>
                        <td>DanceMix<br>18.00-17.30</td><td>DanceMix<br>18.00-17.30</td><td></td>
                    </tr>
                    <tr>
                    <td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td>
                    <td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td>
                    </tr>
                </table>
            </div>
            
            <input type="radio" id="tabgold" name="mytabs">
            <label for="tabgold">Near Dolamandap Sahi(plot no=6781)</label>
            <div class="tab">
            <table>
                    <tr>
                        <th></th>
                    <th>MonDay</th><th>TuesDay</th><th>ThursDay</th>
                    <th>FriDay</th><th>SaturDay</th><th>SunDay</th>
                    </tr>
                    <tr>
                        <td rowspan='5'>Morning</td>
                        <td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td>
                        <td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td><td>Yoga<br>6.00-7.30</td>
                    </tr>
                    <tr>
                    <td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td>
                    <td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td><td>Gyming<br>7.30-8.30</td>
                    </tr>
                    <tr>
                    <td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td>
                    <td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td><td>Gyming<br>8.30-9.30</td>
                    </tr>
                    <tr>
                    <td>DanceMix<br>8.00-9.30</td><td>DanceMix<br>8.00-9.30</td><td>DanceMix<br>8.00-9.30</td>
                    <td>DanceMix<br>8.00-9.30</td><td></td><td>DanceMix<br>8.00-9.30</td>
                    </tr>
                    <tr>
                        <td>BodyBalance<br>10.00-12.00</td><td>BodyBalance<br>10.00-12.00</td><td></td>
                        <td>BodyBalance<br>10.00-12.00</td><td>BodyBalance<br>10.00-12.00</td><td></td>
                    </tr>
                    <tr>
                    <td rowspan='2'>Evening</td>
                        <td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td>
                        <td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td><td>Gyming<br>16.00-17.30</td>
                    </tr>
                    <tr>
                    <td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td>
                    <td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td><td>Gyming<br>17.30-19.00</td>
                    </tr>
                    <tr>
                        <td rowspan='2'>Night</td>
                        <td>DanceMix<br>18.00-17.30</td><td>DanceMix<br>18.00-17.30</td><td></td>
                        <td>DanceMix<br>18.00-17.30</td><td>DanceMix<br>18.00-17.30</td><td></td>
                    </tr>
                    <tr>
                    <td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td>
                    <td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td><td>DanceMix<br>17.30-19.00</td>
                    </tr>
                </table>
            </div >
                    
        </div>
    </body>

    </html>