<?php
$query = "SELECT id_operator,
        nama_operator,
        username,
        email 
    FROM tbl_operator 
    WHERE deleted_at IS NULL 
    ORDER BY id_operator DESC";

$data = $koneksi->query($query);

?>

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Operator</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Operator</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        while($value = $data->fetch_array()){
                            ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$value['nama_operator'];?></td>
                                <td><?=$value['username'];?></td>
                                <td><?=$value['email'];?></td>
                                <td>
                                    <a href="index.php?hal=edit_operator&id=<?=$value['id_operator'];?>" class="btn btn-sm bg-gradient-primary">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="index.php?hal=hapus_operator&id=<?=$value['id_operator'];?>" class="btn btn-sm bg-gradient-danger">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }

                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nama Operator</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>