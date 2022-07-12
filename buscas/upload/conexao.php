<?php

$nome = "%".trim($_GET['nome_socio'])."%";

$dbh = new PDO('mysql:host=localhost;dbname=sbcpa_sipa_02', 'sbcpa_user_sipa', '@*SbCpA102030##');

$sth = $dbh->prepare('SELECT * FROM tbsocio WHERE NoSocio LIKE :nome ORDER BY NoSocio asc');
$sth->bindParam(':nome', $nome,PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

