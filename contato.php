

<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <?php

  $pg = "contato";
  include("metas.php");
  ?>


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
  <?php

  include("topo.php");
  ?>


  <div class="fundopadrao">
    <div class="meio">

      <div style="clear:both; height:50px;"></div>

      <div class="fundotitulopagina wow zoomInDown">
        <h1 class="preto centro nomargin tamanhoh1">Entre em <br>
          <span class="bold titulopadrao">Contato</span>
        </h1>

        <center>
          <div class="separadorrosa"></div>
        </center>

      </div>
      <div style="clear:both; height:50px;">
      </div>
    </div>
    <div style="clear:both; height:0px;">
    <div class="meio"



      



      <a name="formcontato" id="formcontato"></a>

      <div class="coluna2 esquerda respw100 wow slideInLeft" data-wow-offset="200">
        <?php
        $x = "";
        $auth = "";
        $captcha = 0;
        $nome = "";
        $email = "";
        $cidade = "";
        $estado = "";
        $fone = "";
        $assunto = "";

        $mensagem = "";

        $erro = 1;
        if (isset($_POST['submit'])) {
          include("enviar_contato.php");

        }





        if ($erro == 1) {
          if ($captcha == 1) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $empresa = $_POST['empresa'];
            $fone = $_POST['fone'];
            $cidade = $_POST['cidade'];
            $loja = $_POST['loja'];
            $mensagem = $_POST['mensagem'];
          }
          ?>

          <div style="clear:both; height:20px;"></div>

          <form id='myform' action="#formcontato" name="myform" method="post" enctype="multipart/form-data">

            <input type="text" class="contato" value="<?php echo $nome; ?>" name="nome" id="nome" placeholder="NOME"
              required>

            <input type="email" class="contato" value="<?php echo $email; ?>" name="email" id="email" placeholder="E-MAIL"
              required>

            <input type="text" class="contato" value="" name="empresa" id="empresa"
              placeholder="EMPRESA" required>

            <input type="text" class="contato" value="<?php echo $fone; ?>" name="fone" maxlength="13"
              onkeyup="formatar_mascara(this,'##-####-#####')" id="fone" placeholder="TELEFONE" required>

            <input type="text" class="contato" value="<?php echo $cidade; ?>" name="cidade" id="cidade"
              placeholder="CIDADE/ESTADO" required>

         

            <textarea class="contato" name="mensagem" placeholder="MENSAGEM:" required><?php echo $mensagem; ?></textarea>


            <div style="clear:both;height:50px;"></div>

            <input type="submit" name="submit" value="ENVIAR" id="btenviar">

          </form>
          <div style="clear:both;height:100px;"></div>


          <script type="text/javascript">
            $(document).ready(function () {
              $('#btenviar').click(function () {
                $("head").append("<link rel='stylesheet' href='validation.css' type='text/css' />");
              });
            });

          </script>

        <?php } ?>

        <div style="clear:both; height:20px;"></div>
      </div>

      <div style="clear:both; height:0px;">
      </div>
 



      </div>
      <div style="clear:both; height:50px;">
      </div>






    </div><!-- FIM DO MEIO -->
  </div><!-- fecha fundopadrao -->


  <div style="clear:both;"></div>




  <div style="clear:both;"></div>



  <?php include("rodape.php"); ?>

</body>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

</html>
