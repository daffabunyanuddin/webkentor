<?php
if($_POST){
    $Nik=$_POST['Nik'];
    $Nama_pegawai=$_POST['Nama_pegawai'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $No_tlp=$_POST['No_tlp'];
    $password= $_POST['password'];
    $id_jabatan=$_POST['id_jabatan'];

    // if(empty($Nama_pegawai)){
    //     echo "<script>alert('nama pegawai tidak boleh kosong');location.href='register.php';</script>";


    // } elseif(empty($No_tlp)){
    //     echo "<script>alert('No_tlp tidak boleh kosong');location.href='register.php';</script>";
    // } elseif(empty($password)){
    //     echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
    // } else {
        include "Koneksi.php";
        $insert=mysqli_query($conn,"INSERT INTO `tabel_pegawai` (`Nik`, `Nama`, `Alamat`, `Jenis_kelamin`, `no_tlp`, `password`, `id_jabatan`) VALUES ('$Nik', '$Nama_pegawai', '$$alamat', '$gender', '$No_tlp', '".md5($password)."', '$id_jabatan');") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses melakukan registrasi');location.href='register.php';</script>";
        } else {
            echo "<script>alert('Gagal melakukan registrasi');location.href='register.php';</script>";
        }
    }
?>