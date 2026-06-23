<?php
// Código PHP para o login
// Ativa se receber o botão
// declare(strict_type=1);

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/../includes/helpers.php';

if(admin_logged_in()){
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare('SELECT * FROM usuarios_admin WHERE email = ? AND ativo = 1 LIMIT 1');
    $stmt->execute([$email]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($senha, $admin['senha'])){
        $_SESSION['admin_id'] = $admin ['id'];
        $_SESSION['admin_nome'] = $admin ['nome'];
        header('location: dashboard.php');
        exit;
    }
    $error = 'E-mail ou senha inválido.';
}
?>

<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <title>Painel Galera Tech</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <style>
        h1 {
                text-shadow: 4px 4px 5px rgba(0, 0, 0, 0.1);
            }

        .bg-fundo {
            background-color: #8fbcff;
        }

        p{
            text-shadow: 4px 4px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-fundo d-flex py-5 min-vh-100 align-items-center">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-5 fw-bold mb-3 text-primary">Bem vindo ao Painel</h1>
                <p class="fs-5 text-white-50">Galera Tech criado por Ryan Oliveira Malaspina</p>
            </div>
        </div>

        <!-- coluna da direita -->
        <div class="col-lg-6 ms-auto">
            <!-- Efeito card ! -->
            <div class="card border-0 shadow-lg p-4 rounded-4 bg-white text-dark">
                <h2 class="fw-bold mb-1">Entrar</h2>
                <form method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha">
                    </div>
                    
                    <?php if($error) : ?>
                        <div class="alert alert-danger"><?= ($error) ?></div>
                        <?php endif; ?>    
                    <button class="btn btn-primary w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>