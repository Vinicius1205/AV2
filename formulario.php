<?php
	$pergunta1=$_POST['pergunta1'];
	$pergunta2=$_POST['pergunta2'];
	$opcao1 =$_POST['opcao1'];
	$opcao2=$_POST['opcao2'];
	$opcao3=$_POST['opcao3'];

	$arquivo=fopen('respostas.txt','a');
	fwrite($arquivo,"Pergunta:$pergunta1\n");
	fwrite($arquivo,"Pergunta:$pergunta2\n");
	fwrite($arquivo,"Opções:\n");
	fwrite($arquivo,"1.$opcao1\n");
	fwrite($arquivo,"2.$opcao2\n");
	fwrite($arquivo,"3.$opcao3\n\n\n");
	fclose($arquivo);

?>