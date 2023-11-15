// 1. Buatlah array dengan nama mahasiswa lalu isi datanya dengan nama-nama dibawah ini:
let mahasiswa = ["Andrew", "Bob", "Clark", "David", "Ethan", "Fernando", "Gabriel"];

console.log("1. Nama-nama mahasiswa:");
console.log(mahasiswa);

// 2. Tambahkan nama : Harold, Iglesias, Jackson pada array tersebut
mahasiswa = mahasiswa.concat(["Harold", "Iglesias", "Jackson"]);

console.log("\n2. Nama-nama mahasiswa setelah penambahan:");
console.log(mahasiswa);

// 3. Tampilkan nama Bob, David, dan Fernando pada console
console.log("\n3. Nama Bob, David, dan Fernando:");
console.log(mahasiswa.slice(1, 5));

// 4. Hapus nama "Jackson" dari array
mahasiswa = mahasiswa.filter((nama) => nama !== "Jackson");

console.log("\n4. Nama-nama mahasiswa setelah penghapusan 'Jackson':");
console.log(mahasiswa);

