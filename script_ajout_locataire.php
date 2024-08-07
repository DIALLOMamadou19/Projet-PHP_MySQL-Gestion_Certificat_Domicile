<?php 
    include('connexion.php');
    $sqlQuery='INSERT INTO loger(NUMERO,CIN,DATEDEBUT,DATEFIN)
    VALUES(:NUMERO,:CIN,:DATEDEBUT,:DATEFIN)';
    $inser_locataire=$db->prepare($sqlQuery);
    $inser_locataire->execute([
        'NUMERO'=>$_POST['numero'],
        'CIN'=>$_POST['CIN'],
        'DATEDEBUT'=>$_POST['date_debut'],
        'DATEFIN'=>$_POST['date_fin'],
    ]);

?>
<script>
    alert("Locataire bien ajouter!!!!")
</script>
<?php
    header('Location:script_affiche_habitant_mm_maison.php');
?>