<?php
header('Content-type: text/html; charset=utf-8');
if (!isset($_GET['nome_socio'])) {
    header("Location: index.php");
    exit;
}

$nome = "%".trim($_GET['nome_socio'])."%";

$dbh = new PDO('mysql:host=localhost;dbname=sbcpa_sipa_02', 'sbcpa_user_sipa', '@*SbCpA102030##');

$sth = $dbh->prepare('SELECT * FROM tbsocio WHERE NoSocio LIKE :nome ORDER BY NoSocio asc');
$sth->bindParam(':nome', $nome,PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="PT-BR">
<meta charset="UTF-8"/>
<head>
    <title>Resultado da busca</title>
</head>
<body>
<h2>Resultado da busca</h2>
<?php
header('Content-type: text/html; charset=utf-8');
if (count($resultados)) {
    foreach($resultados as $Resultado) {
        ?>
        <label>
	<?php echo $Resultado['NoSocio']; ?><br>
	<?php echo "Filiada: ", $Resultado['NoCidade']; ?>
	<br><hr>
	</label>
        <?php
    } } else {
    ?>
    <label>Não foram encontrados resultados pelo termo buscado.</label>
<?php
}
?>
</body>
</html>
