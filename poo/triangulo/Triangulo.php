<?php
	class Triangulo {
		private $a;
		private $b;
		private $c;
		
		public function GetA()
		{
			return($this->a);
		}
		
		public function SetA($v)
		{
			$this->a = $v;
		}

		public function GetB()
		{
			return($this->b);
		}
		
		public function SetB($v)
		{
			$this->b = $v;
		}

		public function GetC()
		{
			return($this->c);
		}
		
		public function SetC($v)
		{
			$this->c = $v;
		}
		
		public function VerificaSeEUmTriangulo()
		{
			$msg = "Não representa um triângulo!";
			
			if (($this->a < $this->b + $this->c) && ($this->b < $this->a + $this->c) && ($this->c < $this->a + $this->b)) {
				$msg = "Representa um triângulo!";
			}
			
			echo $msg;
		}
	}
?>