<?php 
    include('connexion.php');
    $sqlQuery='INSERT INTO quartier(IDQUARTIER,NOMQUARTIER,NOMBREMAISON)
    VALUES(:IDQUARTIER,:NOMQUARTIER,:NOMBREMAISON)';
    $inser_quartier=$db->prepare($sqlQuery);
    $inser_quartier->execute([
        'IDQUARTIER'=>$_POST['idquartier'],
        'NOMQUARTIER'=>$_POST['nomquartier'],
        'NOMBREMAISON'=>$_POST['nbrmaison'],
    ]);

?>
<script>
    alert("Quartier bien ajouter!!!!")
</script>
<?php
    header('Location:ajout_quartier.html');
?>