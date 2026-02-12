<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vacunación - GESTOGAN</title>
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
                <h2>Registro De Vacunacion</h2>
            </div>

            <div class="form-box">
                <h3>Registro De Vacunacion</h3>
                <p class="form-subtitle">Completa la información de la vacunación</p>

                <form id="registroVacunacionForm" class="registro-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label>ID/Numero Del Animal *</label>
                            <input type="text" name="idAnimal" placeholder="Ejem" required>
                        </div>
                        <div class="form-group">
                            <label>Nombre Del Animal*</label>
                            <input type="text" name="nombreAnimal" placeholder="Ejem" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Tipo De Vacunacion*</label>
                            <input type="text" name="tipoVacuna" placeholder="Ejem" required>
                        </div>
                        <div class="form-group">
                            <label>Fecha De Vacunacion*</label>
                            <input type="date" name="fechaVacunacion" placeholder="DD/MM/AAAA" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Nombre Comercial De La Vacuna*</label>
                            <input type="text" name="nombreVacuna" placeholder="Ejem" required>
                        </div>
                        <div class="form-group">
                            <label>Lote De La Vacuna*</label>
                            <input type="text" name="loteVacuna" placeholder="Ejem" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Estado De Alimentacion</label>
                            <select name="estadoAlimentacion">
                                <option value="">DD/MM/AAAA</option>
                                <option value="lactancia">Lactancia</option>
                                <option value="destete">Destete</option>
                                <option value="engorde">Engorde</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Via De Aplicacion*</label>
                            <input type="text" name="viaAplicacion" placeholder="Ejem" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Dosis Aplicada (ml)*</label>
                            <input type="number" name="dosisAplicada" placeholder="Ejem" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label>Fecha De Revacunacion*</label>
                            <input type="date" name="fechaRevacunacion" placeholder="DD/MM/AAAA" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group full-width">
                            <label>Estado Del Animal Post-Vacunacion</label>
                            <div class="radio-group">
                                <label><input type="radio" name="estadoAnimal" value="normal" checked> Normal</label>
                                <label><input type="radio" name="estadoAnimal" value="reaccion"> Reacción</label>
                                <label><input type="radio" name="estadoAnimal" value="alerta"> Alerta</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label>Observaciones</label>
                        <textarea name="observaciones" placeholder="Ingrese Cualquier Observacion Importante Sobre La Vacunación..." rows="4"></textarea>
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

    <script src="js/registro-vacuna.js"></script>
</body>
</html>