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

    echo $agriculteur -> dormir().".<br>"; //Fais un return prenom dans la class enfant PersonneAgriculture dans la function dormir()
    echo $boulanger -> getPrenom()." ".$boulanger -> dormir().".<br>"; 
    echo $infirmier -> getPrenom()." ".$infirmier -> dormir()." !<br>"; 

?>