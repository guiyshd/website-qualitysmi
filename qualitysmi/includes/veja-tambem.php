<section class="veja-tambem">
    <h5>Veja Também</h5>
    <div class="row">
        <?php 
            echo $quality->listaThumbs($palavras_chave, array(
                    "random" => true,
                    "limit" => 4,
                    "class_div" => "col-xs-6 col-sm-4 col-md-3 col-lg-3",
                    "title_tag" => "h6",
                    "extension" => 'jpg'
                )
            );
        ?>
    </div>
</section>