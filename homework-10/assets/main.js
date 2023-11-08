// 1. Keliling Segitiga

// Sisi A:
let sisiA = 15;

// Sisi B:
let sisiB = 10;

// Sisi C:
let sisiC = 20;

// Rumus:
function kelilingSegitiga(sisiA, sisiB, sisiC) {
    let keliling = sisiA + sisiB + sisiC;
    return keliling;
}

// Keliling Segitiga:
let keliling = kelilingSegitiga(sisiA, sisiB, sisiC);

console.log('Segitiga by Haris:\n');
console.log('Sisi A: ' + sisiA + '\nSisi B: ' + sisiB + '\nSisi C: ' + sisiC + '\nRumus Keliling Segitiga: Sisi A + Sisi B + Sisi C' + '\nKeliling Segitiga: ' + keliling);
console.log('');

// 2. Keliling Lingkaran

// Jari-jari:
let jariJariLingkaran = 10;

// Rumus:
function kelilingLingkaran(jariJari) {
    let keliling1 = 2 * Math.PI * jariJari;
    return keliling1;
}

// Keliling Lingkaran:
let keliling1 = kelilingLingkaran(jariJariLingkaran);

console.log('Lingkaran by Haris:\n');
console.log('Jari-jari: ' + jariJariLingkaran + '\nRumus Keliling Lingkaran: 2 * π * r ' + '\nKeliling Lingkaran: ' + keliling1);
console.log('');