# Daydreams Massage Jakarta

> **Website Resmi:** [https://daydreamsmassagejakarta.com/](https://daydreamsmassagejakarta.com/)  
> **Badan Usaha:** PT. DAYDREAMS MASSAGE SEHAT JAKARTA  
> **Layanan:** Pijat Panggilan Hotel, Apartemen & Perumahan Mewah Jakarta 24 Jam Nonstop  

Repository ini berisi kode sumber lengkap untuk:
1. **Frontend Web Application (SPA)** berbasis React 18, TypeScript, Tailwind CSS, dan Vite.
2. **Custom WordPress Theme (SPA Landing Page)** siap pakai di folder [`/wordpress-theme/daydreams-massage-theme`](./wordpress-theme/daydreams-massage-theme) untuk diunggah langsung ke dashboard WordPress (*Appearance > Themes > Add New*).

---

## 📞 Kontak Layanan Pelanggan (Admin Spa Online 24 Jam)

Layanan pemesanan, konsultasi keluhan badan, dan ketersediaan terapis standby dilayani oleh 2 Admin resmi:

| Admin | Nama Kontak | Nomor WhatsApp | Akses Langsung |
|---|---|---|---|
| **Admin 1** | **SISKA** | `+62 895-6291-39936` | [Chat Admin SISKA](https://api.whatsapp.com/send?phone=62895629139936&text=Halo%20Admin%20SISKA%2C%20saya%20ingin%20booking%20terapis%20pijat%20panggilan.) |
| **Admin 2** | **Mr.Erik** | `+62 852-1734-4735` | [Chat Admin Mr.Erik](https://api.whatsapp.com/send?phone=6285217344735&text=Halo%20Admin%20Mr.Erik%2C%20saya%20ingin%20booking%20terapis%20pijat%20panggilan.) |

---

## 🌟 Fitur & Keunggulan Aplikasi

- **Hero Image Slideshow**: Slider visual resolusi tinggi dengan navigasi dot dan panah interaktif.
- **Dual Admin 24 Jam Card**: Kartu customer service online dengan tombol aksi cepat dan status real-time.
- **Daftar Layanan Pijat Berfoto Lengkap**:
  - *Traditional Body Massage* (90 / 120 Menit) - Relaksasi seluruh tubuh pegal & kaku.
  - *Reflexology & Totok Wajah* (60 / 90 Menit) - Titik saraf kaki & kesegaran wajah anti-stres.
  - *Pijat Tubuh + Kerokan* (90 / 120 Menit) - Terapi masuk angin, meriang & minyak hangat.
  - *Lulur Tradisional & Scrub Herbal* (120 Menit) - Pengangkatan kulit mati & wangi alami.
  - *Deep Tissue / Pijat Otot Berat* (90 / 120 Menit) - Tekanan bertenaga untuk simpul otot kaku.
  - *Couple Massage Package* (120 Menit) - 2 Terapis datang serentak untuk pasangan suami istri.
- **Grid Terapis Siap Panggil (Pria & Wanita)**:
  - Filter kategori cepat: **Semua**, **Terapis Wanita**, dan **Terapis Pria**.
  - 8 Profil personil bersertifikat dengan foto, rating bintang, jam terbang, dan keahlian spesifik.
  - Tombol **"Pilih Terapis Ini"** yang otomatis mengisi formulir booking WhatsApp.
- **Cakupan 5 Wilayah DKI Jakarta**:
  - Jakarta Selatan (SCBD, Senopati, Kemang, Kuningan, Pondok Indah, Cilandak).
  - Jakarta Pusat (Sudirman, MH Thamrin, Menteng, Senayan, Kemayoran, Tanah Abang).
  - Jakarta Barat (Tomang, Slipi, Grogol, Puri Indah, Kebon Jeruk).
  - Jakarta Utara (PIK, Pluit, Kelapa Gading, Sunter, Ancol).
  - Jakarta Timur (Rawamangun, Cawang, Matraman, Jatinegara).
- **Formulir Pemesanan Express Terintegrasi WhatsApp**:
  - Pilihan layanan, durasi, terapis, wilayah, waktu panggil, nama hotel/alamat & nomor kamar.
  - Format pesan WhatsApp tersusun rapi otomatis saat diklik.
- **SEO & Schema.org LocalBusiness**:
  - Meta tags OpenGraph, Twitter Card, dan JSON-LD Structured Data tipe `HealthAndBeautyBusiness`.
- **Komitmen 100% Layanan Profesional**:
  - Menjunjung tinggi privasi dan standar etika terapi kesehatan resmi PT. DAYDREAMS MASSAGE SEHAT JAKARTA.

---

## 📁 Struktur Repositori

```text
├── .env.example                               # Contoh konfigurasi environment
├── index.html                                 # Entry point HTML aplikasi React
├── metadata.json                              # Metadata aplikasi AI Studio
├── package.json                               # Dependensi npm & skrip project
├── vite.config.ts                             # Konfigurasi Vite bundler
├── LICENSE                                    # Lisensi GNU General Public License v2
├── README.md                                  # Dokumentasi utama repositori ini
├── src/                                       # Kode sumber React SPA
│   ├── App.tsx                                # Komponen utama SPA lengkap
│   ├── main.tsx                               # Mount React DOM
│   └── index.css                              # Tailwind CSS global import
└── wordpress-theme/                           # Folder Tema WordPress Standalone
    └── daydreams-massage-theme/               # Direktori tema siap di-ZIP
        ├── style.css                          # Metadata tema & CSS WordPress
        ├── index.php                          # Fallback template WordPress
        ├── functions.php                      # Enqueue Tailwind, FontAwesome & Customizer
        ├── header.php                         # Tag <head>, SEO meta, navbar, dual admin
        ├── footer.php                         # Footer, copyright, floating WA & scripts
        ├── front-page.php                     # Template utama SPA (Hero, Layanan, Terapis)
        ├── README.md                          # Panduan khusus tema WordPress
        └── LICENSE                            # Lisensi GNU GPL v2 untuk WordPress
```

---

## 🚀 Panduan Instalasi & Penggunaan

### Bagian 1: Menjalankan Frontend Web App (React + Vite)

#### Prasyarat:
- Node.js versi 18 atau lebih baru
- npm / yarn / pnpm

#### Langkah Instalasi:
```bash
# 1. Clone repository
git clone https://github.com/username/daydreams-massage-jakarta.git
cd daydreams-massage-jakarta

# 2. Install dependensi
npm install

# 3. Jalankan server lokal (Development Mode)
npm run dev
```
Akses di browser pada: `http://localhost:3000` (atau port yang ditentukan Vite).

#### Build untuk Produksi:
```bash
npm run build
```
File hasil kompilasi siap saji akan berada di folder `dist/`, yang dapat langsung di-deploy ke Vercel, Netlify, Cloudflare Pages, atau hosting static file lainnya.

---

### Bagian 2: Panduan Instalasi Tema WordPress (`daydreams-massage-theme`)

Folder `wordpress-theme/daydreams-massage-theme` dirancang sebagai tema mandiri (*standalone theme*) yang tidak membutuhkan compiler atau build tool di server WordPress.

#### Langkah 1: Buat File ZIP Tema
1. Buka folder `wordpress-theme/`.
2. Klik kanan pada folder `daydreams-massage-theme`.
3. Pilih **Compress to ZIP** / **Send to > Compressed (zipped) folder**.
4. Beri nama file: `daydreams-massage-theme.zip`.

*Atau melalui terminal/command line:*
```bash
cd wordpress-theme
zip -r daydreams-massage-theme.zip daydreams-massage-theme/
```

#### Langkah 2: Upload & Aktifkan Tema di WordPress
1. Masuk ke Dashboard WordPress Anda (`https://yourdomain.com/wp-admin`).
2. Masuk ke menu **Appearance (Tampilan)** > **Themes (Tema)**.
3. Klik tombol **Add New Theme (Tambah Tema Baru)**.
4. Klik tombol **Upload Theme (Unggah Tema)** di bagian atas.
5. Pilih file `daydreams-massage-theme.zip` yang telah dibuat.
6. Klik **Install Now (Pasang Sekarang)**, lalu klik **Activate (Aktifkan)**.

#### Langkah 3: Menetapkan Halaman Beranda (Front Page)
1. Buka menu **Pages (Halaman)** > **Add New (Tambah Baru)**.
2. Beri judul halaman, misalnya: `Beranda` atau `Home`.
3. Di panel kanan pada **Page Attributes (Atribut Halaman)**, ubah **Template** menjadi **"Front Page SPA Landing Page"**.
4. Klik **Publish (Terbitkan)**.
5. Selanjutnya, buka menu **Settings (Pengaturan)** > **Reading (Membaca)**.
6. Pada bagian **Your homepage displays (Tampilan beranda Anda)**, pilih **A static page (Halaman statis)**.
7. Pilih **Homepage**: halaman `Beranda` yang baru dibuat.
8. Klik **Save Changes (Simpan Perubahan)**.

#### Langkah 4: Kustomisasi Kontak & Logo WhatsApp
1. Buka menu **Appearance** > **Customize**.
2. Masuk ke bagian **Pengaturan Kontak & WhatsApp**:
   - Sesuaikan nomor WhatsApp Admin 1 (SISKA): `62895629139936`
   - Sesuaikan nomor WhatsApp Admin 2 (Mr.Erik): `6285217344735`
3. Masuk ke bagian **Site Identity**:
   - Unggah logo resmi Daydreams Massage Jakarta (`Logo-Daydreams-Jakarta-Massage-2.webp`).
4. Klik **Publish (Terbitkan)**.

---

## 🛠️ Teknologi yang Digunakan

- **Frontend Core:** React 18, TypeScript
- **Styling:** Tailwind CSS
- **Icons:** Lucide React (`lucide-react`) & FontAwesome 6 Pro CDN
- **Animations:** Motion (`motion/react`) & Tailwind CSS transitions
- **Bundler:** Vite
- **CMS Compatibility:** WordPress 5.9+ / 6.x (PHP 7.4 - 8.3+)

---

## 📄 Lisensi (License)

Proyek ini didistribusikan di bawah lisensi **GNU General Public License v2.0 (GPL-2.0)**.  
Anda diizinkan untuk menggunakan, memodifikasi, dan mendistribusikan kode ini sesuai dengan ketentuan lisensi GPL v2. Lihat file [LICENSE](./LICENSE) untuk informasi teks lisensi selengkapnya.

---

## 🏢 Kepemilikan & Hak Cipta

© 2026 **Daydreams Massage Jakarta** • **PT. DAYDREAMS MASSAGE SEHAT JAKARTA**.  
Seluruh hak cipta dilindungi undang-undang.
