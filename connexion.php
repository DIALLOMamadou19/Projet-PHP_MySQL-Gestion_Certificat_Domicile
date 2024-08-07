<?php
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=projet_examen;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur de connexion : '. $e->getMessage());
    }
?>