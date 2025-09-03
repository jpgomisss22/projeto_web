<body>
	<div class="login-card">
		<h1>Bem-vindo</h1>
		<form method="post" action="login.php">
			<label for="email">Nome</label>
			<input type="text" id="nome" name="usuario" placeholder="Digite seu nome">

			<label for="senha">Senha</label>
			<input type="password" id="senha" name="senha" placeholder="Digite sua senha">

			<input type="submit" value="Entrar" class="btn-entrar">
		</form>

		<a href="#" class="link-senha">Esqueceu a senha?</a>

		<?php if (isset($_GET['erro'])){ ?>
			<div class="alerta">Usuário e/ou senha inválido(s).</div>
		<?php } ?>
	</div>

	<style>
		* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
}

body {
	background-color: #000;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
}

.login-card {
	background-color: #fff;
	color: #1c1c1e;
	width: 300px;
	padding: 24px 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.login-card h1 {
	text-align: center;
	font-size: 24px;
	font-weight: 700;
	margin-bottom: 16px;
	color: #1c1c1e;
}

label {
	display: block;
	font-size: 14px;
	color: #1c1c1e;
	margin-bottom: 6px;
	margin-top: 16px;
}

input[type="text"],
input[type="password"] {
	width: 100%;
	padding: 12px;
	border: 1px solid #e5e5ea;
	border-radius: 8px;
	background-color: #f9f9f9;
	color: #1c1c1e;
	font-size: 14px;
	outline: none;
}

input::placeholder {
	color: #a1a1a1;
}

.btn-entrar {
	width: 100%;
	padding: 12px;
	margin-top: 20px;
	background-color: #2c2c2e;
	color: white;
	border: none;
	border-radius: 8px;
	font-size: 15px;
	font-weight: 600;
	cursor: pointer;
}

.link-senha {
	display: block;
	margin-top: 16px;
	color: #007aff;
	text-align: left;
	font-size: 14px;
	text-decoration: none;
}
	</style>
</body>