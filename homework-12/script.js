/*
Buatlah program untuk menentukan upah mingguan seorang karyawan,

data yang dimasukkan yaitu: nama dan jumlah jam kerja

Ketentuan : 
1. Jika jam kerja kurang dari sama dengan 48 jam, maka gaji = jumlah jam kerja x 2000
2. Jika jam kerja lebih dari sama dengan 48 jam, maka gaji = 48 x 2000 + lembur * 3000

lembur didapat dari : jumlah jam kerja - 48

Lalu tampilkan hasilnya di console.log atau alert() dengan format tulisan
"Nama : <nama>, upah : <gaji>"

CLUE : gunakan IF-ELSE
*/

/* ========================== */
/* Silahkan Kerjakan Di bawah ini! */

// Menerima input nama dan jumlah jam kerja

function hitungUpah() {
    var nama = document.getElementById("nama").value;
    var jamKerja = parseFloat(document.getElementById("jamKerja").value);
  
    var gaji;
    if (jamKerja <= 48) {
      gaji = jamKerja * 2000;
    } else {
      var lembur = jamKerja - 48;
      gaji = 48 * 2000 + lembur * 3000;
    }
  
    // Menambahkan hasil ke tabel
    var table = document.getElementById("hasilTable");
    var tbody = document.getElementById("hasilBody");
  
    var newRow = tbody.insertRow();
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
  
    cell1.innerHTML = nama;
    cell2.innerHTML = gaji;

    alert("Data berhasil ditambahkan!");
  }