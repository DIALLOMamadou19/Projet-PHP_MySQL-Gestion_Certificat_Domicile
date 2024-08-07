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
        $sqlQuery="SELECT MAISON.NUMERO, HABITANT.NOM, HABITANT.PRENOM, QUARTIER.NOMQUARTIER
            FROM MAISON
            INNER JOIN HABITANT ON MAISON.CIN = HABITANT.CIN
            INNER JOIN QUARTIER ON MAISON.IDQUARTIER = QUARTIER.IDQUARTIER
            WHERE QUARTIER.NOMQUARTIER = '".$_POST['nomquartier'.$i]."'";
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
            <strong id="id">MAISONS DU QUARTIER</strong>
            <hr width="250px">
            <hr width="250px">

    <form action=<?php echo"'script.php?nb=".$taille."'";?>" method="post">
    <table align='center' border="1">
        <tr>
            <td>N° Maison</td><td>Nom proprietaire</td><td>Prénom proprietaire</td><td>Nom du quartier</td></td><td></td>
        </tr>
        <?php
            $k=0;
            foreach($tabAss as $adhe){
                $k++;
                echo "<tr>";
                    echo "<td><input readonly value='".$adhe['NUMERO']."' name='numero".$k."'></td>";
                    echo "<td>".$adhe['NOM']."</td>";
                    echo "<td>".$adhe['PRENOM']."</td>";
                    echo "<td>".$adhe['NOMQUARTIER']."</td>";
                    
                    echo "<td><button type ='submit' name='aff_hab_mm_m".$k."'>Afficher habitant</button></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <button type='submit' name='ajout_maison'>Ajouter maison</button>
    


    </form>
</body>
</html>