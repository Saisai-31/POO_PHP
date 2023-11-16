<?php
    include('Personne.php');
    include('PersonneAgriculture.php');
    include('PersonneBoulanger.php');
    include('PersonneInfirmier.php');

    $agriculteur = new PersonneAgriculture();
    $infirmier = new PersonneInfirmier();
    $boulanger = new PersonneBoulanger();

    $agriculteur -> setPrenom('Justin');
    $infirmier -> setPrenom('Clarisse');
    $boulanger -> setPrenom('Estelle');

    echo $agriculteur -> getPrenom()." ".$agriculteur -> dormir().".<br>"; 
    echo $boulanger -> getPrenom()." ".$boulanger -> dormir().".<br>"; 
    echo $infirmier -> getPrenom()." ".$infirmier -> dormir()." !<br>"; 

?>