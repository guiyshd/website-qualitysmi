<?php

    $title       = "Mapa do Site";
    $description = "Em nosso mapa do site você encontra todas as páginas do site, confira nossas categorias e informações de nossos produtos e serviços."; // Manter entre 130 a 160 caracteres
    $h1          = $title;
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php"; 
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        "mapa-site"
    ));
    
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content">
        <section class="container">
            <?php echo $quality->breadcrumb(array($title)); ?>
            <h1><?php echo $h1; ?></h1>
            <div class="sitemap">
                <?php include "includes/estrutura-site.php"; ?>
            </div>
        </section>
    </main>
    
    <?php include "includes/_footer.php"; ?>
    
    
</body>
</html>