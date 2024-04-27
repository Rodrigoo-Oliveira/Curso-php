<?php

$conteudoJson = file_get_contents('filmes.json');
$filme = json_decode($conteudoJson, true);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Filme inserido</title>
</head>
<body>
    <h1><?= $filme['nome']; ?></h1>
    <dl>
        <dt>Ano de lançamento</dt>
        <dd><?= $filme['anoLancamento']; ?></dd>

        <dt>Nota</dt>
        <dd><?= $filme['nota']; ?></dd>

        <dt>Gênero</dt>
        <dd><?= $filme['genero']; ?></dd>
    </dl>
</body>
</html>

