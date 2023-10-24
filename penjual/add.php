<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>

<body>
    <a href="index.php">Homepage</a><br />
    <a href="..\add.php">Menu</a><br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Id penjual</td>
                <td><input type="number" name="id_jual"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="number" name="no_telp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        $id_jual = $_POST['id_jual'];
        $name = $_POST['name'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];

        include_once("../config.php");

        $result = mysqli_query($mysqli, "INSERT INTO tb_penjual(id_penjual, nama, alamat, no_hp) VALUES('$id_jual','$name','$alamat', '$no_telp')");

        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>

</body>

</html>