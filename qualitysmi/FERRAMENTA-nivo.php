<?php

    $title       = "Nivo Slider";
    $description = "Ferramenta slider simples para exibição de slides.";
    $h1          = $title;
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php";
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        "tools/nivo-slider"
    ));
    
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content">
        
        <div class="container">

            <h1 class="main-title"><?php echo $h1; ?></h1>

            <ol>
                <li>Adicionar a linha "tools/nivo-slider" no <strong>compressCSS</strong>;</li>
                <li>Adicionar a linha "tools/jquery.nivo" no <strong>$quality->js_custom</strong> ANTES do _footer.php;</li>
                <li>Montar o HTML;</li>
                <li>Adicionar o script abaixo: <br><br>
                    <kbd>
                    $("#slider").nivoSlider(); <br>
                    </kbd>
                    <br><br>
                </li>
            </ol>

            <hr>

            <div class="theme-default-nivo-slider">
                <div id="slider" class="nivoSlider"> 
                    <img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/toystory.jpg" alt="Imagem">
                    <a href="<?php echo $url; ?>ferramenta-slider">
                        <img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/up.jpg" alt="Imagem" title="Isso é um exemplo de legenda">
                    </a>
                    <img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/walle.jpg" alt="Imagem" data-transition="slideInLeft">
                    <img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/nemo.jpg" alt="Imagem" title="#html-caption"> 
                </div>
                <div id="html-caption" class="nivo-html-caption">
                    <p><strong>Isso</strong> é um exemplo de uma legenda <em>HTML</em> com <a href="<?php echo $url; ?>ferramenta-slider">um link</a>.</p>
                </div>
            </div>
        
        </div>
    </main>
    <?php 
        $quality->js_custom = array(
            "tools/jquery.nivo"
        );
    ?>
    <?php include "includes/_footer.php"; ?>
    
    <script>
        $(function(){
            $("#slider").nivoSlider();
            //effect: "random",
            //slices: 15,
            //boxCols: 8,
            //boxRows: 4,
            //animSpeed: 500,
            //pauseTime: 3000,
            //startSlide: 0,
            //directionNav: true,
            //controlNav: true,
            //controlNavThumbs: false,
            //pauseOnHover: true,
            //manualAdvance: false,
            //prevText: 'Prev',
            //nextText: 'Next',
            //randomStart: false,
            //beforeChange: function(){},
            //afterChange: function(){},
            //slideshowEnd: function(){},
            //lastSlide: function(){},
            //afterLoad: function(){}
        });
    </script>
    
</body>
</html>