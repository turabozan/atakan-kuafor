<?php
$username = $_POST['username'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$email = $_POST['mail'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];

$baglan = mysqli_connect("localhost","root","","atakankuafor");
$baglan->set_charset("utf8");

$sql="SELECT username from uyeler WHERE username='$username'";

$sonuc1= mysqli_query($baglan,$sql);
$satirsay=mysqli_num_rows($sonuc1);
if($username==null || $pass==null || $pass2==null || $email==null || $name==null || $surname==null || $phone==null || $birthdate==null)
{
  echo "Alanlar boş bırakılmamalı.Eksik doldurdunuz.";
}
else
{
  if($pass != $pass2)
  {
    echo "Şifreler birbirine uyuşmuyor.";
  }
  else
  {
    if ($satirsay>0)
    {
    echo "Bu kullanıcı adı daha önce kaydedilmiş";

    } else{
    $sqlekle="INSERT INTO uyeler (username, password, email, name, surname, phone, birthdate)
    VALUES ('$username', '$pass', '$email', '$name', '$surname', '$phone', '$birthdate')";

    $sonuc=mysqli_query($baglan,$sqlekle);

    if ($sonuc==0)
    echo "Eklenemedi, kontrol ediniz";
    else
    echo "Başarıyla eklendi";
    };
  }
}
?>
