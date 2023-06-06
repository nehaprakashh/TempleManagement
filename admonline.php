<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'templedbms';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM disabled ORDER BY dsno ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Temple management</title>
    <link rel="icon" href="favicon.ico">
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        body{
            background-image: url('Ayodhya.jpg');
            background-repeat: no-repeat;
            background-size: cover;
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
        .top2 li:hover{
            background-color: black;
        }
        .logout{
            position: absolute;
            left: 10px;
            top: 670px;
        }
        li{
            color: white;
        }
        .top1{
            text-align: center;
            color: azure;
        }
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
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
    <section>
        <h1>DISABLED BOOKING</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>dsno</th>
                <th>dsname</th>
                <th>dscost</th>
                <th>dsdate</th>
                <th>dsphoneno</th>
                <th>dsmembers</th>
                <th>dstprice</th>
                <th>dsfile</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['dsno'];?></td>
                <td><?php echo $rows['dsname'];?></td>
                <td><?php echo $rows['dscost'];?></td>
                <td><?php echo $rows['dsdate'];?></td>
                <td><?php echo $rows['dsphoneno'];?></td>
                <td><?php echo $rows['dsmembers'];?></td>
                <td><?php echo $rows['dstprice'];?></td>
                <td><?php echo $rows['dsfile'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
    </div>
</body>
 
</html>