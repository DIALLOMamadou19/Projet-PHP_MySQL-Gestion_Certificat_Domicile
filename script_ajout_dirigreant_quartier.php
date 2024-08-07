<?php 
    include('connexion.php');
    $sqlQuery='INSERT INTO diriger(IDQUARTIER,CIN_DELEGUE,DATEDEBUT,DATEFIN)
    VALUES(:IDQUARTIER,:CIN_DELEGUE,:DATEDEBUT,:DATEFIN)';
    $inser_locataire=$db->prepare($sqlQuery);
    $inser_locataire->execute([
        'IDQUARTIER'=>$_POST['idquartier'],
        'CIN_DELEGUE'=>$_POST['CIN'],
        'DATEDEBUT'=>$_POST['date_debut'],
        'DATEFIN'=>$_POST['date_fin'],
    ]);

?>
<script>
    alert("Dirigeant bien ajouter!!!!")
</script>
<?php
    header('Location:script_affiche_quartier.php');
?>