<<!DOCTYPE html>
<html>
<head><title>Sistem Rapot Sederhana</title></head>
<body>
    <FORM ACTION="Prosesluvi.php" METHOD="POST" NAME="input">
    <center><h2>SISTEM RAPOT SEDERHANA</h2></center>
    <table>
    <tr>
      <td>NAMA</td>
      <td>:</td>
      <td><input type='text' name='nama'></td>
    </tr>
    <tr>
      <td>NIS</td>
      <td>:</td>
      <td><input type='number' name='nis'></td>
    </tr>
    <tr>
      <td>ALAMAT</td>
      <td>:</td>
      <td><textarea name='alamat' cols="40" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>JENIS KELAMIN</td>
      <td>:</td>
      <td><input type='radio' name='jeniskelamin' value='Laki-laki' checked>Laki-laki</td>
      <td><input type='radio' name='jeniskelamin' value='Perempuan'>Perempuan</td>
    </tr>
    <tr>
      <td>AGAMA</td>
      <td>:</td>
      <td>
      <select name='agama'>
            <option value='Islam'>Islam</option>
            <option value='Kristen'>kristen</option>
            <option value='Buddha'>Buddha</option>
            <option value='Hindu'>Hindu</option>
            </select>
        </td>
    </tr>
    <tr>
      <td>SEKOLAH</td>
      <td>:</td>
      <td><input type='text' name='sekolah'></td>
     </tr>
     <tr>
       <td>NAMA ORANG TUA/WALI</td>
       <td>:</td>
       <td><input type='text' name='namaorangtua/wali'></td>
    </tr>
    <tr>
      <td>MATA PELAJARAN YANG DI SUKAI</td>
      <td>:</td>
      <td>
      <input type='checkbox' name='mapel1' value='RPL' checked> RPL
      <input type='checkbox' name='mapel2' value='DKK'>DKK
      <input type='checkbox' name='mapel3' value='B.INDONESIA'>B.INDONESIA
      <input type='checkbox' name='mapel4' value='B.SUNDA'>B.SUNDA
      <input type='checkbox' name='mapel5' value='MATEMATIKA'>MATEMATIKA
      </td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td>:</td>
      <td><input type='email' name='email'></td>
     </tr>
     <tr>
       <td>MASUKAN NILAI IZAJAH SD</td>
       <td>:</td>
       <td><input type='text' name='nilai'></td>
       </tr>
       <tr>
         <td>&nbsp</td>
         <td>&nbsp</td>
         <td><input type='submit' name='input' value='Input Data'></td>
         </tr>
       </table>
    </FORM>
</body>
</html>