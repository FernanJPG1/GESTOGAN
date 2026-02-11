<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - GESTOGAN</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- HEADER -->
    <?php include 'includes/header.php'; ?>
    <!-- NAVIGATION -->
    <nav class="main-nav">
        <ul>
            <li><a href="dashboard.html" class="active">🏠 Inicio</a></li>
            <li><a href="registro-tipos.html">📝 Registro</a></li>
            <li><a href="reportes.html">📊 Reporte</a></li>
            <li><a href="lista-animales.html">🐄 Lista Animales</a></li>
        </ul>
    </nav>

    <!-- HERO BANNER -->
    <section class="dashboard-hero">
        <div class="hero-content">
            <h1>¡Bienvenido al Centro de Control de su Operación Ganadera!</h1>
            <!-- AQUÍ VA LA ILUSTRACIÓN DE VACAS (lado derecho) -->
            <div class="hero-decoration">
                [Ilustración decorativa de vacas]
            </div>
        </div>
    </section>

    <!-- STATISTICS CARDS -->
    <section class="stats-section">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">📋</div>
                <div class="stat-number">279</div>
                <div class="stat-label">Animales Registrados</div>
                <div class="stat-detail">+ 7.3 Ultimo Mes</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">📋</div>
                <div class="stat-number">229</div>
                <div class="stat-label">Animales Activos</div>
                <div class="stat-detail">+ 7.3 Ultimo Mes</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">📋</div>
                <div class="stat-number">21</div>
                <div class="stat-label">Animales En Tratamiento</div>
                <div class="stat-detail alert">4 En Este Semana</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">📋</div>
                <div class="stat-number">279</div>
                <div class="stat-label">Animales Registrados</div>
                <div class="stat-detail">+ 7.3 Ultimo Mes</div>
            </div>
        </div>
    </section>

    <!-- CHARTS AND ACTIVITIES -->
    <section class="dashboard-content">
        <div class="content-grid">
            <div class="chart-box">
                <h3>📊 Produccion Mensual</h3>
                <div class="chart-placeholder">
                    Gráfico
                    <!-- AQUÍ SE RENDERIZARÁ EL GRÁFICO DE PRODUCCIÓN -->
                </div>
            </div>

            <div class="activities-box">
                <h3>Actividad Reciente</h3>
                <ul class="activity-list">
                    <li>
                        <span class="activity-icon">😊</span>
                        <span class="activity-text">Alimentacion Matutina</span>
                        <span class="activity-time">2:37 pm Hoy</span>
                    </li>
                    <li>
                        <span class="activity-icon">🆕</span>
                        <span class="activity-text">Nuevo Nacimiento</span>
                        <span class="activity-time">2:37 pm Hoy</span>
                    </li>
                    <li>
                        <span class="activity-icon">⚖️</span>
                        <span class="activity-text">Pesaje Registrado</span>
                        <span class="activity-time">2:37 pm Hoy</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <php include 'includes/footer.php'; ?>
        
    <script src="js/dashboard.js"></script>
</body>
</html>