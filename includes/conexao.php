<?php
/**
 ** O arquivo conexao.php 
 * realizar uma conexão com o banco de dados. Para não termos que digitar 
 * os dados de acesso ao banco em todas as páginas, centralizamos eles
 * em um único arquivo e utilizamos o comando include, quando for necessário.
 */

 /**
 * O laço try {} catch serve para tentar executar um código. Caso algum erro
 * ocorra ele é capturado na catch, onde uma exceção é disparada e podemos 
 * pegar a me4nsagem de erro com o método getmessage(), e customizar a mensagem 
 * de erro para o úsuario.  
 */
try{

    $usuario = "root"; // usúario do MySQL.
    $senha = ""; // senha do MySQL
    $host = "localhost"; // host onde o servidor MySQL está sendo executado.
    $bd = "gescolar"; // nome do banco de dados.

    // Aqui vamos definir configurações para o tratamento de erros e acentos 
    $config = array(PDO::ATTR_ERRMODE => PDO::ERRODE_AXCEPTION,
                    PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

    // Aqui criamos uma variável que abriga o objeto PDO, a conexão com o MySQL.
    $conexao = new PDO("mysql:host=" . $host . ";bdname=" .$bd,$usuario,$senha,$config);

} catch(exception $e) {
    echo $e->getMessage();  
}