<?php
$parceirosCarrossel = [];
$apoiadores = [];

foreach (fetch_all_active($pdo, 'parceiros') as $parceiro) {
    if ((int) $parceiro['destaque_carrossel'] === 1) {
        $parceirosCarrossel[] = $parceiro;
    } else {
        $apoiadores[] = $parceiro;
    }
}

$slidesParceiros = array_chunk($parceirosCarrossel, 6);
?>

<section class="partners-section section-padding" id="padrinhos">
    <div class="container">
        <div class="text-center mb-5">
            <span class="tag">Apoios e parceiros</span>
            <h2 class="section-title">Quem acredita nessa transformação</h2>
            <p class="section-text mx-auto" style="max-width: 740px;">
                O Galera Tech é fortalecido por instituições, empresas e profissionais que apoiam a formação de jovens para o futuro da tecnologia.
            </p>
        </div>

        <div id="carouselParceiros" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2600">
            <div class="carousel-inner">
                <?php foreach ($slidesParceiros as $index => $slide): ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <div class="row g-4 justify-content-center">
                            <?php foreach ($slide as $parceiro): ?>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <a href="<?= e($parceiro['link'] ?: '#') ?>" target="_blank" class="partner-slide-card text-decoration-none">
                                        <img src="<?= e(upload_path($parceiro['logo'], 'assets/img/placeholder.svg')) ?>" alt="<?= e($parceiro['nome']) ?>">
                                        <span><?= e($parceiro['nome']) ?></span>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if (count($slidesParceiros) > 1): ?>
                <button class="carousel-control-prev custom-carousel-arrow" type="button" data-bs-target="#carouselParceiros" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <button class="carousel-control-next custom-carousel-arrow" type="button" data-bs-target="#carouselParceiros" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            <?php endif; ?>
        </div>

        <?php if ($apoiadores): ?>
            <div class="supporters-strip mt-5">
                <p class="text-center mb-4">Também apoiam o Galera Tech</p>

                <div class="supporters-logos">
                    <?php foreach ($apoiadores as $apoio): ?>
                        <a href="<?= e($apoio['link'] ?: '#') ?>" target="_blank">
                            <img src="<?= e(upload_path($apoio['logo'], 'assets/img/placeholder.svg')) ?>" alt="<?= e($apoio['nome']) ?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
