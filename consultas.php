<?php
	include("utilerias.php");
	$conexion = conecta();
	$consulta = sprintf("select * from usuarios order by usuario");
	$resultado = mysql_query($consulta);
	$tabla= "<table border=1>";
	$tabla.="<tr>";
	$tabla.="<th>Usuario</th>";
	$tabla.="<th>Nombre</th>";
	$tabla.="<th>Departamento</th>";
	$tabla.="<th>Vigencia</th>";
	$tabla.="<th>Accion</th>";
	$tabla.="</tr>";
	//Resultado es un dataset
	if(mysql_num_rows($resultado)>0){ //hay registros
		while($registro = mysql_fetch_array($resultado)){
			$tabla.="<tr>";
			$tabla.="<td>".$registro["usuario"]."</td>";
			$tabla.="<td>".$registro["nombre"]."</td>";
			$tabla.="<td>".$registro["departamento"]."</td>";
			$tabla.="<td>".$registro["vigencia"]."</td>";
			$tabla.="<td><a href='guardabaja.php?txtUsuario=".$registro["usuario"]."'>Baja</a>,
					<a href='cambio.php?txtUsuario=".$registro["usuario"]."'>Cambio</a></td>";
			$tabla.="</tr>";
		}
	}else{ //no hay registros 
		$tabla.="<tr><td coldspan=5>Sin registros</td></tr>";
	}
	$tabla.="</table>";
	print($tabla);
?>