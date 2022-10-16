<!-- 
    Snack 4:
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
        Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 -->

<?php

    //  paragraph
    $paragraph = "Growing up in the Netherlands. with its network of pathways. its flat landscape and its bicycle-friendly traffic laws. the brothers Ties and Taco Carlier were commuting with their parents on bikes by age 4.";

    $array = explode('.', $paragraph);

    echo '<pre>';

    var_dump($array);

    echo '</pre>'
?>