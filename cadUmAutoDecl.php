<?php
header("Content-type: text/html; charset=utf-8");
session_start();

if (isset($_SESSION['cadUsuario'])) {
    header("location: cadastro.php");
    die;
}

if (isset($_GET['enviar'])) {
	$_SESSION['cadUsuario'] = true;
	$_SESSION['emailUser'] = true;
    header('location: cadastro.php');
  }	
		
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Auto Declaração</title>
	<?php include('template/head.php');?>

	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous">	</script>

</head>

<body>
<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
			<?php include('template/header.php');?>
		<!-- //header -->
	</div>
	<!-- //main banner -->
	<!-- contact -->
	<div class="contact py-5" id="contact">

		<div class="container pb-xl-5 pb-lg-3">
			<p><strong style="font-size:30px;color: #8f181a">Auxílio Emergencial</strong><strong style="font-size:30px;color: #008993"> Cultural</strong>
			</br>
			<strong style="font-size:20px;color:black">De acordo com os critérios da</strong><strong style="font-size:20px;color:orange"> LEI Nº 14.017 </strong><strong style="font-size:20px;color:black">com sanção presidencial em 29 DE JUNHO DE 2020. Para ter acesso ao Auxílio Emergencial Cultural, você deve </strong><strong style="font-size:20px;color:orange">cumprir</strong> <strong style="font-size:20px;color:black">os seguintes </strong><strong style="font-size:20px;color:orange">requisitos:</strong></p>
			</br>
			<p><strong style="color:black">Leia com atenção</strong> as informações abaixo. Você precisa se encaixar em <strong style="color:black">todas</strong> elas.</p>
			</br>
<!--Formulario-->
			<form action="cadUmAutoDecl.php?enviar" method="post" name="formuser" class="contact-wthree-do" accept-charset="utf-8">
				<div class="col-md-6">
					<label>
						<i class="fa fa-check-square-o" style="font-size:22px;color:orange" aria-hidden="true"></i>&nbsp;&nbsp;<strong style="font-size:20px">Tenho mais de 18 anos</strong>
					</label>	
				</div>
					</br>
				<div class="col-md-6">
					<label>
						<i class="fa fa-check-square-o" style="font-size:22px;color:orange" aria-hidden="true"></i> <strong style="font-size:20px">Não tenho emprego formal</strong>	
					</label>
				</div>
					</br>

				<div class="col-md-10">
					<label>
						<i class="fa fa-check-square-o" style="font-size:22px;color:orange" aria-hidden="true"></i>&nbsp;&nbsp;<strong style="font-size:20px">Conforme inciso III do art. 6º, não recebo os seguintes benefícios:</strong>
					</label>	
					</br>
					<div>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Previdenciários (INSS)</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Seguro-desemprego</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Programa de Transferência de Renda Federal (com exceção do <i style="color:orange">Bolsa Família</i>)</p>
					</div>
				</div>
					</br>

				<div class="col-md-10">
					<label>
						<i class="fa fa-check-square-o" style="font-size:22px;color:orange" aria-hidden="true"></i>&nbsp;&nbsp;<strong style="font-size:20px">Conforme inciso VII do art. 6º, não sou beneficiário(a) do:</strong>
					</label>	
					</br>
					<div>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Auxílio emergencial previsto na lei nº 13.982, de 2 de abril de 2020.</p>
					</div>
				</div>
					</br>

				<div class="col-md-10">
					<label>
						<i class="fa fa-check-square-o" style="font-size:22px;color:orange" aria-hidden="true"></i>&nbsp;&nbsp;<strong style="font-size:20px">Conforme inciso IV do art. 6º, minha renda:</strong>
					</label>	
					</br>
					<div>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Per capita de até R$ 522,50, mensal</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ou</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Familiar de até R$ 3.135,00, mensal total</p>
						
					</div>
				</div>
					</br>

				

				<div class="col-md-10">
					<label>
						<i class="fa fa-check-square-o" style="font-size:22px;color:orange" aria-hidden="true"></i>&nbsp;&nbsp;<strong style="font-size:20px">Não recebi rendimentos tributáveis, no ano de 2018, acima de R$ 28.559,70, conforme inciso V do art. 6º.</strong>
					</label>	
				</div>
					</br>	

				<div class="col-md-10">
					<label>
						<i class="fa fa-check-square-o" style="font-size:22px;color:orange" aria-hidden="true"></i>&nbsp;&nbsp;<strong style="font-size:20px">Declaro que obtive rendimento médio de  01/01/2019 a 29/02/2020 de até 2 (dois) salários mínimos, conforme inciso IV do art. 6º.</strong>
					</label>
	
				</div>
					</br>
				<div class="col-md-10">
					<label>
						<i class="fa fa-check-square-o" style="font-size:22px;color:orange" aria-hidden="true"></i>&nbsp;&nbsp;<strong style="font-size:20px">Declaro que atuo social ou profissionalmente nas áreas artística e cultural a no minímos 24 (vinte e quatro) meses imediatamente anteriores à 29 de junho de 2020, conforme inciso i do art. 6º. Exemplos:</strong>
					</label>	
					<div>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Música</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Teatro</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Dança</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Circo</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;AudioVisual</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Artes Visuais</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Cultura Popular</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Formação</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle" aria-hidden="true" style="font-size:10px"></i>&nbsp;Literatura</p>
					</div>
				</div>
					</br>				
				
				<div class="col-md-10">
					<label>
						<i class="fa fa-check-square-o" style="font-size:22px;color:orange" aria-hidden="true"></i>&nbsp;&nbsp;<strong style="font-size:20px">Não sou agente público, inclusive temporário, nem exerço mandato eletivo</strong>
					</label>	
				</div>
					</br>

				<div class="col-md-10">
					<label>
						<p align="justify" style="font-size:20px"><i class="fa fa-check-square-o" style="font-size:22px;color:orange" aria-hidden="true"></i>&nbsp;<strong>Declaro que estou ciente de que,</strong> em caso de utilização de qualquer meio ilícito, imoral ou declaração falsa para a participação deste credenciamento, incorro nas penalidades previstas nos artigos 171 e 299 do decreto lei nº 2.848, de 07 de dezembro de 1940 (código penal).</p>
					</label>	
				</div>
					</br>
				<div class="col-md-10">
				     <label>
				     	 <p align="justify" style="font-size:20px"><input type="checkbox" id="concordar"  name="concordar" style="height: 18px; width: 18px;"/>&nbsp;<strong>Declaro que li</strong> e tenho ciência que me enquadro em todas as condições acima. Assim, autorizo o acesso e uso dos meus dados para validação em outras bases de dados oficiais.</p>
				      		
				     </label>
				</div>
					</br>
			
				

				<div class="col-md-10">
					</br></br>
					<center><button type="submit" style="height: 50px; width: 300px;background:#008993" id="btn" class="btn" disabled> <p style="font-size:12px;color:orange">Atendo as condições, quero continuar <i class="fa fa-paper-plane" aria-hidden="true" ></i></p></button></center>
				</div>
				
			</form>
<!--Formulario-->

	</div>
	<!-- //contact-->

</div>
	<!-- copyright bottom -->
		<?php include('template/footer.php');?>
	<!-- //copyright bottom -->

</body>
<script>
	$("#concordar").on("click", function(){
   			($(this).is(':checked')) ? $("#btn").prop("disabled", false): $("#btn").prop("disabled", true);    
	});

</script>
</html>