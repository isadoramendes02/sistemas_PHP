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

    <?php 
   
    class Calculadora {
        public $num1;
        public $num2;
        public function adicao(){
            return $this->num1 + $this->num2;
        }

        public function subtracao(){
            return $this->num1 - $this->num2;
        }

        public function multiplicacao(){
            return $this->num1 * $this->num2;
        }

        public function divisao(){
            return $this->num1 / $this->num2;
        }
    }

    if (isset($_GET['primeiro']) && isset($_GET['segundo'])) {

    $calc = new Calculadora();
    $calc->num1 = $_GET["primeiro"];
    $calc->num2 = $_GET["segundo"];
    $operacao = $_GET["operacao"];

    if ($operacao == "adicao"){
        $resultado = $calc->adicao();
    }

    elseif ($operacao == "subtracao"){
        $resultado = $calc->subtracao();
    }

    elseif ($operacao == "multiplicacao"){
        $resultado = $calc->multiplicacao();
    }

    elseif ($operacao == "divisao"){
        $resultado = $calc->divisao();
    }

    echo "<h2>Resultado: $resultado</h2>";
    }
    
    ?>
</body>
</html>