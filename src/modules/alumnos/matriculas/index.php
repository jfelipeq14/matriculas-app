<?php
// Include config file
require_once "db.php";

                $Tipo_identificacion_alumno = $_POST['Tipo_identificacion_alumno'];
                $Numero_identificacion_alumno = $_POST['Numero_identificacion_alumno'];
                $Nombres_alumno = $_POST['Nombres_alumno'];
                $Fecha_Nacimiento = $_POST['Fecha_Nacimiento'];
                $Edad = $_POST['Edad'];
                $Nacionalidad = $_POST['Nacionalidad'];
                $Departamento_Residencia = $_POST['Departamento_Residencia'];
                $Municipio_Residencia = $_POST['Municipio_Residencia'];
                $Comuna_residencia = $_POST['Comuna_residencia'];
                $Sector_Residencia = $_POST['Sector_Residencia'];
                $Direccion_alumno = $_POST['Direccion_alumno'];
                $Telefono = $_POST['Telefono'];
                $Estrato = $_POST['Estrato'];
                $Genero_alumno = $_POST['Genero_alumno'];
                $Medio_transporte_alumno = $_POST['Medio_transporte_alumno'];
                $Nivel_Educacion_alumno = $_POST['Nivel_Educacion_alumno'];
                $Grado_A_Matricular = $_POST['Grado_A_Matricular'];
                $Matricula_condicional = $_POST['Matricula_condicional'];
                $Nombre_padre = $_POST['Nombre_padre'];
                $Tipo_identificacion_padre = $_POST['Tipo_identificacion_padre'];
                $Numero_identificacion_padre = $_POST['Numero_identificacion_padre'];
                $Telefono_padre = $_POST['Telefono_padre'];
                $correo_padre = $_POST['correo_padre'];
                $Nombre_madre = $_POST['Nombre_madre'];
                $Tipo_identificacion_madre = $_POST['Tipo_identificacion_madre'];
                $Numero_identificacion_madre = $_POST['Numero_identificacion_madre'];
                $Telefono_madre = $_POST['Telefono_madre'];
                $correo_madre = $_POST['correo_madre'];

                $sql = "INSERT INTO ficha_matricula (Tipo_identificacion_alumno, Numero_identificacion_alumno, Nombres_alumno, Fecha_Nacimiento, Edad, Nacionalidad, Departamento_Residencia, Municipio_Residencia, Comuna_residencia, Sector_Residencia, Direccion_alumno, Telefono, Estrato, Genero_alumno, Medio_transporte_alumno, Nivel_Educacion_alumno, Grado_A_Matricular, Matricula_condicional, Nombre_padre, Tipo_identificacion_padre, Numero_identificacion_padre, Telefono_padre, correo_padre, Nombre_madre, Tipo_identificacion_madre, Numero_identificacion_madre, Telefono_madre, correo_madre) VALUES('$Tipo_identificacion_alumno', '$Numero_identificacion_alumno', '$Nombres_alumno', '$Fecha_Nacimiento', '$Edad', '$Nacionalidad', '$Departamento_Residencia', '$Municipio_Residencia', '$Comuna_residencia', '$Sector_Residencia', '$Direccion_alumno', '$Telefono', '$Estrato', '$Genero_alumno', '$Medio_transporte_alumno', '$Nivel_Educacion_alumno', '$Grado_A_Matricular', '$Matricula_condicional', '$Nombre_padre', '$Tipo_identificacion_padre', '$Numero_identificacion_padre', '$Telefono_padre', '$correo_padre', '$Nombre_madre', '$Tipo_identificacion_madre', '$Numero_identificacion_madre', '$Telefono_madre', '$correo_madre')";

                $resultado = mysqli_query($con, $sql) or die("Error de registro");

                echo '<div class="alert alert-success alert-dismissable"><a class="btn btn-danger" data-dismiss="alert" aria-hidden="true" href="./logout.php">Cerrar Sesión</a> Usted se ha matriculado satisfactoriamente.</div>';

                // Close connection
                mysqli_close($con);
