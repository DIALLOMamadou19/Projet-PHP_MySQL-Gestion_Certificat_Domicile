<?php 
    include('connexion.php');
    $sqlQuery='INSERT INTO delegue(CIN_DELEGUE,NOM,PRENOM,LOGIN,MOTDEPASSE)
    VALUES(:CIN_DELEGUE,:NOM,:PRENOM,:LOGIN,:MOTDEPASSE)';
    $inser_habitant=$db->prepare($sqlQuery);
    $inser_habitant->execute([
        'CIN_DELEGUE'=>$_POST['CIN'],
        'NOM'=>$_POST['nom'],
        'PRENOM'=>$_POST['prenom'],
        'LOGIN'=>$_POST['login'],
        'MOTDEPASSE'=>$_POST['motdepasse'],
    ]);

?>
<script>
    alert("Délégue bien ajouter!!!!")
</script>
<?php
    header('Location:ajout_dirigeant_quartier.html');
?>