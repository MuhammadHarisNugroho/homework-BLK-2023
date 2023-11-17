function karawang() {
    const resultArray = [];
    const characters = ['R', 'I', 'S', 'N', 'U', 'G', 'R', '1'];
  
    for (let i = characters.length; i >= 1; i--) {
      const newArray = [];
      for (let j = 0; j < i; j++) {
        newArray.push(characters[j]);
      }
      resultArray.push(newArray);
    }
  
    return resultArray;
  }