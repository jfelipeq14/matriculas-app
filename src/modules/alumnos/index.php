<?php include './layout/header.php'; ?>
<!-- HEADER -->
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-secondary sidebar collapse">
            <div class="position-fixed p-4">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                    <span>Alumno</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item mt-2">
                        <a class="nav-link btn bg-primary text-secondary" href="#perfil">
                            Perfil
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link btn bg-primary text-secondary" href="#matricula">
                            Matricula
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link btn bg-primary text-secondary" href="./logout.php">
                            Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-primary">I.E.Santa Catalina de Siena</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a class="btn btn-sm btn-secondary" href="./logout.php">
                        Cerrar Sesión
                    </a>
                </div>
            </div>

            <!-- video - portada -->
            <section class="my-4 w-100" width="900" height="380">
                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fiecatalinadesiena%2Fvideos%2F273459774828598%2F&show_text=false&width=560&t=0" width="600" height="380" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            </section>
            <!-- Fin de video portada -->
            <?php
            $sql = "SELECT id, username, password, nombre, dependencia, email, genero, telefono, direccion, edad FROM users WHERE id=$id";
            $result = mysqli_query($con, $sql);

            while ($mostrar =  mysqli_fetch_array($result)) {

            ?>
                <!-- Perfil -->
                <section id="perfil">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1><?php echo $mostrar['nombre'] ?> &middot; <?php echo $mostrar['id'] ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <!--left col-->
                                <div class="text-center">
                                    <img src="vista.php?id='<?php echo '1' ?>'" alt='Perfil' class="rounded mr-1 w-100" />
                                </div>
                            </div>
                            <!--/col-3-->
                            <div class="col-sm-12 col-md-9">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home">
                                        <hr>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label class="text-primary">Usuario</label>
                                                        <input type="text" name="username" class="form-control" value="<?php echo $mostrar['username'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label class="text-primary">Nombre completo</label>
                                                        <input type="text" name="nombre" style="text-transform: capitalize;" value="<?php echo $mostrar['nombre'] ?>" class="form-control" require>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="text-primary">Cargo</label>
                                                        <select class="form-control" name="dependencia" require>
                                                            <option selected><?php echo $mostrar['dependencia'] ?></option>
                                                            <option value="Directiva">Directiva</option>
                                                            <option value="Alumno">Alumno</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group ">
                                                        <label class="text-primary">Correo Electronico</label>
                                                        <input type="email" name="email" style="text-transform: capitalize;" placeholder="Correo electronico" class="form-control" require>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm12 col-md-6">
                                                    <div class="form-group ">
                                                        <label class="text-primary">Telefono</label>
                                                        <input type="text" name="telefono" style="text-transform: capitalize;" placeholder="Telefono" class="form-control" require>
                                                    </div>
                                                </div>
                                                <div class="col-sm12 col-md-6">
                                                    <div class="form-group ">
                                                        <label class="text-primary">Dirección</label>
                                                        <input type="text" name="direccion" style="text-transform: capitalize;" placeholder="Direccion" class="form-control" require>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group ">
                                                        <label class="text-primary">Sexo</label>
                                                        <select name="nombre" style="text-transform: capitalize;" class="form-control" require>
                                                            <option selected>Seleccione su sexo</option>
                                                            <option value="Hombre">Hombre</option>
                                                            <option value="Mujer">Mujer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group ">
                                                        <label class="text-primary">Edad</label>
                                                        <input type="number" name="edad" style="text-transform: capitalize;" placeholder="Edad" class="form-control" require>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-primary">Seleccione su foto de perfil</label>
                                                <input type="file" name="image" class="btn btn-transparent text-secondary shadow w-100" />
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label class="text-primary">Contraseña</label>
                                                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label class="text-primary">Confirmar Contraseña</label>
                                                        <input type="password" name="confirm_password" class="form-control" placeholder="Repetir contraseña">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-secondary mt-2" value="Guardar">
                                                        <input type="reset" class="btn btn-dark mt-2" value="Borrar">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <!--/col-9-->
                        </div>
                        <!--/row-->
                    </div>
                </section>
            <?php } ?>
            <!-- Fin del perfil -->

            <!-- matricula -->
            <form action="matricula.php" method="post">
            <?php
            $sql = "SELECT username, nombre FROM users WHERE id=$id";
            $result = mysqli_query($con, $sql);

            while ($mostrar =  mysqli_fetch_array($result)) {

            ?>
                <section id="matricula" class="mb-5">
                    <div class="p-4 bg-primary text-light rounded-3">
                        <div class="container-fluid py-5">
                            <p class="lead">I.E. SANTA CATALINA DE SIENA</p>
                            <img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://iesantacatalina.edu.co/wp-content/uploads/2020/03/escudo.png" class="mb-5" width="100">
                            <article>
                                <!-- Btn matricula -->
                                <p>
                                    <a class="btn btn-light text-primary shadow w-25" data-bs-toggle="collapse" href="#matricular" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="bi bi-newspaper"></i> MATRICULA <i class="bi bi-newspaper"></i>
                                    </a>
                                </p>
                                <!-- Btn Datos personales -->
                                <div class="row m-2 collapse" id="matricular">
                                    <div class="col-sm-12">
                                        <p>
                                            <a class="btn btn-light text-primary shadow w-25" data-bs-toggle="collapse" href="#personales" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <i class="bi bi-file-person"></i> DATOS PERSONALES <i class="bi bi-file-person"></i>
                                            </a>
                                        </p>
                                        <article>
                                            <!-- Datos personales -->
                                            <!-- Documento -->
                                            <div class="row m-2 collapse" id="personales">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="col-sm-12 col-md-6 input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Tipo de Documento</span>
                                                        <select class="form-select" name="Tipo_identificacion_alumno">
                                                            <option selected>Seleccionar</option>
                                                            <option value="1">Registro civil</option>
                                                            <option value="2">Tarjeta de Identidad</option>
                                                            <option value="3">Cedula de Ciudadania</option>
                                                            <option value="4">Otro</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Numero de Documento</span>
                                                        <input type="text" class="form-control" name="Numero_identificacion_alumno" value="<?php echo $mostrar['username'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- fin documento -->
                                            <!-- Nombres y Apellidos -->
                                            <div class="row m-2 collapse" id="personales">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-12 input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Nombres y Apellidos</span>
                                                        <input type="text" class="form-control" name="Nombres_alumno" value="<?php echo $mostrar['nombre'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin nombres y apellidos -->
                                            <!-- Nacimiento -->
                                            <div class="row m-2 collapse" id="personales">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="col-sm-12 col-md-6 input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Fecha de nacimiento</span>
                                                        <input type="date" name="Fecha_Nacimiento" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Edad</span>
                                                        <input type="text" name="Edad" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin nacimiento -->
                                            <div class="row m-2 collapse" id="personales">
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Nacionalidad</span>
                                                        <select name="Nacionalidad" class="form-select">
                                                            <option value="Colombia" id="CO" selected>Colombia</option>
                                                            <option value="Otro" id="otro">Otro</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-2 collapse" id="personales">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Departamento</span>
                                                        <input type="text" class="form-control" name="Departamento_Residencia" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Municipio</span>
                                                        <input type="text" class="form-control " name="Municipio_Residencia" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-2 collapse" id="personales">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Comuna de residencia</span>
                                                        <input type="number" class="form-control " name="Comuna_residencia" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Sector de residencia</span>
                                                        <input type="text" class="form-control " name="Sector_Residencia" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-2 collapse" id="personales">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Direccion</span>
                                                        <input type="text" class="form-control" name="Direccion_alumno" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Telefono</span>
                                                        <input type="number" class="form-control" name="Telefono" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-2 collapse" id="personales">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Estrato</span>
                                                        <input type="number" class="form-control" name="Estrato" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Genero del alumno</span>
                                                        <input type="text" class="form-control" name="Genero_alumno" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-2 collapse" id="personales">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Medio de transporte</span>
                                                        <select name="Medio_transporte_alumno" class="form-select">
                                                            <option selected>Seleccionar</option>
                                                            <option value="Publico">Publico</option>
                                                            <option value="Privado">Privado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-2 collapse" id="personales">
                                                <div class="col-sm-12 col-md-6 col-lg-4">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Nivel de educacion</span>
                                                        <select name="Nivel_Educacion_alumno" class="form-select">
                                                            <option selected>Seleccionar</option>
                                                            <option value="Prescolar">Prescolar</option>
                                                            <option value="Basica">Basica</option>
                                                            <option value="Media">Media</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-4">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Grado al que aspira</span>
                                                        <select name="Grado_A_Matricular" class="form-select">
                                                            <option selected>Seleccionar</option>
                                                            <option value="0">Prescolar</option>
                                                            <hr>
                                                            <option value="1">Primero</option>
                                                            <option value="2">Segundo</option>
                                                            <option value="3">Tercero</option>
                                                            <option value="4">Cuarto</option>
                                                            <option value="5">Quinto</option>
                                                            <option value="6">Sexto</option>
                                                            <option value="7">Septimo</option>
                                                            <option value="8">Octavo</option>
                                                            <option value="9">Noveno</option>
                                                            <hr>
                                                            <option value="10">Decimo</option>
                                                            <option value="11">Once</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-4">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Matricula condicional</span>
                                                        <select name="Matricula_condicional" class="form-select">
                                                            <option selected>Seleccionar</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin datos personales -->
                                        </article>
                                        <?php }?>
                                    </div>
                                </div>
                                <!-- Btn Datos familiares -->
                                <div class="row m-2 collapse" id="matricular">
                                    <div class="col-sm-12">
                                        <p>
                                            <a class="btn btn-light text-primary shadow w-25" data-bs-toggle="collapse" href="#familiares" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <i class="bi bi-file-person"></i> DATOS FAMILIARES <i class="bi bi-file-person"></i>
                                            </a>
                                        </p>
                                        <article>
                                            <!-- Documento -->
                                            <div class="row m-2 collapse" id="familiares">
                                                <h1>MADRE</h1>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="col-sm-12 col-md-6 input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Tipo de Documento</span>
                                                        <select class="form-select" name="Tipo_identificacion_madre">
                                                            <option selected>Seleccionar</option>
                                                            <option value="3">Cedula de Ciudadania</option>
                                                            <option value="4">Otro</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Numero de Documento</span>
                                                        <input type="text" class="form-control" name="Numero_identificacion_madre">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- fin documento -->
                                            <!-- nombre -->
                                            <div class="row m-2 collapse" id="familiares">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-12 col-md-6 input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Nombres Y Apellidos</span>
                                                        <input type="text" class="form-control" name="Nombre_madre">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- fin nombre -->
                                            <!-- contacto -->
                                            <div class="row m-2 collapse" id="familiares">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Correo electronico</span>
                                                        <input type="email" class="form-control" name="correo_madre" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Telefono</span>
                                                        <input type="number" class="form-control" name="Telefono_madre" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin contacto -->
                                        </article>
                                        <article>
                                            <!-- Documento -->
                                            <div class="row m-2 collapse" id="familiares">
                                                <h1>PADRE</h1>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="col-sm-12 col-md-6 input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Tipo de Documento</span>
                                                        <select class="form-select" name="Tipo_identificacion_padre">
                                                            <option selected>Seleccionar</option>
                                                            <option value="3">Cedula de Ciudadania</option>
                                                            <option value="4">Otro</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Numero de Documento</span>
                                                        <input type="text" class="form-control" name="Numero_identificacion_padre">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- fin documento -->
                                            <!-- nombre -->
                                            <div class="row m-2 collapse" id="familiares">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-12 col-md-6 input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Nombres Y Apellidos</span>
                                                        <input type="text" class="form-control" name="Nombre_padre">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- fin nombre -->
                                            <!-- contacto -->
                                            <div class="row m-2 collapse" id="familiares">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Correo electronico</span>
                                                        <input type="email" class="form-control" name="correo_padre" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-secondary text-primary">Telefono</span>
                                                        <input type="number" class="form-control" name="Telefono_padre" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin contacto -->
                                        </article>
                                        <button type="submit" class="btn btn-light text-primary shadow w-25"><i class="bi bi-arrow-return-right"></i> MATRICULARSE <i class="bi bi-arrow-return-left"></i></button>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
            </form>
            <!-- fin matricula -->
        </main>
    </div>
</div>
<!-- FOOTER -->
<?php include './layout/footer.php'; ?>