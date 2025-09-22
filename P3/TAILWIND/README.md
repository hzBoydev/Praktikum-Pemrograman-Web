# TAILWIND

### 1. Jelaskan keputusan grid-cols/gap di tiap breakpoint — kenapa begitu?

- Mobile (grid-cols-1, gap-1)
Layar kecil, fokus utama user adalah scrolling. Satu kolom membuat feed lebih mudah diikuti tanpa harus memperhatikan lebar layar. Gap kecil (gap-1) supaya tidak makan ruang terlalu banyak di layar sempit.

- Tablet (md:grid-cols-2, md:gap-2)
Di layar menengah ada cukup ruang untuk menampilkan dua kolom feed. Gap diperbesar jadi gap-2 agar tiap postingan punya jarak yang lebih rapi, tidak terlalu berdempetan.

- Desktop (lg:grid-cols-3)
Layar lebar menampilkan tiga kolom untuk mendekati layout asli Instagram desktop. Gap tetap gap-2 karena sudah seimbang kepadatan konten.

### 2. Bagaimana kamu memanfaatkan utility responsive Tailwind untuk memecahkan masalah layout yang muncul di mobile?

- Order classes (order-1, order-2, order-3)
Di mobile urutan elemen diatur supaya avatar muncul lebih atas, lalu info, baru tombol. hasilnya lebih natural di layar kecil.

- Text alignment (text-center sm:text-left)
Di mobile teks rata tengah agar simetris. Tablet/desktop rata kiri untuk mengikuti pola UI Instagram asli.

- Grid responsive (grid-cols-1 md:grid-cols-2 lg:grid-cols-3)
Layout feed berubah sesuai lebar layar.

### 3. Jelaskan trade-off antara memakai banyak utility classes vs membuat component CSS tersendiri.
- Utility classes (Tailwind)
    - ✅ Cepat, tidak perlu bikin file CSS panjang.
    - ✅ Konsisten, karena semua pakai skala desain Tailwind (spacing, warna, font).
    - ❌ Bisa membuat HTML penuh class
- Component CSS
    - ✅ HTML lebih bersih, cukup panggil class
    - ❌ Butuh maintain dua file (HTML + CSS).