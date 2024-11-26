

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table make PHP</title>
</head>
<body>
  <h2>Contoh Table</h2>
  <table border="1"; style="border-collapse: collapse" >
  <tr>
    <th>No</th>
    <th>Nama Peserta</th>
  </tr>
  <?php
    for ($i=1; $i <= 10 ; $i++) { 
      echo "<tr><td></td><td>Nama Peserta </td></tr>";
    }
  ?>
  </table>
  
</body>
</html>

