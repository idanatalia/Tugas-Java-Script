<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];

$ar_skill = ['HTML'=>10,'CSS'=>10, 'Javvascript'=>20, 'RWD Bpptstrap'=>20, 'PHP'=>30, 'Laravel'=>10];
$domisili = ["Jakarta","Bandung","Bekasi","Malang","Surabaya","Lainnya"];

?>
<fieldset style="background-color:aquamarine;">
    <legend>Form Registrasi Kelompok Belajar</legend>

        <table>
            <thead>
                <tr>
                    <th> Form Register</th>
                </tr>
            </thead>
            <tbody>
                <form method="POST">
                    <tr>
                        <td>Nim :</td>
                        <td>
                            <input type="text" name="nim">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama :</td>
                        <td>
                            <input type="text" name="nama">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin : </td>
                        <td>
                            <input type="radio" name="jk" value="Laki-Laki">Laki-Laki &nbsp;
                            <input type="radio" name="jk" value="Perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Program Studi : </td>
                        <td>
                            <select name="prodi">
                                <?php 
                                foreach($ar_prodi as $prodi => $v){
                                    ?>
                                    <option value="<?= $prodi ?>"><?= $v ?></option>
                                <?php } ?>
                                </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Skill Programing : </td>
                        <td>
                            <?php 
                                foreach($ar_skill as $skill => $s){
                                    ?>
                                    <input type="checkbox" name="skill[]" value="<?= $skill ?>"><?= $skill ?>
                                <?php } ?>
                        </td>
                    </tr>
                    <td>Domisili : </td>
                        <td>
                            <select name="domisili">
                                <?php 
                                foreach($domisili as $d){
                                    ?>
                                    <option value="<?= $d ?>"><?= $d ?></option>
                                <?php } ?>
                                </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td>
                            <input type="text" name="email">
                        </td>
                    </tr>
                    <tr>
                    <tfoot>
                        <tr>
                            <th cosplan="2">
                                <button name="proses">Submit</button>
                            </th>
                        </tr>
                    </tfoot>
           
        </table>
</fieldset>
<?php 
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $skor = count($skill);
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
}
?>
NIM : <?= $nim ?><br>
Nama : <?= $nama ?><br>
Jenis Kelamin : <?= $jk ?><br>
Program Studi : <?= $prodi ?><br>
Skill Programing : 
<?php 

foreach($skill as $s){?>
<?= $s ?>, 
<?php } ?><br>
Skor Skill : <?= $skor ?>
<br>
Kategori Skill : 
<?php 
            
            if($skor >= 5 && $skor<= 6)$grade="Sangat Baik";
    else if($skor>=3 && $skor<= 5)$grade="Baik";
    else if($skor>= 1 && $skor<= 3)$grade="Cukup";
    else if($skor>= 0 && $skor<= 1)$grade="Kurang";
    else if($skor= 0 )$grade="E";
    else $grade = "";
    ?> <?= $grade ?> <br>
Domisili : <?= $domisili ?><br>
Email : <?= $email ?><br>
