<section class="sub-hero reveal"><span class="eyebrow">SELECTED WORKS</span>
<h1>Portofolio <span class="gradient-text">Saya</span></h1>
<p>Beberapa proyek latihan dan ide yang pernah saya kerjakan.</p>
</section>
<div class="project-grid">
<?php
$cover = ['cover-web', 'cover-agri', 'cover-siakad'];
$symbols = ['⌘', '🌱', '▤'];
foreach ($proyek as $index => $item):
?>
    <article class="project-card reveal" style="--delay: <?= $index * 100 ?>ms">
        <div class="project-cover <?= $cover[$index] ?? 'cover-web' ?>"><span><?= $symbols[$index] ?? '✦' ?></span><small>PROJECT 0<?= $index + 1 ?></small></div>
        <div class="project-content"><span class="project-number">0<?= $index + 1 ?> / FEATURED PROJECT</span>
            <h2><?= esc($item['nama']) ?></h2><p><?= esc($item['deskripsi']) ?></p>
            <span class="tag"><?= esc($item['teknologi']) ?></span>
        </div>
    </article>
<?php endforeach ?>
</div>