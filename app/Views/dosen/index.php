<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h2>Data Dosen</h2>
<table>
    <tr>
        <th>NIDN</th>
        <th>Nama Dosen</th>
        <th>Program Studi</th>
    </tr>
    <tr>
        <td>D001</td>
        <td>Imam Thoib, M.Kom.</td>
        <td>Data Warehouse</td>
    </tr>
    <tr>
        <td>D002</td>
        <td>Nafis Sururi, M.Kom.</td>
        <td>Pemrograman Web 2, Kecerdasan Buatan, SIG</td>
    </tr>
    <tr>
        <td>D003</td>
        <td>Fendy Bayu Firmansyah, M.M.</td>
        <td>Etika Profesi</td>
    </tr>
      <tr>
        <td>D004</td>
        <td>Binti Kholilfah, S.Kom., M.Tr.Kom</td>
        <td>Statistika</td>
    </tr>
      <tr>
        <td>D005</td>
        <td>Beda Puspita Candra, M.Kom.</td>
        <td>Arsitektur Enterprise</td>
    </tr>
</table>
<?= $this->endSection() ?>
