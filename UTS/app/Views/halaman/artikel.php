<section class="sub-hero reveal"><span class="eyebrow">MY TOOLKIT</span>
<h1>Keahlian & <span class="gradient-text">Teknologi</span></h1>
<p>Tools dan teknologi yang pernah saya pelajari dalam latihan maupun proyek perkuliahan.</p>
</section>
<div class="skill-grid">
<?php
$ikon = ['HTML' => '5', 'CSS' => '✦', 'PHP' => 'php', 'Bootstrap' => 'B', 'CodeIgniter 4' => 'CI', 'MySQL' => '▱', 'Figma' => 'F'];
foreach ($artikel as $index => $item):
?>
    <article class="skill-card reveal" style="--delay: <?= $index * 70 ?>ms">
        <span class="skill-icon"><?= esc($ikon[$item] ?? '✧') ?></span>
        <h3><?= esc($item) ?></h3>
        <div class="skill-line"><span style="width: <?= [88,82,76,80,70,75,78][$index] ?>%"></span></div>
        <small>Terus dikembangkan</small>
    </article>
<?php endforeach ?>
</div>
<p class="catatan">Persentase visual hanya ilustrasi tingkat familiaritas, bukan hasil pengukuran kemampuan.</p>