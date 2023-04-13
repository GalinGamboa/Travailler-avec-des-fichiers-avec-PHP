<?php
    include ("../layouts/menu.php")
?>

<?php
    if(!file_exists('../dosier_destination/texte.txt')){
        header('location:../index.php?message="Impossible de lire un fichier qui n\'existe pas"');
        exit();
    }
    $f_name = "texte.txt";                              // Créer une variable avec le fichier de test
    $f_route = "../dosier_destination/".$f_name;        // Créer une variable avec le chemin a texte.txt

    $handle = fopen($f_route, 'r');                     // Créer un fichier de test avec le mode lecture
?>
    <div class="box box1">
        <h3>Données de fichier</h3>
        <?php
            echo "<b>Taille du fichier :</b>".filesize("..//dosier_destination/texte.txt").' bytes'.'<br/>'; 
            $date_dernier_acces = fileatime("..//dosier_destination/texte.txt");
            echo "<b>Dernier acces: </b> ".date('Y-m-d H:i:s'),$date_dernier_acces ."<br>";
            $date_dernier_modif = filectime('../dosier_destination/texte.txt');
            echo '<b>Dernier modification: </b>'.date('Y-m-d H:i:s'),$date_dernier_modif."<br>";

            echo(is_readable('..//dosier_destination/texte.txt'))?
                "<b>Le fichier peut être lu</b> <br>"
                :
                "<b>le fichier ne peut pas être lu</b> <br>";
            
            echo(is_writable('..//dosier_destination/texte.txt'))?
                "<b>le fichier peut être écrit</b>"
                :
                "<b>le fichier ne peut pas être écrit</b>";
        ?>
    </div>
    
<?php
    include("../layouts/reading.php");
?>



        
<?php
    include ("../layouts/footer.php")
?>