function updateClock() {
    // Buat objek Date untuk mendapatkan waktu saat ini
    var currentDate = new Date();
  
    // Format tanggal dan waktu
    var formattedDateTime =
      currentDate.getFullYear() + '-' +
      ('0' + (currentDate.getMonth() + 1)).slice(-2) + '-' +
      ('0' + currentDate.getDate()).slice(-2) + ' ' +
      ('0' + currentDate.getHours()).slice(-2) + ':' +
      ('0' + currentDate.getMinutes()).slice(-2) + ':' +
      ('0' + currentDate.getSeconds()).slice(-2);
  
    
  }
  