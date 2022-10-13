<!-- 
    Snack 1:
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
        Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
        Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
 -->

 <?php

    // array team and points gameOne
    $gameOne =[
        'homeTeam' => 'Los Angeles Lakers',
        'pointsHome' => '113',
        'awayTeam' => 'Golden State Warriors',
        'pointsAway' => '108'
    ];


    // array team and points gameTwo
     $gameTwo =[
        'homeTeam' => 'Denver Nuggets',
        'pointsHome' => '97',
        'awayTeam' => 'Oklahoma City Thunder',
        'pointsAway' => '101'
     ];


    // array team and points gameThree
    $gameThree =[
        'homeTeam' => 'Phoenix Suns',
        'pointsHome' => '121',
        'awayTeam' => 'Los Angeles Clippers',
        'pointsAway' => '115'
    ]

 ?>


<!-- gameOne score on web page -->
<div>
    <p>
        <?= $gameOne["homeTeam"]?> - <?= $gameOne["awayTeam"]?> | <?= $gameOne["pointsHome"]?> - <?= $gameOne["pointsAway"]?>
    </p>
</div>


<!-- gameTwo score on web page -->
<div>
    <p>
        <?= $gameTwo["homeTeam"]?> - <?= $gameTwo["awayTeam"]?> | <?= $gameTwo["pointsHome"]?> - <?= $gameTwo["pointsAway"]?>
    </p>
</div>


<!-- gameThree score on web page -->
<div>
    <p>
        <?= $gameThree["homeTeam"]?> - <?= $gameThree["awayTeam"]?> | <?= $gameThree["pointsHome"]?> - <?= $gameThree["pointsAway"]?>
    </p>
</div>