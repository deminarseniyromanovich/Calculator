<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form method="post">
    <input type="number" name="num1" placeholder="Первое число" required>
    <select name="operation">
        <option value="add">Сложение</option>
        <option value="subtract">Вычитание</option>
        <option value="multiply">Умножение</option>
        <option value="divide">Деление</option>
    </select>
    <input type="number" name="num2" placeholder="Второе число" required>
    <button type="submit">Рассчитать</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = (float)$_POST['num1'];
        $num2 = (float)$_POST['num2'];
        $operation = $_POST['operation'];
        $result = null;

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
                    $result = 'Ошибка: деление на ноль!';
                }
                break;
            default:
                $result = 'Неверная операция!';
        }

        echo "<h2>Результат: $result</h2>";
    }
?>
</body>
</html>