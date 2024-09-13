<?php

include("connexion.php");

//include 'include/connect.php';

    $sql1 = "SELECT * FROM utilisateurs";
    $res1 = $conn->query($sql1);
    $rowsUser = [];
    
if ($res1 !== FALSE) {  
    while ($row = $res1->fetch_assoc()) {
        $rowsUser[] = $row;
    }
} else {
    echo "Erreur : " . $conn->error;
}
            print_r($rowsUser);
            echo password_hash('admin', PASSWORD_DEFAULT);

            $passwordString = "admin";

            $passwordHash= password_hash('admin', PASSWORD_DEFAULT);

           if(password_verify($passwordString,$passwordHash)){
                echo "bg";
           } else {
            echo "non";
           }
           
?>