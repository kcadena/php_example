<h1 style="padding-top:50px">Formulario registro estudiante</h1>

<br>

<h3>Estudiantes actuales </h3>

<?php
$est = $this->Model_est->obtenerEst();
if($est != false){
	foreach ($est->result() as $op) {
		echo "<p>".$op->nom_est."</p>";
	}
}
?>

<br> <br> <br>
<?php
//inicia formulario
echo form_open( "pageindex/recibirDatos");
//variables para formulario
$codigo = array('name' => 'codigo','placeholder'=>'Codigo estudiante' );
$nombre = array('name' => 'nombre','placeholder'=>'Nombre Estudiante' );
$carrera = array('name' => 'carrera', 'placeholder'=>'Carrera que estudia');
$dat =$this->Model_est->obtenerCarreras();
$options = array();
foreach ($dat->result_array() as $row)
{
   $options[$row['id_carrera']]=$row['nom_carr'];
}
//formulario
echo form_label('codigo: ','codigo');
echo form_input($codigo);
echo form_label('nombre: ','nombre');
echo form_input($nombre);
echo form_dropdown('carrera', $options, 'large');
echo form_submit('','Agregar estudiante');
//cierre formulario
echo form_close();


echo form_open("pageindex/buscarEst");

$id = array('name' => 'id','placeholder'=>'Identificacion' );

echo "<br><br><br>";

echo form_label('identificacion: ','id');
echo form_input($id);
echo form_submit('','buscar');
echo form_close();

?>

