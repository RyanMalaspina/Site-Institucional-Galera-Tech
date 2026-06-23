<?php
$config = fetch_single($pdo, 'site_config') ?? [];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($config['titulo_site'] ?? 'Galera Tech - Powered by Apeti') ?></title>
    <meta name="description" content="<?= e($config['descricao_site'] ?? 'Formação gratuita em tecnologia para jovens.') ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= asset('css/style.css') ?>" rel="stylesheet">
</head>

<body>
