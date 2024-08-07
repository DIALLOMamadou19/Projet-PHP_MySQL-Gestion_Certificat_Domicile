<?php 
    include('connexion.php');
    $sqlQuery='INSERT INTO maison(NUMERO,IDQUARTIER,CIN,SUPERFICIE)
    VALUES(:NUMERO,:IDQUARTIER,:CIN,:SUPERFICIE)';
    $inser_quartier=$db->prepare($sqlQuery);
    $inser_quartier->execute([
        'NUMERO'=>$_POST['numero'],
        'IDQUARTIER'=>$_POST['idquartier'],
        'CIN'=>$_POST['CIN'],
        'SUPERFICIE'=>$_POST['superficie'],
    ]);

?>
<script>
    alert("Maison bien ajouter!!!!")
</script>
<?php
    header('Location:ajout_maison.html');
?>