<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Manajemen Kasir Tahur Sumedang Renyah</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="login">

	<div class="card w-50 mx-auto mt-5">
		<h5 class="card-header">Form Login</h5>
		<div class="card-body">
			<form action="proses/login-proses.php" method="POST" autocomplete="off">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" class="form-control" placeholder="Nama..." autofocus>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password...">
				</div>
				<div class="form-group">
					<label for="jabatan">Jabatang</label>
					<select name="jabatan" class="form-control">
						<option value="">-- Pilih Jabatan ---</option>
						<option value="kasir">Kasir</option>
						<option value="admin">Admin</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Masuk</button>
			</form>
		</div>
	</div>

</body>
</html>
