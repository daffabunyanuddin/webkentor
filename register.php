<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Registrasi pegawai</h3>
    <form action="Proses_register.php" method="post">
        Nik :
        <input type="text" name="Nik" value="" class="form-control">
        Nama pegawai :
        <input type="text" name="Nama_pegawai" value="" class="form-control">
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Gender : 
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        No tlp :
        <input type="text" name="No_tlp" value="" class="form-control">
        password :
        <input type="text" name="password" value="" class="form-control">
        <input type="submit" name="register" value="" class="btn btn-primary">
            <option></option>
            <?php 
            include "Koneksi.php";
            $qry_kelas=mysqli_query($conn,"select * from tabel_pegawai");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option value="'.$data_kelas['id'].'">'.$data_kelas['nama_kelas'].'</option>';    
            }
            ?>
        </select>
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="register" value="" class="btn btn-primary">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
