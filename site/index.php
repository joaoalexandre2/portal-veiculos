<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <?php

  $pg = "home";
  include("metas.php");
  ?>


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>




  <?php
  include("topo.php");
  ?>

  <!-- Swiper -->
  <div class="slides-destaque">
    <!-- Inicio  slide principal -->
    <div class="swiper JkSlider">
      <div class="swiper-wrapper">

        <!--Inicio item Slide Img- -->

        <div class="swiper-slide slide  primeiro-slide">
          <!-- Inicio coluna 1 -->
          <div class="col-1">
            <h4>Seja bem Vindo ao Jk Motors</h4>
            <h1>Seu sonho está <br> a <span> distância</span> de um clique</h1>
            <p>Escolha seu futuro carro em nossa lista de lojas de carros premium </p>

            <a href="">
              <div class="lojasBtn esquerda">
                <box-icon name='right-arrow-alt'></box-icon>
                Nossa Loja
              </div>
            </a>

            <a href="">
              <div class="lojasBtn direita lojasbtn2">
                <box-icon name='right-arrow-alt'></box-icon>
                Veja Mais
              </div>
            </a>

            <!-- <div class="button">
                 <a href=""><button class="lojasBnt">
                 <i class='bx bx-right-arrow-alt'></i>
                      Nossa Loja
                 </button></a>
                  <a href="">
                 <button class="sobreBnt">
                 <i class='bx bx-right-arrow-alt'></i>
                      Veja Mais
                 </button>
                 </a>
            </div>-->
          </div>
          <!-- fecha coluna 1 -->
          <!-- Inicio coluna 2-->
          <div class="col-2">
            <img src="assets/img/slide/slide-1.png" alt="">
          </div>
          <!-- fecha coluna 2 -->
        </div>
        <!--Fim Slide Img- -->



      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <!-- fim slide principal -->
  </div>


  <div style="clear: both; height:0px;"></div>

  <div class="home1">
    <div class="fundo-colorido1">
      <div class="meio">
        <div class="coluna3 esquerda respw100">
          <div style="clear: both; height:130px;"></div>
          <div class="tamanhoh1 branco bold">

            Sua Pickup Está aqui
          </div>



        </div><!-- fecha coluna 3 esquerda -->

        <div class="coluna2 direita s10 respw100">
          <img src="assets/img/slide/s10.png" alt="">
        </div>

      </div><!-- fecha coluna 3 esquerda -->

    </div><!-- fecha meio -->
    <div class="fundo-colorido2">
      <div class="meio">
        

        <div class="coluna3 esquerda respw100">
          <div style="clear: both; height:130px;"></div>
          <div class="tamanhoh1 branco esquerda bold">

            Seu Popular Está aqui
          </div>



        </div><!-- fecha coluna 3 esquerda -->

        <div class="coluna2 direita s10 respw100">
          <img src="assets/img/slide/hb20.png" alt="">
        </div>

      </div>
    </div>
    <div class="fundo-colorido1">
      <div class="meio">
        <div class="coluna2 direita s10 respw100">
          <img src="assets/img/slide/corola.png" alt="">
        </div>

        <div class="coluna3 esquerda respw100">
          <div style="clear: both; height:130px;"></div>
          <div class="tamanhoh1 branco esquerda bold">

            Seu Sedan Está aqui
          </div>



        </div><!-- fecha coluna 3 esquerda -->

      </div>
    </div>
  </div><!--fim do home1-->
  <div style="clear: both; height:0px;"></div>
  <?php include("rodape.php"); ?>

</body>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

</html>

