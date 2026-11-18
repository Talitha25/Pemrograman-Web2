<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h2>Tentang Aplikasi</h2>
<p>
    Sistem Informasi Akademik merupakan aplikasi
    sederhana untuk menampilkan informasi akademik.
</p>
<p>
    Aplikasi ini dikembangkan menggunakan
    framework CodeIgniter 4.
</p>

<hr>

<h3>Pengembang</h3>
<div style="display: flex; gap: 20px; align-items: flex-start;">
    <img src="<?= base_url('images/foto.jpg') ?>"
         alt="foto"
         style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">

    <table>
        <tr>
            <td>Nama</td>
            <td>: Talitha</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>: 202457201067</td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>: Sistem Informasi</td>
        </tr>
        <tr>
            <td>Kampus</td>
            <td>: Institut Teknologi Mojosari</td>
        </tr>
        <tr>
            <td>Semester</td>
            <td>: 5</td>
        </tr>
    </table>
</div>
<?= $this->endSection() ?>