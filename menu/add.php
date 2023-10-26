<html>

<head>
    <title>Add Menu</title>
</head>

<body>

    <a href="index.php">Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Id Menu</td>
                <td><input type="number" name="id_menu"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>
                    <select name="jenis" id="jenis">
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok"></td>
            </tr>
            <tr>
                <td>Id Penjual</td>
                <td><input type="id_penjual" name="id_penjual"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>

        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['submit'])) {
        $id_menu = $_POST['id_menu'];
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $id_penjual = $_POST['id_penjual'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO menu (id_menu, nama, jenis, harga, stok, id_penjual) VALUES('$id_menu', $nama','$jenis','$harga', '$stok', '$id_penjual')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Menu</a>";
    }
    ?>
</body>

</html>

</html>