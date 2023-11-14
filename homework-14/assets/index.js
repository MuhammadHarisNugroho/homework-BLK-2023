// PR 14 NOV - Haris

function reverseKata(kataAwal) {
    return kataAwal.split('').reverse().join('');
  }

  function tambahKata() {
    let kataAwal = document.getElementById('inputKata').value;
    let kataTerbalik = reverseKata(kataAwal);

    let table = document.getElementById('kataTable').getElementsByTagName('tbody')[0];
    let newRow = table.insertRow(table.rows.length);
    
    let cell1 = newRow.insertCell(0);
    let cell2 = newRow.insertCell(1);
    let cell3 = newRow.insertCell(2);

    cell1.innerHTML = kataAwal;
    cell2.innerHTML = kataTerbalik;
    cell3.innerHTML = '<button class="btn action-btn" onclick="editKata(this)">Edit</button>' +
                      '<button class="btn action-btn" onclick="hapusKata(this)">Delete</button>';

    document.getElementById('inputKata').value = '';
  }

  function editKata(button) {
    let currentRow = button.parentNode.parentNode;
    let kataAwal = currentRow.cells[0].innerHTML;

    let editedKata = prompt("Edit kata:", kataAwal);
    if (editedKata !== null) {
      currentRow.cells[0].innerHTML = editedKata;
      currentRow.cells[1].innerHTML = reverseKata(editedKata);
    }
  }

  function hapusKata(button) {
    let currentRow = button.parentNode.parentNode;
    currentRow.parentNode.removeChild(currentRow);
  }