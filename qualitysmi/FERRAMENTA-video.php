<?php

    $title       = "Área de Vídeo";
    $description = "Ferramenta de video asíncrono";
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
            <section class="padding-v-10">
                <div class="container">
                    <h3>Vídeo asíncrono com o carregamento da página</h3>
                    <p>O vídeo é carregado após todo o conteúdo do site ser carregado, não prejudicando no pagespeed</p>
                    <ol>
                        <li>Adicionar marcação <kbd>data-video-yt="idDoVideo"</kbd> para o video na <strong>div</strong> </li>
                        <li>adicionar <kbd>'jquery.quality.ambedVideo'</kbd> no <strong>$quality->js_custom</strong> ANTES do _footer.php</li>
                        <li>Para aumentar ou diminuir o tamanho do video, basta adicionar uma classe e aumentar o <kbd>iframe</kbd></li>
                    </ol>
                    <hr />
                    <div data-video-yt="ExTx8yxrVBY">
                        <!-- conteúdo do script -->
                    </div>  
                </div>
            </section>
        </div>
    </main>
    <?php 
        $quality->js_custom = array(
            'jquery.quality.ambedVideo'
        ); 
    ?>
    <?php include "includes/_footer.php"; ?>
</body>
</html>
