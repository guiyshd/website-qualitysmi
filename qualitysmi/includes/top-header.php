<div class="top-header">
    <div class="container display-table">
        <ul class="td contatos-top-header">
            <li>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo $unidades[1]['rua'].' - '.$unidades[1]['bairro'].' - '.$unidades[1]['cidade'].' / '.$unidades[1]['uf']?></p>
            </li>
            <li>
                <p><i class="fas fa-phone-alt"></i> <a title="Clique e ligue" href="tel:<?php echo '('.$unidades[1]['ddd'].') '.$unidades[1]['telefone']; ?>"> <?php echo '('.$unidades[1]['ddd'].') '.$unidades[1]['telefone']; ?></a></p>
            </li>
            <li>
                <p><i class="fas fa-envelope"></i> <a title="E-mail" href="mailto:<?php echo $emailContato;?>"><?php echo $emailContato;?></a></p>
            </li>
        </ul>
        <ul class="td">
            <li><a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-square"></i> </a></li>
            <li><a href="https://plus.google.com/" title="Google+" target="_blank"><i class="fab fa-google-plus"></i></a></li>
            <li><a href="https://www.youtube.com/" title="YouTube" target="_blank"><i class="fab fa-youtube"></i></a></li>
            <li><a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
        </ul>
    </div>
</div>