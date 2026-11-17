<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'SIAKAD') ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f9; }
        header { background: #173b65; color: white; padding: 20px; }
        nav { background: #24588b; padding: 12px; }
        nav a { color: white; text-decoration: none; margin-right: 20px; }
        main { padding: 25px; min-height: 350px; background: white; margin: 20px; }
        footer { background: #173b65; color: white; padding: 15px; text-align: center; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #e9eff6; }
    </style>
</head>
<body>
    <header>
        <h2>Sistem Informasi Akademik</h2>
        <p>Program Studi Sistem Informasi</p>
    </header>
    <nav>
        <a href="<?= site_url('/') ?>">Beranda</a>
        <a href="<?= site_url('mahasiswa') ?>">Mahasiswa</a>
        <a href="<?= site_url('dosen') ?>">Dosen</a>
        <a href="<?= site_url('mata-kuliah') ?>">Mata Kuliah</a>
        <a href="<?= site_url('tentang') ?>">Tentang</a>
    </nav>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <footer>
        <p>Praktikum Pemrograman Web II - SIAKAD</p>
    </footer>
</body>
</html>
