<?php 

switch (@$Url[0]) {
	case 'contato':
		require_once('views/include/codigos-php-paginas/cdg_contato.php');
		break;			

	default:
		// echo 'Erro ao incluir p�gina de controle!';
		break;
}