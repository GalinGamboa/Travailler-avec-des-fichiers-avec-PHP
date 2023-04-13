<?php
    include ("../layouts/menu.php")
?>

<?php
    if(!file_exists('../dosier_destination/texte.txt')){
        header('location:../index.php?message="Impossible de changer contenu dans un fichier qui n\'existe pas"');
        exit();
    } 
?>

<div class="box">
    <h3>Changer tout le contenu</h3>
    <br>
    <form class= "form" action="modify.php" method="GET">
        <label for="newContent">Entrez le nouveau contenu</label>
        <input type="text" name="newContent" id="newContent">
        <br>
        <br>
        <input  id = "button_submit" type="submit" value="Modifier Contenu">
    </form>
    
    <?php
    if($_GET){
        $newContent = $_GET['newContent'];
        $fhandle = fopen('..//dosier_destination/texte.txt','w+');
        fwrite($fhandle,$newContent);
        fclose($fhandle);
        header('location:../index.php?message="Contenu modifié avec succès"');
        }
    ?>  
</div> 

<?php
    include("../layouts/reading.php");
?>
        
<?php
    include ("../layouts/footer.php")
?>