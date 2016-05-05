<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Slave</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="LDS Ulbra Torres">

	<link rel="stylesheet" type="text/css" href="<?= base_url ('assets/css/materialize.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/templateMenu.css') ?>">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  
	<script type="text/javascript"  src="<?= base_url('assets/js/jquery-2.2.2.js')?>"></script>		
	<script src="<?= base_url('assets/js/jquery.maskedinput.js'); ?>" type="text/javascript"></script>
	<script src="<?= base_url('assets/js/jquery.validate.js'); ?>" type="text/javascript"></script>
	<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>
  
</head>
<body>
  <div>
    <div class="col l12">
      <ul id="nav-mobile" class="side-nav">
        <li class=""><a href="<?= base_url() ?>"  class="blue-text">HOME</a></li>
        <li class=""><a href="stock" class="blue-text">ESTOQUE</a></li>
		<li>
			<a class="aColor dropdown-button blue-text" data-activates="financial2_buttons" href="#">FINANCEIRO
			</a>
            <ul id="financial2_buttons" class="dropdown-content">
                <li><a href="<?= base_url('classification'); ?>">Classificações</a></li>
                <li><a href="<?= base_url('people'); ?>">Pessoas</a></li>
                <li><a href="<?= base_url('financial-movimentation'); ?>">Movimentações</a></li>
                <li class="divider"></li>
                <li><a href="<?= base_url('financial') ?>">Visão Geral</a></li>
            </ul>
        </li>

      </ul>
      <div class="hide-on-large-only center nav-wrapper"> 
        <nav class="color" role="navigation">
          <label class="white-text labelLogo fontUt"><strong>PROJETO SLAVE</strong></label>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </nav>
      </div>
      <div class="col l12 center hide-on-med-and-down">
        <ul class="ulMenu hide-on-small-only color tamanhoMenu ">
          <label class="white-text labelLogo left fontUt"  style="margin-left: 25px;"><strong>SLAVE</strong></label>
          <a href="<?= base_url() ?>" class="aColor"><li class="liclass"><p class="fontUt strMenu " style="vertical-align: middle;">HOME</p></li></a>  
          <a class="aColor dropdown-button" data-activates="estoque_buttons" href="#">
            <li class="liclass">
              <p class="fontUt strMenu " style="vertical-align: middle;">ESTOQUE
              <i class="material-icons right">arrow_drop_down</i></p>
            </li>
          </a>
         <li>
			<a class="aColor dropdown-button blue-text" data-activates="financial2_buttons" href="#">FINANCEIRO</a>
            <ul id="financial2_buttons" class="dropdown-content">
                <li><a href="<?= base_url('classification'); ?>">Classificações</a></li>
                <li><a href="<?= base_url('people'); ?>">Pessoas</a></li>
                <li><a href="<?= base_url('financial-movimentation'); ?>">Movimentações</a></li>
                <li class="divider"></li>
                <li><a href="<?= base_url('financial') ?>">Visão Geral</a></li>
            </ul>
        </li>
		  
        </ul>
      </div>
    </div>
  </div>
  <ul id="estoque_buttons" class="dropdown-content">
    <li><a href="<?= base_url('stock/products'); ?>">Produtos</a></li>
    <li><a href="<?= base_url('stock/groups'); ?>">Categorias</a></li>
    <li class="divider"></li>
    <li><a href="<?= base_url('stock/entries'); ?>">Entradas</a></li>
    <li><a href="<?= base_url('stock/outputs'); ?>">Saídas</a></li>
    <li class="divider"></li>
    <li><a href="<?= base_url('stock'); ?>">Visão Geral</a></li>
  </ul>

  <div id="contents">
  	<?php echo $contents ?>
  </div>
</body>


<script>
  $(".button-collapse").sideNav();
</script>


</html>