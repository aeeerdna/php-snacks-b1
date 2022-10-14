<!-- 
    Snack 5:
        Creare un array contenente qualche alunno di un’ipotetica classe. 
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
        Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

<?php

// array studenti e voti
$class = [
    [
        'name' => 'Andrea',
        'surname' => 'Bottiglia',
        'grades' => [4,7,8,6],
    ],

    [
        'name' => 'Alberto',
        'surname' => 'Bicchiere',
        'grades' => [8,6,7,10],
    ],

    [
        'name' => 'Alice',
        'surname' => 'Biglia',
        'grades' => [6,6,7,9],
    ]
];


// calcolo media voti ogni studente
for ($i=0; $i < count($class); $i++){
    $student = $class[$i];
    $average = array_sum($student['grades']) / count($student['grades']);
    ?>

    <div>
        <h2><?= $student['name']?> <?= $student['surname']?></h2>
        <p><?= round($average, 2)?></p>
    </div>

    <?php
}
?>