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

  function editKata(button) {
    var currentRow = button.parentNode.parentNode;
    var kataAwal = currentRow.cells[0].innerHTML;

    var editedKata = prompt("Edit kata:", kataAwal);
    if (editedKata !== null) {
      currentRow.cells[0].innerHTML = editedKata;
      currentRow.cells[1].innerHTML = reverseKata(editedKata);
    }
  }
