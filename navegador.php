<?php
session_start();
session_regenerate_id();

$conta = session_id();
$lista_navegador = array('Opera','Firefox','Safari','Chrome','IE','UC Browser','Internet Explorer');
$lista_despositivo = array('Iphone','Ipad','Android','WebOS','BlackBerry','Ipod','Symbian','Windows Phone');
$navegador_usado = $_SERVER['HTTP_USER_AGENT'];
$ip_usado = $_SERVER['REMOTE_ADDR'];
$nome_usado = $_SERVER['REMOTE_PORT'];

foreach ($lista_navegador as $valor_verificar){
	if (strrpos($navegador_usado, $valor_verificar)) {
		# code...
		$navegador = $valor_verificar;
	}
}
foreach ($lista_despositivo as $valor_verificar){
	if (strrpos($navegador_usado, $valor_verificar)) {
		# code...
		$despositivo = "Mobile";
	}else{
		$despositivo = "Computador";
	}

}


echo "O IP é: " . $ip_usado ."<br>";
echo "O navegador usado é: " . $navegador."<br>";
echo "O ID da conta é: " . $conta."<br>";
echo "Você esta usando um: " . $despositivo."<br>";
echo "Você esta usando a porta ". $nome_usado . "<br>";


