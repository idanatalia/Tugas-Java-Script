<?php

$m1 = ['NIM'=>'180840020','nama'=>'Piedro','nilai'=>90];
$m2 = ['NIM'=>'180840010','nama'=>'Samuel','nilai'=>80];
$m3 = ['NIM'=>'180840030','nama'=>'Jefry','nilai'=>70];
$m4 = ['NIM'=>'180840001','nama'=>'Tono','nilai'=>85];
$m5 = ['NIM'=>'180840002','nama'=>'Tomi','nilai'=>87];
$m6 = ['NIM'=>'180840003','nama'=>'Santi','nilai'=>75];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6];
$ar_judul =['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];
$jumlahmhs = count($mahasiswa);
$jml = array_column($mahasiswa,'nilai');
$nilaimax = max($jml);
$nilai = array_sum($jml);
$nilairatarata = $nilai/$jumlahmhs;
$jumlah =[
    'Jumlah Mahasiswa'=>$jumlahmhs,
    'Nilai Max'=>$nilaimax,
    'Nilai Rata Rata'=>$nilairatarata,
]
?>

<table border="1px" width="100%" bgcolor="grey">
    <h1> Tabel Nilai Mahasiswa</h1>
<thead>
    <tr>
        <?php
            foreach($ar_judul as $judul){
                ?>
                    <th><?= $judul ?></th>
            <?php }?>
    </tr>
</thead>
<tbody>
    <?php
    $no = 1;
    foreach($mahasiswa as $mhs){
        $ket = ($mhs['nilai']>=60)? 'Lulus':'Tidak Lulus';
 if($mhs['nilai']>= 85 && $mhs['nilai']<= 100)$grade="A";
    else if($mhs['nilai']>=75 && $mhs['nilai']<= 84)$grade="B";
    else if($mhs['nilai']>= 60 && $mhs['nilai']<= 74)$grade="C";
    else if($mhs['nilai']>= 30 && $mhs['nilai']<= 59)$grade="D";
    else if($mhs['nilai']>= 0 && $mhs['nilai']<= 29)$grade="E";
    else $grade = "";

switch($grade){
    case 'A': $predikat ='Memuaskan';break;
    case 'B': $predikat ='Bagus';break;
    case 'C': $predikat ='Cukup';break;
    case 'D': $predikat ='Kurang';break;
    case 'E': $predikat ='Buruk;';break;
    default:$predikat="";
}

        ?>
        <tr>
            <td><?= $no ?> </td>
            <td><?= $mhs['NIM'] ?> </td>
            <td><?= $mhs['nama'] ?> </td>
            <td><?= $mhs['nilai'] ?> </td>
            <td><?= $ket ?> </td>
            <td><?= $grade ?> </td>
            <td><?= $predikat ?> </td>
            
        </tr>
    <?php $no++;}?>
</tbody>
<tfoot>
    <?php
        foreach($jumlah as $jum =>$total){
    ?>
    <tr>
        <th colspan ="6"><?= $jum ?></th>
        <th><?= $total ?> </th>
    </tr>
    <?php } ?>
</tfoot>
 