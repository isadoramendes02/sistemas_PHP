<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="" method="GET">
        <label>Digite o 1º numero:</label>
        <input type="number" name="primeiro" required><br><br>

        <label>Digite o 2º numero:</label>
        <input type="number" name="segundo" required><br><br>

        <label>Selecione a operação:</label>
        <select name="operacao" required>
            <option value="adicao">+</option><br>
            <option value="subtracao">-</option><br>
            <option value="multiplicacao">*</option><br>
            <option value="divisao">/</option>
         </select><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>