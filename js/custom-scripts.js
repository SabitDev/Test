function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("table");
  switching = true;
 
  dir = "asc"; 
  
  while (switching) {
    
    switching = false;
    rows = table.getElementsByTagName("TR");
    
    for (i = 1; i < (rows.length - 1); i++) {
      
      shouldSwitch = false;
      
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
     
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      
      switchcount ++; 
    } else {
      
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

function Filter() {
  var input1,input2, filter, table, tr, td, i;
  input1 = document.getElementById("From");
  input2 = document.getElementById("To");
  
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4].innerHTML;
    
    if (parseInt(td)>=parseInt(input1.value) && parseInt(td)<=parseInt(input2.value)) {
		tr[i].style.display = "";
    }else {
        tr[i].style.display = "none";
      }
           
  }
}