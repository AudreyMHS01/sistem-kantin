<?php
include_once("../config.php");

$result = mysqli_query($mysqli, "SELECT * FROM tb_penjual ORDER BY id DESC");
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
        </tr>
    </table>
    <?php
    while ($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $user_data['id_jual'] . "</td>";
        echo "<td>" . $user_data['name'] . "</td>";
        echo "<td>" . $user_data['alamat'] . "</td>";
        echo "<td>" . $user_data['no_telp'] . "</td>";
        echo "<td> <a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>

</body>

</html>