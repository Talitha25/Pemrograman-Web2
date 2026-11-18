<section class="sub-hero reveal"><span class="eyebrow">GET TO KNOW ME</span>
<h1>Profil <span class="gradient-text">Saya</span></h1>
<p>Sedikit cerita tentang diri dan perjalanan akademik saya.</p>
</section>
<section class="profile-layout reveal">
    <div class="profile-photo"><img src="<?= base_url('aset/foto.jpg') ?>" alt="foto profil"></div>
    <div class="profile-info">
        <span class="eyebrow">HELLO THERE!</span><h2><?= esc($nama) ?></h2>
        <p class="muted">Mahasiswa <?= esc($programStudi) ?> yang tertarik pada pengembangan website, desain antarmuka, dan teknologi informasi.</p>
        <div class="info-list">
            <div><span>Nama</span><b><?= esc($nama) ?></b></div>
            <div><span>Program Studi</span><b><?= esc($programStudi) ?></b></div>
            <div><span>Perguruan Tinggi</span><b><?= esc($kampus) ?></b></div>
        </div>
        <a class="btn-primary" href="<?= site_url('portofolio') ?>">Lihat Karya <span>↗</span></a>
    </div>
</section>