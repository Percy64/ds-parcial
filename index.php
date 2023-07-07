<?php

require_once 'modelo/especialidad.php';
require_once 'modelo/turno.php';
require_once 'modelo/paciente.php';

$esp1= new especialidad();
$esp1->$id=1;
$esp1->$descripcion='clinica';


$tur1= new turno();
$tur1->$id=1;
$tur1->$fecha='01-06-2023';
$tur1->$hora=1700;
$tur1->$medico='Armando rodriguez';
$tur1->$especialidad=$esp1;

$esp2= new especialidad();
$esp2->$id=2;
$esp2->$descripcion='traumatologia';

$tur2= new turno();
$tur2->$id=2;
$tur2->$fecha=01-07-2023;
$tur2->$hora=1800;
$tur2->$medico='Graciela mendez';
$tur2->$especialidad=$esp2;

$pac= new paciente();
$pac->$id=1;
$pac->$nombre='alberto';
$pac->$apellido='juarez';
$pac->$documento=12123456;
$pac->$edad=$_GET{'edad'};
$pac->$email='aj@hmail.com';
$pac->listaturno[]=$tur1;
$pac->listaturno[]=$tur2;
$pac->mostrardatos();