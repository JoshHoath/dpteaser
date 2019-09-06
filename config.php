<?php
    define('BDD_hote', '192.254.225.135');
    define('BDD_user', 'duelpool_josh');
    define('BDD_pass', 'secret');
    define('BDD_nmDB', 'duelpool_dp-test');

    try
    {
        $bdd = new PDO('mysql:host='.BDD_hote.';dbname='.BDD_nmDB, BDD_user, BDD_pass);
    }
    catch(Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }



?>
