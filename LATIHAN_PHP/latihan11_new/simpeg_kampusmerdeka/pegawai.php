<?php
//ciptakan object dari class Pegawai
$model = new Pegawai();
//panggil fungsi untuk menampilkan data pegawai
$data_pegawai = $model->dataPegawai();
/*
foreach ($data_pegawai as $row) {
print $row['nip'] . "\t";
print $row['nama'] . "\t";
print $row['alamat'] . "\n";
}
 */

$sesi = $_SESSION['MEMBER'];
if (isset($sesi)) {
    ?>
<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Daftar <span class="alternate">Pegawai</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary mb-3 btn-sm" href="index.php?hal=pegawai_form"><i class="fa fa-plus"></i>
                    Tambah Pegawai</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Divisi</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$no = 1;
    foreach ($data_pegawai as $row) {
        ?>
                        <tr>
                            <th scope="row"><?=$no?></th>
                            <td><?=$row['nip']?></td>
                            <td><?=$row['nama']?></td>
                            <td><?=$row['gender']?></td>
                            <td><?=$row['bagian']?></td>
                            <td><?=$row['jab']?></td>
                            <td><?=$row['alamat']?></td>
                            <td>
                                <form action="pegawai_controller.php" method="POST">
                                    <a class="btn btn-primary btn-sm"
                                        href="index.php?hal=pegawai_detail&id=<?=$row['id']?>">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <?php
if ($sesi['role'] != 'staff') {
            ?>
                                    <a class="btn btn-warning btn-sm"
                                        href="index.php?hal=pegawai_form&idEdit=<?=$row['id']?>">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus"
                                        onclick="return confirm('Anda Yakin Data akan diHapus?')" title="Hapus Pegawai">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                    <input type="hidden" name="idx" value="<?=$row['id']?>">
                                    <?php
}
        ?>
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