<?php
$titulo_seccion = 'Tipos de Registro Animal';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Registro Animal - GESTOGAN</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-top">
            <div class="logo-container">
                <div class="logo-placeholder">LOGO GESTOGAN</div>
                <span class="tagline">Tecnología al Servicio del Campo</span>
            </div>
            <div class="user-actions">
                <button class="btn-header" onclick="window.location.href='index.html'">Cerrar Sesión 🔒</button>
            </div>
        </div>
        <nav class="navigation">
            <ul class="nav-menu">
                <li><a href="dashboard.html">🏠 Inicio</a></li>
                <li><a href="tipos-registro.html" class="active">📝 Registro</a></li>
                <li><a href="reporte.html">📊 Reporte</a></li>
                <li><a href="lista-animales.html">🐄 Lista Animales</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Banner -->
    <div class="hero-banner">
        <div class="hero-content">
            <div class="hero-text">
                <h1>¡Bienvenido al Centro de su<br>operación ganadera!</h1>
            </div>
            <div>
                <div class="decoration-placeholder">IMAGEN: Vaca decorativa</div>
            </div>
        </div>
    </div>

    <!-- Page Header -->
    <div class="page-header">TIPO DE REGISTRO</div>

    <!-- Main Content -->
    <main class="main-content">
        <div class="animal-types-grid">
            <div class="animal-type-card" onclick="window.location.href='registro-ternero.html'">
                <div class="animal-icon-placeholder">
                    IMAGEN:<br>Ternero
                </div>
                <!-- Descomenta cuando tengas las imágenes:
                <img src="img/icon-ternero.png" alt="Ternero" class="animal-icon">
                -->
                <h3>REGISTRO<br>TERNERO</h3>
            </div>

            <div class="animal-type-card" onclick="window.location.href='registro-toro.html'">
                <div class="animal-icon-placeholder">
                    IMAGEN:<br>Toro
                </div>
                <!-- Descomenta cuando tengas las imágenes:
                <img src="img/icon-toro.png" alt="Toro" class="animal-icon">
                -->
                <h3>REGISTRO<br>TORO</h3>
            </div>

            <div class="animal-type-card" onclick="window.location.href='registro-vaca.html'">
                <div class="animal-icon-placeholder">
                    IMAGEN:<br>Vaca
                </div>
                <!-- Descomenta cuando tengas las imágenes:
                <img src="img/icon-vaca.png" alt="Vaca" class="animal-icon">
                -->
                <h3>REGISTRO<br>VACA</h3>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo-placeholder">LOGO</div>
            <div class="footer-text">© 2025 Todos los derechos reservados</div>
            <div class="footer-decoration-placeholder"></div>
        </div>
    </footer>
</body>
</html>