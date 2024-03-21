<?php
$trabajador1 = $_POST ["trabajador1"];
$trabajador2 = $_POST ["trabajador2"];
$trabajador3 = $_POST ["trabajador3"];

$promedio = ($trabajador1 + $trabajador2 + $trabajador3) / 3;

echo "el promedio es:". $promedio;

if($trabajador1 > 30){
  echo"mensaje 1";
}
if($trabajador2 <=== 50){
  echo"mensaje 2";
}
else($trabajador1 >=== && 60){
  echo"mensaje 3";
}

$materias = array ("materia1", "materia1", "materia1");
foreach ($materias as $imprimematerias){
  echo "$imprimematerias";
}
?>