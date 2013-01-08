<html>
<head>
<title>Регистрация</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="template/style.css" type="text/css" />
</head>
<body>

<form method="post"	action="index.php">
<table align="center" id="reg_table" cellspacing="10" border="0">
	<tr>
		<td>Логин:</td>
		<td>
			<input id="login" type="text" name="login" />
		</td>
	</tr>
	<tr>
		<td>Пароль:</td>
		<td>
			<input id="pass" type="password" name="password" /><br />
		</td>
	</tr>
	<tr>
		<td>Подтверждение:</td>
		<td>
			<input id="re_pass" type="password" name="password2" /><br />
		</td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input id="mail" type="text" name="mail" /><br />
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<label><input id="no_xyz" type="checkbox" name="lic" value="ok" />
			Обязуюсь не творить хуйни!</label><br />
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input class="button" type="submit" name="GO" value="Регистрация">
		</td>
	</tr>
</table>
</form>

</body>
</html>