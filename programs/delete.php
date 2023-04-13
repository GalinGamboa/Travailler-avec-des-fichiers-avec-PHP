<?php
    include ("../layouts/menu.php")
?>

<?php
    if(file_exists('../dosier_destination/texte.txt')){
        unlink('../dosier_destination/texte.txt');
        rmdir('../dosier_destination');
        header('location: ..//index.php?message="Fichier supprimé avec succès"');
    }else{
        header('location: ..//index.php?message="Le fichier n\'existe pas"');
        exit()  ;
    }
?>
        
<?php
    include ("../layouts/footer.php")
?>