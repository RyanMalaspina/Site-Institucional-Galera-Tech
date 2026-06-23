<?php
$publicos = fetch_all_active($pdo, 'publico');
?>

<section class="container section-padding">
    <div class="audience-box">
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <span class="tag bg-white">Para quem é</span>
                <h2 class="fw-bold mt-3">Uma oportunidade para jovens que querem começar</h2>
                <p class="mt-3">
                    O Galera Tech é voltado para estudantes que desejam conhecer tecnologia, desenvolver habilidades e se aproximar do mercado.
                </p>
            </div>

            <div class="col-lg-7">
                <div class="row g-3">
                    <?php foreach ($publicos as $item): ?>
                        <div class="col-md-6">
                            <div class="audience-item">
                                <strong><?= e($item['titulo']) ?></strong>
                                <p class="mb-0 small"><?= e($item['descricao']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
