<?php

class User {
    
    private $listAD = [
        [
            'username' => 'user1',
            'password' => 'password123',
            'age'      => 25
        ],
        [
            'username' => 'user2',
            'password' => 'mypassword',
            'age'      => 30
        ],
        [
            'username' => 'admin',
            'password' => 'adminpass',
            'age'      => 35
        ]
    ];
    
    private $username;
    private $password;
    private $age;

    private $boolUsr = false;
    private $boolPass = false;
    
    public function __construct($username, $password, $age) {
        $this->username = $username;
        $this->password = $password;
        $this->age = $age;
    }


    public function auth($user,$mdp) {
        foreach ($this->listAD as $username) {
            if ($username['username'] === $user && $username['password'] === $mdp) {
                $boolUsr = true;
                break;
            }
        }
        return null; // Retourne null si l'utilisateur n'existe pas
    }

    public function getUsername(){
        echo "Username: " . $this->username . "<br>";
    }
    public function getAge(){
        echo "Age: " . $this->age . "<br>";
    }
    public function getPassword(){
        echo "Password: " . $this->password . "<br>";
    }

    // public function controlAuth($usr,$mdp){
    //     foreach($listAD as $usrTable){
    //         if($usr = $usrTable){
    //             $boolUsr = true;
    //             break;
    //             foreach($listAD as $PassTable){
    //         if($mdp = $PassTable){
    //             $boolPass = true;
    //             break;
    //         }else{
    //             $boolPass = false;
    //         }
            
    //     }
    //         }else{
    //             $boolUsr = false;
    //             $boolPass = false;
    //             break;
    //         }
            
    //     }

        
    // }

// public function controlAuthBool($usr,$mdp){
//     foreach($listAD as $user){
//         if($usr == $user["username"] && $mdp == $user["password"]){
//             $UserFound = true;
//             echo "L'utilisateur à été trouvée ".$usr;
//             break;
//         }else{
//             echo "Non trpuvé ".$usr;
//         }
//     }
// }

   
}

$user = new User("admin","adminpass",10);
$currentuser = $user->getUsername();
$currentmdp = $user->getPassword();
echo auth(currentuser,currentmdp);
// $user->getAge();

// $user->controlAuthBool("admin","adminpass");
?>