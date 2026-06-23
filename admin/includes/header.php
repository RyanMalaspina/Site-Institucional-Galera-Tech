<?php
if(!isset($pageTítle)){
    $pageTítle = 'Painel Galera Tech';
}
?>
<!doctype html>
<html lang="pt-br" data-bs-theme="light">
    <head>
        <title><?= ($pageTítle) ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
        <link href="../assets/css/admin.css" rel="stylesheet">
        <style>

        </style>
    </head>

    <body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php"><img src="includes/img/logo-galera-tech.png" alt="Logo galera tech" width="13%"></a>
            <div class="ms-auto">
                <a href="../index.php" target="_blank" class="btn btn-outline-light">Ver Site</a>
                <a href="logout.php" class="btn btn-outline-danger">Sair</a>
            </div>
        </div>
    </nav>
    <main class="container py-4">