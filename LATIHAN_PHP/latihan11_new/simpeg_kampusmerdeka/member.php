<?php
//ciptakan object dari class member
$model = new Member();
//panggil fungsi untuk menampilkan data member
$data_member = $model->dataMember();
/*
foreach ($data_member as $row) {
print $row['nip'] . "\t";
print $row['nama'] . "\t";
print $row['alamat'] . "\n";
}
 */

$sesi = $_SESSION['MEMBER'];
if (isset($sesi) && $sesi['role'] == 'admin') {
    ?>
<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Daftar <span class="alternate">member</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary mb-3 btn-sm" href="index.php?hal=member_form"><i class="fa fa-plus"></i>
                    Tambah member</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">fullname</th>
                            <th scope="col">email</th>
                            <th scope="col">username</th>
                            <th scope="col">role</th>
                            <th scope="col">foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$no = 1;
    foreach ($data_member as $row) {
        ?>
                        <tr>
                            <th scope="row"><?=$no?></th>
                            <td><?=$row['fullname']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['username']?></td>
                            <td><?=$row['role']?></td>
                            <td><?=$row['foto']?></td>
                            <td>
                                <form action="member_controller.php" method="POST">
                                    <a class="btn btn-primary btn-sm"
                                        href="index.php?hal=member_detail&id=<?=$row['id']?>">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning btn-sm"
                                        href="index.php?hal=member_form&idEdit=<?=$row['id']?>">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus"
                                        onclick="return confirm('Anda Yakin Data akan diHapus?')" title="Hapus member">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                    <input type="hidden" name="idx" value="<?=$row['id']?>">
                                </form>
                            </td>
                        </tr>
                        <?php
$no++;
    }
    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php
} else {
    echo '<script> alert("anda tidak memiliki hak akses");history.back(); </script>';
}
?>