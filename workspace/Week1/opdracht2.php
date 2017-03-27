<!DOCTYPE html>
<html>
    <head>
        <title></title>
        
    </head>
    <body>
        <form method="post">
            Naam:<br>
            <input type="text" name="leerling"/><br>
            Vak:<br>
            <input type="text" name="vak"/><br>
            Cijfer<br>
            <input type="text" name="cijfer"/><br>
            
            <input onclick="Expoteren()" type="submit" value="Expoteren"/><br>
        </form>
        <?php
        $leerling = $_POST['leerling'];
        $vak = $_POST['vak'];
        $cijfer = $_POST['cijfer'];
        
        
            $text = implode( $leerling ." " . $vak ." " . $cijfer);
        function Expoteren(){
        $myfile = fopen("Cijferlijst.txt", "w") or
            die("Unable to open file!");
            $txt($text. '\n');
            fwrite($myfile, $txt);
        fclose($myfile);

        }
            
            
        ?>
    </body>
</html>