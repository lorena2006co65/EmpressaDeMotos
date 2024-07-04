<?php include("header.php"); ?>

<?php
   //Bloco para declaraçao de variavel
   $fotoUsuario = $nomeUsuario = $cidadeUsuario = $telefoneUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";
   $erroPrenchimento = false;
   
   //Verificar o metodo de invio do FORM
   if($_SERVER["REQUEST_METHOD"] == "POST"){

       //Verifica se o campo do formulario esta vazio utilizando a funçao empty
       if(empty($_POST["nomeFormulario"])){
           echo "<div class='alert alert-warning text-center'>O campo <strong>NOME</strong> é obrigatório!</div>";
           $erroPrenchimento = true;
        }
       else{
           $nomeUsuario = $_POST["nomeUsuario"];
       }

       //Validaçao do campo cidadeUsuario
       if(empty($_POST["cidadeUsuario"])){
           echo "<div class='alert alert-warning text-center'>
                   O campo <strong>CIDADE</strong> é obrigatório!
              </div>
            ";
            $erroPrenchimento = true;

       }
       else{
           $cidadeUsuario = $_POST["cidadeUsuario"];
       }

       //Validaçao do campo telefoneUsuario
       if(empty($_POST["telefoneUsuario"])){
           echo "<div class='alert alert-warning text-center'>O campo <strong>TELEFONE</strong> é obrigatório!</div>";
           $erroPrenchimento = true;
        }
        else{
            $telefoneUsuario = $_POST["telefoneUsuario"];
        }

        //Validaçao do campo emailUsuario
        if(empty($_POST["emailUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>EMAIL</strong> é obrigatório!</div>";
            $erroPrenchimento = true;
        }
        else{
            $emailUsuario = $_POST["telefoneUsuario"];
        }

        //Validaçao do campo senhaUsuario
        if(empty($_POST["senhaUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>SENHA</strong> é obrigatório!</div>";
            $erroPrenchimento = true;
        }
        else{
            $senhaUsuario = $_POST["senhaUsuario"];
        }

        //Validaçao do campo confirmarSenhaUsuario
        if(empty($_POST["confirmarSenhaUsuario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>CONFIRMAR SENHA</strong> é obrigatório!</div>";
            $erroPrenchimento = true;
        }
        else{
            $confirmarSenhaUsuario = $_POST["confirmarSenhaUsuario"];
        }

   }
?>

<?php include("footer.php"); ?>