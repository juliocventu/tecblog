<?php
    /**
     * Inclusão de arquivos padronizados do nosso projeto
     */
    include "funcoes/conecta.php";       // Inclusão do arquivo de conexão com banco de dados
    include "funcoes/funcoes.php";       // Inclusão do arquivo de funções do nosso projeto
    
 
    $ext = end(explode('.', $_FILES['fileUpload']['name']));
    $name = preg_replace('/[^a-z0-9]/i', '_', $_FILES['fileUpload']['name']);
    $tmp = $_FILES['fileUpload']['tmp_name'];
    $dir = 'upload/1/';
    $upload = $dir . $name . '.' . $ext;

    if (!file_exists($dir)){
        mkdir("$dir", 0777);
    }
    
    move_uploaded_file($tmp, $upload);
    
?>