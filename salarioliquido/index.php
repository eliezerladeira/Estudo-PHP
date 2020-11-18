<?php
	$vh = 0;
	$qh = 0;
	$pd = 0;
	
	if (isset($_GET["vh"]))
	{
	$vh = $_GET["vh"];
	$qh = $_GET["qh"];
	$pd = $_GET["pd"];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitionl//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Salário Líquido</title>
    </head>
    <body>
		<form id="form1" name="form1" method="post" action="salarioliquido.php">
			<p>
				<label for="qtdhora">Quantidade de horas trabalhadas</label>
				<input type="text" name="qtdhora" id="qtdhora" value="<?php echo $qh; ?>" />
			</p>
			<p>
				<label for="vhoras">Valor da hora trabalhada</label>
				<input type="text" name="vhoras" id="vhoras" value="<?php echo $vh; ?>" />
			</p>
			<p>
				<label for="desconto">Desconto</label>
				<select name="desconto" id="desconto">
					<option value="10" <?php if($pd == 10) {echo 'selected="selected"';} ?>>10%</option>
					<option value="20" <?php if($pd == 20) {echo 'selected="selected"';} ?>>20%</option>
					<option value="30" <?php if($pd == 30) {echo 'selected="selected"';} ?>>30%</option>
				</select>
			</p>
			<p>
				<input type="submit" name="Enviar" id="Enviar" value="Enviar" />
			</p>
		</form>
    </body>
</html>