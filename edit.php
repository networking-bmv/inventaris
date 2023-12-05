<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM inventaris WHERE id=$id";
$query = mysqli_query($db, $sql);
$item = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("Data Not Found..");
}

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./assets/css/form.css">
    <title>Sistem Inventaris | Audio Visual</title>
</head>

<body>
    <header>
        <h3>Edit Item</h3>
    </header>

    <form action="edit-process.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $item['ID'] ?>" />

        <p>
            <label for="nama">Item Name: </label>
            <input type="text" name="nama" placeholder="Speaker" value="<?php echo $item['nama'] ?>" required />
        </p>
        <p>
            <label for="lokasi">Location: </label>
            <input type="text" name="lokasi" placeholder="Dalam Gereja" value="<?php echo $item['lokasi'] ?>" required />
        </p>
        <p>
            <label for="status">Status: </label>
            <?php $status = $item['status']; ?>
            <select name="status">
                <option <?php echo ($status == 'Used') ? "selected": "" ?>>Used</option>
                <option <?php echo ($status == 'Not Used') ? "selected": "" ?>>Not Used</option>
                <option <?php echo ($status == 'Service Period') ? "selected": "" ?>>Service Period</option>
                <option <?php echo ($status== 'Broken') ? "selected": "" ?>>Broken</option>
            </select>
        </p>
        <p>
            <label for="garansi">Warranty: </label>
            <?php $garansi = $item['garansi']; ?>
            <select name="garansi">
                <option <?php echo ($garansi == 'Active') ? "selected": "" ?>>Active</option>
                <option <?php echo ($garansi == 'InActive') ? "selected": "" ?>>InActive</option>
            </select>
        </p>
        <p>
            <label for="keterangan">Information: </label>
            <textarea name="keterangan" value="<?php echo $item['keterangan'] ?>"></textarea>
        </p>
        <p>
            <input type="submit" value="Save" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>