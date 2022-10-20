<?php 
$cont = 2;
while($cont < 10000){
	echo "INSERT INTO usuarios (nome, email) VALUES
	('Cesar$cont', 'cesar$cont@celke.com.br'),
	('Jessica$cont', 'jessica$cont@celke.com.br'),
	('Kelly$cont', 'kelly$cont@celke.com.br'); <br>";

	$cont = $cont + 1;
}