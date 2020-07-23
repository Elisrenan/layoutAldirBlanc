<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Auxílio Cultural</title>
	<?php include('template/head.php');?>
	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/jquery.mask.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("000.000.000-00")
		})
	</script>
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
			<?php include('template/header.php');?>
		<!-- //header -->
<!-- banner -->
		<div class="banner_w3lspvt position-relative">
			<div class="container">
				<div class="d-md-flex">
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<form role="form">
											<label>
												<i class="fa fa-user-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Nome completo :<i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
											</label>
											<input onfocus="" class="form-control" type="text" name='nome' id='nome' placeholder="João Ribeiro Costa Junior" minlength="6">
										</br>
											<label>
												<i class="fa fa-user-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Nome completo da mãe:<i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
											</label>
											<input onfocus="" class="form-control" type="text" name='nome_mae' id='nome_mae' placeholder="Carvalho Paixão" >
											
										</br>
											<label>
													<i class="fa fa-calendar" aria-hidden="true" style="font-size:24px;color:#008993"></i> Data de nascimento <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
											</label>
											<input onfocus="" class="form-control" type="date"  id="data_nasc" name="data_nasc"  required="required">
										
										</br>
											<label>
													<i class="fa fa-id-card-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> CPF (somente números) <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
											</label>
											<input onfocus="" class="form-control" name='cpf' id='cpf' type="text" placeholder="000.000.000-00">
											
										</br>
											<a href="#" class="btn button-style mt-md-5 mt-4">Verificar</a>
					            		</br>
								</form>
							</div>
							<div class="col-md-6">
									<p><strong style="font-size:26px;">Acompanhamento</strong>
									</br>
										<i style="font-size:16px;color:black">Seja bem-vindo(a)</i> <i style="font-size:16px;color:orange">João Ribeiro Costa Junior</i></p>
									</br>
									<div>
										<center>
											<label>
												<h5><i class="fa fa-id-card-o" style="font-size:35px;color:#00BFFF"aria-hidden="true"></i> <b>Situação </b></h5>
												</br><h5>---- <b style="color:orange">Em análise </b> ----</h5>
												</br>
											</label>
										</center>
									</div>
									<div>
										<label>
											<h5>Seu Auxílio ainda não foi aprovado!</h5>
												<p>Seus dados estão sendo verificados, assim que a triagem for feita você poderá visualizar aqui se foi ou não aprovado seu auxílio.</p>
										</label>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- //banner -->



	</div>
	<!-- //main banner -->
</br></br></br></br>
	<!-- copyright bottom -->
		<?php include('template/footer.php');?>
	<!-- //copyright bottom -->

</body>

</html>