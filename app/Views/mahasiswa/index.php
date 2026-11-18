<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h2>Data Mahasiswa</h2>
<table>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
    </tr>
    <tr>
        <td>202457201026</td>
        <td>Ismatul Hani'ah</td>
        <td>Sistem Informasi</td>
    </tr>
    <tr>
        <td>202457201067</td>
        <td>Talitha Intan Kirana</td>
        <td>Sistem Informasi</td>
    </tr>
    <tr>
        <td>202457201069</td>
        <td>Fatimatuz Zahro'</td>
        <td>Sistem Informasi</td>
    </tr>
</table>
<?= $this->endSection() ?>
