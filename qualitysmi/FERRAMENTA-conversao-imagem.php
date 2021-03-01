<?php

    $title       = "Conversão de imagem";
    $description = "Conversão de imagem para de jpg ou png para Webp";
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
                    <h3>Conversão de png ou jpg para Webp</h3>
                    <p>A extensão .webp é a recomendada pelo Google, deixando o site mais leve para carregamento ao usuário, googlebot e melhora o pagespeed.</p>
                    <p style="display: block;color: #bfae20;text-align: left;font-size: 14px;padding: 10px 0 10px 10px;background: #ffffe3;cursor: pointer; font-weight: bold;border: solid 1px #ddd018;"> <i class="fa fa-warning"></i>  É necessário manter a referencia jpg ou png após conversão, as imagens .webp não devem e muitas vezes não podem ser editadas. <br /> <i class="fa fa-warning"></i>  A conversão deve ser feita após as imagens editadas e já comprimidas no TinyPNG por exemplo.</p>
                    <ol>
                        <li class="align-center">
                            <div class="align-left">Fazer um git clone do repositório <strong><kbd>converterImagemWebp</kbd></strong> que está no projeto <strong>Quality SMI</strong> do BitBucket para <strong class="bold">SEU LOCAL (localhost)</strong></div>
                            <a class="btn" style=" background: #ff800a;color: #fff;font-weight: bold;margin: 10px auto;display: inline-block;" href="https://bitbucket.org/rep_qualitysmi/converterimagemwebp/" target="_blank">Clique aqui para ser direcionado</a>
                        </li>
                        <li>
                            Acesse: <strong>http://SEULOCAL/converterimagemwebp</strong> e siga as instruções
                            <ul>
                                <li>Os arquivos para conversão devem estar na pasta: SEULOCAL/converterimagemwebp/converter/</li>
                                <li>Os arquivos convertidos ficarão na pasta: SEULOCAL/converterimagemwebp/convertido</li>
                            </ul>
                        </li>
                    </ol>  
                    <p style="display: block;color: #ea6060;text-align: center;font-size: 14px;padding: 10px 0;background: #fff9f9;cursor: pointer; font-weight: bold;border: solid 1px #ea6060;">Caso as imagens não estejam convertidas para .WEBP, isso configurará erro de validação <i class="fa fa-warning"></i></p>
                </div>
            </section>
        </div>
    </main>
    
    <?php include "includes/_footer.php"; ?>
</body>
</html>
