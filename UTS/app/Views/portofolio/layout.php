<?php
/**
 * @var string $judul
 * @var string $nama
 * @var string $halamanAktif
 * @var string $konten
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#171827">
    <title><?= esc($judul) ?> | Portofolio <?= esc($nama) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('aset/portofolio.css') ?>">
</head>
<body>
<div class="page-glow glow-one"></div>
<div class="page-glow glow-two"></div>
<header class="navbar">
    <a class="brand" href="<?= site_url('/') ?>">Talitha<span class="brand-light">Portofolio</span></a>
    <button class="menu-toggle" id="menuToggle" aria-label="Buka menu">☰</button>
    <nav id="mainNav">
        <a class="<?= $halamanAktif === 'beranda' ? 'aktif' : '' ?>" href="<?= site_url('/') ?>">Beranda</a>
        <a class="<?= $halamanAktif === 'profil' ? 'aktif' : '' ?>" href="<?= site_url('profil') ?>">Profil</a>
        <a class="<?= $halamanAktif === 'artikel' ? 'aktif' : '' ?>" href="<?= site_url('artikel') ?>">Keahlian</a>
        <a class="<?= $halamanAktif === 'portofolio' ? 'aktif' : '' ?>" href="<?= site_url('portofolio') ?>">Portofolio</a>
        <a class="<?= $halamanAktif === 'tentang' ? 'aktif' : '' ?>" href="<?= site_url('tentang') ?>">Tentang</a>
    </nav>
    <a class="nav-contact" href="<?= site_url('tentang') ?>">Hubungi Saya <span>↗</span></a>
</header>
<main>
    <?= $konten ?>
</main>
<footer class="footer">
    <a class="brand footer-brand" href="<?= site_url('/') ?>">Talitha<span class="brand-light">Portofolio</span></a>
    <p>© <?= date('Y') ?> <?= esc($nama) ?>. Sistem Informasi.</p>
    <a class="back-top" href="#" aria-label="Kembali ke atas">↑</a>
</footer>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('menuToggle');
    const nav = document.getElementById('mainNav');
    toggle?.addEventListener('click', () => nav.classList.toggle('open'));
    nav?.querySelectorAll('a').forEach(link => link.addEventListener('click', () => nav.classList.remove('open')));

    const items = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        items.forEach(item => observer.observe(item));
    } else {
        items.forEach(item => item.classList.add('visible'));
    }
});
</script>
</body>
</html>
