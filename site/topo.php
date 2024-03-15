<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JK KIRST PORTAL</title>

    <style>
        @media (max-width: 800px) {
            /* Estilos para dispositivos com largura máxima de 800 pixels */
            #topofull {
                max-width: 800px; /* Define a largura máxima */
                margin: 0 auto; /* Centraliza o elemento na página */
            }

            /* Adicione mais estilos conforme necessário para ajustar o layout do topo em dispositivos móveis */
        }
    </style>
</head>
<body>
    <!-- Conteúdo do seu site aqui -->

    <div class="conteudocelular">
        <div id="topofull">
            <div class="menutopo">
                <div class="meio">
                    <div class="redessociais respnone">
                        <img class="direita" src="assets/img/slide/instagram.png" alt="">
                        <img class="direita" src="assets/img/slide/facebook.png" alt="">
                        <img class="direita" src="assets/img/slide/youtube.png" alt="">
                    </div>
                    <br>
                    <a href="<?php echo $linkwhats; ?>" target="_blank">
                        <div class="telefonetopo1 respnone direita">
                            <img src="assets/img/slide/whatstopo.png" alt="Ícone Whatsapp Topo">
                            <span class="texto-rolar"></span>
                        </div><!--fim do telefonetopo-->
                    </a>
                    <a href="<?php echo $fakeadd; ?>">
                        <center>
                            <div class="logotopo"></div>
                        </center>
                    </a>
                    <div class="iconemenuresponsivo"></div>
                </div>
            </div>
            <div class="menutopo2">
                <div class="meio">
                    <ul class="menutopo semibold">
                        <a href="index.php"><li class="menutopo">HOME</li></a>
                        <div class="divisormenutopo"></div>
                        <a href="empresa.php"><li class="menutopo">EMPRESA</li></a>
                        <div class="divisormenutopo"></div>
                        <a href="midiakit.php"><li class="menutopo">PARCEIROS</li></a>
                        <div class="divisormenutopo"></div>
                        <a href="loja.php"><li class="menutopo">JK EM SUA REVENDA </li></a>
                        <div class="divisormenutopo"></div>
                        <a href="contato.php"><li class="menutopo">CONTATO</li></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div style="clear:both; height: 0px;"></div>
    <div class="sombratopo"></div>
    <div class="overlaymenu"></div>

    <ul class="menuresponsivo nornone">
        <a href="index.php"><li class="menuresponsivo">HOME</li></a>
        <a href="empresa.php"><li class="menuresponsivo">EMPRESA</li></a>
      
        <a href="midiakit.php"><li class="menuresponsivo">PARCEIROS</li></a>
        <a href="loja.php"><li class="menuresponsivo">JK EM SUA REVENDA</li></a>
        <a href="contato.php"><li class="menuresponsivo">CONTATO</li></a>
       
       
    </ul>

    <script type="text/javascript">
        $(".overlaymenu").hide();
        //$("ul.menumobile").hide();
        $(".esconder").slideUp();
        $(document).ready(function () {
            $(".mainac").click(function () {
                $(this).next(".esconder").slideToggle("slow");
            });
            $(".iconemenuresponsivo").click(function () {
                $(".overlaymenu").show();
                $("ul.menuresponsivo").css('margin-left', '460px');
            });
            $(".overlaymenu").click(function () {
                $(".overlaymenu").hide();
                $("ul.menuresponsivo").css('margin-left', '0px');
            });
        });
    </script>

    <div class="espacotopo"></div>
</body>
</html>
