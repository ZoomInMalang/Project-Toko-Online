<?php
if($_POST){
    $username=$_POST['username'];
    $password= $_POST['pswd'];
    $password2 = $_POST['con-pswd'];
    if(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='login.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='login.php';</script>";
    } elseif( $password !== $password2 ) {
		echo "<script>alert('konfirmasi password tidak sesuai!');location.href='login.php';</script>";
	}else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"INSERT INTO `tbuser`(`id_user`, `username`, `password`) VALUES ('','".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){echo "<script>alert('Sukses menambahkan akun');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan akun');location.href='login.php';</script>";
        }
    }
}
?>