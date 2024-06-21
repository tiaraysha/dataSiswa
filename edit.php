<?php
session_start();
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $value = null;
    foreach($_SESSION["data_siswa"] as $key => $data) {
        if($key == $id)
         {
            $value = $data;
        }
    }

    if($value == null) {
        header("Location: index.php");
        exit;
    }
   
}

if(isset($_POST["btn"])) {
    
       $nama = $_POST["nama"];
       $nis = $_POST["nis"];
        $rayon = $_POST["rayon"];

        $_SESSION["data_siswa"][$id] = [
            "nama" => $nama,
            "nis" => $nis,
            "rayon" => $rayon
        ];

    header("Location: index.php");
    exit;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <title>Data Siswa</title>
</head>
<body>

<form action="" method="post">
        <div class="container text-center">
  <form action="" method="post">
    <div class="row mb-3">
      <label for="nama" class="col-sm-2 col-form-label" required>Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" id="nama" value="<?= $value["nama"];?>" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="nis" class="col-sm-2 col-form-label" required>NIS</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="nis" id="nis" value="<?= $value["nis"];?>" required>
      </div>
    </div>
    <div class="row mb-3">
      <label for="nama" class="col-sm-2 col-form-label" required>Rayon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="rayon" id="rayon" value="<?= $value["rayon"];?>" required>
         </div>
        </div>
         <button type="submit" name="btn" class="btn btn-primary">Edit</button>
    
</form>
</body>
</html>