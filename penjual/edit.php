<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id_penjual = $_POST['id_penjual'];
    $name = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_hp'];
    //echo "UPDATE tb_penjual SET nama='$name',alamat='$alamat',no_hp='$no_telp' WHERE id_penjual=$id_penjual";
    // update user data
    $result = mysqli_query($mysqli, "UPDATE tb_penjual SET nama='$name',alamat='$alamat',no_hp='$no_telp' WHERE id_penjual=$id_penjual");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_penjual = $_GET['id_penjual'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_penjual WHERE id_penjual= $id_penjual");

while ($user_data = mysqli_fetch_array($result)) {
    $name = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $no_telp = $user_data['no_hp'];
}
?>
<html>

<head>
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $name; ?>></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="number" name="no_hp" value=<?php echo $no_telp; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_penjual" value=<?php echo $_GET['id_penjual']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>