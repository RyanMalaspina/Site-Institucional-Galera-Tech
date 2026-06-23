<?php
declare(strict_types=1);

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/admin_helpers.php';

require_admin();

$pageTitle = 'Dashboard - Galera Tech';
require_once __DIR__ . '/includes/header.php';

$cards = [
    ['Hero', 'Slides principais do carrossel', 'manage.php?type=hero'],
    ['Indicadores', 'Números de impacto', 'manage.php?type=indicadores'],
    ['Sobre', 'Texto institucional', 'single.php?type=sobre'],
    ['Jornada', 'Etapas da experiência', 'manage.php?type=jornada'],
    ['Aprendizado', 'Cards de competências', 'manage.php?type=aprendizado'],
    ['Para quem é', 'Públicos da landing page', 'manage.php?type=publico'],
    ['Experiências', 'Vivências, visitas e networking', 'manage.php?type=experiencias'],
    ['Depoimentos', 'Falas de alunos e parceiros', 'manage.php?type=depoimentos'],
    ['Instagram', 'Posts destacados', 'manage.php?type=instagram'],
    ['Parceiros', 'Carrossel e mini logos', 'manage.php?type=parceiros'],
    ['CTA', 'Chamada final', 'single.php?type=cta'],
    ['Configurações', 'Logo, contatos e links', 'single.php?type=config'],
];
?>

<h1 class="h3 mb-4">Painel administrativo</h1>

<div class="row g-4">
    <?php foreach ($cards as $card): ?>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <h2 class="h5"><?= e($card[0]) ?></h2>
                    <p class="text-muted"><?= e($card[1]) ?></p>
                    <a href="<?= e($card[2]) ?>" class="btn btn-primary btn-sm">Gerenciar</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
