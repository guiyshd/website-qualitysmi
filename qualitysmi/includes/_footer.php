<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2><?php echo $nome_empresa; ?></h2>
                <p><i><?php echo $slogan; ?></i></p>
                <h3>Endereço</h3>
                <p><?php echo $unidades[1]["rua"]; ?> - <?php echo $unidades[1]["bairro"]; ?><br>
                <?php echo $unidades[1]["cidade"]; ?> - <?php echo $unidades[1]["uf"]; ?> - CEP: <?php echo $unidades[1]["cep"]; ?></p>
            </div>
            <div class="col-md-2">
                <h5>Institucional</h5>
                <ul>
                    <li><a href="<?php echo $url; ?>link_1" title="Link_1">Link_1</a></li>
                    <li><a href="<?php echo $url; ?>link_2" title="Link_2">Link_2</a></li>
                    <li><a href="<?php echo $url; ?>link_3" title="Link_3">Link_3</a></li>
                    <li><a href="<?php echo $url; ?>link_4" title="Link_4">Link_4</a></li>
                    <li><a href="<?php echo $url; ?>mapa-site" title="Mapa do Site">Mapa do Site</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5>Redes Sociais</h5>
                <ul>
                    <li><a href="<?php echo $url; ?>link_1" title="Link_1">Link_1</a></li>
                    <li><a href="<?php echo $url; ?>link_2" title="Link_2">Link_2</a></li>
                    <li><a href="<?php echo $url; ?>link_3" title="Link_3">Link_3</a></li>
                    <li><a href="<?php echo $url; ?>link_4" title="Link_4">Link_4</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="bloco-facebook align-center"  data-facebook="qualitysmibr">
                    <!-- Carrega automaticamente -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <a rel="nofollow" href="http://validator.w3.org/check?uri=<?php echo $canonical; ?>" target="_blank" title="HTML 5 - Site Desenvolvido nos padrões W3C">
                        <img src="<?php echo $url; ?>assets/img/icons/selo-html5.webp" alt="HTML 5 - Site Desenvolvido nos padrões W3C">
                    </a>
                    <a rel="nofollow" href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $canonical; ?>" target="_blank" title="CSS 3 - Site Desenvolvido nos padrões W3C">
                        <img src="<?php echo $url; ?>assets/img/icons/selo-css3.webp" alt="CSS 3 - Site Desenvolvido nos padrões W3C">
                    </a>
                    <img src="<?php echo $url; ?>assets/img/icons/selo-1.webp" alt="Selo Quality">
                    - 
                    <a href="https://www.b2best.com.br/" title="B2Best, Cotações Online" target="_blank">
                        <img src="https://www.b2best.com.br/imagens/selo-perfil-b2best-cotacoes-online.png" alt="B2Best, Cotações Online" title="B2Best, Cotações Online">
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <a rel="nofollow" href="http://validator.w3.org/check?uri=<?php echo $canonical; ?>" target="_blank" title="HTML 5 - Site Desenvolvido nos padrões W3C">
                        <img src="<?php echo $url; ?>assets/img/icons/gray-selo-html5.webp" alt="HTML 5 - Site Desenvolvido nos padrões W3C">
                    </a>
                    <a rel="nofollow" href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $canonical; ?>" target="_blank" title="CSS 3 - Site Desenvolvido nos padrões W3C">
                        <img src="<?php echo $url; ?>assets/img/icons/gray-selo-css3.webp" alt="CSS 3 - Site Desenvolvido nos padrões W3C">
                    </a>
                    <img src="<?php echo $url; ?>assets/img/icons/gray-selo-1.webp" alt="Selo Quality">
                    - 
                    <a href="https://www.b2best.com.br/" title="B2Best, Cotações Online" target="_blank">
                        <img src="https://www.b2best.com.br/imagens/selo-perfil-b2best-cotacoes-online.png" alt="B2Best, Cotações Online" title="B2Best, Cotações Online">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <ul class="menu-footer-mobile">
        <li>
            <a href="tel:<?php echo $unidades[1]["ddd"].$unidades[1]["telefone"]; ?>" class="mm-call" title="Ligue"><i class="fa fa-phone-alt"></i></a>
        </li>
        <li>
            <a href="whatsapp://send?text=<?php echo $canonical; ?>" class="mm-whatsapp" title="Whats App"><i class="fa fa-whatsapp"></i></a>
        </li>
        <li>
            <a href="mailto:<?php echo $emailContato; ?>" class="mm-email" title="E-mail"><i class="fa fa-envelope"></i></a>
        </li>
        <li>
            <button type="button" class="mm-up-to-top" title="Volte ao Topo"><i class="fa fa-arrow-circle-up"></i></button>
        </li>
    </ul>
</footer>
<?php if($_SERVER["SERVER_NAME"] != "clientesquality" && $_SERVER["SERVER_NAME"] != "localhost"){ ?>
    <!-- Código do Analytics aqui! -->
<?php } ?>
<?php 
    $quality->js_custom[] = "default/fontawasomejs";
    $quality->js_custom[] = "jquery.quality.ambedFacebook";
    
    $quality->compressJS(); 
?>