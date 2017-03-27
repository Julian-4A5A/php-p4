<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            #form{
                height:230px;
                width:300px;
                border-radius:8px;
                background-color: red;
                
                
            }
            input, button{
                margin:4px;
            }
        
        </style>
    </head>
    <body>
       

            <form id="form" method="post">
            
            <table>
            <tr><th colspan="2">Registreren</th></tr>
            <tr><td>Inlognaam</td><td><input type="text" name="inlognaam" size="15"></td></tr>
            <tr><td>Passwoord</td><td><input type="password" name="passwoord" size="15"></td></tr>
            <tr><td>Passwoord <small>(controle)</small></td><td><input type="password" name="passwoord_controle" size="15"></td></tr>
            <tr><td></td><td><input type="submit" value="Registreer"></td></tr>
            </table>
            </form>
            
            
                        
        <?php
        if (empty($_POST['inlognaam'])) {

                    echo "Je hebt geen inlognaam ingevuld. Probeer nogmaals.";
                
                } else if (empty($_POST['passwoord'])) {
                    echo "Je hebt geen passwoord ingevuld. Probeer nogmaals.";
                
                } else if (empty($_POST['passwoord_controle'])) {
                
                    echo "Je moet ter controle ook het controleveld voor het passwoord invullen. Probeer nogmaals.";
                }
                
                else if ($_POST['passwoord'] != $_POST['passwoord_controle']) {

                    echo "De ingevoerde passwoorden kwamen niet overeen. Probeer nogmaals</a>.";
                } 
                else {
                
                        $username = 'julianvd000';
                        $password = '';
                        $conn = new PDO('mysql:host=localhost;dbname=Login', $username, $password);
                        $Gebruikersnaam = $_POST['Gebruikersnaam'];
                        $Wachtwoord = $_POST['Wachtwoord'];
                        
                       $Toevoegen= "INSERT INTO Gebruiker(Gebruikersnaam, Wachtwoord) VALUES ('$Gebruikersnaam','$Wachtwoord'  )";
                        
                        echo "<a href='login.php'><button>Ga verder</button></a>";
                        
                }
                
                    

        
        $conn = null; 
                        ?>
        
        
    </body>
</html>