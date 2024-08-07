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
        $sqlQuery='SELECT IDQUARTIER,NOMQUARTIER from quartier';
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
    
    <strong id="id">QUARTIERS</strong>
    <hr width="250px">
    <hr width="250px">

    <form action=<?php echo"'script.php?nb=".$taille."'";?>" method="post">
    <table align='center' border="1">
        <tr>
            <td>ID du quartier</td><td>Nom du quartier</td><td>
        </tr>
        <?php
            $i=0;
            foreach($tabAss as $adhe){
                $i++;
                echo "<tr>";
                    echo "<td>".$adhe['IDQUARTIER']."</td>";
                    echo "<td><input readonly value='".$adhe['NOMQUARTIER']."' name='nomquartier".$i."'></td>";
                    
                    echo "<td><button type ='submit' name='aff_maison".$i."'>Afficher maisons</button></td>";
                echo "</tr>";
            }
        ?>
    </table>
            <br><br>
        <button type='submit' name='ajout_quartier'>Ajouter quartier</button>
        <button type='submit' name='ajout_delegue'>Ajouter délégué</button>
        <button type='submit' name='aff_habitant'>Afficher tout les habitants</button>
    </form>
    
</body>
</html>