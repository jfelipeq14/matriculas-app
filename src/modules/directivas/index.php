<?php include './layout/header.php'; ?>
<!-- HEADER -->
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-secondary sidebar collapse">
            <div class="position-fixed p-4">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                    <span>Directiva</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item mt-2">
                        <a class="nav-link btn bg-primary text-secondary" href="#perfil">
                            Perfil
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link btn bg-primary text-secondary" href="#baseDeDatos">
                            Base de datos
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

        <main class="col-sm-12 col-md-9 m-auto p-auto">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-flex justify-content-between pt-3 pb-2">
                        <h1 class="h2 text-primary">I.E.Santa Catalina de Siena</h1>
                        <div class="btn">
                            <a class="btn btn-sm btn-secondary" href="./logout.php">
                                Cerrar Sesión
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- video - portada -->
            <div class="row">
                <div class="col-sm-12">
                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fiecatalinadesiena%2Fvideos%2F273459774828598%2F&show_text=false&width=560&t=0" width="500" height="500"></iframe>
                </div>
            </div>
            <!-- Fin de video portada -->
            <?php
            $sql = "SELECT id, username, password, nombre, dependencia, email, genero, telefono, direccion, edad FROM users WHERE id=$id";
            $result = mysqli_query($con, $sql);

            while ($mostrar =  mysqli_fetch_array($result)) {

            ?>
                <!-- Perfil -->
                <section id="perfil" class="mb-5 mt-5">
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

            <!-- Base de datos -->
            <section id="baseDeDatos" class="mb-5 mt-5">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table bg-primary text-light">
                            <h1>Base de datos</h1>
                            <thead class="text-secondary">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Dependencia</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $sql = "SELECT id, username, password, nombre, dependencia, email, genero, telefono, direccion, edad FROM users";
                                $result = mysqli_query($con, $sql);

                                while ($mostrar =  mysqli_fetch_array($result)) {


                                ?>
                                    <tr>
                                        <td><?php echo $mostrar['id'] ?></td>
                                        <td><?php echo $mostrar['nombre'] ?></td>
                                        <td><?php echo $mostrar['username'] ?></td>
                                        <td><?php echo $mostrar['dependencia'] ?></td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- fin base de datos -->
        </main>
    </div>
</div>
<!-- FOOTER -->
<?php include './layout/footer.php'; ?>