<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "templedbms");

if(isset($_POST['submit'])){

  $dsname = $_POST['dsname'];
  $dscost = $_POST['dscost'];
  $dsdate = $_POST['dsdate'];
  $dsphoneno = $_POST['dsphoneno'];
  $dsmembers = $_POST['dsmembers'];
  $dstprice = $_POST['dstprice'];
  $dsfile = $_POST['dsfile'];
	
      $query = "INSERT INTO disabled (dsname, dscost, dsdate, dsphoneno, dsmembers, dstprice, dsfile) VALUES('$dsname', '$dscost', '$dsdate', '.$dsphoneno.', '$dsmembers', '$dstprice', '.$dsfile.')";
      $query_run = mysqli_query($conn, $query);
     
      if($query_run){
        
        $_SESSION['status'] = "entered successfully";
        header("Location: darshana.php");
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
        h1{
            color: white;
            text-align: center;
        }
        .top1{
            background-color: bisque;
            height: 450px;
            width: 400px;
            position: absolute;
            left: 600px;
            text-align: center;
        }
        img{
            height: 150px;
            width: 200px;
        }
        .popup{
            text-align: center;
            background-color: peachpuff;
            position: absolute;
            top: 0;
            left: 650px;
            transform: translate(-50%,-50%) scale(0.1);
            width: 400px;
            border-radius: 6px;
            padding: 0px 30px 30px;
            visibility: hidden;
            opacity: 0;
            transition: 4s, top 4s;
        }
        #click:checked .open-popup{
            visibility: visible;
            opacity: 1;
            top: 50%;
            transform: translate(-50%,-50%) scale(1);
        }
        .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal-content {
    text-align: center;
  background-color: rgba(255, 255, 255, .8);
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  transition: 60s;
}
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.button{
    position: absolute;
    top: 550px;
    left: 690px;
}
    </style>
</head>
<body>
    <div class="top">
        <h1>DISABLED BOOKING</h1>
        <div class="top1">
            <img src="devote.jpg" alt="devote">
            <form action="" method="POST">
                <select name="dsname" class="dropdown" required>
                    <option value="sarva darshana">SARVA DARSHANA</option>
                    <option value="Special  entry">SPECIAL ENTRY</option>
                    <option value="VIP">VIP</option>
                </select><br><br>
                <select name="dscost" id="" required>
                    <option value="1800">Rs.1800</option>
                </select><br><br>
                <input type="date" name="dsdate" required><br><br>
                <label for="number" >PHONE NUMBER</label>
                <input type="number" name="dsphoneno" required><br><br>
                <label for="text">MEMBERS:?</label>
                <input type="number" min="1" name="dsmembers" value="1" class="qty"><br><br>
                <label for="number">ENTER AMOUNT PAID</label>
                <input type="number" name="dstprice" placeholder="Amount paid" required><br><br>
                <input type='checkbox' name="dspayment" required><span>PAYMENT DONE?</span><br><br>
                <input type="submit" name="submit" class="btn">
            </form>
        </div>
        <div class="button">
            <button type="submit" id="myBtn">DO PAYMENT</button></div>
            <div id="myModal" class="modal">
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <!-- Add content here -->
                  <img src="qrcode.jpg" alt="qrcode">
                  <p>members x price mentioned</p>
                  <form action="">
                      <input type="file" name="ssfile"><br>
                      <button type="submit">DONE</button><br>
                  </form>
                </div>
            </div>
    </div>
    <script>
        // Get the modal
      var modal = document.getElementById("myModal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];
      
      // When the user clicks the button, open the modal
      btn.onclick = function() {
        modal.style.display = "block";
      }
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      </script>
</body>
</html>