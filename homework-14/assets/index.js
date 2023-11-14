// PR 14 NOV - Haris

function reverseKata(kataAwal) {
    return kataAwal.split('').reverse().join('');
  }

  function tambahKata() {
    var kataAwal = document.getElementById('inputKata').value;
    var kataTerbalik = reverseKata(kataAwal);

    var table = document.getElementById('kataTable').getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);
    
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);

    cell1.innerHTML = kataAwal;
    cell2.innerHTML = kataTerbalik;
    cell3.innerHTML = '<button class="btn action-btn" onclick="editKata(this)">Edit</button>' +
                      '<button class="btn action-btn" onclick="hapusKata(this)">Delete</button>';

    document.getElementById('inputKata').value = '';
  }