<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Adherent</title>
    <link rel="stylesheet" href="style3.css">
    <?php 
        include('connexion.php');
        $sqlQuery='SELECT * from habitant';
        $AdSte=$db->prepare($sqlQuery);
        $AdSte->execute();
        $tabAss=$AdSte->fetchAll();
        $taille=count($tabAss);
        
    ?>
</head>
<body>

<div id="menu_wrapper">
            <div id="menu">
                <ul>
                    <li><a href="accueil.php" ><strong> Accueil</strong></a></li>
                    <li><a href="ajout_habitant.html" ><strong> Ajouter habitant</strong></a></li>
                    <li><a href="script_affiche_quartier.php" ><strong> Afficher quartiers</strong></a></li>
                    <li><a href="renseignement_certificat.html" ><strong> Générer certificat de domicile</strong></a></li>
                </ul>
            </div>
        </div>
        <br>
            <strong id="id">HABITANTS DU QUARTIER</strong>
            <hr width="250px">
            <hr width="250px">

    <form action=<?php echo"'script.php?nb=".$taille."'";?>" method="post">
    <table align='center' border="1">
        <tr>
            <td>CIN</td><td>Nom</td><td>Prenom</td><td>Date de naissance</td><td>Lieu de naissance</td><td>Sexe</td><td></td><td></td><td></td>
        </tr>
        <?php
            $i=0;
            foreach($tabAss as $adhe){
                $i++;
                echo "<tr>";
                    echo "<td>".$adhe['CIN']."</td>";
                    echo "<td>".$adhe['NOM']."</td>";
                    echo "<td>".$adhe['PRENOM']."</td>";
                    echo "<td>".$adhe['DATENAISSANCE']."</td>";
                    echo "<td>".$adhe['LIEUNAISSANCE']."</td>";
                    echo "<td>".$adhe['SEXE']."</td>";
                    
                    echo "<td><button type ='submit' name='sup".$i."'>Supprimer</button></td>";
                    echo "<td><button type ='submit' name='mod".$i."'>Modifier</button></td>";
                    echo "<td><button type ='submit' name='detail".$i."'>Afficher Détails</button></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <button type='submit' name='ajout_habitant'>Ajouter habitant</button>

    </form>
</body>
</html>