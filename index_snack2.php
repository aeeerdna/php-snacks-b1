<!-- 
    Snack 2:
        Passare come parametri GET name, mail e age e verificare che name sia più lungo di 3 caratteri, 
        che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->


 <?php

    // GET parametri
       $name = '';
    if (isset($_GET ["name"])){
        $name = $_GET ["name"];
    }

    $mail = '';
    if (isset($_GET ["mail"])){
        $mail = $_GET ["mail"];
    }

    $age = '';
    if (isset($_GET ["age"])){
        $age = $_GET ["age"];
    }


    // verificare name, mail e age

        // variabili
        $accessOk = "access granted";
        $accessDenied = "access denied";

        $atPos = strpos ($mail, "@");
        $dotPos = strpos ($mail, ".", $atPos);
        

        // condizioni    
        if(strlen($name) >= 3 && $atPos > 0 && $dotPos > 0 && is_numeric($age)) {
            echo $accessOk;
        }
        else {
            echo $accessDenied;
        }

?>
