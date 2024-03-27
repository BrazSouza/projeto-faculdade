<?php
$banco = 'banco_pet';
$usuario = 'root';
$senha = '';
$servidor = 'localhost';

date_default_timezone_set('America/Sao_Paulo');

try {
	// Tenta estabelecer uma conexão com o banco de dados usando as informações fornecidas.
	// Define o modo de tratamento de erros como exceção, o que significa que se ocorrer um erro, ele será capturado como uma exceção.
	// Se a conexão for bem-sucedida, imprime uma mensagem "Conectado com sucesso!".
	$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	// Se ocorrer um erro ao tentar conectar ao banco de dados, imprime uma mensagem de erro específica indicando o motivo do erro.
	// O script é interrompido após a impressão da mensagem de erro.
	die("Conexão falhou: " . $e->getMessage());
}
