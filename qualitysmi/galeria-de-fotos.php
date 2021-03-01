<?php

    $title       = "Galeria de Fotos";
    $description = ""; // Manter entre 130 a 160 caracteres
    $h1          = $title;
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php";
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        "tools/fancybox",
        "galeria-fotos"
    ));
    
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content">
        <section class="container">
            <?php echo $quality->breadcrumb(array($title)); ?>
            <h1><?php echo $h1;?></h1>
            <section>
                <h2>Galeria 1</h2>
                <?php echo $quality->listaGaleria("Item", 4, 'jpg'); ?>
            </section>
            <section>
                <h2>Galeria 2</h2>
                <?php echo $quality->listaGaleria("Item", 4, 'jpg'); ?>
            </section>
        </section>
    </main>
    <?php 
        $quality->js_custom = array(
            "tools/jquery.fancybox"
        ); 
    ?>
    <?php include "includes/_footer.php"; ?>
</body>
</html>
