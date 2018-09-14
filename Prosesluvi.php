<?php
if(isset($_POST['input'])){
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah'];
$nama_orang_tua_wali= $_POST['namaorangtua/wali'];
$matapelajaran_yang_disukai = $_POST['matapelajaran yang disukai'];
$email = $_POST['email'];
$masukan_nilai_izajah_sd = $_POST['nilai'];

echo "nama : <b>$nama</b><br>";
echo "nis : <b>$nis</b><br>";
echo "alamat: <b> $alamat</b><br>";
echo "jeniskelamin: <b>$jeniskelamin</b><br>";
echo "agama: <b>$agama</b><br>";
echo "sekolah :<b>$sekolah</b><br>";
echo "nama orang tua/wali : <b>$nama_orang_tua_wali</b><br>";
echo "email : <b>$email</b><br>";
echo "masukan nilai izajah sd : <b>$masukan_nilai_izajah_sd</b><br>";
echo "matapelajaran yang disukai: <b>$matapelajaran_yang_disukai</b><br>";
    if(isset($_POST['mapel1'])) {
        echo "#" . $_POST['mapel1'] . "<br>";
    }
    if(isset($_POST['mapel2'])) {
        echo "#" . $_POST['mapel2' . "<br>"];
    }
    if(isset($_POST['mapel3'])){
        echo "#" . $_POST['mapel3' . "<br>"];
    }
    if(isset($_POST['mapel4'])){
        echo "#" . $_POST['mapel4' . "<br>"];
    }
    if(isset($_POST['mapel5'])) {
        echo "#" . $_POST['mapel5' . "<br>"];
    }
    
    if($masukan_nilai_izajah_sd>=25) {
        echo "Nilai Anda: <b>$masukan_nilai_izajah_sd</b> (Excellent!)<br>";
    }
    if($masukan_nilai_izajah_sd<25){
        echo "Nilai Anda: <b>$masukan_nilai_izajah_sd</b> (Worst!)<br>";
    }
}
?>
