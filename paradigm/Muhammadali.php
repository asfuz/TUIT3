<?php #Даны целые числа а1, …, а50. Получить последовательность b1,…, b50, которая отличается от исходной тем, что все члены удвоены.

$a = [];
$b = [];
for ($i = 0; $i < 50; $i++) {
    $a[$i] = random_int(1, 100);
    $b[$i] = 2 * $a[$i];
    echo $a[$i] . "-" . $b[$i] . "       ";
}
echo '<br><br>';
