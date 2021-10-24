<html>

<head>
  <link rel="stylesheet" type="text/css" href="pages/css/formstyle.css">
</head>

<body>

  <h2>ADD EMPLOYEE</h2><br>

  <label>Search by Position :</label><input type="text" id="job" onkeyup="searchjob()"><br><br>

  <table id="table1" class="hr-table">
    <tr>
      <th>Position Applied</th>
      <th>Full Name</th>
      <th>Department</th>
      <th>Status</th>

    </tr>
    <tr>
      <td>Programmer</td>
      <td>Ms.Robin Jack</td>
      <td>Software Development</td>
      <td> Selected</td>
      <td><button class="hr-button" onclick="window.location.href='pages/adduser.php';">
      Add & Signup Employee</button></td>
    </tr>
    <tr>
      <td>Accountant</td>
      <td>Mr.Sam Peter</td>
      <td>Accounting</td>
      <td> Selected</td>
      <td><button class="hr-button" onclick="window.location.href='pages/adduser.php';">
      Add & Signup Employee</button></td>
    </tr>
    <tr>
      <td>Sales Executive</td>
      <td>Mr.Haris Ismail</td>
      <td>Marketing</td>
      <td> Selected</td>
      <td><button class="hr-button" onclick="window.location.href='pages/adduser.php';">
      Add & Signup Employee</button></td>
    </tr>
    <tr>
      <td>Coordinator</td>
      <td>Ms.Nupuni Pathiraja</td>
      <td>Marketing</td>
      <td> Selected</td>
      <td><button class="hr-button" onclick="window.location.href='pages/adduser.php';">
      Add & Signup Employee</button></td>
    </tr>


  </table>

  <script>
    function searchjob() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("job");
      filter = input.value.toUpperCase();
      table = document.getElementById("table1");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>

</body>

</html>