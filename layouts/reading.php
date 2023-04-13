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