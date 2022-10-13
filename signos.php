<?php

$dia = $_GET['dia'];
$mes = $_GET['mes'];
$data = "$mes/$dia ";




// Transformando arquivo XML em Objeto
$xml = simplexml_load_file('signo.xml');

foreach($xml->signo as $signo):
	$inicios = explode('/',$signo->dataInicio);
	$inicio = $inicios[1]."/".$inicios[0];

	$fims = explode('/',$signo->dataFim);
	$fim = $fims[1]."/".$fims[0];
	

	if (strtotime($data)>=strtotime($inicio) && strtotime($data)<=strtotime($fim)){
		echo "<hr size='8'>";
		echo "<div align='center'><body style='background-color:#d6d0c8'><font color='#7700f'><h1>Signo $signo->signoNome<br/></h1></div>";
		echo" <div align='center'><h3>De $signo->dataInicio até $signo->dataFim<br/><br/><br/></h3></div>";
		echo "<h2>Descrição: $signo->descricao</h2>";
		echo "<hr size='8'>";
	

	
	}
	

endforeach;
echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'><h3>Voltar</h3></a>";
?>
