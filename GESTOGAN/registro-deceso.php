<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Deceso - GESTOGAN</title>
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
            <li><a href="registro-tipos.html" class="active">📝 Registro</a></li>
            <li><a href="reportes.html">📊 Reporte</a></li>
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

    <!-- FORMULARIO DE REGISTRO -->
    <section class="form-section">
        <div class="form-container">
            <div class="form-header">
                <h2>Registro Deseso</h2>
            </div>

            <div class="form-box">
                <h3>Registro De Deseso</h3>
                <p class="form-subtitle">Completa la información del deseso</p>

                <form id="registroDecesoForm" class="registro-form registro-form-small">
                    <div class="form-row">
                        <div class="form-group">
                            <label>ID/Numero del Animal *</label>
                            <input type="text" name="idAnimal" placeholder="Ejem" required>
                        </div>
                        <div class="form-group">
                            <label>Fecha Del Deceso*</label>
                            <input type="date" name="fechaDeceso" placeholder="DD/MM/AAAA" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group full-width">
                            <label>Motivo*</label>
                            <input type="text" name="motivo" placeholder="Ejem" required>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label>Observaciones</label>
                        <textarea name="observaciones" placeholder="Ingrese Cualquier Observacion Importante Del Animal..." rows="6"></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-secondary" onclick="window.location.href='registro-tipos.html'">Cerrar Sesión 🔓</button>
                        <button type="button" class="btn-secondary">Cerrar ✖</button>
                        <button type="submit" class="btn-submit">INICIAR SESIÓN</button>
                    </div>
                </form>
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

    <script src="js/registro-deceso.js"></script>
</body>
</html>