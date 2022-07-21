
<?php 
    $queryBarang = "SELECT COUNT(id_barang) AS countBarang FROM tbl_barang WHERE id_operator='".$profile->id_operator."'";
    $dataBarang = $koneksi->query($queryBarang)->fetch_object();

    $queryBarangMasuk = "SELECT COUNT(id_barang_masuk) AS countBarangMasuk FROM tbl_barang_masuk WHERE id_operator='".$profile->id_operator."'";
    $dataBarangMasuk = $koneksi->query($queryBarangMasuk)->fetch_object();

    $queryBarangKeluar = "SELECT COUNT(id_barang_keluar) AS countBarangKeluar FROM tbl_barang_keluar WHERE id_operator='".$profile->id_operator."'";
    $dataBarangKeluar = $koneksi->query($queryBarangKeluar)->fetch_object();
?>
    <div class="col-md-5">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="row">

                    <div class="col-sm-5">
                        <div class="">
                            <img class="profile-user-img img-fluid img-circle" src="dist/img/profile.png"
                                alt="User profile picture">
                        </div>
                        <h3 class="profile-username"><?=$profile->nama_operator;?></h3>
                        <p class="text-muted">Backend Developer</p>
                    </div>

                    <div class="col-sm-7 mt-5">
                        <p class="float-right"><?=$profile->username;?></p>
                        <p class="float-right"><?=$profile->email;?></p>                    
                        <p class="float-right"><?=$profile->register_date;?></p>
                    </div>
                </div>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Kelola Barang</b> <p class="float-right text-primary"><?=$dataBarang->countBarang;?></p>
                    </li>
                    <li class="list-group-item">
                        <b>Kelola Barang Masuk</b> <p class="float-right text-primary"><?=$dataBarangMasuk->countBarangMasuk;?></p>
                    </li>
                    <li class="list-group-item">
                        <b>Kelola Barang Keluar</b> <p class="float-right text-primary"><?=$dataBarangKeluar->countBarangKeluar;?></p>
                    </li>
                </ul>

            </div>

        </div>
    </div>