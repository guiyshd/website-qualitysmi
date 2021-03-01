<header itemscope itemtype="http://schema.org/Organization">

    <?php include('includes/top-header.php'); ?>
    
    <div class="container header-container-main">
        <div class="logo">
            <a href="<?php echo $url; ?>" title="<?php echo $h1 . " - " . $nome_empresa; ?>">
                <span itemprop="image">
                    <picture>
                        <!-- <source type="image/webp" srcset="<?php echo $url; ?><?php echo $logo_cliente; ?>.webp">    -->
                        <source type="image/png" srcset="<?php echo $url; ?><?php echo $logo_cliente; ?>.png">   
                        <img src="<?php echo $url; ?><?php echo $logo_cliente; ?>.png" alt="<?php echo $nome_empresa; ?>" title="<?php echo $nome_empresa; ?>" class="img-responsive" />
                    </picture>
                </span>
            </a>
        </div>
        <div class="tel">
            <a title="Clique e ligue" href="tel:<?php echo $unidades[1]["ddd"].$unidades[1]["telefone"]; ?>">
                <strong><span itemprop="telephone">(<?php echo $unidades[1]["ddd"]; ?>) <?php echo $unidades[1]["telefone"]; ?></span></strong>
            </a>
        </div>
        <nav class="menu">
            <ul class="menu-list">
                <li><a href="<?php echo $url; ?>" title="Página inicial">Home</a></li>
                <li><a href="<?php echo $url; ?>empresa" title="Empresa">Empresa</a></li>
                <li>
                    <a href="<?php echo $url; ?>produtos_E-OU_servicos" title="Produtos_E-OU_Serviços">Produtos_E-OU_Serviços</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo $url; ?>" title="PROD_OU_SERV_1">PROD_OU_SERV_1</a></li>
                        <li><a href="<?php echo $url; ?>" title="PROD_OU_SERV_2">PROD_OU_SERV_2</a></li>
                        <li><a href="<?php echo $url; ?>" title="PROD_OU_SERV_3">PROD_OU_SERV_3</a></li>
                        <li><a href="<?php echo $url; ?>" title="PROD_OU_SERV_4">PROD_OU_SERV_4</a></li>
                        <li><a href="<?php echo $url; ?>" title="PROD_OU_SERV_5">PROD_OU_SERV_5</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo $url; ?>galeria-de-fotos" title="Galeria de Fotos">Galeria de Fotos</a></li>
                <li><a href="<?php echo $url; ?>blog" title="Blog">Blog</a></li>
                <li>
                    <a href="<?php echo $url; ?>informacoes" title="Informações">Informações</a>
                    <ul class="sub-menu">
                        <?php echo $quality->subMenu($palavras_chave); ?>
                    </ul>
                </li>
                <li><a href="<?php echo $url; ?>contato" title="Contato">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>