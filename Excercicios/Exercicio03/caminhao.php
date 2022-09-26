<?php
    class Caminhao extends veiculosrodoviarios{

        private $carga;

        function __construct($nrodas, $npassageiros, $carga){
            parent:: __construct($nrodas, $npassageiros);
			$this->carga = $carga;
        }

        private function setacarga($carga){
        
            $this->carga = $carga;
        }

        private function pegacarga($carga){
        
            $this->carga = $carga;
        }
        
        public function Mostrar()
	{
		print "Caminhao: <br>";
	    print 'Passageiros:' . $this->passageiros ."</br>";
	    print  'Rodas:' . $this->rodas ."</br>";
	    print 'Carga:' . $this->carga ."</br>";

	}
}
?>