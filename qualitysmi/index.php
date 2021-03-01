<?php
    $h1      	 = "Home";
    $title    	 = "PRINCIPAL_PALAVRA_CHAVE_DO_CLIENTE";
    $description = ""; // Manter entre 130 a 160 caracteres
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php";
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        "home"
    ));
?>
</head>
<body class="popup-ativo">
    <?php include "includes/popup-padrao.php"; ?>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <section class="padding-v-10">
            <div class="container">
                <h1 class="align-center"><?php echo $h1; ?></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis ornare erat et malesuada. Fusce finibus quam non facilisis viverra. Vestibulum tempor libero neque, nec ultricies leo bibendum quis. Sed elit mi, semper ac purus a, laoreet molestie felis. Suspendisse sit amet mi porta, scelerisque orci eget, feugiat dui. Suspendisse condimentum purus eros. Fusce ultrices tincidunt suscipit.</p>

                <h2>Ferramentas</h2>
                <ul>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-accordion">FERRAMENTA-accordion</a></li>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-bloco-facebook">FERRAMENTA-bloco-facebook</a></li>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-blog">FERRAMENTA-blog</a></li>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-contador">FERRAMENTA-contador</a></li>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-conversao-imagem">FERRAMENTA-conversao-imagem</a> (.JPG e .PNG para .WEBP) </li>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-flexslider">FERRAMENTA-flexslider</a></li>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-mapa">FERRAMENTA-mapa</a></li>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-nivo">FERRAMENTA-nivo</a></li>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-pesquisa-box">FERRAMENTA-pesquisa-box</a></li>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-pesquisa">FERRAMENTA-pesquisa</a> (ver FERRAMENTA-pesquisa-box)</li>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-slick">FERRAMENTA-slick</a></li>
                    <li><a href="<?php echo $url; ?>FERRAMENTA-video">FERRAMENTA-video</a></li>
                </ul>
            </div>
        </section>
    </main>
    <?php 
        $quality->js_custom = array(
            'jquery.quality.popup-padrao'
        );
    ?>
    <?php include "includes/_footer.php"; ?>

</body>
</html>