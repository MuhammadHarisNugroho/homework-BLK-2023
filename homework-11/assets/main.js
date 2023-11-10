// Menghitung Volume Kubus
function hitungVolumeKubus(sisi) {
    return Math.pow(sisi, 3);
  }
  
  console.log("Volume Kubus dengan sisi 5: " + hitungVolumeKubus(5));
  
  // Menghitung Volume Balok
function hitungVolumeBalok(panjang, lebar, tinggi) {
    return panjang * lebar * tinggi;
  }
  
  console.log(
    "Volume Balok dengan panjang 4, lebar 3, dan tinggi 6: " +
      hitungVolumeBalok(4, 3, 6)
  );