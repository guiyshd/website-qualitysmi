/*! 
 * JsQuality v1.0.0 
 * http://qualitysmi.com.br 
 * Denis Cedro | cedrodlc@gmail.com 
 */

var qualityPCJS = {
    formularioOrcamento: function(modal_id, input_form_id, form_id) {
        $(modal_id).on("show.bs.modal", function(event) {
            var button = $(event.relatedTarget);
            var recipient = button.data("assunto");
            var modal = $(this);
            modal.find(".modal-body " + input_form_id).val(recipient);
        });
        $(form_id).validate({
            errorClass: "control-label",
            validClass: "control-label",
            rules: {
                "data[Orcamento][nome]": {
                    required: true
                },
                "data[Orcamento][email]": {
                    required: true,
                    email: true
                },
                "data[Orcamento][telefone]": {
                    required: true
                },
                "data[Orcamento][assunto]": {
                    required: true
                },
                "data[Orcamento][mensagem]": {
                    required: true
                }
            },
            highlight: function(element) {
                $(element).parents("div.form-group").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function(element) {
                $(element).parents("div.form-group").removeClass("has-error").addClass("has-success");
            },
            submitHandler: function(form) {
                var dados = $(form_id).serialize();
                $.ajax({
                    type: "POST",
                    url: "includes/dispara-email-orcamento.php",
                    data: dados,
                    dataType: "json",
                    beforeSend: function() {
                        $(".btn-send").html("Aguarde...").attr("disabled", "disabled");
                        $(".form-control").prop("disabled", true);
                    },
                    success: function(data) {
                        if (data.status) {
                            window.location = "envia-contato";
                        } else {
                            $("#modal-mensagem-fancybox").html(data.message);
                            $("#trigger-mensagem-fancybox").fancybox().trigger("click");
                        }
                    },
                    error: function() {
                        $("#modal-mensagem-fancybox").html("<h2>Ocorreu um Erro</h2><p>Por favor, tente novamente mais tarde.</p>");
                        $("#trigger-mensagem-fancybox").fancybox().trigger("click");
                    },
                    complete: function() {
                        $(".btn-send").html("Enviar").removeAttr("disabled");
                        $(".form-control").prop("disabled", false);
                    }
                });
            }
        });
    }
};

$(function() {
    qualityMainJS.geralFormularios();
    qualityPCJS.formularioOrcamento("#modal-orcamento-qsmi", ".input-form-assunto", "#form-orcamento-qsmi");
});