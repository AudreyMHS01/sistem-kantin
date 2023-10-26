<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM tb_penjual ORDER BY id_penjual DESC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <a href="add.php">Tambah penjual</a><br /><br />

    <table width='70%' border=1>
        <tr>
            <th>Id Penjual</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Update</th>
        </tr>

        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['id_penjual'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['alamat'] . "</td>";
            echo "<td>" . $user_data['no_hp'] . "</td>";
            echo "<td> <a href='edit.php?id_penjual=$user_data[id_penjual]'>Edit</a> | <a href='delete.php?id_penjual=$user_data[id_penjual]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>