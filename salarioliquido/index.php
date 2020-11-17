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
				<input type="text" name="qtdhora" id="qtdhora" />
			</p>
			<p>
				<label for="vhoras">Valor da hora trabalhada</label>
				<input type="text" name="vhoras" id="vhoras" />
			</p>
			<p>
				<label for="desconto">Desconto</label>
				<select name="desconto" id="desconto">
					<option value="10">10%</option>
					<option value="20">20%</option>
					<option value="30">30%</option>
				</select>
			</p>
			<p>
				<input type="submit" name="Enviar" id="Enviar" value="Enviar" />
			</p>
		</form>
    </body>
</html>