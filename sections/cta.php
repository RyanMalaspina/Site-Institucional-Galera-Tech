<?php
$cta = fetch_single($pdo, 'cta') ?? [];
?>

<section class="container section-padding" id="contato">
    <div class="cta-final">
        <span class="tag bg-white"><?= e($cta['tag'] ?? 'Faça parte') ?></span>
        <h2 class="fw-bold mt-3"><?= e($cta['titulo'] ?? 'Ajude jovens a descobrirem um futuro na tecnologia') ?></h2>
        <p class="mt-3 mb-4"><?= e($cta['descricao'] ?? 'Participe como aluno, padrinho, mentor, empresa apoiadora ou parceiro institucional.') ?></p>

        <div class="d-flex justify-content-center flex-wrap gap-3">
            <?php if (!empty($cta['texto_botao_1'])): ?>
                <a href="<?= e($cta['link_botao_1']) ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold"><?= e($cta['texto_botao_1']) ?></a>
            <?php endif; ?>

            <?php if (!empty($cta['texto_botao_2'])): ?>
                <a href="<?= e($cta['link_botao_2']) ?>" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold"><?= e($cta['texto_botao_2']) ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
