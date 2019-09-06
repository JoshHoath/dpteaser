<?php
require('config.php');

    if(isset($_POST['create'])) {

        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $username   = $_POST['username'];
        $email      = $_POST['email'];
        $city       = $_POST['city'];
        $password   = $_POST['password'];
        $referall   = $_POST['referall'];

        $sql = "INSERT INTO signups(firstname, lastname, username, email, city, password, referall) VALUES(?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname, $username, $email, $city, $password, $referall]);
        if($result) {
            header('index.php');
        } else {

        }
    }

?>
