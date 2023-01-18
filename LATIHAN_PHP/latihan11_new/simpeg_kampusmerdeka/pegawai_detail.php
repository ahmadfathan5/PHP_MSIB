<?php
//tanggkap request id dari klik
$id = $_REQUEST['id'];
//ciptakan object dari class Pegawai
$model = new Pegawai();
//panggil fungsi untuk menampilkan data pegawai
$pegawai = $model->getPegawai($id);
/*
foreach ($data_pegawai as $row) {
print $row['nip'] . "\t";
print $row['nama'] . "\t";
print $row['alamat'] . "\n";
}
 */
?>

<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Pegawai Details</h3>
                </div>
                <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                    <li class="breadcrumb-item active">Pegawai Details</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--====  End of Page Title  ====-->


<section class="section single-speaker">
    <div class="container">
        <div class="block">
            <div class="row">
                <div class="col-lg-5 col-md-6 align-self-md-center">
                    <div class="image-block">
                        <img src="images/speakers/<?=$pegawai['foto']?>" class="img-fluid" alt="<?=$pegawai['nama']?>">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 align-self-center">
                    <div class="content-block">
                        <div class="name">
                            <h3><?=$pegawai['nama']?></h3>
                        </div>
                        <div class="profession">
                            <p><?=$pegawai['jab']?></p>
                        </div>
                        <div class="details personal-info">
                            <ul class="m-0 p-0">
                                <li>Divisi  : <?=$pegawai['bagian']?></li>
                                <li>Gender  : <?=$pegawai['gender']?></li>
                                <li>Tempat Lahir  : <?=$pegawai['tmp_lahir']?></li>
                                <li>Tanggal Lahir : <?=$pegawai['tgl_lahir']?></li>
                                <li>Alamat  : <?=$pegawai['alamat']?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-2" align="right">
            <a href="index.php?hal=pegawai" class="btn btn-primary" title="back">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
            </a>
        </div>
    </div>
</section>