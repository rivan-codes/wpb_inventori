<?php

if(isset($_POST['proses'])){
    include("./conn.php");
    date_default_timezone_set("Asia/Jakarta");

    $nama_operator = $_POST['nama_operator'];
    $username      = $_POST['username'];
    $password      = hash('md5', $_POST['password']);
    $email         = $_POST['email'];
    
    echo $password;
    // query insert 
    $tgl = date('Y-m-d H:i:s',
    time());
    
    // insert operator
    $query = "INSERT INTO tbl_operator(nama_operator,
        username,
        password,
        email,
        created_at,
        updated_at) 
        values ('$nama_operator',
            '$username',
            '$password',
            '$email',
            '$tgl',
            '$tgl')";
    
    $insert = $koneksi->query($query);
    if($insert){
        ?>
            <script>
                alert('Berhasil menambahkan data');
                window.location="index.php?hal=daftar_operator";
            </script>
        <?php
    }
}


?>

<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Operator</h3>
        </div>


        <form accept="" method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputText">Nama Operator</label>
                    <input type="text" maxlength="10" class="form-control" name="nama_operator">
                </div>
                <div class="form-group">
                    <label for="exampleInputText">Username</label>
                    <input type="text" maxlength="50" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputText">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputText">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
            </div>

            <div class="card-footer">
                <button type="button" class="btn btn-default">Batal</button>
                <button type="submit" name="proses" class="btn btn-primary float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>