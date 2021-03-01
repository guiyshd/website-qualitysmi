<?php

    $title       = "BLOG";
    $description = "Ferramenta slider com accordion para exibição de slides.";
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
                <li>O blog vem ativo por padrão</li>
                <li>O arquivo principal é o <strong>/blog.php</strong></li>
                <li>Não é necessário criar arquivos para ter as páginas do blog</li>
            </ol>
            <hr>
            <h2 class="main-title">Composição</h2>
            <ol>
                <li>/.htaccess <i class="fa fa-arrow-right"></i> <kbd>RewriteRule ^(blog/*) blog.php [QSA,L]</kbd>. Para desativar, é necessário tirar esta linha do arquivo.</li>
                <li>/assets/css/blog-qsmi.css <i class="fa fa-arrow-right"></i> Qualquer personalização deve estar dentro deste arquivo de estilo.</li>
                <li>
                    /includes/config-blog.php <i class="fa fa-arrow-right"></i> Definição das páginas do blog e estilo do submenu (lista ou thumb)
                    <ul>
                        <li>A definição das páginas segue a seguinte estrutura:
                            <kbd> <br />
                            $paginasBlog = [ <br />
                            &nbsp;&nbsp;'url-pagina-blog-automatica' => [ <br />
                            &nbsp;&nbsp;&nbsp;&nbsp;'title' => 'Titulo da página do blog', <br />
                            &nbsp;&nbsp;&nbsp;&nbsp;'description' => 'Description para o google e para o submenu', <br />
                            &nbsp;&nbsp;&nbsp;&nbsp;'keywords' => 'Keywords, para, o, google', <br />
                            &nbsp;&nbsp;&nbsp;&nbsp;'artigo' => '< Qualquertag>< titulo>TESTE< /titulo>< paragrafo>TESTE< /paragrafo>< /qualquertag>', <br />
                            &nbsp;&nbsp;&nbsp;&nbsp;'image' => 'imagem-na-pasta-de-blog.jpg', <br />
                            &nbsp;&nbsp;], <br />
                            ] <br />
                            </kbd>
                        </li>
                    </ul>
                </li>
                <li>/imagens/blog/ e /imagens/blog/thumbs <i class="fa fa-arrow-right"></i> Imagens devem ficar na pasta de blog e blog/thumbs e são carregadas automaticamente.</li>
            </ol>

            <hr>
            <p style="background: #fff9f9;border: solid 1px #ff8484;padding: 10px;border-radius: 5px;"><i style="color: #ff8484;" class="fa fa-warning"></i> É extremamente importante não alterar os arquivos blog.php e configurações para indexsar do config-blog.php, caso haja alguma dúvida e/ou implementação, mantenha um backup do arquivo original por precaução.</p>

        </div>
    </main>
    <?php include "includes/_footer.php"; ?>
</body>
</html>