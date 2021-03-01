<?php

    $title       = "Contador";
    $description = "Ferramenta para contar números assim que a página é carregada.";
    $h1          = $title;
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php";
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        
    ));
    
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content">
        <div class="container">
            <h1 class="main-title"><?php echo $h1; ?></h1>
            <ol>
                <li>Adicionar a linha "tools/contador-clientes" no <strong>$quality->js_custom</strong> ANTES do _footer.php;</li>
                <li>Adicionar o script abaixo: <br><br>
                    <kbd>
                    $(".counter").counterUp({ <br>
                        delay: 10, <br>
                        time: 1000 <br>
                    });
                    </kbd>
                    <br><br>
                </li>
                <li>Adicionar a class utilizada <kbd>.counter</kbd> nos elementos para serem contados.</li>
            </ol>

            <hr>

            <div class="row">
                <div class="col-md-3">
                    <h3 class="counter">152</h3>
                    <p>Clientes Satisfeitos</p>
                </div>
                <div class="col-md-3">
                    <h3 class="counter">12</h3>
                    <p>Milhões economizados pelos nossos clientes</p>
                </div>
                <div class="col-md-3">
                    <h3 class="counter">36400</h3>
                    <p>Toneladas de compostos vendidos</p>
                </div>
                <div class="col-md-3">
                    <h3 class="counter">102600</h3>
                    <p>Toneladas</p>
                </div>
            </div>
        </div>
    </main>

    <?php 
        $quality->js_custom = array(
            "tools/contador-clientes"
        ); 
    ?>
    <?php include "includes/_footer.php"; ?>
    <script>
        $(function(){
            $(".counter").counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
</body>
</html>