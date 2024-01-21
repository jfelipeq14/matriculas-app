<?php
session_set_cookie_params(60 * 60 * 24 * 15); //determinamos el tiempo de la sesion iniciada
//iniciamos la sesion
session_start();
include('db.php'); ?>
<?php
if (!empty($_GET['id'])) {
    $usaurio = htmlspecialchars($_SESSION["username"]);
    //Extraer imagen de la BD mediante GET
    $result = $con->query("SELECT id,url_image FROM users WHERE username like '%$usaurio%'");

    if ($result->num_rows > 0) {
        $imgDatos = $result->fetch_assoc();

        //Mostrar Imagen
        header("Content-type: image/jpg");
        echo $imgDatos['url_image'];
    } else {
        echo 'Imagen no existe...';
    }
}
?>
<img src="<?php echo $imgDatos['id']; ?>" alt='Perfil' class="rounded-circle" width="50 px" height="50px" />