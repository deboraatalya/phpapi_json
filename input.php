<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="judul">
		<h1><font color=#b33939>Membuat CRUD Dengan PHP Dan MySQL</font></h1>
		<h2><font color=#b33939>Menampilkan data dari database</font></h2>

	</div>

	<br/>

	<a href="index.php"><font color=#b33939>Lihat Semua Data</font></a>

	<br/>
	<h3>Input data baru</h3>
	<form action="aksi.php" method="post">
		<table>
      <tr>
        <td>Id</td>
        <td><input type="text" name="id"></td>
      </tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input type="text" name="level"></td>
			</tr>
      <tr>
				<td>Fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>