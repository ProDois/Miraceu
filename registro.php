<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Registro de usuário</title>
</head>

<body>
  <h1>Registro de usuário</h1>
  <form action="./admin/controllers/add_user.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="name" id="name" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>
    <label for="senha">Senha:</label>
    <input type="password" name="password" id="password" required><br>
    <input type="submit" value="Registrar">
  </form>
</body>

</html>