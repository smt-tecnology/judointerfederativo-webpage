<?php
    session_start();
    if($_SESSION['logueado'] == 0) echo '<meta http-equiv="refresh" content="0; url=login.php">';
?>

<!DOCTYPE html>
<html lang="es">
    <?php include 'templates/head.php'; ?>

    <body id="admin-index">
        <!-- Header -->
        <?php include 'templates/header.php'; ?>
        <div class="row">
            <!-- Sidebar -->
            <?php include 'templates/sidebar.php'; ?>
            <!-- Contenido principal -->
            <main id="contenido-principal" class="text-center">
                <!-- Descripción -->
                <section id="descripcion-nuevo-elemento" class="text-center">
                    <h1>NUEVO TORNEO</h1>
                    <p>
                        Deberá rellenar los siguientes campos para poder 
                        generar un torneo
                    </p>
                </section>

                <hr>
                <!-- Formulario -->
                <section id="formulario-creacion">
                    <form id="crear-torneo" class="container text-center" action="#">
                        <h3 class="text-left">INFORMACIÓN PRINCIPAL</h3>
                        <!-- Nombre -->
                        <div class="nombre">
                            <input id="nombre-torneo" class="text-white text-center with-error" type="text" placeholder="NOMBRE">
                            <small>
                                El campo debe contener entre 5 y 30 caracteres <br>
                                No deben incluirse caracteres especiales
                            </small>
                        </div>
                        <!-- Categorías -->
                        <div class="categoria">
                            <div class="row etiqueta">
                                <label for="categorias-torneo" class="col-md-12">CATEGORÍAS PARTICIPANTES</label>
                            </div>
                            <fieldset id="categorias-torneo" class="checkbox-button" value="CATEGORÍAS PARTICIPANTES">
                                <div class="row">
                                    <div class="col-md-4 checkbox-button">
                                        <input id="categoria-senior" type="checkbox" name="categorias-torneo" value="SENIOR"> 
                                        <label for="categoria-senior">
                                            <div class="icono"></div>
                                            <span>SENIOR</span>
                                        </label>
                                    </div>
                                    <div class="col-md-4 checkbox-button">
                                        <input id="categoria-cadete" type="checkbox" name="categorias-torneo" value="CADETE"> 
                                        <label for="categoria-cadete">
                                            <div class="icono"></div>
                                            <span>CADETE</span>
                                        </label>
                                    </div>
                                    <div class="col-md-4 checkbox-button">
                                        <input id="categoria-kyuGraduado" type="checkbox" name="categorias-torneo" value="KYU GRADUADO"> 
                                        <label for="categoria-kyuGraduado">
                                            <div class="icono"></div>
                                            <span>KYU GRADUADO</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 checkbox-button">
                                        <input id="categoria-kyuNovicio" type="checkbox" name="categorias-torneo" value="KYU NOVICIO"> 
                                        <label for="categoria-kyuNovicio">
                                            <div class="icono"></div>
                                            <span>KYU NOVICIO</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6 checkbox-button">
                                        <input id="categoria-infantilB" type="checkbox" name="categorias-torneo" value="INFANTIL B"> 
                                        <label for="categoria-infantilB">
                                            <div class="icono"></div>
                                            <span>INTANTIL B</span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <h3 class="text-left">REGLAS</h3>
                        <!-- Reglas -->
                        <div class="reglas">
                            <div class="reglas-torneo"><input id="reglas-torneo" class="text text-center" type="file" placeholder="REGLAS DEL TORNEO"></div>
                            <label for="reglas-torneo" class="file text-center col-md-12"><div>SUBIR ARCHIVO</div></label>
                        </div>
                        <!-- IMAGEN -->
                        <h3 class="text-left">IMAGEN</h3>
                        <div class="foto">
                            <div class="foto-torneo"><input id="foto-torneo" class="fotarda text text-center" type="file" value="FOTO"></div>
                            <label for="foto-torneo" class="file text-center col-md-12"><div>SUBIR FOTO</div></label>
                        </div>
                        
                        <hr>
                        <!-- Enviar formulario -->
                        <input class="text text-center" type="submit" value="CREAR">
                    </form>
                </section>
            </main>
        </div>
        <!-- Footer -->
        <?php include 'templates/footer.php'; ?>
    </body>

    <?php include 'templates/scripts.php'; ?>
</html>