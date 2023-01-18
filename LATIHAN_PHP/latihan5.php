<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container px-5 my-5">
        <h1>I Calc</h1>
        <form method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="form-floating mb-3">
                <input class="form-control" name="angka1" id="angka1" type="text" placeholder="Angka 1"
                    data-sb-validations="required" />
                <label for="angka1">Angka 1</label>
                <div class="invalid-feedback" data-sb-feedback="angka1:required">Angka 1 is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="angka2" id="angka2" type="text" placeholder="Angka 2"
                    data-sb-validations="required" />
                <label for="angka2">Angka 2</label>
                <div class="invalid-feedback" data-sb-feedback="angka2:required">Angka 2 is required.</div>
            </div>
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a
                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary btn-lg" name="proses" type="submit" value="+">+</button>
                <button class="btn btn-danger btn-lg" name="proses" type="submit" value="-">-</button>
                <button class="btn btn-success btn-lg" name="proses" type="submit" value="*">x</button>
                <button class="btn btn-warning btn-lg" name="proses" type="submit" value="/">/</button>
                <button class="btn btn-info btn-lg" name="proses" type="submit" value="%">%</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <?php
$a1 = $_POST['angka1'];
$a2 = $_POST['angka2'];
$tombol = $_POST['proses'];

// print_r($a1 . $a2 . $tombol);die();

function hitung($a1, $a2, $tombol)
{
    if ($tombol == '+') {
        $hasil = $a1 + $a2;
    } else if ($tombol == '-') {
        $hasil = $a1 - $a2;
    } else if ($tombol == '*') {
        $hasil = $a1 * $a2;
    } else if ($tombol == '/') {
        $hasil = $a1 / $a2;
    } else if ($tombol == '/') {
        $hasil = $a1 / $a2;
    } else {
        $hasil = 0;
    }
    return $hasil;
};

if (isset($tombol)) {
    ?>
    <div class="alert alert-success text-center">
        Hasil Perhitungan dari <?=$a1?> <?=$tombol?> <?=$a2?> adalah <?=hitung($a1, $a2, $tombol)?>
    </div>
    <?php
}
;
?>


</body>

</html>