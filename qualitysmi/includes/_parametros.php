<?php
    // Principais Dados do Cliente
    $nome_empresa = "Nome_da_Empresa";
    $slogan       = "Slogan_da_Empresa";
    $emailContato = "contato_cliente_com_br";

    // Variaveis para schema
    $dataDePublicacao = '10/04/2020';
    $dataDeModificacao = '10/04/2020';
    $facebook = "qualitysmibr";
    $instagram = "smiquality";
    
    // Logo para o schema e site
    $logo_cliente = 'imagens/logo-quality';
    $logo_quality = 'imagens/logo-quality';
    
    // Parâmetros de Unidade
    $unidades = array(
        1 => array(
            "nome" => "Nome da Unidade",
            "rua" => "Rua Endereço do Cliente",
            "bairro" => "Bairro do Cliente",
            "cidade" => "Cliente City",
            "estado" => "Estado Cliente",
            "uf" => "UF",
            "cep" => "00000-000",
            "latitude_longitude" => "", // Consultar no maps.google.com
            "ddd" => "11",
            "telefone" => "9999-9999",
            "link_maps" => "" // Incorporar link do maps.google.com
        ),
        2 => array(
            "nome" => "",
            "rua" => "",
            "bairro" => "",
            "cidade" => "",
            "estado" => "",
            "uf" => "",
            "cep" => "",
            "ddd" => "",
            "telefone" => ""
        )
    );

    // Compilado de todos os telefones para schema
    $telefones_cliente = [
        "(11) 9999-9999",
        "(11) 1111-1111",
        "(11) 2222-2222",
    ];
    
    // Parâmetros para URL
    $quality = new classQuality(array(
        // URL local
        "http://localhost/sitebase-qualitysmi/",
        // URL online
        "http://novobase.clientesqualitysmi.com.br/"
    ));

    // Variáveis da head.php
    $url = $quality->url;
    $canonical = $quality->canonical;
    
    // Parâmetros para Formulário de Contato
    $smtp_contato            = "mail.qualitysmi.com.br";
    $email_remetente         = "clientes@qualitysmi.com.br";
    $senha_remetente         = "clientes@quali100";

    // Contato Genérico (para sites que não se hospedam os e-mails)
    // $smtp_contato            = "177.85.98.119";
    // $email_remetente         = "formulario-emails@qualitysmi-clientes.com.br";
    // $senha_remetente         = "99Vbi7H1qSSL";

    // Recaptcha Google
    $captcha                 = false; // https://www.google.com/recaptcha/
    $captcha_key_client_side = "";
    $captcha_key_server_side = "";

    // CSS default
    $quality->css_files_default = array(
        "default/reset",
        "default/grid-system",
        "default/main",
        "default/slicknav-menu",
        "_main-style",
        "default_qsmi/popup-padrao"
        
    );
    
    // JS Default
    $quality->js_files_default = array(
        "default/jquery-1.9.1.min",
        "default/modernizr",
        "default/jquery.slicknav.min",
        "jquery.quality.main",
        "jquery.quality.custom"
    );
        
    // Listas de Palavras Chave
    $palavras_chave = array(
        "Item",
        "Item A",
        "Item B",
        "Item B",
        "Item B",
        "Item B",
        "Item B",
        "Item B",
        "Item C",
        "Item D"
    );
   
    $palavras_chave_com_descricao = array(
        "Item 1" => "Lorem ipsum dolor sit amet.",
        "Item 2" => "Laudem dissentiunt ut per.",
        "Item 3" => "Solum repudiare dissentiunt at qui.",
        "Item 4" => "His at nobis placerat.",
        "Item 5" => "Ei justo lucilius nominati vim."
    );
    
     /**
     * Submenu
     * 
     * $opcoes = array(
     * "id" => "",
     * "class" => "",
     * "limit" => 9999,
     * "random" => false
     * );
     * 
     * $quality->subMenu($palavras_chave, $opcoes);
     * 
     */

    /**
     * Breadcrumb
     * 
     * -> Propriedades
     * 
     * Altera a url da Home no breadcrumb
     * $quality->breadcrumb_url_home = "";
     * 
     * Altera o texto que antecede a Home
     * $quality->breadcrumb_text_before_home = "";
     * 
     * Altera o texto da Home no breadcrumb
     * $quality->breadcrumb_text_home = "Home";
     * 
     * Altera o divisor de níveis do breadcrumb
     * $quality->breadcrumb_spacer = " » ";
     * 
     * -> Função
     * 
     * Cria o breadcrumb
     * $quality->breadcrumb(array("Informações", $h1));
     * 
     */

    /**
     * Lista Thumbs
     * 
     * $opcoes = array(
     * "id" => "",
     * "class_div" => "col-md-3",
     * "class_section" => "",
     * "class_img" => "img-responsive",
     * "title_tag" => "h2",
     * "folder_img" => "imagens/thumbs/",
     * "extension" => "jpg",
     * "limit" => 9999,
     * "type" => 1,
     * "random" => false,
     * "text" => "",
     * "headline_text" => "Veja Mais"
     * );
     * 
     * $quality->listaThumbs($palavras_chave, $opcoes);
     * 
     */
    
    /**
     * Funções Extras
     * 
     * $quality->formatStringToURL();
     * Reescreve um texto em uma URL válida
     * 
     */
     