
<?php
    include ("./layouts/menu.php")
?>
    
<?php
    $msg_create ='';
    if ($_GET){
        $msg_create =$_GET['message'];
    }
    echo '<p class="msg_visible" id="msg_create">'.$msg_create.'</p>';
?>

<div class="box">
    <?php
        if(file_exists('./dosier_destination/texte.txt')){
            $handle = fopen("./dosier_destination/texte.txt", "r");
            echo '<h3>texte.txt</h3>';
                while (!feof($handle)){
                    $flinea = fgets($handle);
                    echo( $flinea . '<br>');
                }  
            }
    ?>
</div>
    
<?php
    include ("./layouts/footer.php")
?>