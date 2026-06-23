<?php
$indicadores = fetch_all_active($pdo, 'indicadores');
?>

<section class="container impact-wrapper">
    <div class="row g-4">
        <?php foreach ($indicadores as $item): ?>
            <div class="col-md-4">
                <div class="impact-card">
                    <i class="bi <?= e($item['icone']) ?>"></i>
                    <h3><?= e($item['numero']) ?></h3>
                    <p class="mb-0"><?= e($item['descricao']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
