<?php
if(   $datos->num_rows() >0 ){
	$op = $datos->row();
	echo "<p>Codigo:   ".$op->cod_est."  <br>Nombre:   ".$op->nom_est." <br>Carrera:   ".$op->nom_carr."</p>";
}
else{
	echo "no hay estudiantes";
}


?>