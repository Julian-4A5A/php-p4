<?php

$username = 'julianvd000';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=User', $username, $password);

    if(isset($_POST['Register'])){
        
        session_start();
        $FName = $_POST['First_Name'];
        $LName = $_POST['Last_Name'];
        $Email = $_POST['Email'];
        $PW = $_POST['Password'];
        
        $StorePassword = password_hash($PW, PASSWORD_BCRYPT, array('cost'=> 10));
        
        $sql = $con->query("INSERT INTO user (Fname, Lname, Email, Password)Values('{$FName}', '{$LName}', '{$Email}', '{$StorePassword}')");    
        
        header('Location: Login.php');
    }
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>

<link href="css/Master.css" rel="stylesheet" type="text/css">
<link href="css/Menu.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="Container">
        <div class="Header"></div>
        <div class="Menu">
            <div id="Menu">
                <nav>
                    <ul class="cssmenu">
                        <li><a href="Register.php">Register</a></li>
                        <li><a href="Login.php">LogIn</a></li>
                    </ul>
                </nav>
           </div>
        </div>
        <div class="LeftBody"></div>
        <div class="RightBody">
        <form action="" method="post" name="RegisterForm" id="RegisterForm">
                <div class="FormElement">
                    <input name="First_Name" type="text" required="required" class="TField" id="First_Name" placeholder="First Name">
                </div>
                <div class="FormElement">
                    <input name="Last_Name" type="text" required="required" class="TField" id="Last_Name" placeholder="Last Name">
                </div>
                <div class="FormElement">
                    <input name="Email" type="email" required="required" class="TField" id="Email" placeholder="E-mail">
                </div>
                <div class="FormElement">
                    <input name="Password" type="password" required="required" class="TField" id="Password" placeholder="Password">
                </div>
                <div class="FormElement">
                    <input name="Register" type="submit" class="button" id="Register" value="Register">
                </div>
            </form>
        </div>
        <div class="Footer"></div>
     </div>
</body>
</html>