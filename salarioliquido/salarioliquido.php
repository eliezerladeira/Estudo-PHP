<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitionl//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Salário Líquido</title>
    </head>
    <body>
		<?php
			$qhoras = 0;
			$vhoras = 0;
			$desconto = 0;
			$pdesconto = 0;
			$sbruto = 0;
			$sliquido = 0;
			
			if (isset($POST["Enviar"])) {
				$qhoras = $POST["qtdhoras"];
				$vhoras = $POST["vhoras"];
				$pdesconto = $POST["desconto"];
				
				$sbruto = $qhoras * vhoras;
				$desconto = ($sbruto * $pdesconto) / 100;
				$sliquido = $sbruto - $desconto;
				?>
				<h2>Quantidade de horas trabalhadas:</h2>
				<h2>Valor das horas trabalhadas:</h2>
				<h2>Percentual de desconto:</h2>
			}
		?>
    </body>
</html>