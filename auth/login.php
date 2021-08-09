<?php 
require('../funct/functions.php');

// cek apakah tombol login ditekan atau belum
if( isset($_POST["login"]) ){

	$username = $_POST["username"];
	$password = $_POST["password"];

	if( $_POST["level"] == "admin" ){
		$result = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username' ");
		
		// cek username
		if( mysqli_num_rows($result) === 1 ){

			// cek password
			$row = mysqli_fetch_assoc($result);
			if( password_verify($password, $row["password"]) ){

					header("Location:../index");
					exit;

			}

		}
	}

	

}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>

	<div class="container">
		
		<header class="header">
			<h2>Login</h2>
		</header>

		<content>
			<div class="table_form">
				<form action="" method="post">
					<table>
						<tr>
							<td>
								Jenis User
								<select name="level" id="level">
									<option value="admin">Admin</option>
									<option value="user">User</option>
								</select>
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
								<button type="submit" name="login">Login</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</content>


	</div>
	
</body>
</html>