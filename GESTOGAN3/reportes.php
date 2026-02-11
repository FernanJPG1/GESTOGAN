<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes - GESTOGAN</title>
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
            <li><a href="reportes.html" class="active">📊 Reporte</a></li>
            <li><a href="lista-animales.html">🐄 Lista Animales</a></li>
        </ul>
    </nav>

    <!-- HERO BANNER -->
    <section class="dashboard-hero">
        <div class="hero-content">
            <h1>¡Bienvenido al Centro de Control de su Operación Ganadera!</h1>
            <div class="hero-decoration">
                [Ilustración decorativa de vacas]
            </div>
        </div>
    </section>

    <!-- REPORTES SECTION -->
    <section class="reportes-section">
        <div class="section-title">
            <h2>Reporte</h2>
        </div>

        <!-- FILTROS -->
        <div class="filtros-box">
            <div class="filtro-item">
                <label>Fecha de Reporte:</label>
                <select name="fecha">
                    <option>Último</option>
                    <option>Esta semana</option>
                    <option>Este mes</option>
                    <option>Este año</option>
                </select>
            </div>
            <div class="filtro-item">
                <label>Categoria:</label>
                <select name="categoria">
                    <option>Todas</option>
                    <option>Vacas</option>
                    <option>Toros</option>
                    <option>Becerros</option>
                </select>
            </div>
            <div class="filtro-item">
                <label>Fecha Desde</label>
                <input type="date">
            </div>
            <div class="filtro-item">
                <button class="btn-filter">Filtrar</button>
            </div>
        </div>

        <!-- INFORMACIÓN GENERAL -->
        <div class="info-general">
            <h3>Información: Enero Con 27</h3>
        </div>

        <!-- GRÁFICOS -->
        <div class="graficos-grid">
            <div class="grafico-box">
                <h4>Información de Razas</h4>
                <!-- AQUÍ VA GRÁFICO DE BARRAS -->
                <div class="chart-placeholder">
                    [Gráfico de barras de razas]
                </div>
            </div>

            <div class="grafico-box">
                <h4>Grafico de vacunas</h4>
                <!-- AQUÍ VA GRÁFICO CIRCULAR -->
                <div class="chart-placeholder">
                    [Gráfico circular de vacunas]
                </div>
                <!-- AQUÍ VA IMAGEN DE INFOGRAFÍA -->
                <div class="infografia-placeholder">
                    [Imagen infografía]
                </div>
            </div>

            <div class="grafico-box">
                <h4>Reporte de estadisticas</h4>
                <!-- AQUÍ VA GRÁFICO DE BARRAS -->
                <div class="chart-placeholder">
                    [Gráfico de estadísticas]
                </div>
            </div>
        </div>

        <!-- TABLA DE VACAS -->
        <div class="tabla-section">
            <h3>Registro de Vacas - Detalle por Animal</h3>
            <div class="tabla-container">
                <table class="tabla-animales">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Raza</th>
                            <th>Peso (Kg)</th>
                            <th>Sexo</th>
                            <th>Fecha De Nacimiento</th>
                            <th>Estado De Reproducción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td>MANCHITA</td>
                            <td>Ganado</td>
                            <td>207 Kg</td>
                            <td>207 Kg</td>
                            <td>Hembra</td>
                            <td>01/01/2022</td>
                            <td>Gestante/Inseminada</td>
                        </tr>
                        <tr>
                            <td>0002</td>
                            <td>LUCERO</td>
                            <td>Ganado</td>
                            <td>190 Kg</td>
                            <td>190 Kg</td>
                            <td>Hembra</td>
                            <td>15/03/2021</td>
                            <td>Lactante/Amamantando</td>
                        </tr>
                        <tr>
                            <td>0003</td>
                            <td>PALOMO</td>
                            <td>Ganado</td>
                            <td>450 Kg</td>
                            <td>450 Kg</td>
                            <td>Macho</td>
                            <td>10/06/2020</td>
                            <td>Reproductor Activo</td>
                        </tr>
                        <tr>
                            <td>0004</td>
                            <td>ESTRELLA</td>
                            <td>Ganado</td>
                            <td>220 Kg</td>
                            <td>220 Kg</td>
                            <td>Hembra</td>
                            <td>20/11/2022</td>
                            <td>Vacia/Abierta</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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

    <script src="js/reportes.js"></script>
</body>
</html>