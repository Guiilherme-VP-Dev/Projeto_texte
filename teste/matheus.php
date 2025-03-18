<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simples</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    <form method="post">
        <input type="number" name="num1" placeholder="Número 1" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Número 2" required>
        <button type="submit" name="calculate">Calcular</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Erro: Divisão por zero!";
                    exit;
                }
                break;
            default:
                echo "Operação inválida!";
                exit;
        }

        echo "<h2>Resultado: $result</h2>";
    }
    ?>
</body>
</html>