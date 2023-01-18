<?php
//ciptakan object dari class Jabatan dan Divisi
$obj_jabatan = new Jabatan();
$obj_divisi = new Divisi();
$obj_pegawai = new Pegawai();
//panggil fungsi untuk menampilkan data pegawai
$data_jabatan = $obj_jabatan->dataJabatan();
$data_divisi = $obj_divisi->dataDivisi();

// proses edit data
// tangkap request idEdit di url setelah klik tombol edit
$idEdit = $_REQUEST['idEdit'];
$data_pegawai = $obj_pegawai->getPegawai($idEdit);
$oldData = (!empty($idEdit)) ? $data_pegawai : array();

?>

<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Tambah Pegawai</h3>
                </div>
                <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Pegawai</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--====  End of Page Title  ====-->


<section class="section contact-form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Tambah <span class="alternate">Pegawai</span></h3>
                    <p>Form Untuk Menambahkan data pegawai baru</p>
                </div>
            </div>
        </div>
        <form action="pegawai_controller.php" method="POST" class="row">
            <div class="col-md-6">
                <label class="form-label"><b>NIP</b></label>
                <input type="text" class="form-control main" name="nip" id="nip" placeholder="NIP"
                    value="<?=$oldData['nip']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Nama</b></label>
                <input type="text" class="form-control main" name="nama" id="nama" placeholder="Nama"
                    value="<?=$oldData['nama']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Jenis Kelamin</b></label>
                <?php
$ar_gender = ['L' => 'Laki-Laki', 'P' => 'Perempuan'];
foreach ($ar_gender as $k => $jk) {
    //proses edit gender
    $cek = $oldData['gender'] == $k ? 'checked' : '';
    ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="<?=$k?>" <?=$cek?>>
                    <label class="form-check-label"><?=$jk?></label>
                </div>
                <?php }?>

            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Foto</b></label>
                <input type="text" class="form-control main" name="foto" id="foto" placeholder="Foto"
                    value="<?=$oldData['foto']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Tempat Lahir</b></label>
                <input type="text" class="form-control main" name="tmp_lahir" placeholder="Tempat Lahir"
                    value="<?=$oldData['tmp_lahir']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Tanggal lahir</b></label>
                <input type="date" class="form-control main" name="tgl_lahir" value="<?=$oldData['tgl_lahir']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Jabatan</b></label>
                <div class="form-group">
                    <select class="form-control main" name="jabatan">
                        <option selected>-- Pilih Jabatan --</option>
                        <?php
foreach ($data_jabatan as $jab) {
    //edit jabatan
    $sel1 = $oldData['jabatan_id'] == $jab['id'] ? 'selected' : '';
    ?>
                        <option value=" <?=$jab['id']?>" <?=$sel1?>><?=$jab['nama']?></option>
                        <?php
}
?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Divisi</b></label>
                <div class="form-group">
                    <select class="form-control main" name="divisi">
                        <option selected>-- Pilih Divisi --</option>
                        <?php
foreach ($data_divisi as $div) {
    //edit divisi
    $sel2 = $oldData['divisi_id1'] == $div['id'] ? 'selected' : '';
    ?>
                        <option value="<?=$div['id']?>" <?=$sel2?>><?=$div['nama']?></option>
                        <?php
}
?>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <label class="form-label"><b>Alamat</b></label>
                <textarea name="alamat" id="alamat" class="form-control main" rows="10"
                    placeholder="Alamat"><?=$oldData['alamat']?></textarea>
            </div>
            <div class="col-12 text-center">
                <?php
//----------modus entri data baru, form dlm keadaan kosong-------------
if (empty($idEdit)) {
    ?>
                <button type="submit" name="proses" value="simpan" class="btn btn-success btn-lg">Simpan</button>
                <?php
}
//----------modus edit data lama, form terisi data lama -------------
else {
    ?>
                <button type="submit" name="proses" value="ubah" class="btn btn-warning btn-lg">Ubah</button>
                <!-- hidden field untuk klausa where id=? -->
                <input type="hidden" name="idx" value="<?=$idEdit?>">
                <?php }?>
                <button type=" submit" name="proses" value="batal" class="btn btn-info btn-lg">
                    Batal</button>

            </div>
        </form>
    </div>
</section>