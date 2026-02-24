<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    

<?php
for ($i = 1; $i <= 30; $i++) {

    echo "<form method='post'>";
    echo "<label>Digite o seu nome $i:</label>";
    echo "<input type='text' name='nome$i' required>";
    echo "<button type='submit'>Enviar</button>";
    echo "</form><br>";

}
?>

</body>
</html>