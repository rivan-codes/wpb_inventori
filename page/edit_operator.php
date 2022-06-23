<?php
$namaOperator  = '';
$username = '';
$email = '';

include("./conn.php");
date_default_timezone_set("Asia/Jakarta");

if(isset($_GET['id'])){

    $idOperator = $_GET['id'];
    $tgl = date('Y-m-d H:i:s', time());
    // get operator
    $query = "SELECT * FROM tbl_operator where id_operator='$idOperator'";
    
    $data = $koneksi->query($query);
    
    while($value = $data->fetch_array()){
        $namaOperator = $value['nama_operator'];
        $username     = $value['username'];
        $email        = $value['email'];
    }
}
if(isset($_POST['ubah'])){
    // update operator
    $namaOperator = $_POST['nama_operator'];
    $username     = $_POST['username'];
    $email        = $_POST['email'];
    $password     = $_POST['password'];
    
    $tgl = date('Y-m-d H:i:s', time());
    $id = $_GET['id'];
    $query = "UPDATE tbl_operator set nama_operator = '$namaOperator', 
            username ='$username', 
            email='$email',
            password ='$password '
        WHERE id_operator ='$id'";

    $update = $koneksi->query($query);

    if($update){
        ?>
            <script>
                alert('Berhasil mengubah data');
                window.location="index.php?hal=daftar_operator";
            </script>
        <?php
    }

}

?>

<div class="col-md-6">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Barang</h3>
        </div>


        <form accept="" method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputText">Nama Operator</label>
                    <input type="text" maxlength="50" value="<?=$namaOperator;?>" class="form-control" name="nama_operator">
                </div>
                <div class="form-group">
                    <label for="exampleInputText">Username</label>
                    <input type="text" maxlength="50" class="form-control" value="<?=$username;?>" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputText">Password</label>
                    <input type="password" maxlength="50" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputText">Email</label>
                    <input type="text" maxlength="50" class="form-control" value="<?=$email;?>" name="email">
                </div>
            </div>

            <div class="card-footer">
                <button type="button" class="btn btn-default">Batal</button>
                <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah</button>
            </div>
        </form>
    </div>
</div>