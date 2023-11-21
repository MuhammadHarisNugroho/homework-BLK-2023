function generateSegitiga() {
    const tinggiSegitiga = document.getElementById('inputTinggi').value;
    const hasilSegitiga = document.getElementById('hasilSegitiga');
    hasilSegitiga.innerHTML = '';

    if (tinggiSegitiga > 25) {
        alert('Maaf, tinggi segitiga tidak boleh lebih dari 25.');
        return;
    }

}