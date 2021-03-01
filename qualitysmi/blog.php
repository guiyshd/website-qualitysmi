<?php
    $h1      	 = "Blog";
    $title    	 = "Pesquisa de serviços do cliente";
    $description = ""; // Manter entre 130 a 160 caracteres
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php";
    include "includes/config-blog.php";
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        "palavra-chave",
        "blog-qsmi"
    ));
   
?>
</head>
<body>
    <?php include "includes/_header.php";?>
    <main class="main-content blog">
        <div class="container">
            <?php echo $quality->breadcrumb(array("Blog", $title)); ?>
            <div class="row">
                <section class="col-md-8 text-justify">
                    <div class="display-table w-100p titulo-blog">
                        <div class="td">
                            <?php if (!$areaGeral == true) { ?><i class="fa fa-quote-left"></i> <?php } ?><h1><?php echo $h1; ?></h1>
                        </div>
                        <?php if ($areaGeral == true) { ?>
                              <div class="td align-right">
                                <span class="bold"><?php echo count($paginasBlog)?> Posts</span> Publicados
                            </div>
                        <?php } ?>
                      
                    </div>
                    <div class="blog-conteudo">
                        <?php
                            if ($areaGeral == true) {
                                echo $quality->blog($paginasBlog, $areaGeral); 
                            } else {
                                echo $quality->blog($paginaRequisitada, $areaGeral); 
                            }
                        ?>
                    </div>
                </section>
                <aside class="col-md-4">
                    <?php include "includes/sidebar-blog.php"; ?>
                </aside>
            </div>
        </div>
    </main>
    <?php include "includes/_footer.php"; ?>
</body>
</html>