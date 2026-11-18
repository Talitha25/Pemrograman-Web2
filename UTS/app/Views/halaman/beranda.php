<section class="hero-section">
    <div class="hero-orb orb-a"></div><div class="hero-orb orb-b"></div>
    <div class="hero-copy reveal">
        <span class="eyebrow"><span class="status-dot"></span> PORTOFOLIO MAHASISWA</span>
        <p class="hello">Halo, saya <span class="wave">👋</span></p>
        <h1><?= esc($nama) ?></h1>
        <h2>Mahasiswa <span class="gradient-text"><?= esc($programStudi) ?></span></h2>
        <p class="hero-description">Selamat datang di ruang digital saya. Di sini kamu bisa mengenal profil, keahlian, dan beberapa proyek yang saya kembangkan selama belajar teknologi informasi.</p>
        <div class="hero-actions">
            <a class="btn-primary" href="<?= site_url('portofolio') ?>">Jelajahi Portofolio <span>↗</span></a>
            <a class="btn-outline" href="<?= site_url('profil') ?>">Kenali Saya</a>
        </div>
        <!-- <div class="social-row"><span>Temukan saya</span><a href="<?= site_url('tentang') ?>" aria-label="Informasi kontak">in</a><a href="<?= site_url('tentang') ?>" aria-label="Informasi lainnya">◎</a><a href="<?= site_url('tentang') ?>" aria-label="Kontak">✉</a></div> -->
    </div>
    <div class="hero-visual reveal">
        <div class="photo-ring"></div>
        <div class="photo-frame"><img src="<?= base_url('aset/foto1.jpg') ?>" alt="foto profil"></div>
        <div class="floating-card card-top"><span class="float-icon">✧</span><div><b>Creative mind</b><small>Always learning</small></div></div>
        <div class="floating-card card-bottom"><span class="float-icon">⌘</span><div><b>Information Systems</b><small>Student & creator</small></div></div>
        <span class="decor-dot dot-one"></span><span class="decor-dot dot-two"></span>
    </div>
</section>

<section class="intro-strip reveal">
    <div><strong>01</strong><span>Kenali profil dan perjalanan saya</span></div>
    <div><strong>02</strong><span>Lihat kemampuan yang sedang dikembangkan</span></div>
    <div><strong>03</strong><span>Jelajahi proyek dan hasil karya</span></div>
</section>

<section class="section-block reveal">
    <div class="section-heading"><span class="eyebrow">WHAT I DO</span><h2>Hal yang saya <span class="gradient-text">pelajari</span></h2><p>Beberapa bidang yang saya eksplorasi dalam dunia teknologi.</p></div>
    <div class="mini-skills">
        <article><span>⌨</span><h3>Web Development</h3><p>Membangun halaman web dengan HTML, CSS, PHP, dan framework.</p></article>
        <article><span>✦</span><h3>UI / UX Design</h3><p>Menyusun tampilan antarmuka yang rapi, sederhana, dan mudah digunakan.</p></article>
        <article><span>▤</span><h3>Database</h3><p>Mempelajari pengelolaan data menggunakan MySQL.</p></article>
    </div>
</section>
