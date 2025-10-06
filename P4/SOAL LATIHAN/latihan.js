// Ambil elemen
const namaInput = document.getElementById("input-nama");
const nilaiInput = document.getElementById("input-nilai");
const submitBtn = document.getElementById("submit-btn");

const namaOutput = document.getElementById("nama-mhs");
const nilaiOutput = document.getElementById("nilai-mhs");
const statusKelulusan = document.getElementById("status-kelulusan");

// Event klik tombol
submitBtn.addEventListener("click", () => {
  const nama = namaInput.value.trim();
  const nilai = parseInt(nilaiInput.value);

  // tampilkan nama & nilai
  namaOutput.textContent = nama || "-";
  nilaiOutput.textContent = isNaN(nilai) ? "-" : nilai;

  // cek status kelulusan
  if (isNaN(nilai)) {
    statusKelulusan.textContent = "Status: Masukkan nilai terlebih dahulu!";
  } else if (nilai >= 60) {
    statusKelulusan.textContent = "Status: Lulus ✅";
    statusKelulusan.style.color = "green";
  } else {
    statusKelulusan.textContent = "Status: Tidak Lulus ❌";
    statusKelulusan.style.color = "red";
  }
});
