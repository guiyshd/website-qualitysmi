<?php

    $title       = "Envia Contato";
    $description = "Mensagem enviada com sucesso."; // Manter entre 130 a 160 caracteres
    $h1          = "Confirmação de Contato";
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
        <section class="container text-justify">
            <?php echo $quality->breadcrumb(array($title)); ?>
            <h1><?php echo $h1; ?></h1>
            <br>
            <h2 class="text-center">Contato Enviado com Sucesso!</h2>
            <br>
            <p>Continue navegando em nosso site, selecione uma página abaixo.</p>
            <div class="sitemap">
                <?php include "includes/estrutura-site.php"; ?>
            </div>
        </section>
    </main>
    
    <?php include "includes/_footer.php"; ?>
</body>
</html>