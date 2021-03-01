<?php

    $title       = "Slick";
    $description = "Ferramenta slider simples para exibição de slides.";
    $h1          = $title;
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php";
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        "tools/slick"
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
                <li>Escolher um tipo de slider e montar o HTML;</li>
                <li>Adicionar o script abaixo: <br><br>
                    <kbd>
                    $("#slider").nivoSlider(); <br>
                    </kbd>
                    <br><br>
                </li>
            </ol>

            <p>Documentação <a href="http://kenwheeler.github.io/slick/" target="_blank">aqui</a></p>

            <hr>
        
            <div class="item">
                <div><h3>1</h3></div>
                <div><h3>2</h3></div>
                <div><h3>3</h3></div>
                <div><h3>4</h3></div>
                <div><h3>5</h3></div>
                <div><h3>6</h3></div>
            </div>

            <hr>

            <div class="multiple-items">
                <div><h3>1</h3></div>
                <div><h3>2</h3></div>
                <div><h3>3</h3></div>
                <div><h3>4</h3></div>
                <div><h3>5</h3></div>
                <div><h3>6</h3></div>
            </div>

            <hr>

            <div class="autoplay">
                <div><h3>1</h3></div>
                <div><h3>2</h3></div>
                <div><h3>3</h3></div>
                <div><h3>4</h3></div>
                <div><h3>5</h3></div>
                <div><h3>6</h3></div>
            </div>
        </div>
    </main>

    <?php 
        $quality->js_custom = array(
            "tools/jquery.slick"
        ); 
    ?>
    <?php include "includes/_footer.php"; ?>
    
    <script>
        $(function(){
            $(".item").slick();

            $(".multiple-items").slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });

            $(".autoplay").slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000
            });

        });
    </script>
    
</body>
</html>