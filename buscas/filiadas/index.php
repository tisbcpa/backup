<!DOCTYPE html>
<html>
<head>
    <title>Filiadas</title>
</head>
<body>
<h1>Filiadas</h2>
</body>
</html>


<?php
$servidor = "localhost" ;
$usuario = "sbcpa_user_sipa" ;
$senha = "@*SbCpA102030##" ;
$banco = "sbcpa_sipa_02" ;

$conexao=mysqli_connect($servidor, $usuario, $senha, $banco);
if($conexao)

    $sql = mysqli_query($conexao, "SELECT * FROM tbuf order by NOUF asc") or die(
    mysqli_error($conexao) //caso haja um erro na consulta
    );

while($aux = mysqli_fetch_assoc($sql)) {
    echo "<hr>";
    echo "Nome:".$aux['NOUF']."<br />";
    echo "Sigla:".$aux['SGUF']."<br />";
}
?>

