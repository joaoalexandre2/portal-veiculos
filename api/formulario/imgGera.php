<?php
/******************************************************
**
**	Nome do Arquivo: imgGera.php
**	Data de Cria��o: 01/05/2007
**	Autor: Thiago Felipe Festa - thiagofesta@gmail.com
**	�ltima altera��o: 
**	Modificado por: 
**
******************************************************/

// Incluo a classe que gera a imagem.
require_once ("imagem.class.php");

// Inst�ncio a imagem
$imagem = new Imagem;
$imagem->geraImagem();

?>