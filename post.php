<?php


$color = $_POST['color'] ?? '';

echo "Дані з кольору: " . htmlspecialchars($color);

?> 
<style>
    body {
        background-color: <?php echo htmlspecialchars($color); ?>;
    }
</style>

<?php

$number1 = htmlspecialchars($_POST['number1']) ?? '';
$number2 = htmlspecialchars($_POST['number2']) ?? '';

echo "<br>Дані з першого числового поля: " . $number1;
echo "<br>Дані з другого числового поля: " . $number2;
echo "<br>Сума двох чисел: " . ($number1 + $number2);
if ($number1 !== $number2) {
    echo "<br>Числа не рівні.";
} else {
    echo "<br>Числа рівні.";
}

$value = $cache[$key];

?>