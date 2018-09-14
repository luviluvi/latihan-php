<html>
<head><title>login</title></head>
<body>
        <FORM ACTION="" METHOD="POST" NAME="login">
        <h2> Ayo Login Disini *_*</h2>
        Emaill <input type="text" name="login"><br>
        Password  <input type="password" name="password"><br>
    <input type="submit" name="login" value="login">
    <input type="reset" name="reset" value="reset">
</FORM>
</body>
</html>

<?php
 if (isset($_POST['login'])) {
     $user = $_POST['login'];
     $pass = $_POST['Password'];
if($user == "Luvi Nur Allawiyyah@gmail.com" && $pass == "123456"){
    echo "<h2>Login Gagal</h2>";
} else {
    echo "<h2>Login Berhasil</h2>";
}
}
?>