<?php
$depoimentos = fetch_all_active($pdo, 'depoimentos', 'destaque DESC, RAND()');
$principal = $depoimentos[0] ?? null;
$laterais = array_slice($depoimentos, 1, 3);
?>

<section class="testimonials-modern section-padding" id="depoimentos">
    <div class="container">
        <div class="text-center mb-5">
            <span class="tag">Depoimentos</span>
            <h2 class="section-title">Histórias que mostram o impacto do Galera Tech</h2>
            <p class="section-text mx-auto" style="max-width: 720px;">
                Alunos, padrinhos, mentores e parceiros compartilham como o projeto transforma trajetórias.
            </p>
        </div>

        <div class="row g-4 align-items-stretch">
            <?php if ($principal): ?>
                <div class="col-lg-7">
                    <div class="main-testimonial">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>

                        <p class="testimonial-text">“<?= e($principal['texto']) ?>”</p>

                        <div class="d-flex align-items-center gap-3 mt-4">
                            <img src="<?= e(upload_path($principal['foto'], 'assets/img/avatar.svg')) ?>" alt="<?= e($principal['nome']) ?>">
                            <div>
                                <h5 class="mb-0"><?= e($principal['nome']) ?></h5>
                                <small><?= e($principal['cargo']) ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-5">
                <?php foreach ($laterais as $item): ?>
                    <div class="side-testimonial mb-4">
                        <p>“<?= e($item['texto']) ?>”</p>
                        <strong><?= e($item['nome']) ?></strong>
                        <small><?= e($item['cargo']) ?></small>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
