<div class="modal fade" id="modal-orcamento-qsmi" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Solicite um Orçamento - <?php echo $nome_empresa; ?></h4>
            </div>
            <div class="modal-body">
                <form id="form-orcamento-qsmi">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <label>Nome: <span class="red-color">*</span></label>
                                <input name="data[Orcamento][nome]" type="text" class="form-control" placeholder="Digite seu nome">
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <label>Email: <span class="red-color">*</span></label>
                                <input name="data[Orcamento][email]" type="email" class="form-control" placeholder="Insira seu e-mail">
                            </div>                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <label>Telefone: <span class="red-color">*</span></label>
                                <input name="data[Orcamento][telefone]" type="text" class="form-control mask-phone">
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <label>Assunto: <span class="red-color">*</span></label>
                                <input name="data[Orcamento][assunto]" type="text" class="form-control input-form-assunto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mensagem: <span class="red-color">*</span></label>
                        <textarea name="data[Orcamento][mensagem]" class="form-control" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default btn-block btn-send">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<a id="trigger-mensagem-fancybox" href="#modal-mensagem-fancybox" style="display:none"></a>
<div id="modal-mensagem-fancybox"></div>