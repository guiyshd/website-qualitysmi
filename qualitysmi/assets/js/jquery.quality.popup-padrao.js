$(function() {
    $('body').on('click', '.popup-padrao-fechar', function(){
        $('.popup-padrao').fadeOut( "slow", function() {
            $('body').removeClass('popup-ativo');
        });
    });
});