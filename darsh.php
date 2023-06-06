<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "templedbms");

if(isset($_POST['submit'])){

  $d_name = $_POST['dname'];
  $d_time = $_POST['dtime'];
  $d_date = $_POST['ddate'];
  $d_cost = $_POST['dcost'];
	
      $query = "INSERT INTO darshana (dname, dtime, ddate, dcost) VALUES('$d_name', '$d_time', '$d_date', '$d_cost')";
      $query_run = mysqli_query($conn, $query);
     
      if($query_run){
        
        $_SESSION['status'] = "entered successfully";
        header("Location: darsh.php");
      }  
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temple management</title>
    <link rel="icon" href="favicon.ico">
    <style>
        body{
            background-image: url('Ayodhya.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .top{
            background-color: rgba(255, 255, 255, .5);
            height: 930px;
            width: 1518px;
            margin-top: 0px;
            margin-left: 0px;
            position: absolute;
            top: 0px;
            left: 0px;
        }
        .top1{
            background-color: #EDFFEC;
            /*height: 800px;*/
            width: 800px;
            position: absolute;
            left: 350px;
            top: 100px;
        }
        .top2{
            background-color: blanchedalmond;
            height: 250px;
            width: 400px;
            position: absolute;
            left: 200px;
            top: 230px;
            text-align: center;
        }
        .top3{
            background-color: blanchedalmond;
            height: 328px;
            width: 400px;
            position: absolute;
            left: 200px;
            top: 500px;
            text-align: center;
        }
        .devote{
            position: absolute;
            top: 10px;
            left: 300px;
        }
        h1{
            color: white;
            text-align: center;
        }
        /*.dropdown{
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=date] {
            width: 30%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit] {
            width: 20%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=text] {
            width: 20%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=file] {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            line-height: 1px;
        }*/
    </style>
</head>
<body>
    <div class="top">
        <h1>DARSHANA BOOKING</h1>
        <div class="top1">
            <img src="devote.jpg" alt="devotees in queue" height="200px" width="200px" class="devote">
            <div class="top2">
                <?php
                if(isset($_SESSION['status'])){
                    echo "<h4>" . $_SESSION['status'] . "</h4>";
                    unset($_SESSION['status']);
                }
                ?>
                <form action="" method="POST">
                    <br><label>CHOOSE TYPE OF DARSHANA</label>
                    <select name="dname" class="dropdown" required>
                        <option value="sarva">SARVA DARSHANA</option>
                        <option value="specialentry">SPECIAL ENTRY</option>
                    </select><br><br>
                    <label for="dtime">TIME:</label>
                    <input type="time" name="dtime" required><br><br>
                    <label for="ddate">DATE:</label>
                    <input type="date" name="ddate" id="date" required><br><br>
                    <label>COST:</label>
                    <select name="dcost" id="" required>
                        <option value="250">Rs.250</option>
                        <option value="300">Rs.300</option>
                    </select><br>
                    
                    <input type="submit" class="btn" name="submit">
                </form>
            </div>
            <?php

$conn = mysqli_connect("localhost", "root", "", "templedbms");

if(isset($_POST['Submit'])){

  $oname = $_POST['oname'];
  $ocertificate = $_POST['certificate'];
  $otime = $_POST['odate'];
  $odate = $_POST['otime'];
  $ocost = $_POST['ocost'];
	
      $query = "INSERT INTO disabledbooking (oname,certificate, odate, otime, ocost) VALUES('$oname','$ocertificate', '$odate', '$otime', '$ocost')";
      $query_run = mysqli_query($conn, $query);
     
      if($query_run){
        
        $_SESSION['status'] = "entered successfully";
      }  
    }
?>
            <div class="top3">
                <br><h2>FILL OUT THIS FORM IF UNDER DISABLED CATEGORY</h2>
                <form action="" method="POST">
                    <label for="text">NAME:</label>
                    <input type="text" name="oname" id="oname" required><br><br>
                    <input type="file" id="myfile" name="certificate" class="certificate"><br><br>
                    <label for="time">TIME:</label>
                    <input type="time" name="otime" required><br><br>
                    <label for="odate">DATE:</label>
                    <input type="date" name="odate" id="date" required><br><br>
                    <select name="ocost" id="" required>
                        <option value="1800">Rs.1800</option>
                    </select><br>
                    <input type="submit" name="Submit" class="btn"><br>
                </form>
            </div>
        </div>
    </div>  
</body>
</html>