/*! 
 * JsQuality v1.0.0 
 * http://qualitysmi.com.br 
 * Denis Cedro | cedrodlc@gmail.com 
 */

var qualityMainJS = {
    checkSEO: function() {
        var url = window.location;
        console.log('passou');
        if (url.href.indexOf("localhost/") >= 0) {
            var errors = [];
            var title = $("title").html();
            var desc = $("head meta[name=description]").attr("content");
            var canncl = $("head link[rel=canonical]").attr("href");
            var imgs = $("img");

            var mensagem_t = "Ops! :(";
            var html_erros = "";
            var s_errors = "width:100%;margin:0 auto;padding: 1px 0 1px 0px;border: solid 2px #ea6060;background: #fff9f9;";
            /*var s_errors = "width:300px;margin:0 auto;position:fixed;top:10px;right:10px;";*/
            /*s_errors += "z-index:9999999;text-align:center;border:1px solid #eee;";
            s_errors += "padding:0 10px;background-color:#fff;box-shadow:0 4px 13px 0 rgba(0,0,0,.45)";*/
            if (title.length > 70) { errors.push("Title acima dos 70 caracteres."); }
            if (desc.length === 0) { errors.push("Description vazia."); }
            if (url.href !== canncl) { errors.push("Cannonical incorreta."); }

            var achouImgJpgPng = false;
            var achouImgSemAlt = false;
            /* Procuramos imagens, e verificamos se no código temos o mesmo endereço com o webp setado, 
            caso não haja, vai dar erro */
            for (var i = imgs.length - 1; i >= 0; i--) {
                var alt = imgs[i].alt;
                if (imgs[i].src.indexOf("localhost/") != -1) {
                    if (achouImgJpgPng == false && (imgs[i].src.indexOf(".jpg") != -1) || (imgs[i].src.indexOf(".png") != -1)) {
                        var imagemComExErrada = imgs[i].src.replace('.png', '').replace('.jpg', '');
                        var procuraImagemWebp = $('[srcset="'+imagemComExErrada+'.webp"]');
                        if (procuraImagemWebp.length == 0) {
                            errors.push("Faça a conversão para .webp : " + imgs[i].src);
                            achouImgJpgPng = true;
                        }
                    }
                }
                if (alt.length === 0 && achouImgSemAlt == false) {
                    errors.push("Imagem sem alt.");
                    achouImgSemAlt = true
                }

                if (achouImgJpgPng == true && achouImgSemAlt == true) {
                    break;
                }
            }

            if (errors.length > 0) {

                html_erros += "<div class=\"erros-seo\" style=\"" + s_errors + "\">";
                html_erros += "<div class=\"erros-container\" style=\"display:none;padding: 1px 0 1px 10px\">";
                html_erros += "<h2 style=\"margin:15px 0;font-size:16px\">" + mensagem_t + "</h2>";
                $.each(errors, function(i, val) {
                    i++;
                    html_erros += "<p style=\"font-size:14px\">" + i + " - " + val + "</p>";
                });
                html_erros += "</div>";
                html_erros += "<div data-abre-erros-seo class=\"btn\" style=\"display: block;color: #ea6060;text-align: center;font-size: 12px;padding: 1px 0;background: #fff9f9;cursor: pointer; font-weight: bold;\"> Temos <span style=\"font-weight: 900; border: solid 2px #ea6060; padding: 0 4px; border-radius: 3px;\">" + errors.length + "</span> " + (errors.length > 1 ? "problemas" : "problema") + " <i class='fa fa-warning'></i> </div>";
                html_erros += "</div>";

                $('.erros-seo').remove();
                $("body").prepend(html_erros);
                $('body').on('click', '[data-abre-erros-seo]', function() {
                    $('.erros-container').slideToggle(400);
                });
            }
        }
    },
    voltaTopo: function() {
        $(".mm-up-to-top").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
        });
    },
    menuMobile: function() {
        var basehref = $("head base").attr("href");
        var nomeempre = $("head meta[name=author]").attr("content");
        var logo = $('header .logo');
        var bslick = logo.html();
        $(".menu-list").slicknav({
            brand: bslick,
            label: "",
            prependTo: "header",
            removeClasses: true
        });        
        
    },
    menuMobileScroll: function() {
        $(document).scroll( function() {
            if ($(window).scrollTop() > $("main").offset().top) {
                $(".slicknav_menu").addClass('slicknav_scroll');
            } else {
                $(".slicknav_menu").removeClass('slicknav_scroll');
            }
        });
    },
    geralFormularios: function() {
        var a = function(a) {
                return 11 === a.replace(/\D/g, "").length ? "(00) 00000-0000" : "(00) 0000-00009";
            },
            b = {
                onKeyPress: function(b, c, d, e) {
                    d.mask(a.apply({}, arguments), e);
                },
                placeholder: "(__) ____-____"
            };
        $(".mask-phone").mask(a, b), $.extend($.validator.messages, {
            required: "Este campo é obrigatório.",
            email: "Por favor, insira um endereço de email válido.",
            minlength: "Por favor, digite pelo menos {0} caracteres."
        });
    },
    activeSidebar: function() {
        var url = window.location;
        $('.sidebar-main ul li a[href="' + url + '"]').addClass("active-link-sidebar");
    },
    carregaVideoYt: function() {
        var elementosVideo = $('[data-video-yt]');
        $.each(elementosVideo, function(key, value) {
            var videoVez = $(value).data('video-yt');
            $(value).append('<iframe src="https://www.youtube.com/embed/' + videoVez + '?rel=0&autoplay=0"></iframe>');
        });
    },
    carregaFacebook: function() {
        var elementos = $('[data-facebook]');
        $.each(elementos, function(key, value) {
            var elementoVez = $(value).data('facebook');
            var etabs = $(value).data('tabs') == undefined ? 'timeline,messages' : $(value).data('tabs');
            var eheight = $(value).data('height') == undefined ? '290' : $(value).data('height');
            var esmalheader = $(value).data('smalheader') == undefined ? false : $(value).data('smalheader');
            var efacepile = $(value).data('facepile') == undefined ? true : $(value).data('facepile');

            $(value).html('<iframe style="height: ' + eheight + 'px" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F' + elementoVez + '&tabs=' + etabs + '&height=' + eheight + '&small_header=' + esmalheader + '&adapt_container_width=true&hide_cover=false&show_facepile=' + efacepile + '&appId" allow="encrypted-media"></iframe>');
        });
    },
    boxPesquisaDois: function() {
        $('body').on('click', '.pesquisa-box-2', function() {
            if ($('.pesquisa-box-2 input').val().length <= 0) {
                $('.pesquisa-box-2 input').animate({
                    width: '250px',
                    padding: '5px'
                }, 200);

                $('.pesquisa-box-2 button span').fadeOut(200);
                return false;
            }
        });
    },
    clickSlide: function() {
        $('body').on('click', '.action-scroll', function() {
            $('.scroll-div').slideToggle(400);
        });
    }
};
$(function() {
    qualityMainJS.checkSEO();
    qualityMainJS.voltaTopo();
    qualityMainJS.menuMobile();
    qualityMainJS.menuMobileScroll();
    qualityMainJS.activeSidebar();
    qualityMainJS.boxPesquisaDois();
    qualityMainJS.clickSlide();
});