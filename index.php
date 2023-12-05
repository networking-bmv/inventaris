<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Sistem Inventaris | Audio Visual</title>
</head>

<body>
    <header>
        <h3>Sistem Inventaris</h3>
        <h1>Audio Visual BMV Katedral Bogor</h1>
    </header>

    <h4>Navigation</h4>
    <nav>
        <ul>
            <li><a href="registration.php">Registration New Item</a></li>
            <li><a href="list.php">Check Item</a></li>
        </ul>
    </nav>

    </body>
</html>

<?php if(isset($_GET['system_status'])): ?>
    <p>
        <?php
            if($_GET['system_status'] == 'success'){
                echo "Successfully Registered New Item!";
            } else {
                echo "Register Failed!";
            }
        ?>
    </p>
<?php endif; ?>