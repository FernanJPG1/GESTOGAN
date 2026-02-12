<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTOGAN · Header fijo</title>
    <link rel="stylesheet" href="../css/styles-header.css">
</head>
<body>
    <header class="main-header">
      <div class="header-top-container">
        <div class="header-top">
            <div class="brand">
                <!-- Imagen placeholder con dimensiones fijas -->
                <img src="../img/logoGestogan.png" 
                     alt="Logo GESTOGAN" 
                     class="logo-img" 
                     width="180" height="80">
                <div class="header-tittle">
                    <span>Tecnología al Servicio del Campo</span>
                </div>
            </div>
            <div class="logout">
                <span>Cerrar Sesion</span>
                <div class="icono-5">
                <img src="../img/icono5.png" 
                     alt="Cerrar sesión" 
                     class="icon" 
                     width="24" height="24">
                 </div>
            </div>
        </div>
      </div>

        <!-- NAVEGACIÓN PRINCIPAL (con iconos) -->
        <nav class="main-nav">
            <ul>
                <li>
                    <div class="icono-1">
                    <img src="../img/icono1.png" 
                         alt="Inicio" 
                         class="nav-icon" 
                         width="20" height="20">
                    </div>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <div class="icono-2">
                    <img src="../img/icono2.png" 
                         alt="Registro" 
                         class="nav-icon" 
                         width="20" height="20">
                    </div>
                    <a href="#">Registro</a>
                </li>
                <li>
                    <div class="icono-3">
                    <img src="../img/icono3.png" 
                         alt="Reporte" 
                         class="nav-icon" 
                         width="20" height="20">
                    </div>
                    <a href="#">Reporte</a>
                    
                </li>
                <li>
                    <div class="icono-4">
                    <img src="../img/icono4.png" 
                         alt="Lista Animales" 
                         class="nav-icon" 
                         width="20" height="20">
                    </div>
                    <a href="#">Lista Animales</a>
                </li>
            </ul>
        </nav>

        <!-- MENSAJE DE BIENVENIDA (se mantiene fijo) -->
        <div class="welcome-message">
            <p>¡Bienvenido al Centro de su operación ganadera!</p>
        </div>

        <!-- TÍTULO DE SECCIÓN (parte inferior del header) -->
        <div class="section-title">
            <section class="section-title">
    <h2><?php echo isset($titulo_seccion) ? $titulo_seccion : 'Tipo De Registro'; ?></h2>
</section>
        </div>
    </header>

</body>
</html>