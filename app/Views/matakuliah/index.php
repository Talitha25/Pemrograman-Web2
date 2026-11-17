<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h2>Data Mata Kuliah</h2>
<table>
    <tr>
        <th>Kode</th>
        <th>Nama Mata Kuliah</th>
        <th>SKS</th>
    </tr>
    <tr>
        <td>SI101</td>
        <td>Pemrograman Web</td>
        <td>3</td>
    </tr>
    <tr>
        <td>SI102</td>
        <td>Sistem Informasi</td>
        <td>3</td>
    </tr>
    <tr>
        <td>SI103</td>
        <td>Basis Data</td>
        <td>3</td>
    </tr>
</table>
<?= $this->endSection() ?>
