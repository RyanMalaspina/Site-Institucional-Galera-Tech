<?php
$slides = fetch_all_active($pdo, 'hero_slides');
?>

<section class="hero-carousel" id="inicio">
    <div id="carouselHeroGaleraTech" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4800">

        <?php if (count($slides) > 1): ?>
            <div class="carousel-indicators">
                <?php foreach ($slides as $index => $slide): ?>
                    <button type="button" data-bs-target="#carouselHeroGaleraTech" data-bs-slide-to="<?= $index ?>"
                        class="<?= $index === 0 ? 'active' : '' ?>" aria-label="Slide <?= $index + 1 ?>"></button>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="carousel-inner">
            <?php foreach ($slides as $index => $slide): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <div class="hero-slide" style="background-image: url('<?= e(upload_path($slide['imagem'])) ?>');">
                        <div class="container">
                            <div class="hero-content">
                                <span class="hero-badge"><?= e($slide['tag']) ?></span>
                                <h1><?= $slide['titulo_html'] ?></h1>
                                <p><?= e($slide['subtitulo']) ?></p>

                                <div class="d-flex flex-wrap gap-3 mt-4">
                                    <?php if (!empty($slide['texto_botao_1'])): ?>
                                        <a href="<?= e($slide['link_botao_1']) ?>" class="btn btn-gt"><?= e($slide['texto_botao_1']) ?></a>
                                    <?php endif; ?>

                                    <?php if (!empty($slide['texto_botao_2'])): ?>
                                        <a href="<?= e($slide['link_botao_2']) ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold"><?= e($slide['texto_botao_2']) ?></a>
                                    <?php endif; ?>
                                </div>

                                <?php if (!empty($slide['card_titulo'])): ?>
                                    <div class="hero-info-card">
                                        <strong><?= e($slide['card_titulo']) ?></strong>
                                        <p class="mb-0 small"><?= e($slide['card_texto']) ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (count($slides) > 1): ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeroGaleraTech" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselHeroGaleraTech" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        <?php endif; ?>
    </div>
</section>
