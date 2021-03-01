<?php

    $title       = "Bloco de Facebook";
    $description = "Ferramenta de Facebook asíncrono";
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
                    <h3>Bloco de facebook asíncrono com o carregamento da página</h3>
                    <p>O bloco é carregado após todo o conteúdo do site ser carregado, não prejudicando no pagespeed</p>
                    <ol>
                        <li>
                            adicionar <kbd>'jquery.quality.ambedFacebook'</kbd> no <strong>$quality->js_custom</strong> ANTES do _footer.php;
                            <br />
                            <i>Obs.: Este script já está como default no _parametros caso não for utilizar no footer ou algo genérico, retirar e colocar na página específica</i>
                        </li>
                        <li>
                            Adicionar marcação <kbd>data-facebook="idFacebookCliente"</kbd> para o video na <strong> e a class <kbd>class="bloco-facebook"</kbd>  div</strong>
                            <br />
                            Opções para a div (opcional) - Já existe uma configuração padrão que não necessita do uso de nenhuma dessas opções
                            <ul>
                                <li>data-tabs - 'timeline,messages' <i>Abas abaixo do perfil no bloco</i></li>
                                <li>data-height - '290' <i>Altura do bloco</i></li>
                                <li>data-smalheader - false <i>Cabeçalho com foto e perfil pequeno</i></li>
                                <li>data-facepile - false <i>Usuários que curtiram</i></li>
                            </ul>
                        </li>
                    </ol>
                    <hr />
                    <div class="row">
                        <div class="col-md-4">
                            <strong>PADRÃO</strong> <br />
                            <kbd>
                                data-tabs='timeline, messages'
                                data-height='290'
                                data-smalheader=false
                                data-facepile=true
                            </kbd>
                            <div class="bloco-facebook" data-facebook="qualitysmibr">
                                <!-- conteúdo do script -->
                            </div>  
                        </div>
                        <div class="col-md-4">
                            <kbd>
                                data-tabs='timeline'
                                data-height='290'
                                data-smalheader=false
                                data-facepile=true
                            </kbd>
                            <div class="bloco-facebook" data-facebook="qualitysmibr"
                                data-tabs='timeline'
                                data-height='290'
                                data-smalheader=false
                                data-facepile=true>
                                <!-- conteúdo do script -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <kbd>
                                data-tabs='messages'
                                data-height='290'
                                data-smalheader=true
                                data-facepile=false
                            </kbd>
                            <div class="bloco-facebook" data-facebook="qualitysmibr"
                                data-tabs='messages'
                                data-height='290'
                                data-smalheader=true
                                data-facepile=false>
                                <!-- conteúdo do script -->
                            </div>  
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include "includes/_footer.php"; ?>
</body>
</html>