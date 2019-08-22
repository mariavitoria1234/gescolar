<?php
/**
 * Arquivo para registrar os dados de um aluno no banco de dados.
 */
if(isset($_REQUEST['cadastrar']))
{
    try
    {
         include 'includes/conexao.php';
          $sql = "INSERT INTO ALUNOS (nome, data_nascimento,sexo
                                       genero, cpf, cidade, estado,
                                        bairro, rua, cep)
                            VALUES (? ? ? ? ? ? ? ? ? ? ? ? ?)";


            $Stmt = $conexao->prepare($sql);
            $Stmt->bindParam(1, $_REQUEST['nome']);
            $Stmt->bindParam(2, $_REQUEST['data_nascimento']);
            $Stmt->bindParam(3, $_REQUEST['sexo']);
            $Stmt->bindParam(4, $_REQUEST['genero']);
            $Stmt->bindParam(5, $_REQUEST['cpf']);
            $Stmt->bindParam(6, $_REQUEST['cidade']);
            $Stmt->bindParam(7, $_REQUEST['estado']);
            $Stmt->bindParam(8, $_REQUEST['bairro']);
            $Stmt->bindParam(9, $_REQUEST['rua']);
            $Stmt->bindParam(10, $_REQUEST['cep']);
            $stmt->execute();

    } catch(Exception $e) {
        echo $e->getMessage();
    }
}