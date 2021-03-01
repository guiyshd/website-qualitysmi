<?php

    $title       = "Item";
    $description = ""; // Manter entre 130 a 160 caracteres   
    $h1          = $title;
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php"; 
    include "includes/quality/head.quality.php";
    
    $url_title   = $quality->formatStringToURL($title);
    
    $quality->compressCSS(array(
        "tools/fancybox",
        "default_qsmi/redes-sociais",
        "default_qsmi/direitos-texto",
        "default_qsmi/regioes",
        "default_qsmi/veja-tambem",
        "palavra-chave"
    ));

?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    <?php include "includes/modal-orcamento-qsmi.php"; ?>
    
    <main class="main-content">
        <section class="container">
            <?php echo $quality->breadcrumb(array("Informações", $title)); ?>
            <h1 class="main-title"><?php echo $h1; ?></h1>
            <div class="row">
                <div class="col-md-9 text-justify">
                    <?php echo $quality->listaGaleria($h1, 4, 'jpg'); ?>
                    <a href="<?php echo $url."imagens/".$url_title."/".$url_title.".webp"; ?>" title="<?php echo $h1; ?>" class="img-fancy-pc">
                        <img src="<?php echo $url."imagens/".$url_title."/".$url_title."-thumb.webp"; ?>" alt="<?php echo $h1; ?>" title="<?php echo $h1; ?>" class="img-right img-responsive">
                    </a>
                    <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit. Perferendis ipsam ea tempora accusamus quasi numquam architecto sequi ducimus minima enim facere temporibus quaerat rerum laudantium vel quas, exercitationem impedit in perspiciatis voluptatum soluta. Aut deserunt pariatur, cum vitae obcaecati facilis assumenda sunt animi aspernatur, atque nihil itaque necessitatibus laudantium rerum accusamus. Pariatur minima veritatis quaerat, aliquid delectus saepe illo porro adipisci id ab ullam beatae commodi dignissimos qui debitis. Blanditiis delectus exercitationem nostrum dolores numquam rerum fugiat porro quaerat beatae ducimus, culpa reprehenderit temporibus ipsum facere suscipit, voluptatem earum cupiditate a sunt aliquam. Deleniti rerum dolores, a facilis, consequuntur incidunt?</p>
                    <h2>Sub título 1</h2>
                    <p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Odit quis alias tempora repellendus dignissimos voluptates quibusdam quaerat autem possimus. Aliquam illum mollitia consequatur, dolorum blanditiis, aperiam temporibus, alias aliquid, animi rem quis inventore? Iste sit asperiores, doloribus excepturi, ipsa reiciendis quidem libero expedita rerum, pariatur dolore cupiditate voluptatibus voluptas. Neque!</p>
                    <h3>Sub título 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Sequi soluta harum</strong> placeat vel dolore eveniet at qui ratione ea commodi veritatis, consequatur delectus accusantium, cum. Suscipit dignissimos, cumque ut debitis architecto impedit sit soluta veniam error veritatis consequatur totam ipsum consectetur unde temporibus vel delectus. Aliquam ad impedit atque voluptas.</p>
                    <?php include "includes/social-media.php"; ?>
                    <?php include "includes/regioes-sao-paulo.php"; ?>
                    <?php // include "includes/regioes-brasil.php"; ?>
                    <?php include "includes/veja-tambem.php"; ?>
                    <?php include "includes/direitos-texto.php"; ?>
                </div>
                <aside class="col-md-3">
                    <?php include "includes/sidebar.php"; ?>
                </aside>
            </div>
        </section>
    </main>

    <?php 
        $quality->js_custom = array(
            "tools/jquery.fancybox",
            "tools/bootstrap.min",
            "tools/jquery.validate.min",
            "tools/jquery.mask.min",
            "jquery.quality.keyword"
        );
    ?>
    <?php include "includes/_footer.php"; ?>
    
</body>
</html>