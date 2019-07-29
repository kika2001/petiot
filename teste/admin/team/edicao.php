<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<form action="editar.php" method="post">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
Nome: <input type="text" name="nome" value="<?php echo $_GET['nome']  ?>"><br><br>
Função: <select name="funcao" value="<?php echo $_GET['texto']  ?>">
<option value="Pedreiro">Pedreiro</option>
<option value="Informático">Informático</option>
<option value="Emprendedor">Emprendedor</option>
<option value="Carpinteiro">Carpinteiro</option>
<option value="<?php echo $_GET['texto']  ?>" selected><?php echo $_GET['texto']  ?></option>
</select><br><br>
Fotografia: <input type="text" name="img" id="file" value="<?php echo $_GET['img']  ?>"><br><br>
<input type="hidden" name="estado" value="0" >
Estado:  <input type="checkbox" name="estado" value="1" value="<?php echo $_GET['estado']  ?>"><br><br>
<input type="submit">
</form>

</body>
</html>
