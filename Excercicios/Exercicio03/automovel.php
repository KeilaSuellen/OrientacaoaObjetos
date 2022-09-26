<?php
    class automovel extends veiculosrodoviarios{

        private $tipocarro;

        function __construct($nrodas, $npassageiros, $tipocarro){
            parent:: __construct($nrodas, $npassageiros);
			$this->tipocarro = $tipocarro;
        }

        private function setatipo($tipocarro){
        
            $this->tipocarro = $tipocarro;
        }

        private function pegatipo($tipocarro){
        
            $this->tipocarro = $tipocarro;
        }
        
        public function Mostrar()
	{
       
		print "Automovel: <br>";
		print 'Passageiros:' . $this->passageiros ."</br>";
		print  'Rodas:' . $this->rodas ."</br>";
        print 'Tipo de Carro:' . $this->tipocarro ."</br>";

	}
}
?>