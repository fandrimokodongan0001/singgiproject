<?php 
require('../funct/functions.php');

// cek apakah tombol register ditekan atau belum
if( isset($_POST["register"]) ){
	if( register($_POST) > 0 ){
		echo "
		<script>
			alert('Akun berhasil didaftarkan!');
			document.location.href = 'login';
		</script>";
	} else{
		echo "
		<script>
			alert('Akun gagal didaftarkan!');
			document.location.href = 'login';
		</script>";
	}
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar</title>
</head>
<body>

	<div class="container">
		
		<header class="header">
			<h2>Daftar</h2>
		</header>

		<content>
			<div class="table_form">
				<form action="" method="post">
					<input type="hidden" name="level" value="">
					<table>
						<tr>
							<td>
								<label for="nama">Nama</label>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="nama" id="nama" placeholder="Masukan Nama Lengkap" required oninvalid="this.setCustomValidity('Nama harus diisi!')" oninput="setCustomValidity('')">
							</td>
						</tr>
						<tr>
							<td>
								<label for="username">Username</label>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="username" id="username" placeholder="Masukan Username atau Email" required oninvalid="this.setCustomValidity('Username harus diisi!')" oninput="setCustomValidity('')">
							</td>
						</tr>
						<tr>
							<td>
								<label for="password">Password</label>
							</td>
						</tr>
						<tr>
							<td>
								<input type="password" name="password" id="password" placeholder="Masukan Password" required oninvalid="this.setCustomValidity('Masukan Minimal 8 Karakter Password Untuk Menjaga Kemanan Akun Anda')" oninput="setCustomValidity('')">
							</td>
						</tr>
						<tr>
							<td>
								<label for="password2">Konfirmasi Password</label>
							</td>
						</tr>
						<tr>
							<td>
								<input type="password" name="password2" id="password2" placeholder="Masukan Konfirmasi Password">
							</td>
						</tr>
						<tr>
							<td>
								<button type="submit" name="register">Daftar</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</content>


	</div>
	
</body>
</html>