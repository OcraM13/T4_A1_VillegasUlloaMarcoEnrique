<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio - PHP [Arreglos y Funciones]</title>
    </head>
    <body>

      <h1>Tabla Calificaciones</h1>

      <table style='border: 1px solid black;'>
      <tr>
      <th> Nombre </th>
      <th> Unidad 1 </th>
      <th> Unidad 2 </th>
      <th> Unidad 3 </th>
      <th> Unidad 4 </th>
      <th> Unidad 5 </th>
      <th> Promedio </th>
      </tr>

        <?php

            $alumnos = array(
            "Daniel"=> $calificaciones=array(70, 70, 70, 70, 70),
            "Ivan"=> $calificaciones=array(85, 90, 80, 70, 90),
            "Vivi"=> $calificaciones=array(80, 75, 70, 65, 80),
            "Marco"=> $calificaciones=array(80, 60, 40, 69, 90),
            "Disy"=> $calificaciones=array(90, 100, 70, 80, 95),
            "Migel"=> $calificaciones=array(90, 100, 70, 80, 95),
            "Felix"=> $calificaciones=array(90, 100, 70, 80, 95),
            "Jorge"=> $calificaciones=array(90, 100, 70, 80, 95),
            "Liza"=> $calificaciones=array(90, 100, 70, 80, 95),
            "Alvar"=> $calificaciones=array(70, 80, 60, 60, 80,));

            $aregloPromedio = obtenerPromedioAlumnos($alumnos);

            obtenerPromedioMaterias($alumnos);

            echo "<td style='border: 1px solid grey;'>";
            $promedioGeneral = obtenerPromedioGeneral($alumnos);
            echo $promedioGeneral;
            echo "</td>";
            echo "</table>";


            function obtenerPromedioAlumnos($alumnos) {
                $promedioAlumno = 0;
                $contador = 0;
                $sumatoriaAlumno = 0;
                $aregloPromedio = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $alumno = 0;

                foreach ($alumnos as $key => $value) {
                    echo "<tr> <td style='border: 1px solid grey;'> ";
                    echo $key;
                    echo "</td>";

                    foreach ($value as $calificaciones) {
                        echo "<td style='border: 1px solid grey;'> ";
                        echo $calificaciones;
                        echo "</td>";
                        $sumatoriaAlumno += $calificaciones;
                        $contador++;
                    }
                    $promedioAlumno = $sumatoriaAlumno/$contador;
                    $aregloPromedio[$alumno] = $promedioAlumno;
                    $contador = 0;
                    $sumatoriaAlumno = 0;
                    $alumno++;
                    echo "<td style='border: 1px solid grey;'> ";
                    echo $promedioAlumno;
                    echo "</td>";
                    echo "</tr>";
                }

                return $aregloPromedio;
            }

            function obtenerPromedioMaterias($alumnos) {
                $materia = 0;
                $aregloMaterias = array(0, 0, 0, 0, 0);
                foreach ($alumnos as $clave => $valor) {
                    foreach ($valor as $calificaciones) {
                        $aregloMaterias[$materia] += $calificaciones;
                        $materia++;
                    }
                    $materia = 0;
                }
                echo "<tr> <td style='border: 1px solid grey;'> Promedio Materia </td>";
                $arrayPromedioMaterias = array(0, 0, 0, 0, 0);
                foreach ($aregloMaterias as $sumatorias) {
                    $promedioMateria = $sumatorias/sizeof($alumnos);
                    $aregloMaterias[$materia] = $promedioMateria;
                    echo "<td style='border: 1px solid grey;'>";
                    echo $promedioMateria;
                    echo "</td>";
                    $materia++;
                }
            }

            function obtenerPromedioGeneral($alumnos) {
                $promedioGeneral = 0;
                $sumatoriaTotal = 0;
                $contadorCalificaciones = 0;

                foreach ($alumnos as $key => $value) {
                    foreach ($value as $calificaciones) {
                        $sumatoriaTotal += $calificaciones;
                        $contadorCalificaciones++;
                    }
                }
                $promedioGeneral = $sumatoriaTotal/$contadorCalificaciones;

                return $promedioGeneral;
            }

        ?>

        <table>
            <tr>
                <th></th>
            </tr>
        </table>
    </body>
</html>
