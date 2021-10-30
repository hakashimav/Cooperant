<?php
    
    echo '
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="STYLE.css">
</head>
<body>
';
    function securite($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = strip_tags($donnees);

        return $donnees;
    }


   if(isset($_POST["Nom"])){//Vérification des donnéés envoyées via le formulaire de la page vent
    
    //recupération des données

    $Nom = securite($_POST["Nom"]);
    $Description = securite($_POST["Description"]);
    $Etat = securite($_POST["Etat"]);
    $Prix = securite($_POST["Prix"]);
    $Devise = securite($_POST["Devise"]);
    $Images = $_FILES["Image"]["name"];
    $Photo = $_FILES["Image"]["tmp_name"];
    
    // Appel des instructions de la conexion avec la base des données
    include('connexion.php');
    //Insertion des données saisie via le formulaire vers la base des données
    $req_insert = "insert into ventes(id_article, Nom, Description, Etat, Prix, Devise, Image)
    VALUES(null, '$Nom', '$Description', '$Etat', '$Prix', '$Devise', '$Images')";

    $res=Mysqli_query($con, $req_insert) or die(Mysqli_error($con));
        if($res==true){ //vérification du résultat d'insertion si vrai
            move_uploaded_file($Images, 'Images/'.$Photo);  // Déplacement de la photo vers le repertoire du serveur web
                   
        $reqs="select* from ventes"; // requette de selection de tous les étudiants inscrits
        $ress=Mysqli_query($con, $reqs) or die(Mysqli_error($con)); // traitement de la requette
        $tableau=Mysqli_fetch_assoc($ress);  // création d'un tableau des élément trouvés
        $ctr=Mysqli_num_rows($ress);         // nombre des enregistrements trouvés
        if ($ctr>0){  // vérification si nombre des enregistrements trouvé est supérieur à zéro
            // Affichage de la liste des étudiants
            echo ' 
            <table border="5px">
            <tr>
                <td>PROFIL</td>
                <td>Nom</td>
                <td>Description</td>
                <td>Prix</td>
                
            </tr>  ';
            do{ // Affichage en boucle des enregistrements trouvés
                echo "<tr><td><img src='../assets/images/".$tableau['Image']."' width='100px' height='100px'></td><td>".$tableau['Nom']."</td><td>"
                .$tableau['Description']."</td><td>".$tableau['Prix']."</td></tr>";
            }while( $tableau=Mysqli_fetch_assoc($ress));
            echo '</table>';
            
            echo '
            </DIV>
            </body>
            </html>';
        }
    }
     else {
        echo "Opération non aboutie";
    }
}
    
    
?>