<?php
// include database connection file
include_once("koneksi.php");
// Check if form is submitted for user update, then redirect to homepage after update
$Nim = $_GET['Nim'];
$result = mysqli_query($con, "SELECT * FROM mahasiswa1 WHERE Nim='$Nim'");
while($user_data = mysqli_fetch_array($result))
{
$Nim = $user_data['Nim'];
$Nama = $user_data['Nama'];
$Jenis_Kelamin = $user_data['Jenis_Kelamin'];
$Alamat = $user_data['Alamat'];
$TL = $user_data['TL'];
}

if(isset($_POST['update']))
{
    $Nim = $_POST['Nim'];
    $Nama = $_POST['Nama'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    $Alamat = $_POST['Alamat'];
    $TL = $_POST['TL'];
 // update user data
$result = mysqli_query($con, "UPDATE mahasiswa1 SET Nama='$Nama',Jenis_Kelamin='$Jenis_Kelamin',Alamat='$Alamat',TL='$TL'
 WHERE Nim='$Nim'");
 // Redirect to homepage to display updated user in list
header("Location: index.php");
}
?>
<html>
<head>
<title>Edit Data Mahasiswa</title>
</head>
<body>
 <a href="index.php">Home</a>
 <br/><br/>
<form name="update" method="post" action="edit.php">
<table border="0">
<tr>
<td>Nama</td>
<td><input type="text" name="Nim" value=<?php echo $Nim;?>></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="Nama" value=<?php echo $Nama;?>></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="text" name="Jenis_Kelamin" value=<?php echo $Jenis_Kelamin;?>></td>
</tr>
<tr>
<td>alamat</td>
<td><input type="text" name="Alamat" value=<?php echo $Alamat;?>></td>
</tr>
<tr>
<td>Tgl Lahir</td>
<td><input type="date" name="TL" value=<?php echo $TL;?>></td>
</tr>
<tr>
<td><input type="hidden" name="Nim" value=<?php echo $_GET['Nim'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>