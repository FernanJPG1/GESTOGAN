<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTOGAN - Header Sistema</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <!-- HEADER SUPERIOR -->
    <div class="header-top">
        <div class="header-top-container">
            <!-- Logo - AQUÍ VA TU IMAGEN DEL LOGO -->
            <div class="logo-section">
                <img src="../img/logoGestoganImagotipoBlanco.png" alt="GESTOGAN" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="logo-placeholder" style="display: none;">
                    Logo GESTOGAN
                </div>
            </div>

            <!-- Título Central -->
            <div class="header-title">
                Tecnología al Servicio del Campo
            </div>

            <!-- Botón Cerrar Sesión -->
            <button class="btn-cerrar-sesion" onclick="handleLogout()">
                Cerrar Sesión
                <span>🔓</span>
            </button>
        </div>
    </div>

    <!-- NAVEGACIÓN -->
    <nav class="main-nav">
        <div class="main-nav-container">
            <div class="nav-item">
                <a href="dashboard.html" class="active">
                    <span class="nav-icon"></span>
                    Inicio
                </a>
            </div>
            <div class="nav-item">
                <a href="registro-tipos.html">
                    <span class="nav-icon"></span>
                    Registro
                </a>
            </div>
            <div class="nav-item">
                <a href="reportes.html">
                    <span class="nav-icon"></span>
                    Reporte
                </a>
            </div>
            <div class="nav-item">
                <a href="lista-animales.html">
                    <span class="nav-icon"></span>
                    Lista Animales
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO BANNER -->
    <div class="hero-banner">
        <div class="hero-content">
            <div class="hero-text">
                <h1>¡Bienvenido al Centro de su</h1>
                <h2>operacion ganadera!</h2>
            </div>
            <!-- Ilustración - AQUÍ VA TU IMAGEN DE VACAS -->
            <div class="hero-illustration">
                <img src="../img/brahmanLogo.png" alt="Vacas" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="illustration-placeholder" style="display: none;">
                    Ilustración
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION TITLE -->
    <div class="section-title">
        
    </div>

    <script>
        function handleLogout() {
            if (confirm('¿Está seguro que desea cerrar sesión?')) {
                localStorage.clear();
                window.location.href = 'index.html';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = window.location.pathname.split('/').pop() || 'dashboard.html';
            const navLinks = document.querySelectorAll('.nav-item a');
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === currentPage) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>