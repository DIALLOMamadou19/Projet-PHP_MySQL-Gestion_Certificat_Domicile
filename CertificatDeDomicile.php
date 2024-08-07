<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion CertificatDeDomicile</title>
    <?php 
        include('connexion.php');
        /*Recuperation des saisies*/
        $cin = $_POST['CIN_habitant'];
        $nom_delegue = $_POST['nom'];
        $prenom_delegue = $_POST['prenom'];

        $sqlQuery="SELECT HABITANT.NOM, HABITANT.PRENOM, HABITANT.DATENAISSANCE, HABITANT.LIEUNAISSANCE, QUARTIER.NOMQUARTIER, DELEGUE.NOM AS NOM_DELEGUE, DELEGUE.PRENOM AS PRENOM_DELEGUE 
        FROM HABITANT 
        INNER JOIN LOGER ON HABITANT.CIN = LOGER.CIN 
        INNER JOIN MAISON ON LOGER.NUMERO = MAISON.NUMERO
        /*INNER JOIN MAISON ON MAISON.CIN = HABITANT.CIN*/
        INNER JOIN QUARTIER ON MAISON.IDQUARTIER = QUARTIER.IDQUARTIER 
        INNER JOIN DIRIGER ON QUARTIER.IDQUARTIER = DIRIGER.IDQUARTIER 
        INNER JOIN DELEGUE ON DIRIGER.CIN_DELEGUE = DELEGUE.CIN_DELEGUE 
        WHERE HABITANT.CIN = '".$_POST['CIN_habitant']."'";
        $AdSte=$db->prepare($sqlQuery);
        $AdSte->execute();
        $tabAss=$AdSte->fetchAll();
        
    ?>
</head>
<body>
    <?php
    $dt=time();
    foreach($tabAss as $adhe){
    echo"<br>COMMUNE DE RUFISQUE<br> QUARTIER ".$adhe['NOMQUARTIER']."<br>RUFISQUE NORD<br>";
    echo"<br><br><p align='center'>CERTIFICAT DE DOMICILE</p>";
    echo"<br><p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Je sousigné, Monsieur ".$adhe['PRENOM_DELEGUE']." ".$adhe['NOM_DELEGUE']
    .", Délégué de quartier ".$adhe['NOMQUARTIER']."<br>certifie que Mr/Mme ".$adhe['PRENOM']." ".$adhe['NOM']." né (e) le ".$adhe['DATENAISSANCE']
    ." à ".$adhe['LIEUNAISSANCE']."<br>est bien domicilié (e) à Rufisque, quartier ".$adhe['NOMQUARTIER'].".</p>";
    echo"<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp En foi de quoi je lui délivre le présent certificat pour servire et valoir ce que de droit. </p>";
    echo"<p align='right'> Rufisque, le ".date("d/m/Y")."<br><br>Le Délégué de quartier<br>".$adhe['PRENOM_DELEGUE']." ".$adhe['NOM_DELEGUE']."</p>";
    }
    ?>
</body>
</html>