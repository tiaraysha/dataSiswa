<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <title>Data Siswa</title>
</head>

<style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

<body>

<center>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Rayon</th>
        <th>Aksi</th>
    </tr>
    <?php $i = 1;?>
        <?php if(isset($_SESSION["data_siswa"]) && is_array($_SESSION["data_siswa"]) ) :?>
        <?php foreach($_SESSION["data_siswa"] as $key => $item) :?>
    <tr>
       
        <td><?= $i++ ;?></td>
        <td><?= htmlspecialchars($item["nama"]);?></td>
        <td><?= htmlspecialchars($item["nis"]);?></td>
        <td><?= htmlspecialchars($item["rayon"]);?></td>
        <td><a href="hapus.php?id=<?= $key ;?>" class="btn btn-danger">Hapus</a>
        <a href="detail.php?id=<?= $key ;?>" class="btn btn-warning">Detail</a>
        <a href="edit.php?id=<?= $key ;?>" class="btn btn-primary">Edit</a>
    </td>
    </tr>
     <?php endforeach;?>
     <?php endif;?>
</table>


<button type="submit" name="btn" id="btn" class="btn btn-primary">Print Data</button>
<a href="index.php" class="btn btn-danger">Kembali</a>
</center>
<script>
    document.getElementById('btn').addEventListener('click', function(){
            window.print();
        })
</script>



</body>
</html>