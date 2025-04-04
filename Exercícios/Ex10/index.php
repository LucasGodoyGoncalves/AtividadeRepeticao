<!DOCTYPE html>
<html lang="pt-br">
<head>
</head>
<body>
    <form action="calcular.php" method="post">
        <label for="numero">Digite um número:</label><br>
        <input type="text" id="numero" name="numero" required><br><br>

        <label for="intervalo">Qual o intervalo que deseja?</label><br>
        <input type="number" id="intervalo" name="intervalo" min="1" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>