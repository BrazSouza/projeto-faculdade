<?php
include_once('config.php');


if (isset($_POST['submit'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$genero = $_POST['genero'];
	$data_nascimento = $_POST['data_nascimento'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];

	$result = $conexao->query("INSERT INTO usuarios (nome, email, telefone, sexo, data_nasc, endereco, cidade, estado) VALUES ('$nome', '$email', '$telefone', '$genero', '$data_nascimento', '$endereco', '$cidade', '$estado')");
}

?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Formulário</title>
	<link rel="stylesheet" href="./css/form.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
	<div class="box-form">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-md col-lg-4">
					<form class="form-cadastro" action="form.php" method="POST">
						<fieldset>
							<legend class="legend text-center mb-4"><b>Formulário do Pet</b></legend>
							<div class="input">
								<input class="form-control input-user" type="text" id="nome" name="nome" required />
								<label class="form-label label-input" for="nome">Nome Completo do Pet</label>
							</div>
							<div class="input">
								<input class="form-control input-user" type="email" id="email" name="email" required />
								<label class="form-label label-input" for="email">Email do Cuidador</label>
							</div>
							<div class="input">
								<input class="form-control input-user" type="number" id="telefone" name="telefone" required />
								<label class="form-label label-input" for="telefone">Telefone do Cuidador</label>
							</div>
							<p class="sexo">Sexo:</p>
							<div>
								<input type="radio" id="masculino" name="genero" value="masculino" required />
								<label class="sexo" for="masculino">Macho</label>
							</div>
							<div class="mb-1">
								<input type="radio" id="masculino" name="genero" value="feminino" required />
								<label class="sexo" for="masculino">Fêmia</label>
							</div>
							<div>
								<label class="data mb-3" for="data_data_nascimento"><b>Data de nascimento:</b></label>
								<input class="mb-3" type="date" id="data_nascimento" name="data_nascimento" required />
								<div class="input">
									<input class="form-control input-user" type="text" id="endereco" name="endereco" required />
									<label class="form-label label-input" for="endereco">Cidade</label>
								</div>
								<div class="input">
									<input class="form-control input-user" type="text" id="cidade" name="cidade" required />
									<label class="form-label label-input" for="cidade">Endereço</label>
								</div>
								<div class="input">
									<input class="form-control input-user" type="text" id="estado" name="estado" required />
									<label class="form-label label-input" for="estado">Estado</label>
								</div>
							</div>
							<input class="btn btn-enviar" type="submit" id="submit" name="submit" value="Enviar" />
							<!-- <button class="btn btn-enviar" id="submit" type="submit">Enviar</button> -->
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>