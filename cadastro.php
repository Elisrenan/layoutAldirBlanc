<?php
header("Content-type: text/html; charset=utf-8");
session_start();

if (!isset($_SESSION['cadUsuario'])) {
    header("location: cadUmAutoDecl.php");
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Cadastro Agente</title>
	<?php include('template/head.php');?>

	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

	<!-- wizard form-->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/animationWizard.js"></script>
	<!-- wizard form-->


	<script type="text/javascript" src="../js/jquery.mask.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("000.000.000-00")
			$("#telefone").mask("(00) 0000-00009")
			$("#telefone").blur(function(event){
				if ($(this).val().length == 15) {
					$("#telefone").mask("(00) 00000-0009")
				}else{
					$("#telefone").mask("(00) 0000-00009")
				}
			})
			$("#telefone2").mask("(00) 0000-00009")
			$("#telefone2").blur(function(event){
				if ($(this).val().length == 15) {
					$("#telefone2").mask("(00) 00000-0009")
				}else{
					$("#telefone2").mask("(00) 0000-00009")
				}
			})
			$("#cep").mask("00000-000")
		})
	</script>

	<script type="text/javascript">
		function validar(){

			var area_atuacao = formuser.area_atuacao.value;
			var genero = formuser.genero.value;
			
			var email = formuser.email.value;
			var email2 = formuser.repete_email.value;
			
			if (email != email2) {
				alert('Campos de E-mail devem ser iguais!');
				formuser.email.focus();
				return false;
			}
			else if (cidade == 'Escolha a cidade') {
				alert('É preciso escolher uma cidade!!!');
				formuser.cidade.focus();
				return false;
			}
			else if (area_atuacao == 'Escolha uma area') {
				alert('É preciso escolher uma área de atuação!!!');
				formuser.area_atuacao.focus();
				return false;
			}
			else if (genero == 'Escolha o Gênero') {
				alert('É preciso escolher um gênero!!!');
				formuser.genero.focus();
				return false;
			}
			return true;
		}
	</script>

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
			<p><strong style="font-size:30px;color:#008993">Agente Cultural</strong>  <strong style="font-size:30px;color: orange">Cadastre-se</strong> </p>


			<!-- wizard form-->	
				<div class="container">
				<div class="stepwizard">
				    <div class="stepwizard-row setup-panel">
				        <div class="stepwizard-step">
				            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
				            <p>Informações Pessoais</p>
				        </div>
				        <div class="stepwizard-step">
				            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
				            <p>Dependentes</p>
				        </div>
				        <div class="stepwizard-step">
				            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
				            <p>Sobre Você</p>
				        </div>
				        <div class="stepwizard-step">
				            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
				            <p>Contato e Endereço</p>
				        </div>
				        <div class="stepwizard-step">
				            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
				            <p>Conta Bancária</p>
				        </div>
				    </div>
				</div>
				<p>Os campos com (<i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>) são obrigatórios para preenchimento</p>
							</br>
				<form role="form">
				    <div class="row setup-content" id="step-1">
				        <div class="col-xs-12">
				            <div class="col-md-12">
					            <h3  style="font-size:22px"><i class="fa fa-info-circle" aria-hidden="true" style="color:#008993"></i><strong style="color:#8f181a"> Informações Pessoais</strong></h3>
					        	</br>
				            <div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>
											<i class="fa fa-user-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Nome completo :<i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
											<input onfocus="" class="form-control" type="text" name='nome' id='nome' placeholder="Ex: Carvalho" minlength="6">
										
									</div>
									<div class="col-md-6">
										<label>
											<i class="fa fa-user-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Nome Social:<i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
											<input onfocus="" class="form-control" type="text" name='nome_social' id='nome_social' placeholder="Ex: Paixao">
										
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>
											<i class="fa fa-user-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Nome completo da mãe:<i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
											<input onfocus="" class="form-control" type="text" name='nome_mae' id='nome_mae' placeholder="Ex: Carvalho Paixão" >
										
									</div>
									<div class="col-md-6 mt-md-0 mt-4">
										<label>
											<i class="fa fa-id-card-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> CPF (somente números) <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<input onfocus="" class="form-control" name='cpf' id='cpf' type="text" >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>
											<i class="fa fa-calendar" aria-hidden="true" style="font-size:24px;color:#008993"></i> Data de nascimento <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<input onfocus="" class="form-control" type="date"  id="data_nasc" name="data_nasc"  required="required">
									</div>
									<div class="col-md-6 mt-md-0 mt-4">
										<label>
											<i class="fa fa-id-card-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Gênero: <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<select class="form-control form-control-lg" name="genero" id="genero">
											<option>Escolha o Gênero</option>
										  	<option>Não declara</option>
										  	<option>Mulher Cis</option>
										  	<option>Homem Cis</option>
										  	<option>Mulher Trans</option>
										  	<option>Homem Trans</option>
										  	<option>Não Bináre</option>
										  	<option>Outros</option>
										</select>
									</div>
								</div>
							</div>


							<div class="form-group">
								<div class="row">
									<div class="col-md-6 mt-md-0 mt-4">
										<label>
											<i class="fa fa-id-card-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Etnia: <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<select class="form-control form-control-lg" name="etnia" id="etnia">
											<option>Escolha a Etnia</option>
										  	<option>Não declara</option>
										  	<option>Preta</option>
										  	<option>Parda</option>
										  	<option>Branca</option>
										  	<option>Amarela</option>
										  	<option>Indígena</option>
										  	<option>Outra</option>
										</select>
									</div>
									<div class="col-md-6 mt-md-0 mt-4">
										<label>
											<i class="fa fa-id-card-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> PCD (Pessoa com deficiência) <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<select class="form-control form-control-lg" name="pcd" id="pcd">
											<option>Escolha a opção</option>
										  	<option>Não possuo</option>
										  	<option>Física</option>
										  	<option>Auditiva</option>
										  	<option>Visual</option>
										  	<option>Intelectual</option>
										  	<option>Múltipla</option>
										  	<option>Outra</option>
										</select>
									</div>
								</div>
							</div>


							<div class="form-group">
								<div class="row">
									<div class="col-md-6 mt-md-0 mt-4">
										<label>
											<i class="fa fa-id-card-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Naturalidade: <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<select class="form-control form-control-lg" name="naturalidade" id="naturalidade">
											<option>Escolha a Naturalidade</option>
										  	<option> Acre (AC)</option>

											<option>Alagoas

											(AL)</option>

											<option>Amapá

											(AP)</option>

											<option>Amazonas

											(AM)</option>

											<option>Bahia

											(BA)</option>

											<option>Ceará

											(CE)</option>

											<option>Espírito Santo

											(ES)</option>

											<option>Goiás

											(GO)</option>

											<option>Maranhão

											(MA)</option>

											<option>Mato Grosso

											(MT)</option>

											<option>Mato Grosso do Sul

											(MS)</option>

											<option>Minas Gerais

											(MG)</option>

											<option>Pará

											(PA)</option>

											<option>Paraíba

											(PB)</option>

											<option>Paraná

											(PR)</option>

											<option>Pernambuco

											(PE)</option>

											<option>Piauí

											(PI)</option>

											<option>Rio de Janeiro

											(RJ)</option>

											<option>Rio Grande do Norte

											(RN)</option>

											<option>Rio Grande do Sul

											(RS)</option>

											<option>Rondônia

											(RO)</option>

											<option>Roraima

											(RR)</option>

											<option>Santa Catarina

											(SC)</option>

											<option>São Paulo

											(SP)</option>

											<option>Sergipe

											(SE)</option>

											<option>Tocantins

											(TO)</option>)</option>

											<option>Distrito Federal

											(DF)</option>
										</select>
									</div>
									<div class="col-md-6 mt-md-0 mt-4">
										<label>
											<i class="fa fa-id-card-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Mulher Provedora de Família<i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<select class="form-control form-control-lg" name="pcd" id="pcd">
											<option>Escolha a quantidade de Dependentes</option>
											<option>Não tenho Dependentes</option>
										  	<option>01 dependente</option>
										  	<option>02 dependente</option>
										  	<option>03 dependente</option>
										  	<option>04 dependente</option>
										  	<option>05 dependente</option>
										</select>
									</div>
								</div>
							</div>
							     <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Próximo</button>
				            </div>
				        </div>
				    </div>
				    <div class="row setup-content" id="step-2">
				        <div class="col-xs-12">
				            <div class="col-md-12">
				                <h3  style="font-size:22px"><i class="fa fa-users" aria-hidden="true" style="color:#008993"></i></i><strong style="color:#8f181a">Dependentes</strong></h3>
				       			 </br>
				       			<div class="col-md-13">
										<label>
											<i class="fa fa-user-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Nome completo :<i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
											<input onfocus="" class="form-control" type="text" name='nome' id='nome' placeholder="Ex: Carvalho" minlength="6" >
										
								</div>
								</br>
				       			<div class="form-group">
								<div class="row">
								
									<div class="col-md-6">
										<label>
											<i class="fa fa-id-card-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> CPF (somente números) <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<input onfocus="" class="form-control" name='cpf' id='cpf' type="text" >
									</div>

									<div class="col-md-6">
										<label>
											<i class="fa fa-id-card-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Grau de Parentesco<i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<select class="form-control form-control-lg" name="pcd" id="pcd">
											<option>Escolha o Grau</option>
										  	<option>Irmão(ã)</option>
										  	<option>Filho(a)</option>
										  	<option>Sobrinho(a)</option>
										</select>
									</div>
								</div>
							</div>	
							</br>
							<div>
								 <center><button type="submit" style="height: 35px; width: 140px;background:#008993" id="btn" class="btn"> <p style="font-family:inherit;font-size:14px;color:orange"><strong>ADICIONAR</strong></p></button></center>
							</div>
								</br></br>
								<div class="col-md-13">
										<table class="table" style="color:#008993">
										  <thead>
										    <tr>
										      <th scope="col">#</th>
										      <th scope="col">Grau de Parentesco</th>
										      <th scope="col">CPF</th>
										       <th scope="col">Nome Completo</th>
										    </tr>
										  </thead>
										  <tbody>
										    <tr>
										      <th scope="row">1</th>
										      <td>Filho</td>
										      <td>000.000.000-00</td>
										      <td>João Ribeiro Batista Filho Neto</td>
										    </tr>
										  </tbody>
										</table>
								</div>
								</br></br></br></br></br></br></br></br>
				                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Próximo</button>
				            </div>
				        </div>
				    </div>
				    <div class="row setup-content" id="step-3">
				        <div class="col-xs-12">
				            <div class="col-md-12">
				                <h3  style="font-size:22px"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#008993"></i></i><strong style="color:#8f181a"> Sobre Você</strong></h3>
				       			 </br>
				       			 <div class="col-md-13">
										<label>
											<i class="fa fa-comment-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Conte-nos um pouco sobre você <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<textarea placeholder="Escreva de forma resumida seu histórico na área da cultura e as funções que desempenha, além de suas principais experiências. Em caso de relato oral, insira links com o breve histórico de atuação, preferencialmente do Youtube ou Vimeo (se privado, deve disponibilizar a chave de acesso)." name="sobre" class="form-control" required="required"></textarea>
								</div>
								</br>
				       			<div class="form-group">
									<div class="row">
					       			 	<div class="col-md-6">
											<div class="dropdown">
												<label>
													<i class="fa fa-newspaper-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Segmento Cultural de Atuação Principal <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i> 
												</label>
											  <select class="form-control form-control-lg" name="segmento_cultural">
											  	  	<option>Escolha o Segmento</option>  
											  	  	<option>Patrimônio Cultural</option>  
													<option>Artes Circenses</option>
													<option>Artes da Dança</option>
													<option>Artes do Teatro</option>
													<option>Artes Visuais</option>
													<option>Artesanato</option>
													<option>Audiovisual</option>
													<option>Cultura Popular</option>
													<option>Design</option>
													<option>Fotografia</option>
													<option>Gastronomia</option>
													<option>Literatura</option>
													<option>Moda</option>
													<option>Música</option>
													<option>Ópera</option>
													<option>Outro segmento cultural</option>

												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="dropdown">
												<label>
													<i class="fa fa-newspaper-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Função de Atuação Cultural <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i> 
												</label>
											  <select class="form-control form-control-lg" name="funcao_cultural">
											  	  	<option>Escolha a Função</option>  
											  	  	<option>Artista</option>  
													<option>Produtor(a)</option>
													<option>Gestor(a)</option>
													<option>Artesão(ã)</option>
													<option>Brincante</option>
													<option>Criador(a)</option>
													<option>Consultor(a)</option>
													<option>Curador(a)</option>
													<option>Técnico(a)</option>
													<option>Outros</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								</br>
										<div class="col-md-13">
											<label>
												<i class="fa fa-globe fa-1x" aria-hidden="true" style="font-size:24px;color:#008993"></i></i> Web Site 
											</label>
											<input class="form-control" type="text" name='webSite' placeholder="Url">
										</div>

										</br>
								<div class="form-group">
									<div class="row">
										<div class="col-md-6">
											<label>
												<i class="fa fa-youtube-play fa-1x" aria-hidden="true" style="font-size:24px;color:#008993"></i></i> YouTube
											</label>
											<input class="form-control" type="text" name='youtube' placeholder="Link do perfil">
										</div>
										</br>
										<div class="col-md-6">
											<label>
												<i class="fa fa-facebook-square fa-1x" aria-hidden="true" style="font-size:24px;color:#008993"></i></i> Facebook
											</label>
											<input class="form-control" type="text" name='facebook' placeholder="Link do perfil">
										</div>
										</br>
									</div>
				        		</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-6">
											<label>
												<i class="fa fa-instagram" aria-hidden="true" style="font-size:24px;color:#008993"></i> Instagram
											</label>
												<input class="form-control" type="text" name='instagram'placeholder="Ex: Funcap Sergipe">
										</div>
										</br>
										<div class="col-md-6">
											<label>
												<i class="fa fa-twitter" aria-hidden="true" style="font-size:24px;color:#008993"></i> Twitter
											</label>
												<input class="form-control" type="text" name='twitter'placeholder="Ex: funcap_se">
										</div>
									</div>
								</div>			
										
								</br></br>
				                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Próximo</button>
				            </div>
				        </div>
				    </div>
				    <div class="row setup-content" id="step-4">
				        <div class="col-xs-12">
				            <div class="col-md-12">
				                <h3  style="font-size:22px"><i class="fa fa-map-o" aria-hidden="true" style="color:#008993"></i><strong style="color:#8f181a"> Endereço</strong></h3>
				        		</br>
				                <div class="form-group">
								<div class="row">
									
									<div class="col-md-6">
										<label>
											<i class="fa fa-whatsapp" aria-hidden="true" style="font-size:24px;color:#008993"></i> DDD e Telefone (Principal) <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<input class="form-control" type="text" placeholder="Ex: 79 9-9999-9999" id="telefone" name="telefone">
									</div>

									<div class="col-md-6">
										<label>
											<i class="fa fa-mobile" aria-hidden="true" style="font-size:24px;color:#008993"></i> DDD e Telefone (Outro)
										</label>
										<input class="form-control" type="text" placeholder="Ex: 79 9-9999-9999" name="telefone2" id="telefone2">
									</div>
							
								</div>
							</div>

									<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>
											<i class="fa fa-envelope-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> E-mail <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<input onfocus="" class="form-control" name='email' id='email' type="e-mail" placeholder="Ex: nome@gmail.com">
										
									</div>
									<div class="col-md-6">
										<label>
											<i class="fa fa-envelope-o" aria-hidden="true" style="font-size:24px;color:#008993"></i> Repita o E-mail <i class="fa fa-asterisk" style="font-size:10px;color:red" aria-hidden="true"></i>
										</label>
										<input onfocus="" class="form-control" name='repete_email' id='repete_email' type="e-mail" placeholder="Ex: nome@gmail.com">
										
									</div>
								</div>
							</div>

				                <div class="form-group">
									<div class="row">
										
										<div class="col-md-4">
											<label for="cep">CEP</label>
											<input type="text" class="form-control" maxlength="9" name="cep" id="cep" placeholder="CEP"/>
										</div>
										
										<div class="col-md-8">
											<label for="rua">Logradouro</label>
											<input type="text" class="form-control" name="rua" id="logradouro" placeholder="Rua" />
										</div>
		
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										
										<div class="col-md-5">
											<label for="rua">Bairro</label>
											<input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" />
										</div>
										
										<div class="col-md-5">
											<label for="cidade">Cidade</label>
											<input type="text" class="form-control" name="cidade" id="localidade" placeholder="Cidade" />
										</div>

										<div class="col-md-2">
											<label for="uf">Estado (UF)</label>
									<input type="text" class="form-control" name="uf" id="uf" placeholder="Estado" />
										</div>
		
									</div>
								</div>
								</br></br></br></br>
				                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Próximo</button>
				            </div>
				        </div>
				    </div>
				    <div class="row setup-content" id="step-5">
				        <div class="col-xs-12">
				            <div class="col-md-12">
				               <h3  style="font-size:22px"><i class="fa fa-university" aria-hidden="true" style="color:#008993"></i><strong style="color:#8f181a"> Conta Bancária</strong></h3>
				        		</br>
				             	<div class="form-group">
									<div class="row">
										<div class="col-md-6">
													<div class="dropdown">
														<label>
															Escolha o Banco 
														</label>
													  <select class="form-control form-control-lg" name="nome_banco">
													  	 <option>Escolha o banco</option>
													  	 <option>047 - Banco do Estado de Sergipe S.A.</option>
													  	 <option>001 – Banco do Brasil S.A.</option>
														 <option>104 – Caixa Econômica Federal</option>
														 <option>341 – Banco Itaú S.A.</option>
														 <option>033 – Banco Santander (Brasil) S.A.</option>
														 <option>237 – Banco Bradesco S.A.</option>
														 <option>269 - Banco HSBC S.A.</option>
														 <option>318 - Banco BMG S.A.</option> 
														 <option>004 - Banco do Nordeste do Brasil S.A.</option>
														 <option>007 - BNDES</option>
														 <option>290 - Pagseguro Internet S.A.</option>
														 <option>745 – Banco Citibank S.A.</option>
														 <option>335 - Banco Digio S.A.</option>
														 <option>336 - Banco C6 S.A.</option>
														 <option>336 - Banco Sanfra S.A.</option>
														 <option>218 - Banco BS2 S.A.</option>
														 <option>212 - Banco Original S.A.</option>
														 <option>077 - Banco Inter S.A.</option>
														 <option>260 - NU Pagamentos S.A.</option>
														</select>
													</div>
										</div>
										<div class="col-md-6">
													<div class="dropdown">
														<label>
															Tipo da conta 
														</label>
													  <select class="form-control form-control-lg" name="tipo">
													  	 <option>Escolha o tipo</option>
													  	 <option>Conta Poupança</option>
													  	 <option>Conta Corrente</option>
													  </select>
													</div>
										</div>
									</div>
								</div>
								</br>
								<div class="form-group">
									<div class="row">
										
										<div class="col-md-6">
											<label>
												Agência
											</label>
											<input onfocus="" class="form-control" type="text" maxlength="6" placeholder="Ex: 0000" id="agencia" name="agencia">
										</div>
										
										<div class="col-md-6">
											<label>
												Conta com dígito
											</label>
											<input onfocus="" class="form-control" type="text" maxlength="10" placeholder="Ex: 00000-0" id="conta" name="conta" >
										</div>			
									</div>
								</div>
						</br>
						</br>
				                
				                </br></br></br></br>
				                <button class="btn btn-success btn-lg pull-right" type="submit">Finalizar!</button>
				            </div>
				        </div>
				    </div>
				</form>
				</div>
			<!-- wizard form-->
		</div>
	</div>
	<!-- //contact-->
</br></br></br></br></br></br>
<script type="text/javascript" src="../js/cep.js"></script>
<!-- copyright bottom -->
		<?php include('template/footer.php');?>
	<!-- //copyright bottom -->


</body>
</html>