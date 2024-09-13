<?php
session_start();




class User
{
    public $firstname;
    public $lastname;
    public $age;
    public $email;
    private $password;

    public function __construct($firstname, $lastname, $age, $email, $password)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function verifyPassword($password)
    {
        return password_verify($password, $this->password);
    }

    public function displayInfos()
    {
        return "Nom: $this->firstname $this->lastname, Âge: $this->age, Email: $this->email";
    }
}

$users = [];

function register($firstname, $lastname, $age, $email, $password)
{
    global $users;

    if (!is_numeric($age)) {
        echo "Erreur : L'âge doit être un nombre.\n";
        return false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Erreur : L'adresse e-mail n'est pas valide.\n";
        return false;
    }

    foreach ($users as $user) {
        if ($user->email === $email) {
            echo "Erreur : Un utilisateur avec cet e-mail existe déjà.\n";
            return false;
        }
    }

    $newUser = new User($firstname, $lastname, $age, $email, $password);
    $users[] = $newUser;
    echo "Enregistrement réussi pour $email.\n";
    return true;
}

function login($email, $password)
{
    global $users;

    foreach ($users as $user) {
        if ($user->email === $email) {
            if ($user->verifyPassword($password)) {
                $_SESSION['auth_token'] = bin2hex(random_bytes(16));
                $_SESSION['user_email'] = $user->email;
                echo "Connexion réussie pour $email.\n";
                return true;
            } else {
                echo "Erreur : Mot de passe incorrect.\n";
                return false;
            }
        }
    }

    echo "Erreur : Utilisateur non trouvé.\n";
    return false;
}

function logout()
{
    unset($_SESSION['auth_token']);
    unset($_SESSION['user_email']);
    echo "Déconnexion réussie.\n";
}

function displayUsers()
{
    global $users;

    if (empty($users)) {
        echo "Aucun utilisateur enregistré.\n";
        return;
    }

    echo "Liste des utilisateurs :\n";
    foreach ($users as $user) {
        echo $user->displayInfos() . "\n";
    }
}

function displayProfil()
{
    global $users;

    if (!isset($_SESSION['user_email'])) {
        echo "Aucun utilisateur connecté.\n";
        return;
    }

    foreach ($users as $user) {
        if ($user->email === $_SESSION['user_email']) {
            echo "Votre profil :\n";
            echo $user->displayInfos() . "\n";
            return;
        }
    }

    echo "Erreur : Profil utilisateur introuvable.\n";
}

while (true) {
    echo "\nChoisissez une action :\n";
    echo "1 - Enregistrer un nouvel utilisateur\n";

    if (isset($_SESSION['auth_token'])) {
        echo "2 - Afficher mon profil\n";
    } else {
        echo "2 - Se connecter\n";
    }

    echo "3 - Se déconnecter\n";
    echo "4 - Voir tous les utilisateurs\n";
    echo "5 - Quitter\n";
    echo "Votre choix : ";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case '1':
            echo "Prénom : ";
            $firstname = trim(fgets(STDIN));
            echo "Nom de famille : ";
            $lastname = trim(fgets(STDIN));
            echo "Âge : ";
            $age = trim(fgets(STDIN));
            echo "Email : ";
            $email = trim(fgets(STDIN));
            echo "Mot de passe : ";
            $password = trim(fgets(STDIN));
            register($firstname, $lastname, $age, $email, $password);
            break;
        case '2':
            if (isset($_SESSION['auth_token'])) { 
                displayProfil();
            } else {
                echo "Email : ";
                $email = trim(fgets(STDIN));
                echo "Mot de passe : ";
                $password = trim(fgets(STDIN));
                login($email, $password);
            }
            break;
        case '3':
            logout();
            break;
        case '4':
            displayUsers();
            break;
        case '5':
            echo "Au revoir !\n";
            exit;
        default:
            echo "Choix invalide. Veuillez réessayer.\n";
            break;
    }
}
