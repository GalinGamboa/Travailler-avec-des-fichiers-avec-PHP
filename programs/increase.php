<?php
    include ("../layouts/menu.php")
?>
<?php
    if(!file_exists('../dosier_destination/texte.txt')){
        header('location:../index.php?message="Impossible de augmenter contenu dans un fichier qui n\'existe pas"');
        exit();
    } 
?>

<div class="box">
    <h3>Augmenter le contenu</h3>
    <br>
    <form class= "form" action="increase.php" method="GET">
        <label for="newContent">Entrez du contenu</label>
        <input type="text" name="newContent" id="newContent">
        <br>
        <br>
        <input  id = "button_submit" type="submit" value="Augmenter Contenu">
    </form>
    
    <?php
    if($_GET){
        $newContent = "<br>".$_GET['newContent'];
        $fhandle = fopen('..//dosier_destination/texte.txt','a+');
        fwrite($fhandle,$newContent);
        fclose($fhandle);
        header('location: ../index.php?message="Le contenu a été augmenté avec succès"');
        }
    ?>  
</div> 




<div class="box">
    <?php
        if(file_exists('../dosier_destination/texte.txt')){
            $handle = fopen("../dosier_destination/texte.txt", "r");
            echo '<h3>texte.txt</h3>';
                while (!feof($handle)){
                    $flinea = fgets($handle);
                    echo( $flinea . '<br>');
                }  
        }
    ?>
</div>


        
<?php
    include ("../layouts/footer.php")
?>