<?php
    include ("../layouts/menu.php")
?>

<!-- Contenu de la page  -->

<?php

// Vérifiez si le dossier de destination existe

if(!file_exists('../dosier_destination')) {
    mkdir('../dosier_destination',0777);
    
}else{
    header('location:../index.php?message="Le fichier existe déjà"');
    exit();
}

$f_name = "texte.txt";                                      // Créer une variable avec le fichier de test
$f_route = "../dosier_destination/".$f_name;                 // Créer une variable avec le chemin a texte.txt

$handle = fopen($f_route, 'w');                             // Créer un fichier de test avec le mode écriture
$f_content =  "Bonjour, je suis un texte d'essai";          // Créer du contenu pour le texte
               

fwrite($handle ,$f_content);                                // Ecrire un texte

fclose($handle);                                            //Fermer le mode d'écriture et de lecture de fichier

header('location: ../index.php?message="texte.txt créé avec succès "');

?>


<?php
    include ("../layouts/footer.php")
?>