<!-- 
    Snack 2:
        Passare come parametri GET name, mail e age e verificare che name sia più lungo di 3 caratteri, 
        che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->


 <?php

    // $name = "name";
    // $mail = "mail";
    // $age = "age";

    // GET parame"tri
    $_GET ["name"];
    $_GET ["mail"];
    $_GET ["age"];

    // echo $_GET ["name"];

    $accessOk = "access granted";
    $accessDenied = "access denied";

    if((strlen($_GET ["name"]) >= 3) /*&& (strpos($_GET ["mail"], "@", "."))*/) {
        echo $accessOk;
    }
    else {
        echo $accessDenied;
    }

?>

<p>
    <?= strlen($_GET ["name"]) ?>
</p>

<!-- && strpos($mail, ".","@") && $age !isNan) -->