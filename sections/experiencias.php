<?php
$experiencias = fetch_all_active($pdo, 'experiencias');
$destaque = null;
$cards = [];

foreach ($experiencias as $exp) {
    if ((int) $exp['destaque'] === 1 && $destaque === null) {
        $destaque = $exp;
    } else {
        $cards[] = $exp;
    }
}

$destaque = $destaque ?? ($experiencias[0] ?? null);
?>

<section class="experience-section section-padding" id="experiencias">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-7">
                <span class="tag">Experiências</span>
                <h2 class="section-title">Vivências que aproximam os jovens do mercado</h2>
                <p class="section-text">
                    Além das aulas, o Galera Tech promove encontros, visitas, conversas e atividades que ampliam a visão dos participantes sobre carreira, tecnologia e futuro.
                </p>
            </div>
        </div>

        <div class="row g-4 align-items-stretch">
            <?php if ($destaque): ?>
                <div class="col-lg-6">
                    <div class="experience-feature">
                        <img src="<?= e(upload_path($destaque['imagem'], 'assets/img/placeholder.svg')) ?>" alt="<?= e($destaque['titulo']) ?>">
                        <div class="experience-feature-content">
                            <h3 class="fw-bold"><?= e($destaque['titulo']) ?></h3>
                            <p class="mb-0"><?= e($destaque['descricao']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-6">
                <div class="row g-4">
                    <?php foreach (array_slice($cards, 0, 4) as $item): ?>
                        <div class="col-md-6">
                            <div class="experience-card">
                                <div class="experience-icon">
                                    <i class="bi <?= e($item['icone']) ?>"></i>
                                </div>
                                <h5><?= e($item['titulo']) ?></h5>
                                <p><?= e($item['descricao']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</section>
