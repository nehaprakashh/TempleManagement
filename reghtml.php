
<?php

$conn = mysqli_connect('localhost','root','','templedbms') or die('connection failed');

if(isset($_POST['submit'])){

    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $email = mysqli_real_escape_string($conn, $filter_email);
    $filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password = mysqli_real_escape_string($conn, ($filter_pass));
    $filter_cpass = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
    $cpassword = mysqli_real_escape_string($conn, ($filter_cpass));
    $user_type = $_POST['user_type'];
    $select_users = mysqli_query($conn, "SELECT * FROM register WHERE email = '$email'") or die('query failed');
 
    if(mysqli_num_rows($select_users) > 0){
       $message[] = 'user already exist!';
    }else{
       if($password != $cpassword){
          $message[] = 'confirm password not matched!';
       }else{
          mysqli_query($conn, "INSERT INTO register (email, password,user_type) VALUES('$email', md5('$password'),'$user_type')") or die('query failed');
          $message[] = 'registered successfully!';
          header('location:loginhtml.php');
       }
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
            height: 900px;
            width: 1518px;
            margin-top: 0px;
            margin-left: 0px;
            position: absolute;
            top: 0px;
            left: 0px;
        }
        .box{
            background-color: #C8DBBE;
            height: 500px;
            width: 600px;
            position: absolute;
            left: 450px;
            top: 100px;
            text-align: center;
        }
        input[type=email], select {
  width: 50%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}

input[type=password], select {
  width: 50%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}

input[type=submit] {
width: 50%;
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}
.usertype{
    width: 50%;
    height: 35px;
}


input[type=submit]:hover {
background-color: #45a049;
}

    </style>
</head>
<body>
<?php 
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
        <span>'.$message.'</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        
        ';
    }
}
?>
    <div class="top">
        <div class="box">
            <form action="" method="POST">
                <label for="text"><strong>REGISTER</strong></label><hr><br>
                <input type="email" name="email" placeholder='Email Id' required><br><br>
                <input type='password' name="password" placeholder='Enter Password' required><br><br>
                <input type='password' name="cpassword" placeholder='Confirm Password' required><br>
                <select name="user_type" class="options" required>
                    <option value="user">user</option>
                </select><br><br>
                <input type='checkbox'><span>I agree to the terms and conditions</span><br>
                <input type="submit"  class="btn" name="submit" >
            </form>
        </div>
    </div>
</body>
</html>