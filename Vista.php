<?php
	// Vista.php
	class Vista {
		public $ancho, $alto;
		public function __construct($an, $al){
			$this->ancho = $an;
			$this->alto = $al;
		}
		public function dibujar($modelo){
			$img = imagecreate($this->ancho, $this->alto);
			$blanco = imagecolorallocate($img, 255, 255, 255);
			$negro = imagecolorallocate($img, 0, 0, 0);
			imagefilledrectangle($img, 0, 0, 400, 400, $blanco);
			$ap = array(
				$modelo->punto1->x, $modelo->punto1->y,
				$modelo->punto2->x, $modelo->punto2->y,
				$modelo->punto3->x, $modelo->punto3->y
			);
			imagepolygon($img, $ap, 3, $negro);
			imagestring($img, 3, $modelo->pmLado1->x, $modelo->pmLado1->y, "Lado1=" . $modelo->lado1, $negro);
			imagestring($img, 3, $modelo->pmLado2->x, $modelo->pmLado2->y, "Lado2=" . $modelo->lado2, $negro);
			imagestring($img, 3, $modelo->pmLado3->x, $modelo->pmLado3->y, "Lado3=" . $modelo->lado3, $negro);
			imagepng($img);
			imagedestroy($img);
		}
	}
?>