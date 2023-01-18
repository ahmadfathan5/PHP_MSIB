<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Checkout example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Data Kepegawaian</h2>
            </div>

            <div class="row g-5 mb-5">
                <div class="col-12">
                    <form class="needs-validation" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="nama" class="form-label">Nama Pegawai</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="" value=""
                                    required>
                                <div class="invalid-feedback">
                                    Masukan Nama
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="agama" class="form-label">Agama</label>
                                <select name="agama" class="form-select" id="agama" required>
                                    <option>pilih</option>
                                    <option value="islam">Islam</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                    <option value="konghuchu">Konghuchu</option>
                                </select>
                                <div class="invalid-feedback">
                                    Pilih Agama
                                </div>
                            </div>

                            <div class="my-3">
                                <label for="zip" class="form-label">Jabatan</label>
                                <div class="form-check">
                                    <input id="manager" name="jabatan" type="radio" class="form-check-input"
                                        value="manager" required>
                                    <label class="form-check-label" for="manager">Manager</label>
                                </div>
                                <div class="form-check">
                                    <input id="assisten" name="jabatan" type="radio" class="form-check-input"
                                        value="assisten" required>
                                    <label class="form-check-label" for="assisten">Assiten</label>
                                </div>
                                <div class="form-check">
                                    <input id="kabag" name="jabatan" type="radio" class="form-check-input"
                                        value="kepala bagian" required>
                                    <label class="form-check-label" for="kabag">Kepala Bagian</label>
                                </div>
                                <div class="form-check">
                                    <input id="staff" name="jabatan" type="radio" class="form-check-input" value="staff"
                                        required>
                                    <label class="form-check-label" for="staff">staff</label>
                                </div>
                            </div>

                            <div class="my-3">
                                <label for="status" class="form-label">Status</label>
                                <div class="form-check">
                                    <input id="sudahMenikah" name="status" type="radio" class="form-check-input"
                                        value="sudah menikah" required>
                                    <label class="form-check-label" for="sudahMenikah">Sudah Menikah</label>
                                </div>
                                <div class="form-check">
                                    <input id="belumMenikah" name="status" type="radio" class="form-check-input"
                                        value="belum menikah" required>
                                    <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="anak" class="form-label">Jumlah Anak</label>
                                <input type="number" name="anak" class="form-control" id="anak" placeholder="" required>
                                <div class="invalid-feedback">
                                    Masukan jumlah anak.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal">
                            submit
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            lihat
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <?php
// tangkap request
$nama = $_POST['nama'];
$agama = $_POST['agama'];
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];

$anak = ($status == 'sudah menikah') ? $_POST['anak'] : 'Tidak Memiliki Anak';

// penetuan gaji
switch ($jabatan) {
    case 'manager':$gaji = 20000000;
        break;
    case 'assisten':$gaji = 15000000;
        break;
    case 'kepala bagian':$gaji = 10000000;
        break;
    case 'staff':$gaji = 4000000;
        break;
    default:$gaji = 0;
        break;
}

// penentuan tunjangan jabatan (20%)
$tunjab = $gaji * 0.2;

// penentuan tunjangan keluarga (5%-15%)
if ($status == 'sudah menikah' && $anak >= 1 && $anak < 3) {
    $tunkel = $gaji * 0.05;
} elseif ($status == 'sudah menikah' && $anak >= 3 && $anak < 6) {
    $tunkel = $gaji * 0.1;
} elseif ($status == 'sudah menikah' && $anak >= 5) {
    $tunkel = $gaji * 0.15;
} else {
    $tunkel = 0;
}

$gator = $gaji + $tunjab + $tunkel;

$zakat = ($agama == 'islam' && $gator >= 6000000) ? $gator * 0.025 : 0;

$gaber = $gator - $zakat;
?>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Nama Pegawai: <?=$nama?>
                    <br> agama: <?=$agama?>
                    <br> Jabatan: <?=$jabatan?>
                    <br> Status: <?=$status?>
                    <br> Jumlah Anak: <?=$anak?>
                    <br> Gaji Pokok: Rp<?=number_format($gaji, 2, ',', '.')?>
                    <br> Tunjangan Jabatan: Rp<?=number_format($tunjab, 2, ',', '.')?>
                    <br> Tunjangan keluarga: Rp<?=number_format($tunkel, 2, ',', '.')?>
                    <br> Gaji Kotor: Rp<?=number_format($gator, 2, ',', '.')?>
                    <br> Zakat: Rp<?=number_format($zakat, 2, ',', '.')?>
                    <br> Take Home Pay: Rp<?=number_format($gaber, 2, ',', '.')?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script src="form-validation.js"></script>
</body>

</html>