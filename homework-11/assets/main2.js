// Konversi Suhu dari Celcius ke Fahrenheit
function konversiCelciusKeFahrenheit(celcius) {
    return (celcius * 9) / 5 + 32;
  }
  
  console.log(
    "Konversi suhu dari Celcius ke Fahrenheit (25°C): " +
      konversiCelciusKeFahrenheit(25) +
      "°F"
  );
  
  // Konversi Suhu dari Fahrenheit ke Celcius
  function konversiFahrenheitKeCelcius(fahrenheit) {
    return ((fahrenheit - 32) * 5) / 9;
  }
  
  console.log(
    "Konversi suhu dari Fahrenheit ke Celcius (77°F): " +
      konversiFahrenheitKeCelcius(77) +
      "°C"
  );