<?php
header('Content-type: text/html; charset=utf-8');
if (!isset($_GET['nome_canil'])) {
    header("Location: index.php");
    exit;
}

$nome = "%".trim($_GET['nome_canil'])."%";

$dbh = new PDO('mysql:host=localhost;dbname=sbcpa_sipa_02', 'sbcpa_user_sipa', '@*SbCpA102030##');
$sth = $dbh->prepare('SELECT * FROM tbcanil WHERE NoCanil LIKE :nome ORDER BY NoCanil asc');
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
        <?php echo $Resultado['NoCanil']; ?><br>
        <?php echo "Propietario do canil: ", $Resultado['NoProprietarioCanil']; ?>
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

