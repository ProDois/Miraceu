<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>

<body>
  <h1>Login</h1>
  <form action="./admin/controllers/auth.php" method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password" required><br>
    <input type="submit" value="Entrar">
  </form>
  <a href="registro.php">Registre-se clicando aqui</a>
</body>

</html>