<?php
$titulo_seccion = 'Lista De Decesos';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Decesos - GESTOGAN</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- HEADER -->
    <header class="dashboard-header">
        <div class="header-container">
            <div class="logo-section">
                <div class="logo-placeholder">
                    <h1>GESTOGAN</h1>
                </div>
            </div>
            <div class="header-title">
                <h2>Tecnología al Servicio del Campo</h2>
            </div>
            <div class="user-menu">
                <button class="btn-user">Cerrar Sesión 🔓</button>
            </div>
        </div>
    </header>

    <!-- NAVIGATION -->
    <nav class="main-nav">
        <ul>
            <li><a href="dashboard.html">🏠 Inicio</a></li>
            <li><a href="registro-tipos.html">📝 Registro</a></li>
            <li><a href="reportes.html">📊 Reporte</a></li>
            <li><a href="lista-animales.html">🐄 Lista Animales</a></li>
        </ul>
    </nav>

    <!-- HERO BANNER -->
    <section class="dashboard-hero">
        <div class="hero-content">
            <h1>¡Bienvenido al Centro de su operación ganadera!</h1>
            <div class="hero-decoration">
                [Ilustración decorativa de vacas]
            </div>
        </div>
    </section>

    <!-- LISTA DECESOS SECTION -->
    <section class="lista-section">
        <div class="section-header">
            <h2>LISTA DECESOS</h2>
        </div>

        <!-- BÚSQUEDA -->
        <div class="busqueda-box">
            <label>Búsqueda ID/Numero del Animal *</label>
            <input type="text" placeholder="Buscar...">
            <button class="btn-search">Buscar</button>
        </div>

        <!-- TABLA DE DECESOS -->
        <div class="tabla-container">
            <table class="tabla-decesos">
                <thead>
                    <tr>
                        <th>Imagen de animal</th>
                        <th>Nombre del Animal</th>
                        <th>Raza</th>
                        <th>Peso (Kg)</th>
                        <th>Sexo</th>
                        <th>Fecha De Nacimiento</th>
                        <th>Fecha De Deseso</th>
                        <th>Informacion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="placeholder-animal.jpg" alt="Animal" class="img-animal"></td>
                        <td>MANCHITA</td>
                        <td>Brahman</td>
                        <td>480 kg</td>
                        <td class="sexo-hembra">♀ Hembra</td>
                        <td>01/01/2022</td>
                        <td>01/01/2022</td>
                        <td><button class="btn-info">ℹ</button></td>
                    </tr>
                    <tr>
                        <td><img src="placeholder-animal.jpg" alt="Animal" class="img-animal"></td>
                        <td>LUCERO</td>
                        <td>Brahman</td>
                        <td>450 kg</td>
                        <td class="sexo-macho">♂ Macho</td>
                        <td>01/12/2020</td>
                        <td>01/01/2022</td>
                        <td><button class="btn-info">ℹ</button></td>
                    </tr>
                    <tr>
                        <td><img src="placeholder-animal.jpg" alt="Animal" class="img-animal"></td>
                        <td>PALOMO</td>
                        <td>Cebú</td>
                        <td>370 kg</td>
                        <td class="sexo-hembra">♀ Hembra</td>
                        <td>10/10/2019</td>
                        <td>01/01/2022</td>
                        <td><button class="btn-info">ℹ</button></td>
                    </tr>
                    <tr>
                        <td><img src="placeholder-animal.jpg" alt="Animal" class="img-animal"></td>
                        <td>ESTRELLA</td>
                        <td>Brahman</td>
                        <td>420 kg</td>
                        <td class="sexo-hembra">♀ Hembra</td>
                        <td>08/05/2021</td>
                        <td>01/01/2022</td>
                        <td><button class="btn-info">ℹ</button></td>
                    </tr>
                    <tr>
                        <td><img src="placeholder-animal.jpg" alt="Animal" class="img-animal"></td>
                        <td>TORITO</td>
                        <td>Angus</td>
                        <td>500 kg</td>
                        <td class="sexo-macho">♂ Macho</td>
                        <td>15/03/2020</td>
                        <td>01/01/2022</td>
                        <td><button class="btn-info">ℹ</button></td>
                    </tr>
                    <tr>
                        <td><img src="placeholder-animal.jpg" alt="Animal" class="img-animal"></td>
                        <td>NEGRITA</td>
                        <td>Brahman</td>
                        <td>390 kg</td>
                        <td class="sexo-hembra">♀ Hembra</td>
                        <td>20/07/2021</td>
                        <td>01/01/2022</td>
                        <td><button class="btn-info">ℹ</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="dashboard-footer">
        <div class="footer-content">
            <div class="footer-logo">
                [Logo footer]
            </div>
            <p>© 2025 Todos los derechos reservados</p>
            <div class="footer-decoration">
                [Ilustración vaca footer]
            </div>
        </div>
    </footer>

    <script src="js/lista-decesos.js"></script>
</body>
</html>