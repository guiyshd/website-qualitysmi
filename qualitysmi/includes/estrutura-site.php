<ul>
    <li><a href="<?php echo $url; ?>" title="Página inicial">Home</a></li>
    <li><a href="<?php echo $url; ?>empresa" title="Empresa">Sobre Nós</a></li>
    <li>
        <a href="<?php echo $url; ?>produtos_E-OU_servicos" title="Produtos_E-OU_Serviços">Produtos_E-OU_Serviços</a>
        <ul>
            <li><a href="<?php echo $url; ?>" title="PROD_OU_SERV_1">PROD_OU_SERV_1</a></li>
            <li><a href="<?php echo $url; ?>" title="PROD_OU_SERV_2">PROD_OU_SERV_2</a></li>
            <li><a href="<?php echo $url; ?>" title="PROD_OU_SERV_3">PROD_OU_SERV_3</a></li>
            <li><a href="<?php echo $url; ?>" title="PROD_OU_SERV_4">PROD_OU_SERV_4</a></li>
            <li><a href="<?php echo $url; ?>" title="PROD_OU_SERV_5">PROD_OU_SERV_5</a></li>
        </ul>
    </li>
    <li><a href="<?php echo $url; ?>galeria-de-fotos" title="Galeria de Fotos">Galeria de Fotos</a></li>
    <li><a href="<?php echo $url; ?>contato" title="Contato">Contato</a></li>
    <li><a href="<?php echo $url; ?>informacoes" title="Informações">Informações</a>
        <ul>
            <?php echo $quality->subMenu($palavras_chave); ?>
        </ul>
    </li>
</ul>