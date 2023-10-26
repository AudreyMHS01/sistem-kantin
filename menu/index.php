<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM menu ORDER BY id_menu DESC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <a href="add.php">Tambah Menu</a><br /><br />


    <table width='70%' border=1>
        <tr>
            <th>Id Menu</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Penjual</th>
            <th>Id Penjual</th>
            <th>Update</th>
        </tr>

        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['id_menu'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['jenis'] . "</td>";
            echo "<td>" . $user_data['harga'] . "</td>";
            echo "<td>" . $user_data['stok'] . "</td>";
            echo "<td>" . $user_data['id_penjual'] . "</td>";
            echo "<td> <a href='edit.php?id_menu=$user_data[id_menu]'>Edit</a> | <a href='delete.php?id_menu=$user_data[id_menu]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>