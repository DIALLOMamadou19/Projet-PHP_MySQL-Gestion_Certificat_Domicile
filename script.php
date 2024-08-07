<?php
for($i=1;$i<=$_GET['nb'];$i++)
{
    if(isset($_POST['aff_maison'.$i])){
        include('script_affiche_maison_mm_quartier.php');
    }
    if(isset($_POST['aff_habitant'.$i])){
        include('script_affiche_habitants.php');
    }
    if(isset($_POST['aff_hab_mm_m'.$i])){
        include('script_affiche_habitant_mm_maison.php');
    }
    
}


if(isset($_POST['ajout_quartier'])){
    include('ajout_quartier.html');
}
if(isset($_POST['ajout_maison'])){
    include('ajout_maison.html');
}
if(isset($_POST['ajout_habitant'])){
    include('ajout_habitant.html');
}
if(isset($_POST['ajout_locataire'])){
    include('ajout_locataire.html');
}
if(isset($_POST['aff_habitant'])){
    include('script_affiche_habitants.php');
}
if(isset($_POST['ajout_delegue'])){
    include('ajout_delegue.html');
}
?>