
<?php
session_start();
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $detail = null;
    foreach($_SESSION["data_siswa"] as $key => $data) {
        if($key == $id) {
            $detail = $data;
        }
    }

    if($detail == null) {
        header("Location: index.php");
        exit;
    }
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <title>Data Siswa</title>
</head>
<body>
    <center>
    <h1><?= $detail["nama"];?></h1>
    <h1><?= $detail["nis"];?></h1>
    <h1><?= $detail["rayon"];?></h1>
    <a href="index.php" class="btn btn-primary">Kembali</a>
</center>
</body>
</html>