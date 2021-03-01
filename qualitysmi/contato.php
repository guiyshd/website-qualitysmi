<?php

    $title       = "Contato";
    $description = "Entre em contato conosco e envie sua mensagem ou solicitação de orçamento, nossa equipe entrará em contato assim que possível para atendê-lo."; // Manter entre 130 a 160 caracteres
    $h1          = $title;
    $keywords    = $title;
    $meta_img    = "";

    include "includes/quality/class.quality.php";
    include "includes/_parametros.php";
    include "includes/quality/head.quality.php";
    
    $quality->compressCSS(array(
        "tools/fancybox",
        "contato"
    ));
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content">
        <section class="container">
            <?php echo $quality->breadcrumb(array($title)); ?>
            <h1><?php echo $h1; ?></h1>
            <div class="row">
                <div class="col-md-6">
                    <form class="form-contato">
                        <div class="form-group">
                            <label>Nome: <span class="red-color">*</span></label>
                            <input name="data[Contato][nome]" type="text" class="form-control">                                    
                        </div>
                        <div class="form-group">
                            <label>E-mail: <span class="red-color">*</span></label>
                            <input name="data[Contato][email]" type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Telefone: <span class="red-color">*</span></label>
                            <input name="data[Contato][telefone]" type="text" class="form-control mask-phone">
                        </div>
                        <div class="form-group">
                            <label>Como nos conheceu? <span class="red-color">*</span></label>
                            <select name="data[Contato][como_conheceu]" class="form-control">
                                <option value=""> -- Selecione uma Opção -- </option>
                                <option value="Busca do Google">Busca do Google</option>
                                <option value="Outros Anúncios">Outros Anúncios</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Indicação">Indicação</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mensagem: <span class="red-color">*</span></label>
                            <textarea name="data[Contato][mensagem]" class="form-control" rows="6"></textarea>
                        </div>
                        <?php if($captcha){ ?>
                        <div class="g-recaptcha" data-sitekey="<?php echo $captcha_key_client_side; ?>"></div>
                        <?php } ?>
                        <div class="text-right">
                            <button type="submit" class="btn btn-default btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3><?php echo $nome_empresa . " - " . $slogan; ?></h3>
                    <p><strong>Endereço</strong>: <?php echo $unidades[1]["rua"] . " - " . $unidades[1]["bairro"] . " - " . $unidades[1]["cidade"] . " - " . $unidades[1]["uf"] . " - " . $unidades[1]["cep"]; ?></p>
                    <p><strong>Telefone</strong>: (<?php echo $unidades[1]["ddd"]; ?>) <?php echo $unidades[1]["telefone"]; ?></p>
                    <p><strong>Email</strong>: <?php echo $emailContato; ?></p>
                    <hr>
                    <iframe src="<?php echo $unidades[1]["link_maps"]; ?>" class="mapa-contato"></iframe>
                </div>
            </div>
        </section>
    </main>
    <?php 
        $quality->js_custom = array(
            "tools/bootstrap.min",
            "tools/jquery.validate.min",
            "tools/jquery.mask.min",
            "tools/jquery.fancybox",
            "jquery.quality.contact"
        ); 
    ?>
    <?php include "includes/_footer.php"; ?>
    
    <a id="trigger-mensagem-fancybox" href="#modal-mensagem-fancybox" style="display:none"></a>
    <div id="modal-mensagem-fancybox" class="text-center"></div>
    <?php if($captcha){ ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <?php } ?>
    <script>
        $(function(){
            var form_identification = ".form-contato";
            $(form_identification).validate({
                errorClass: "control-label",
                validClass: "control-label",
                rules: {
                    "data[Contato][nome]" : {
                        required: true
                    },
                    "data[Contato][email]" : {
                        required: true,
                        email: true
                    },
                    "data[Contato][telefone]" : {
                        required: true
                    },
                    "data[Contato][como_conheceu]" : {
                        required: true
                    },
                    "data[Contato][mensagem]" : {
                        required: true
                    }
                },
                highlight: function (element){
                    $(element).parents("div.form-group").addClass("has-error").removeClass("has-success");
                }, 
                unhighlight: function (element){ 
                    $(element).parents("div.form-group").removeClass("has-error").addClass("has-success"); 
                },
                submitHandler: function(form){
                    var dados = $(form_identification).serialize();
                    $.ajax({
                        type: "POST",
                        url: "includes/dispara-email.php",
                        data: dados,
                        dataType: "json",
                        beforeSend: function(){
                            $(".btn-send").html("Aguarde...").attr("disabled", "disabled");
                            $(".form-control").prop("disabled", true);
                        },
                        success: function(data){
                            if(data.status){
                                window.location = "envia-contato";
                            }else{
                                $("#modal-mensagem-fancybox").html(data.message);
                                $("#trigger-mensagem-fancybox").fancybox().trigger("click");
                            }
                        },
                        error: function(){
                            $("#modal-mensagem-fancybox").html("<h2>Ocorreu um Erro</h2><p>Por favor, tente novamente mais tarde.</p>");
                            $("#trigger-mensagem-fancybox").fancybox().trigger("click");
                        },
                        complete: function(){
                            $(".btn-send").html("Enviar").removeAttr("disabled");
                            $(".form-control").prop("disabled", false);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>