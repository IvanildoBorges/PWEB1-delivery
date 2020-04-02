<?php

// Limpar dados para evitar possíveis scripts
function __e($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
} 

function limparVetor($varPost) {
    $arrayLimpo = [];
    foreach ($varPost as $indice => $valor) {
        $arrayLimpo[$indice] = __e($valor);
    }
    return $arrayLimpo;
}

// Verificar se o formulário foi enviado
function formEnviado($postArray) {
    global $dados;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Limpar post
        $dados = limparVetor($postArray);
        return true;
    } else {
        header('Location: ../index.php');
        die();
    }
}

// Criar mensagem de erro
function gerarMensagensErro($postArray) {
    global $mensagem_erro;
    
    if( 
        ((!isset($postArray["campo1"])) && (!isset($postArray["campo2"])) &&
         (!isset($postArray["campo3"])) && (!isset($postArray["campo4"]))
        ) &&
        ($postArray["PF"] == "Opc") &&
        (!isset($postArray["campo11"])) &&
        ($postArray["nome"] == "") &&
        ($postArray["endereco"] == "") &&
        ($postArray["tel"] == "")
        ){
            $mensagem_erro["todos_os_campos_vazios"] = "Preencha os campos!";
    }
    elseif(
            ((isset($postArray["campo1"])) || (isset($postArray["campo2"])) ||
            (isset($postArray["campo3"])) || (isset($postArray["campo4"]))
            ) &&
            ($postArray["PF"] != "Opc") &&
            (isset($postArray["campo11"])) &&
            ($postArray["nome"] != "") &&
            ($postArray["endereco"] != "") &&
            ($postArray["tel"] != "")
        ){
            $mensagem_erro["todos_os_campos_preenchidos"] = "Campos preenchidos corretamente!";
    }
    else{
        if((!isset($postArray["campo1"])) && (!isset($postArray["campo2"])) && (!isset($postArray["campo3"])) && (!isset($postArray["campo4"]))){
            $mensagem_erro["acompanhamento_vazio"] = "Informe um acompanhamento!";
        }
        
        if($postArray["PF"] == "Opc"){
            $mensagem_erro["prato_principal_vazio"] = "Informe um prato principal!";
        }
        
        if(!isset($postArray["campo11"])){
            $mensagem_erro["caixa_verificacao_vazio"] = "Confirme a caixa de verificação de opção do pedido!";
        }
        
        if($postArray["nome"] == ""){
            $mensagem_erro["nome_vazio"] = "Informe o seu nome!";
        }
        
        if($postArray["endereco"] == ""){
            $mensagem_erro["endereco_vazio"] = "Informe o seu endereço!";
        }
        
        if($postArray["tel"] == ""){
            $mensagem_erro["telefone_vazio"] = "Informe o seu telefone!";
        }
    }
}