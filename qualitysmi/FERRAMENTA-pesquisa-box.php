<?php

    $title       = "Pesquisa";
    $description = "Ferramenta de pesquisa de palavras chave";
    $h1          = $title;
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php"; 
    include "includes/_parametros.php";
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        "pesquisa"
    ));
?>

</head>
<body>
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content">
        <div class="container">
            <?php // Retorna box de pesquisa
                echo $quality->retornarBoxPesquisa(array('tipo'=>1)); 
            ?>
            <h1 class="main-title"><?php echo $h1; ?></h1>
            <section class="padding-v-10">
                <div class="container">
                    <h3>Ferramenta de pesquisa de palavras chave</h3>
                    <ol>
                        <li>Renomear o arquivo <strong>FERRAMENTA-pesquisa.php</strong> para <strong>pesquisa.php</strong></li>
                        <li>
                            Adicionar código: <strong><kbd>echo $quality->retornarBoxPesquisa(); </kbd></strong>
                            Após o _header.php, na página em que quer que o box apareça, ou no fim do arquivo /includes/_header.php para ficar geral.
                        </li>
                        <li>Adicionar o "pesquisa" no compressCSS da página que for exibir ou no <strong>$quality->css_files_default()</strong> em /includes/_parametros.php para ficar geral</li>
                        <li>Adicionar o script adsadsdsa no no arquivo: /includes/_parametros.php</li>
                        <li>
                            <p>Opções: $quality->retornarBoxPesquisa(array('tipo'=>1, 'tema'=>'cinza'))</p>
                            <ul>
                                <li>Tipo: 1(default) ou 2 (expansivo) </li>
                                <li>Tema : cinza ou branco(default)</li>
                            </ul>
                            
                        </li>
                    </ol>
                    <div class="opcoes">
                    <div style="padding: 20px; border: solid 1px #eee; font-size: 13px"> Padrão <br />
                        <kbd>echo $quality->retornarBoxPesquisa(); </kbd>
                        <?php // Retorna box de pesquisa
                            echo $quality->retornarBoxPesquisa(); 
                        ?>
                    </div>
                    <hr />
                    <div style="padding: 20px; border: solid 1px #eee; font-size: 13px"> Opção Tipo 1, Tema cinza <br />
                        <kbd>echo $quality->retornarBoxPesquisa(array('tipo'=>1, 'tema'=>'cinza'));  </kbd>
                        <?php // Retorna box de pesquisa
                            echo $quality->retornarBoxPesquisa(array('tipo'=>1, 'tema'=>'cinza')); 
                        ?>
                    </div>
                    <hr />
                    <div style="padding: 20px; border: solid 1px #eee; font-size: 13px"> Opção Tipo 2 (Abre quando clica) <br />
                        <kbd>echo $quality->retornarBoxPesquisa(array('tipo'=>2));</kbd>
                        <?php // Retorna box de pesquisa
                            echo $quality->retornarBoxPesquisa(array('tipo'=>2)); 
                        ?>
                    </div>
                  
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
