# Daydreams Massage Jakarta - Custom WordPress Theme (SPA Landing Page)

Tema WordPress Single Page Application (SPA) modern, ultra-ringan, SEO-friendly, dan dioptimalkan secara khusus untuk konversi tinggi pemesanan jasa **Pijat Panggilan Jakarta 24 Jam** untuk brand:
**Daydreams Massage Jakarta** (https://daydreamsmassagejakarta.com/).

---

## 🌟 Fitur Utama Tema

1. **Desain Mobile-First & Ultra-Responsif**:
   - Lebih dari 90% pencari jasa pijat panggilan menggunakan smartphone. Tema ini didesain dari awal untuk kenyamanan navigasi layar ponsel.
   - Dilengkapi **Floating WhatsApp Button** dan **Mobile Bottom Booking Bar** yang selalu siap ditekan di bagian bawah layar HP.

2. **Single Page Application (SPA) Experience**:
   - Navigasi halus (*smooth scrolling*) ke setiap seksi: **Beranda**, **Layanan**, **Keunggulan**, **Area Layanan**, **Tarif/Harga**, **Testimoni**, dan **Booking**.

3. **Formulir Pemesanan Cepat Terintegrasi WhatsApp**:
   - Calon pelanggan dapat memilih jenis layanan, durasi (60/90/120 menit), preferensi terapis pria/wanita, wilayah Jakarta, waktu panggilan, serta alamat/nama hotel & kamar.
   - Begitu tombol diklik, format pesan pemesanan otomatis disusun rapi dan langsung membuka aplikasi WhatsApp Admin.

4. **SEO & Schema.org Structured Data**:
   - Dilengkapi meta tags OpenGraph Facebook, Twitter Card, dan JSON-LD Structured Data tipe `HealthAndBeautyBusiness` spesifik Jakarta untuk memenangkan ranking lokal Google.

5. **Tanpa Build Tool yang Rumit**:
   - Memanfaatkan Tailwind CSS via official CDN yang dikonfigurasi melalui `functions.php`, sehingga Anda tidak memerlukan Node.js, Webpack, atau npm build di server WordPress Anda.

---

## 📁 Struktur File Tema

```text
daydreams-massage-theme/
├── style.css           # Metadata tema WordPress & styling custom
├── index.php           # Fallback template utama
├── functions.php       # Enqueue Tailwind, FontAwesome, fonts, & WordPress Customizer
├── header.php          # Tag <head>, SEO meta tags, Schema.org, & Fixed Navbar
├── footer.php          # Footer info, copyright, floating WA button, & JavaScript
├── front-page.php      # Template utama SPA (Hero, Layanan, Area, Testimoni, Form)
├── README.md           # Dokumentasi & panduan instalasi
└── LICENSE             # Lisensi GNU General Public License v2
```

---

## 🚀 Panduan Instalasi di WordPress

### Langkah 1: Mengemas Folder Menjadi File `.zip`

Pastikan seluruh file tema berada di dalam satu folder bernama `daydreams-massage-theme`.

**Di Windows:**
1. Klik kanan pada folder `daydreams-massage-theme`.
2. Pilih **Send to** > **Compressed (zipped) folder**.
3. Beri nama `daydreams-massage-theme.zip`.

**Di Mac:**
1. Klik kanan pada folder `daydreams-massage-theme`.
2. Pilih **Compress "daydreams-massage-theme"**.

**Melalui Terminal / Linux:**
```bash
zip -r daydreams-massage-theme.zip daydreams-massage-theme/
```

> **Tips:** Anda juga dapat menggunakan tombol **"Download Theme .ZIP"** yang tersedia di aplikasi live preview ini untuk mengunduh paket zip siap pakai secara instan!

---

### Langkah 2: Upload ke Dashboard WordPress

1. Masuk ke dashboard admin WordPress Anda (`https://domainanda.com/wp-admin`).
2. Masuk ke menu **Appearance (Tampilan)** > **Themes (Tema)**.
3. Klik tombol **Add New (Tambah Baru)** di bagian atas.
4. Klik tombol **Upload Theme (Unggah Tema)**.
5. Pilih file `daydreams-massage-theme.zip` dari komputer Anda, lalu klik **Install Now (Pasang Sekarang)**.
6. Setelah instalasi selesai, klik tautan **Activate (Aktifkan)**.

---

### Langkah 3: Mengatur Halaman Utama (Front Page)

1. Buka menu **Pages (Halaman)** > **Add New (Tambah Baru)**.
2. Beri judul halaman (misal: "Beranda").
3. Di panel sebelah kanan (*Page Attributes*), pada bagian **Template**, pilih **"Front Page SPA Landing Page"**.
4. Klik **Publish (Terbitkan)**.
5. Selanjutnya, buka menu **Settings (Pengaturan)** > **Reading (Membaca)**.
6. Pada opsi **Your homepage displays**, pilih **A static page (Halaman statis)**.
7. Setel **Homepage** ke halaman "Beranda" yang baru saja Anda buat.
8. Klik **Save Changes (Simpan Perubahan)**.

---

### Langkah 4: Mengatur Nomor WhatsApp Admin

Tema ini sudah terintegrasi dengan **WordPress Theme Customizer**:

1. Buka menu **Appearance** > **Customize**.
2. Cari seksi **"Pengaturan Kontak & WhatsApp"**.
3. Masukkan nomor WhatsApp Anda (format internasional tanpa simbol, contoh: `6281234567890`).
4. Masukkan nomor tampilan (contoh: `0812-3456-7890`).
5. Klik **Publish**. Seluruh tombol dan form di website akan otomatis mengarah ke nomor WhatsApp baru Anda!

---

## 📜 Lisensi

Tema ini dirilis di bawah lisensi **GNU General Public License v2 or later (GPL-2.0-or-later)** sesuai standar ekosistem WordPress.
Lihat file `LICENSE` untuk informasi selengkapnya.

---

## 👨‍💻 Profil Perusahaan & Layanan Resmi

- **Perusahaan:** PT. DAYDREAMS MASSAGE SEHAT JAKARTA
- **Brand:** Daydreams Massage Jakarta
- **Website Resmi:** [https://daydreamsmassagejakarta.com/](https://daydreamsmassagejakarta.com/)
- **Customer Service (24 Jam Nonstop):**
  - **Admin 1 (SISKA):** `+62 895-6291-39936`
  - **Admin 2 (Mr.Erik):** `+62 852-1734-4735`
- **Layanan:** Pijat Panggilan Hotel Bintang, Apartemen Mewah, & Rumah Tinggal di Seluruh Wilayah DKI Jakarta.
- **Standar Layanan:** 100% Bersih, Higienis, & Menjunjung Tinggi Profesionalisme Kesehatan.
