<?php
error_reporting(0);
$file = 'database.txt';
$link_address.="form.php";
$current = file_get_contents($file);

   echo nl2br("data berhasil ditambahkan\n");
echo "<a href='".$link_address."'>back</a>";
   $data.=$_POST['nik'].";".$_POST['name'].";".$_POST['departemen'].";".$_POST['tgl'].";\n";
$current .= $data;
// Write the contents back to the file
file_put_contents($file, $current);
?>
