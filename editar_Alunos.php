<?php 
/** 
 * arquivo para registrar os dados de um aluno no banco de dados
 
 */
if(isset($_REQUEST['atualizar']))
{
    try 
    {
        include 'includes/conexao.php';

        $sql = "UPDATE alunos SET nome = ?,data_nascimente = ?, sexo=?,
                                         genero = ?, cpf=?, cidade = ?, estado =?,
                                         bairro = ?, rua = ?, cep =?
                                         where id_aluno = ?) ";

      $stmt = $conexao->prepare($SQL);
      $stmt->BINDparam(1, $_REQUEST['nome']);     
      $stmt->BINDparam(2, $_REQUEST['Data_nascimento']);  
      $stmt->BINDparam(3, $_REQUEST['Sexo']);  
      $stmt->BINDparam(4, $_REQUEST['genero']);  
      $stmt->BINDparam(5, $_REQUEST['cpf']);  
      $stmt->BINDparam(6, $_REQUEST['cidade']);                                
      $stmt->BINDparam(7, $_REQUEST['estado']);  
      $stmt->BINDparam(8, $_REQUEST['bairro']);  
      $stmt->BINDparam(9, $_REQUEST['rua']);  
      $stmt->BINDparam(10, $_REQUEST['cep']);  
      $stmt->BINDparam(11, $_REQUEST['id-aluno']);  

     
    } catch(exception $e) {
        echo $e->getmessage();
    }
} 

?>

<div>
<fieldset>
   <legend>Cadastro de Aluno </legend>
   <form action="editar alunos.php?atualizar=true">
       <label>Nome: <input type="text" name="nome" required /> </label>
       <label>cidade: <input type="text" name="nome" required /> </label>
       <label>CEP: <input type="text" name="nome" required /> </label>
       <label>Bairro: <input type="text" name="nome" required /> </label>
       <label>rua: <input type="text" name="nome" required /> </label>
       <label>estado: <input type="text" name="nome" required /> </label>
       <label>data nascimento: <input type="text" name="nome" required /> </label>
       <button type="submit">Salvar</button>
</form>
</legend>
</div>       