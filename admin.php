<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temple management</title>
    <link rel="link" href="favicon.ico">
    <style>
        body{
            background-image: url('Ayodhya.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .background{
            background-color: rgba(255, 255, 255, .5);
            height: 900px;
            width: 1518px;
            margin-top: 0px;
            margin-left: 0px;
            position: absolute;
            top: 0px;
            left: 0px;
        }
        .top{
            background-color: #CFB997;
            /*background-image: url('ramadmin.jpg');*/
            height: 900px;
            width: 300px;
            position: fixed;
            left: 0px;
            top: 0px;
        }
        .top2 ul{
            line-height: 50px;
            list-style-type: none;
            position: absolute;
            left: 10px;
            text-align: center;
        }
        .top2 p:hover{
            background-color: black;
        }
        .logout{
            position: absolute;
            left: 10px;
            top: 670px;
        }
        h1{
            text-align: center;
            color: azure;
        }
        .image{
            position: absolute;
            top: 450px;
        }
        p{
            color: white;
        }
        .topcolor{
            background-color: rgba(255, 255, 255, .5);
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="top">
            <div class="topcolor">
        <div class="top1">
            <h1>ADMIN PAGE</h1>
        </div>
            <div class="top2">
                <ul>
                    <li><a href="http://localhost/MINIPROJECT/admdarsh.php">DARSHANA</li>
                    <li><a href="http://localhost/MINIPROJECT/admseva.php">SEVAS</li>
                    <li><a href="http://localhost/MINIPROJECT/admspecialevent.php">SPECIAL EVENT</li>
                    <li><a href="http://localhost/MINIPROJECT/admonline.php">ONLINE BOOKING</li>
                    <li><a href="http://localhost/MINIPROJECT/admreg.php">REGISTERS</li>
                </ul>
            <div class="logout">
                <button><a href="http://localhost/MINIPROJECT/tempproj.php">LOGOUT</a></button>
            </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>