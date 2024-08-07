<?php 
    include('connexion.php');
    $sqlQuery='INSERT INTO habitant(CIN,NOM,PRENOM,DATENAISSANCE,LIEUNAISSANCE,SEXE)
    VALUES(:CIN,:NOM,:PRENOM,:DATENAISSANCE,:LIEUNAISSANCE,:SEXE)';
    $inser_habitant=$db->prepare($sqlQuery);
    $inser_habitant->execute([
        'CIN'=>$_POST['CIN'],
        'NOM'=>$_POST['nom'],
        'PRENOM'=>$_POST['prenom'],
        'DATENAISSANCE'=>$_POST['DATENAISSANCE'],
        'LIEUNAISSANCE'=>$_POST['LIEUNAISSANCE'],
        'SEXE'=>$_POST['SEXE'],
    ]);

?>
<script>
    alert("Habitant bien ajouter!!!!")
</script>
<?php
    header('Location:ajout_habitant.html');
?>