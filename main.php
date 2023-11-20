<?php
    include('Eleve2.php');

    $eleve1 = new Eleve2;
    $eleve1->setPrenom('Diane');
    echo $eleve1->getPrenom().'<br>';
    echo 'Cet(te) élève a été inscrit(e) le '.$eleve1->dateInscription.'<br>';

    include('constante.php'); //include m'affiche l'objet instancié dans constante.php
    $eleve4 = new Eleve3;
    echo '<br>'.$eleve4::ECOLE.'<br>';

?>