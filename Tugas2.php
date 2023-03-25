<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
<p> Form Imput Gaji Karyawan</p>
<label>Nama Karyawan</label>
<input type ="text" name="nama" placeholder="Masukan Nama Karyawan"><br><br>
<label>Jabatan</label>
<select name ="jabatan">
    <option>--- Pilih Jabatan ---</option>
    <option value="manager">Manager</option>
    <option value="asisten">Asisten</option>
    <option value="kabag">Kabag</option>
    <option value="staff">Staff</option>
</select><br><br>
<label>Status</label>
<select name ="status">
    <option>--- Pilih Status ---</option>
    <option value="sudah menikah">Sudah Menikah</option>
    <option value="belum menikah">Belum Menikah</option>
    </select><br><br>
<label>Jumlah Anak</label>
<input type ="text" name="anak" placeholder="Masukan Jumlah Anak"><br><br>
<label>Agama</label>
<select name ="agama">
    <option>--- Pilih Agama ---</option>
    <option value="kristen">Kristen</option>
    <option value="islam">Islam</option>
    </select><br><br>
<button name ="proses" type="submit">Hitung</button>
</form>

<?php 
$nama =$_POST['nama'];
$jabatan =$_POST['jabatan'];
$status =$_POST['status'];
$anak =$_POST['anak'];
$agama =$_POST['agama'];
$tombol =$_POST['proses'];


switch ($jabatan) {
    case 'manager':
        $gaji = 20000000;
        break;
    case 'asisten':
        $gaji = 15000000;
        break;
    case 'kabag':
        $gaji = 10000000;
        break;
    case 'staff':
        $gaji = 4000000;
        break;
    default:
        $gaji = 0;
}
$tunjab = $gaji * 0.2 ;
if ($status == 'menikah' && $anak <= 2) {
    $tunkel = $gaji * 0.05;
}
else if($status =='menikah' && $anak >=3 && $anak <=5){
    $tunkel = $gaji * 0.1;
}
else $tunkel = 0;

$gator = $gaji + $tunjab + $tunkel;
$zakat=($gator <=6000000) ? $gator * 0.025 : 0;
$totalgaji = $gator + $zakat;

if(isset($tombol)){
?>
Nama Karyawan : <?php echo $nama ?>
<br>Jabatan : <?php echo $jabatan ?>
<br>Status : <?php echo $status ?>
<br>Jumlah Anak : <?php echo $anak ?>
<br>Agama : <?php echo $agama ?>
<br>Total Gaji : <?php echo $totalgaji ?>

<?php } ?>

</body>
</html>