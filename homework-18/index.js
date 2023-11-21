function generateSegitiga() {
    const tinggiSegitiga = document.getElementById('inputTinggi').value;
    const hasilSegitiga = document.getElementById('hasilSegitiga');
    hasilSegitiga.innerHTML = '';

    if (tinggiSegitiga > 25) {
        alert('Maaf, tinggi segitiga tidak boleh lebih dari 25.');
        return;
    }

    // Membuat segitiga sama kaki terbalik
    for (let i = tinggiSegitiga; i >= 1; i--) {
        let row = hasilSegitiga.insertRow();
        for (let j = tinggiSegitiga - i; j > 0; j--) {
            let cell = row.insertCell();
            cell.appendChild(document.createTextNode(' '));
        }
        
    }
}