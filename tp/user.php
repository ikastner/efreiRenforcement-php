<?php
session_start(); 
include ("GetUserBdd.php");
include ("login.php");

class User {
   
    private $nom;
    private $email;
    private $password;
    private $boolRole;

    public function __construct($nom, $email, $password,$boolRole) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
        $this->boolRole = $boolRole;

    }
    
    public function afficherInfos() {
        echo "<br> Name: " . $this->nom . 
             "<br> Email: " . $this->email ."<br><br>";
    }
    
    public function verifyPassword($password)
    {
        return password_verify($password, $this->password);
    }
}


function login($email, $password, $rowsUser)
{  
    



foreach ($rowsUser as $user) {
    if ($user["email"] === $email) {
        $userFound = true;
        if ($user["password"] === 
        //password_hash(
            $password
            //, PASSWORD_DEFAULT)
             ) {
            $_SESSION['user'] = $user;
            echo "Connexion réussie pour $email.\n";
            return true;
        } else {
            echo "Erreur : Mot de passe incorrect.\n";
            return false;
        }
    }
}
    

     
}
$email = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);


login($email,$password, $rowsUser);  
echo "{$_SESSION['user']['nom']}!";


   


?>

