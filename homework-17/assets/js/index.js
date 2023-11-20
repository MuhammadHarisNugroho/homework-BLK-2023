function generateSegitiga() {
    const jumlahBaris = document.getElementById('inputBaris').value;
    const hasilSegitiga = document.getElementById('hasilSegitiga');
    hasilSegitiga.innerHTML = '';

    if (jumlahBaris > 10) {
        alert('Maaf, jumlah baris tidak boleh lebih dari 10.');
        return;
    }

    // Membuat segitiga siku-siku
    for (let i = 1; i <= jumlahBaris; i++) {
      let row = hasilSegitiga.insertRow();
      for (let j = 1; j <= i; j++) {
        let cell = row.insertCell();
        cell.appendChild(document.createTextNode('*'));
      }
    }
  }