<?php

    $title       = "Informações";
    $description = "Em nossa página de informações você encontra diversos produtos e serviços, confira nossas categorias e informações de nossos produtos e serviços."; // Manter entre 130 a 160 caracteres
    $h1          = $title;
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php";
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        "informacoes"
    ));
    
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content">
        <section class="container">
            <?php echo $quality->breadcrumb(array($title)); ?>
            <h1><?php echo $h1;?></h1>
            <p>Confira abaixo informações relacionadas a <strong><?php echo $nome_empresa; ?></strong>:</p>
            <div class="row lista-thumbs">
                <?php echo $quality->listaThumbs($palavras_chave, array(
                    "class_div" => "col-xs-6 col-sm-4 col-md-3 col-lg-3",
                )); ?>
            </div>
        </section>
    </main>
    
    <?php include "includes/_footer.php"; ?>
</body>
</html>