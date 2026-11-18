<?php

namespace App\Controllers;

class Portofolio extends BaseController
{
    /**
     * Menyiapkan data dan menampilkan halaman portofolio.
     */
    private function tampilkan(string $halaman, string $judul)
    {
        $data = [
            'judul'        => $judul,
            'halamanAktif' => $halaman,
            'nama'         => 'Talitha Intan Kirana',
            'programStudi' => 'Sistem Informasi',
            'kampus'       => 'Institut Teknologi Mojosari',

            // Daftar kemampuan yang dipelajari.
            'artikel' => [
                'HTML',
                'CSS',
                'PHP',
                'Bootstrap',
                'CodeIgniter 4',
                'MySQL',
                'Figma',
            ],

            // Data proyek untuk halaman Portofolio.
            'proyek' => [
                [
                    'nama'      => 'Website Portofolio',
                    'deskripsi' => 'Website pribadi untuk memperkenalkan profil, keahlian, dan hasil pekerjaan.',
                    'teknologi' => 'HTML, CSS, Bootstrap',
                ],
                [
                    'nama'      => 'Aplikasi Agritech',
                    'deskripsi' => 'Aplikasi pengelolaan stok pertanian, barang masuk, barang keluar, dan hasil panen.',
                    'teknologi' => 'PHP, MySQL, UI Design',
                ],
                [
                    'nama'      => 'Sistem Informasi Akademik',
                    'deskripsi' => 'Latihan aplikasi informasi akademik menggunakan framework CodeIgniter 4.',
                    'teknologi' => 'CodeIgniter 4, PHP',
                ],
            ],
        ];

        // File halaman berada di app/Views/halaman/.
        $data['konten'] = view('halaman/' . $halaman, $data);

        // Semua halaman menggunakan satu layout yang sama.
        return view('portofolio/layout', $data);
    }

    public function index()
    {
        return $this->tampilkan('beranda', 'Beranda');
    }

    public function profil()
    {
        return $this->tampilkan('profil', 'Profil');
    }

    public function artikel()
    {
        return $this->tampilkan('artikel', 'Artikel');
    }

    public function portofolio()
    {
        return $this->tampilkan('portofolio', 'Portofolio');
    }

    public function tentang()
    {
        return $this->tampilkan('tentang', 'Tentang Saya');
    }
}
