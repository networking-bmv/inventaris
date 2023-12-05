<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./assets/css/list.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Sistem Inventaris | Audio Visual</title>
</head>

<body>
    <header>
        <h3>Listed Items</h3>
    </header>

    <nav>
        <a href="registration.php">[+] Add New | </a>
        <a onclick="window.print()">[+] Download</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Item Name</th>
            <th>Location</th>
            <th>Status</th>
            <th>Warranty</th>
            <th>Information</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM inventaris";
        $query = mysqli_query($db, $sql);

        while($item = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$item['ID']."</td>";
            echo "<td>".$item['nama']."</td>";
            echo "<td>".$item['lokasi']."</td>";
            echo "<td>".$item['status']."</td>";
            echo "<td>".$item['garansi']."</td>";
            echo "<td>".$item['keterangan']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$item['ID']."'>Edit</a> | ";
            echo "<a href='delete.php?id=".$item['ID']."'>Delete</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total Item: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>