<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navdiv">
    <nav class="navbar">
        <ul class="narbar-item">
            <li><a href="film.php">Accueil</a></li>
            <li><a href="insertfilm.html">Ajouter un film</a></li>
        </ul>
    </nav>
    </div>

    <div class="container">
    <h1> Liste des films</h1>

    </div>
    <?php 
    include("connexion.php");
    
    $sql1 = "SELECT * FROM livre";
    $res1 = $conn->query($sql1);

    if ($res1 !== FALSE) {  
        while ($row = $res1->fetch_assoc()) {
            $rowsFilm[] = $row;
        }
    } else {
        echo "Erreur : " . $conn->error;
    }
    // print_r($rowsFilm); 
    
    echo"<table border='1'>
           
           <thead>
           <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Durée</th>
                <th>Date de sortie</th>               
           </tr>
           </thead>
           <tbody>";

           
                foreach($rowsFilm as $element){
                echo'<tr>
                         <td><img src="'.$element["image"].'" width= 400px height=200px></img></td>
                         <td style="width:30%">'.$element["titre"].'</td>
                         <td style="width:30%">'.$element["duree"].'</td>
                         <td style="width:30%">'.$element["annee_sortie"].'</td>
                     </tr>';
                }
                       
            echo"       
            
            </tbody>
            </table>";

        
    ?>
    

    
</body>
</html>