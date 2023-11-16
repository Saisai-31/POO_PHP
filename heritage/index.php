<?php

    include('Eleve.php');
    include('EleveFille.php');

    $eleveN1 = new Eleve();
    $eleveN2 = new EleveFille();

    $eleveN1 -> setPrenom('alain');
    $eleveN2 -> setPrenom('julie');
    $eleveN2 -> setAge('22');

    echo $eleveN1 -> getPrenom().'<br>';
    echo $eleveN2 -> getPrenom(). ' qui a ' .$eleveN2 -> getAge().' ans';

?>