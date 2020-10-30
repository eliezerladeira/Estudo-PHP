<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operadores Lógicos</title>
    </head>
    <body>
		<?php
			$n1 = 5;
			$n2 = 7;
			
			if ($n1 == $n2) {
					echo "<h2>O número $n1 é igual ao número $n2</h2>";
			}
			if ($n1 < $n2) {
					echo "<h2>O número $n1 é menor do que o número $n2</h2>";
			}
			if ($n1 <= $n2) {
					echo "<h2>O número $n1 é menor ou igual ao número $n2</h2>";
			}
			if ($n1 > $n2) {
					echo "<h2>O número $n1 é maior do que o número $n2</h2>";
			}
			if ($n1 >= $n2) {
					echo "<h2>O número $n1 é maior ou igual ao número $n2</h2>";
			}
			if ($n1 != $n2) {
					echo "<h2>O número $n1 é diferente do número $n2</h2>";
			}
		?>
    </body>
</html>