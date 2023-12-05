<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./assets/css/form.css">
    <title>Sistem Inventaris | Audio Visual</title>
</head>

<body>
    <header>
        <h3>Registration New Item</h3>
    </header>

    <form action="reg-process.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Item Name: </label>
            <input type="text" name="nama" placeholder="Speaker" required />
        </p>
        <p>
            <label for="lokasi">Location: </label>
            <input type="text" name="lokasi" placeholder="Dalam Gereja" required />
        </p>
        <p>
            <label for="status">Status: </label>
            <select name="status">
                <option>Used</option>
                <option>Not Used</option>
                <option>Service Period</option>
                <option>Broken</option>
            </select>
        </p>
        <p>
            <label for="garansi">Warranty: </label>
            <select name="garansi">
                <option>Active</option>
                <option>InActive</option>
            </select>
        </p>
        <p>
            <label for="keterangan">Information: </label>
            <textarea name="keterangan"></textarea>
        </p>
        <p>
            <input type="submit" value="Register" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>