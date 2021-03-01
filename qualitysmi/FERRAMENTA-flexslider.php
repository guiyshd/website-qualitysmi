<?php

    $title       = "Flexslider";
    $description = "Ferramenta slider para exibição de slides.";
    $h1          = $title;
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php";
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        "tools/flexslider"
    ));
    
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content">
        
        <div class="container">

            <h1 class="main-title"><?php echo $h1; ?></h1>

            <ol>
                <li>Adicionar a linha "tools/flexslider" no <strong>compressCSS</strong>;</li>
                <li>Adicionar a linha "tools/jquery.flexslider-min" no <strong>$quality->js_custom</strong> ANTES do _footer.php;</li>
                <li>Escolher um tipo de slider e montar o HTML;</li>
                <li>Adicionar o script do slider selecionado: <br><br>
                    <kbd>
                    $("#basic-exemple").flexslider({ <br>
                        <br>
                    });
                    </kbd>
                    <br><br>
                </li>
            </ol>

            <hr>

            
            <h2>Basic Slider</h2>
            <div id="basic-exemple" class="flexslider">
                <ul class="slides">
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/toystory.jpg" alt="Teste_1" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/up.jpg" alt="Teste_2" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/walle.jpg" alt="Teste_3" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/nemo.jpg" alt="Teste_4" /></li>
                </ul>
            </div>
            
            <hr>
            
            <h2>Slider with Thumbnail</h2>
            <div id="slider-with-thumbnail" class="flexslider">
                <ul class="slides">
                    <li data-thumb="http://www.jqueryscript.net/demo/nivo-slider/demo/images/toystory.jpg">
                        <img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/toystory.jpg" alt="Teste_1" />
                    </li>
                    <li data-thumb="http://www.jqueryscript.net/demo/nivo-slider/demo/images/up.jpg">
                        <img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/up.jpg" alt="Teste_2" />
                    </li>
                    <li data-thumb="http://www.jqueryscript.net/demo/nivo-slider/demo/images/walle.jpg">
                        <img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/walle.jpg" alt="Teste_3" />
                    </li>
                    <li data-thumb="http://www.jqueryscript.net/demo/nivo-slider/demo/images/nemo.jpg">
                        <img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/nemo.jpg" alt="Teste_4" />
                    </li>
                </ul>
            </div>
            
            <hr>
            
            <h2>Basic Carousel</h2>
            <div id="basic-carousel" class="flexslider">
                <ul class="slides">
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/toystory.jpg" alt="Teste_1" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/up.jpg" alt="Teste_2" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/walle.jpg" alt="Teste_3" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/nemo.jpg" alt="Teste_4" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/toystory.jpg" alt="Teste_1" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/walle.jpg" alt="Teste_3" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/nemo.jpg" alt="Teste_4" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/toystory.jpg" alt="Teste_1" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/walle.jpg" alt="Teste_3" /></li>
                    <li><img src="http://www.jqueryscript.net/demo/nivo-slider/demo/images/nemo.jpg" alt="Teste_4" /></li>
                </ul>
            </div>
        
        </div>
        
    </main>
    <?php 
        $quality->js_custom = array(
            "tools/jquery.flexslider-min"
        ); 
    ?>
    <?php include "includes/_footer.php"; ?>
    
    <script>
        $(function(){
            // Basic Exemple
            $("#basic-exemple").flexslider({
                animation: "slide"
            });
            
            // Slider with Thumbnail
            $("#slider-with-thumbnail").flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
            
            // Basic Carousel
            $("#basic-carousel").flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: 210,
                itemMargin: 5
            });
        });
    </script>
    
</body>
</html>