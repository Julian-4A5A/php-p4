{"filter":false,"title":"logreg.php","tooltip":"/Week1/login/logreg.php","undoManager":{"mark":30,"position":30,"stack":[[{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"remove","lines":["i"],"id":1}],[{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"remove","lines":["i"],"id":2}],[{"start":{"row":38,"column":18},"end":{"row":38,"column":19},"action":"remove","lines":["l"],"id":3}],[{"start":{"row":38,"column":18},"end":{"row":38,"column":19},"action":"insert","lines":["l"],"id":4}],[{"start":{"row":38,"column":19},"end":{"row":38,"column":20},"action":"remove","lines":["i"],"id":5}],[{"start":{"row":38,"column":19},"end":{"row":38,"column":20},"action":"insert","lines":["i"],"id":6}],[{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":["i"],"id":7}],[{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"insert","lines":["i"],"id":8}],[{"start":{"row":42,"column":2},"end":{"row":43,"column":0},"action":"insert","lines":["",""],"id":20}],[{"start":{"row":43,"column":0},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":21}],[{"start":{"row":44,"column":0},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":22}],[{"start":{"row":45,"column":0},"end":{"row":109,"column":7},"action":"insert","lines":["<?php require \"php_conectie/Connectie.php\";?>","<?php","    if(isset($_POST['Register'])){","        ","        session_start();","        $FName = $_POST['First_Name'];","        $LName = $_POST['Last_Name'];","        $Email = $_POST['Email'];","        $PW = $_POST['Password'];","        ","        $StorePassword = password_hash($PW, PASSWORD_BCRYPT, array('cost'=> 10));","        ","        $sql = $con->query(\"INSERT INTO user (Fname, Lname, Email, Password)Values('{$FName}', '{$LName}', '{$Email}', '{$StorePassword}')\");    ","        ","        header('Location: Login.php');","    }","?>","<!doctype html>","<html>","<head>","<meta charset=\"UTF-8\">","<title>Register</title>","","<link href=\"css/Master.css\" rel=\"stylesheet\" type=\"text/css\">","<link href=\"css/Menu.css\" rel=\"stylesheet\" type=\"text/css\">","","</head>","","<body>","    <div class=\"Container\">","        <div class=\"Header\"></div>","        <div class=\"Menu\">","            <div id=\"Menu\">","                <nav>","                    <ul class=\"cssmenu\">","                        <li><a href=\"Register.php\">Register</a></li>","                        <li><a href=\"Login.php\">LogIn</a></li>","                    </ul>","                </nav>","           </div>","        </div>","        <div class=\"LeftBody\"></div>","        <div class=\"RightBody\">","        <form action=\"\" method=\"post\" name=\"RegisterForm\" id=\"RegisterForm\">","                <div class=\"FormElement\">","                    <input name=\"First_Name\" type=\"text\" required=\"required\" class=\"TField\" id=\"First_Name\" placeholder=\"First Name\">","                </div>","                <div class=\"FormElement\">","                    <input name=\"Last_Name\" type=\"text\" required=\"required\" class=\"TField\" id=\"Last_Name\" placeholder=\"Last Name\">","                </div>","                <div class=\"FormElement\">","                    <input name=\"Email\" type=\"email\" required=\"required\" class=\"TField\" id=\"Email\" placeholder=\"E-mail\">","                </div>","                <div class=\"FormElement\">","                    <input name=\"Password\" type=\"password\" required=\"required\" class=\"TField\" id=\"Password\" placeholder=\"Password\">","                </div>","                <div class=\"FormElement\">","                    <input name=\"Register\" type=\"submit\" class=\"button\" id=\"Register\" value=\"Register\">","                </div>","            </form>","        </div>","        <div class=\"Footer\"></div>","     </div>","</body>","</html>"],"id":23}],[{"start":{"row":45,"column":0},"end":{"row":45,"column":45},"action":"remove","lines":["<?php require \"php_conectie/Connectie.php\";?>"],"id":24}],[{"start":{"row":46,"column":5},"end":{"row":47,"column":0},"action":"insert","lines":["",""],"id":25}],[{"start":{"row":47,"column":0},"end":{"row":48,"column":0},"action":"insert","lines":["",""],"id":26}],[{"start":{"row":48,"column":0},"end":{"row":50,"column":75},"action":"insert","lines":["$username = 'julianvd000';","$password = '';","$conn = new PDO('mysql:host=localhost;dbname=Login', $username, $password);"],"id":27}],[{"start":{"row":50,"column":75},"end":{"row":51,"column":0},"action":"insert","lines":["",""],"id":28}],[{"start":{"row":0,"column":0},"end":{"row":42,"column":2},"action":"remove","lines":["<?php","$cookie_name = \"Loggedin\";","","$username = 'julianvd000';","$password = '';","$conn = new PDO('mysql:host=localhost;dbname=Login', $username, $password);","","","","if (isset($_POST['login'])){","    $user = $_POST['Gebruiker'];","    $pass = $_POST['Wachtwoord'];","    ","    $phash = sha1(sha1($pass. \"salt\").\"salt\");","    ","    $sql = \"SELECT * FROM Gebruiker  WEHRE Gebruikersnaam = '$user'AND Wachtwoord ='$phash' \";","","    $result = mysqli_query($conn, $sql);","    $count = mysqli_num_rows($result);","    ","    if($count == 1)","    {","        $cookie_value = $user;","        setcookie($cookie_name, $cookie_value, time() + (120), \"/\");","        header(\"Location: Personal.php\");","    }","    else{","        echo \"Gebruikersnaam en Wachtwoord kloppen niet\";","    }","}","else if(isset($POST['registeren'])){","    $user = $_POST['Gebruiker'];","    $pass = $_POST['Wachtwoord'];","    ","    $phash = sha1(sha1($pass. \"salt\").\"salt\");","    ","    $sql = \"INSERT INTO Gebruiker(ID, Gebruikersnaam, Wachtwoord) VALUES ('', $User','$shash'  )\";","","    $result = mysqli_query($conn, $sql);","    ","    ","}  ","?>"],"id":29}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":30}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":31}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":32}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":33}],[{"start":{"row":4,"column":49},"end":{"row":4,"column":50},"action":"remove","lines":["n"],"id":34}],[{"start":{"row":4,"column":48},"end":{"row":4,"column":49},"action":"remove","lines":["i"],"id":35}],[{"start":{"row":4,"column":47},"end":{"row":4,"column":48},"action":"remove","lines":["g"],"id":36}],[{"start":{"row":4,"column":46},"end":{"row":4,"column":47},"action":"remove","lines":["o"],"id":37}],[{"start":{"row":4,"column":45},"end":{"row":4,"column":46},"action":"remove","lines":["L"],"id":38}],[{"start":{"row":4,"column":45},"end":{"row":4,"column":46},"action":"insert","lines":["U"],"id":39}],[{"start":{"row":4,"column":46},"end":{"row":4,"column":47},"action":"insert","lines":["s"],"id":40}],[{"start":{"row":4,"column":47},"end":{"row":4,"column":48},"action":"insert","lines":["e"],"id":41}],[{"start":{"row":4,"column":48},"end":{"row":4,"column":49},"action":"insert","lines":["r"],"id":42}]]},"ace":{"folds":[],"scrolltop":233.5,"scrollleft":0,"selection":{"start":{"row":4,"column":49},"end":{"row":4,"column":49},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1490597407343,"hash":"5010d388a37d93acf60c76a0ad76c4c8c38efd99"}