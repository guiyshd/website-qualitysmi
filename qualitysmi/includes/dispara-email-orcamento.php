<?php

    include "quality/class.quality.php";
    include "quality/class.phpmailer.php";
    include "_parametros.php";

    $assunto_padrao = "Orçamento via ".$nome_empresa;

    // Variável para Destinatário para testes
    // $emailContato = "";

    try {

        if(empty($nome_empresa)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>\$nome_empresa</strong> não foi definido.</p>");
        }
        if(empty($smtp_contato)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>\$smtp_contato</strong> não foi definido.</p>");
        }
        if(empty($email_remetente)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>\$email_remetente</strong> não foi definido.</p>");
        }
        if(empty($senha_remetente)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>\$senha_remetente</strong> não foi definido.</p>");
        }
        if(empty($emailContato)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>\$emailContato</strong> não foi definido.</p>");
        }

        $dados = filter_input(INPUT_POST, "data", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);

        $nome          = $dados["Orcamento"]["nome"];
        $email         = $dados["Orcamento"]["email"];
        $telefone      = $dados["Orcamento"]["telefone"];
        $assunto       = $dados["Orcamento"]["assunto"];
        $mensagem      = $dados["Orcamento"]["mensagem"];
        $emails_status = false;
        
        if(empty($nome)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>Nome</strong> é um campo obrigatório.</p>");
        }
        if(empty($email)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>Email</strong> é um campo obrigatório.</p>");
        }
        if(empty($telefone)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>Telefone</strong> é um campo obrigatório.</p>");
        }
        if(empty($assunto)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>Assunto</strong> é um campo obrigatório.</p>");
        }
        if(empty($mensagem)){
            throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>Mensagem</strong> é um campo obrigatório.</p>");
        }

        // Se o $captcha for true, faz a verificação
        if($captcha){
            if(empty($captcha_key_client_side)){
                throw new Exception("<h3>Ocorreu um Erro</h3><p>Chave do captcha lado cliente é obrigatória.</p>");
            }
            if(empty($captcha_key_server_side)){
                throw new Exception("<h3>Ocorreu um Erro</h3><p>Chave do captcha lado servidor é obrigatória.</p>");
            }
            $g_captcha = isset($_POST["g-recaptcha-response"]) ? $_POST["g-recaptcha-response"] : "";
            if(empty($g_captcha)){
                throw new Exception("<h3>Ocorreu um Erro</h3><p><strong>g-recaptcha-response</strong> não foi encontrado.</p>");
            }
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $captcha_key_server_side . "&response=" . $captcha . "&remoteip=" . $_SERVER["REMOTE_ADDR"]);
            if($response.success == false){
                throw new Exception("<h3>Ocorreu um Erro</h3><p>O <strong>captcha</strong> não é válido.</p>");
            }
        }
        
        // Monta corpo da mensagem do email
        $conteudo  = "<h3>".$assunto_padrao."</h3>";
        $conteudo .= "<p><strong>Nome</strong>: " . $nome . "</p>";
        $conteudo .= "<p><strong>Email</strong>: " . $email . "</p>";
        $conteudo .= "<p><strong>Telefone</strong>: " . $telefone . "</p>";
        $conteudo .= "<p><strong>Assunto</strong>: " . $assunto . "</p>";
        $conteudo .= "<p><strong>Mensagem</strong>: " . $mensagem . "</p>";
        
        if($_SERVER["SERVER_NAME"] == "localhost")
        {
            throw new Exception("<p>Você está utilizando um servidor local para testes</p><hr>".$conteudo);
        }

        // Disparo com autenticação
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 1;
        $mail->SMTPAuth  = true;
        $mail->Host      = $smtp_contato;
        $mail->Port      = 587;
        $mail->Username  = $email_remetente;
        $mail->Password  = $senha_remetente;
        $mail->From      = $email_remetente;
        $mail->FromName  = $nome;
        $mail->AddAddress($emailContato, $nome_empresa);
        $mail->AddReplyTo($email, $nome);

        // E-mails em cópia, adicionar uma nova linha para cada e-mail
        // $mail->addCC("email@qualitysmi.com.br");
        
        // E-mails em cópia oculta, adicionar uma nova linha para cada e-mail
        // $mail->addBCC("email@qualitysmi.com.br");
        
        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";
        $mail->Subject  = $assunto_padrao;
        $mail->Body = $conteudo;

        if(!$mail->Send()){
            // Disparo sem autenticação
            $header  = "MIME-Version: 1.1\n";
            $header .= "Content-type: text/html; charset=utf-8\n";
            $header .= "To: \"" . $nome_empresa . "\" <" . $emailContato . ">\n";
            $header .= "From: \"" . $nome . "\" <" . $email . ">\n";
            $header .= "Return-Path: \"" . $nome . "\" <" . $email . ">\n";
            $header .= "Reply-To: \"" . $nome . "\" <" . $email . ">\n";
            $mail = mail($emailContato, $assunto_padrao, $conteudo, $header, "-r". $emailContato);
            if($mail){
                $emails_status = true;
            }
        } else {
            $emails_status = true;
        }

        if($emails_status == false){
            throw new Exception("<h3>Ocorreu um Erro</h3><p>Ocorreu um erro no envio do email, por favor tente novamente.</p>");
        }
        
        echo json_encode(array(
            "status" => true,
            "message" => $conteudo
        ));
    } catch (Exception $e) {
        echo json_encode(array(
            "status" => false,
            "message" => $e->getMessage()
        ));
    }