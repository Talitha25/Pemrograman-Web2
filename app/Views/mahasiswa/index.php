<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h2>Data Mahasiswa</h2>
<table>
    <tr><th>NIM</th><th>Nama</th><th>Program Studi</th></tr>
    <tr><td>23001</td><td>Andi</td><td>Sistem Informasi</td></tr>
    <tr><td>23002</td><td>Budi</td><td>Sistem Informasi</td></tr>
    <tr><td>23003</td><td>Citra</td><td>Manajemen Informatika</td></tr>
</table>
<?= $this->endSection() ?>
