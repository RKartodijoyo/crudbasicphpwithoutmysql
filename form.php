<!DOCTYPE html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Database</title>
</head>
 
<body>
<?php
$filename = 'database.txt';

if (file_exists($filename)) {
   
} else {
$myfile = fopen($filename, "w") or die("Unable to open file!");
$txt = "nik;nama;departemen;tglmasuk;\n";
fwrite($myfile, $txt);

fclose($myfile);
}
?>
   <h2>Database Karyawan </h2>
   <form action="keren.php" method="post">
      Nik<td>:<td> <input type="text" name="nik" />
      <br />
      Nama<td>:<td> <input type="text" name="name" />
      <br />
      Departemen<td>:<td> 
<br/>
<input type="radio" name="departemen" value="IT" checked>IT<br/>  
 <input type="radio" name="departemen" value="HRD">HRD<br/>  
 <input type="radio" name="departemen" value="FINANCE">FINANCE<br/>  
  </br>
      tgl masuk<td>:<td> <input type="date" name="tgl" />
      <br />
      <input type="submit" value="Proses Data" >
   </form>
</body>
</html>
