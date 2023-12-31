/*
  Buatlah program untuk menentukan bilangan ganjil dan genap
  dari angka 1 sampai 50 menggunakan perulangan for dan while
*/ 


function generateTable(type) {
  const table = document.getElementById('resultTable');
  table.innerHTML = "<tr><th>Angka</th><th>Keterangan</th></tr>";

  // FOR
  if (type === 'for') {
      alert("Warning!! \nKamu berhasil mengklik tombol FOR! \nJangan lupa ketika ingin klik tombol WHILE, \nharus klik tombol RESET dahulu! \nMade by Haris 13/11/23");
      for (let i = 1; i <= 50; i++) {
          table.innerHTML += `<tr><td>${i}</td><td>${i % 2 === 0 ? 'Genap' : 'Ganjil'}</td></tr>`;
      }
  } else 
  
  // WHILE
  if (type === 'while') {
      alert("Warning!! \nKamu berhasil mengklik tombol WHILE! \nJangan lupa ketika ingin klik tombol FOR, \nharus klik tombol RESET dahulu! \nMade by Haris 13/11/23");
      let j = 1;
      while (j <= 50) {
          table.innerHTML += `<tr><td>${j}</td><td>${j % 2 === 0 ? 'Genap' : 'Ganjil'}</td></tr>`;
          j++;
      }
  }
}

function resetPage() {
  location.reload();
}