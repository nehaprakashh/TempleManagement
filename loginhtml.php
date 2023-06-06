<?php

$conn = mysqli_connect('localhost','root','','templedbms') or die('connection failed');

session_start();

if (isset($_POST['Submit'])) {

    $email = $_POST['email'];
    //$email = mysqli_real_escape_string($conn, $filter_email);
    //$filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password =md5($_POST['password']);
    $select_users = mysqli_query($conn, "SELECT password FROM register WHERE email = '$email'") or die('query failed');


    if (mysqli_num_rows($select_users) > 0) {
        if ($pas = mysqli_fetch_array($select_users)) {
          
            if ($password == $pas["password"]) {


                $row = mysqli_fetch_assoc($select_users);
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];

                header('location: darshana.php');
            }
            else{
                $message[] = 'pwd wrong';
            }
        }
    } else {
        $message[] = 'incorrect email or password!';
    }

    //$sql="select user_id,password from register"

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
        .form{
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
        <div class="form">
            <form action="loginhtml.php" method="POST">
               <label for="text"><strong>LOGIN</strong></label>
                <hr><label for="email">EMAIL</label><br>
                <input type="email" id="email" name="email" placeholder="Your email.." required><br>
                <label for="pwd">PASSWORD</label><br>
                <input type="password" id="pwd" name="password" placeholder="Your password.." required><br><br>
                <input type="submit" name="Submit" class="btn">
                <p>DON'T HAVE AN ACCOUNT?</p><a href="reghtml.php">CLICK HERE</a>
              </form>
        </div>
    </div>
</body>
</html>