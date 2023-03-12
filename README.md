## Tentang Web Masjid

Web Masjid adalah sebuah perangkat lunak berbasis website yang diharapkan dapat menjadi *all in one solution* untuk pengelolaan informasi masjid. Web Masjid (*akan segera*) memiliki fitur-fitur di bawah ini:

- Multi akses bertingkat, dari pengurus masjid hingga anggota.
- Pengelolaan berita seputar kegiatan masjid.
- Pendataan keluar/masuk keuangan masjid.
- Jadwal imam sholat, muadzin, serta khotib.
- *dan akan terus bertambah seiring waktu pengembangan*

Web Masjid diharapkan menjadi pilihan utama para pengurus masjid sebagai salah satu cara memakmurkan masjidnya.

## Instalasi Web Masjid

Ada 2 (dua) cara untuk memasang sistem informasi masjid ini, yakni *Instalasi Manual* dan *Instalasi Awan*.

## Instalasi Manual

- Sila *clone* repositori ini terlebih dahulu
    `git clone https://github.com/webmasjid/webmasjid.git`
- Masuk ke dalam direktori projek
    `cd webmasjid`
- Lalu instal aplikasi-aplikasi pendukung
    `composer install`
- Salin file *.env*
    `cp .env.example .env`
- Atur kredensial *database* pada file *.env*
- Buat key baru
    `php artisan key:generate`
- Jalankan migrasi database
    `php artisan migrate --seed`
- Mulai projek
    `php artisan serve`
- Buka tab atau terminal baru
    `npm install && npm run dev`
  atau
    `yarn && yarn dev`
- Arahkan ke alamat `http://localhost:8000` di browser
- Log in ke sistem
    `email : admin@webmasjid.org | password : bismillah`

### Instalasi Awan

Untuk proses instalasi ini, Antum cukup kirim email permintaan kepada kami dan selanjutnya akan kami urus Web Masjid Antum hingga *online*.

Fitur ini Antum akan dapat *subdomain* dari webmasjid.org atau dapat menggunakan *domain* pilihan sendiri.

## Wakaf Web Masjid

Kami ucapkan banyak terima kasih atas kelapangan hatinya untuk menjadi waqif (orang yang berwakaf) dalam pendanaan projek Sistem Informasi Masjid ini.

Secara eksplisit, kami membutuhkan waqif untuk beberapa hal fundamental berikut:

- Pembelian domain **webmasjid.org** seharga IDR 170.000,- untuk 1 tahun pertama.
- Pembelian web hosting **webmasjid.org** seharga IDR 500.000,- untuk 1 tahun pertama.

Harga dan spesifikasi tersebut diambil dari website [Dracoola.com](https://dracoola.com).

Jika Antum berniat menjadi waqif, sila kirim surat elektronik (*e-mail*) ke [reza@nurfachmi.com](mailto:reza@nurfachmi.com) dengan subjek **Waqif Webmasjid**.

### Waqif Premium

- *belum ada*

Tak lupa kami ucapkan banyak terima kasih kepada seluruh [waqif](https://github.com/webmasjid/webmasjid/WAQIF.md) yang berjasa pada projek Sistem Informasi Masjid ini.

## Contributing

Terima kasih untuk menyempatkan waktunya untuk beramal menjadi kontributor Sistem Informasi Masjid ini. Semoga menjadi amal jariyah untuk kita semua dan diterima oleh Allah sebagai hasanah.

## Security Vulnerabilities

Jika Antum menemukan *bug* yang berkaitan dengan keamanan, mohon kirimkan surat elektronik (*e-mail*) kepada Reza Nurfachmi via [reza@nurfachmi.com](mailto:reza@nurfachmi.com). Seluruh *bug* yang berkaitan dengan keamanan akan kami komunikasikan kepada [pihak semestinya](https://laravel.com).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
