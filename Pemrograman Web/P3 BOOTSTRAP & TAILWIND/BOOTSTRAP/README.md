# BOOTSTRAP

### 1. Mengapa memilih konfigurasi col tertentu untuk tiap breakpoint?

- Mobile (col-12): 1 foto per baris - optimal untuk layar kecil

- Small Tablet (col-sm-6): 2 foto per baris - memanfaatkan ruang lebih baik

- Medium Tablet (col-md-4): 3 foto per baris - balance antara ukuran dan jumlah

- Desktop (col-lg-3): 4 foto per baris - maksimalkan real estate layar

### 2. Bagaimana memastikan tombol Follow/Edit Profile tetap mudah dijangkau di mobile?

- Tombol ditempatkan di kolom col-12 di mobile, otomatis 1 baris penuh dan centered (justify-content-center) sehingga mudah dijangkau dengan ibu jari.

- Di desktop (md) tombol diposisikan ke kanan (justify-content-md-end) supaya konsisten dengan UI Instagram.

- Ditambah mt-3 mt-md-0 agar ada jarak di mobile (tidak menempel konten bio) tapi tetap rapat di desktop.

### 3. Jika postingan bertambah jadi 50, apa potensi masalah dan bagaimana solusi grid mengatasinya?

#### Masalah utama:
- Loading lama karena banyak gambar
- Scrolling panjang

#### Solusi dengan grid:
- Grid sudah fleksibel, jadi meskipun 50 foto, layout tetap adaptif (cuma makin panjang ke bawah)