<div class="box-btn-modal-orcamento">
    <p>
        <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#modal-orcamento-qsmi" data-assunto="<?php echo $h1; ?>">
            Solicite um Orçamento
        </button>
    </p>
    <p class="text-center">ou ligue para <strong>(<?php echo $unidades[1]["ddd"]; ?>) <?php echo $unidades[1]["telefone"]; ?></strong>.</p>
</div>
<div class="sidebar-main">
    <h3><a href="<?php echo $url; ?>informacoes">Informações</a></h3>
    <ul>
        <?php echo $quality->subMenu($palavras_chave); ?>
    </ul>
</div>