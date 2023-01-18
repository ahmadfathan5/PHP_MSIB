<!--==============================
=            Schedule            =
===============================-->

<?php
$sql = 'SELECT nip, nama, gender, alamat FROM pegawai';
$dataPegawai = $dbh->query($sql);
// foreach ($dataPegawai as $row) {
//     print $row['nip'] . "\t";
//     print $row['nama'] . "\t";
//     print $row['alamat'] . "\t";
// }
?>

<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Daftar <span class="alternate">Pegawai</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusm tempor incididunt ut labore
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="schedule-contents bg-schedule">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active schedule-item" id="nov20">
                            <!-- Headings -->
                            <ul class="m-0 p-0">
                                <li class="headings">
                                    <div class="time">No</div>
                                    <div class="subject">NIP</div>
                                    <div class="speaker">NAMA</div>
                                    <div class="venue">Alamat</div>
                                </li>
                                <?php
$no = 1;
foreach ($dataPegawai as $row) {
    ?>
                                <!-- Schedule Details -->
                                <li class="schedule-details">
                                    <div class="block">
                                        <!-- time -->
                                        <div class="time">
                                            <span class="time"><?=$no++?></span>
                                        </div>
                                        <!-- Subject -->
                                        <div class="subject"><?=$row['nip']?></div>
                                        <!-- Speaker -->
                                        <div class="speaker">
                                            <img src="images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
                                            <span class="name"><?=$row['nama']?></span>
                                        </div>
                                        <!-- Venue -->
                                        <div class="venue"><?=$row['alamat']?></div>
                                    </div>
                                </li>
                                <?php
}
?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$no = 1;
foreach ($dataPegawai as $row) {
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
                                <i class="fa fa-eye"></i>
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

<!--====  End of Schedule  ====-->