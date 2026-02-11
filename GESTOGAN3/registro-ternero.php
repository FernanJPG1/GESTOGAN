<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Becerros - GESTOGAN</title>
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
                <h2>Registro De Toro Reproductor</h2>
            </div>

            <div class="form-box">
                <h3>Registro De Becerros</h3>
                <p class="form-subtitle">Completa la información del nuevo becero</p>

                <form id="registroBecerroForm" class="registro-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label>ID/Numero del Animal *</label>
                            <input type="text" name="idAnimal" placeholder="Ejem" required>
                        </div>
                        <div class="form-group">
                            <label>Nombre Del Animal*</label>
                            <input type="text" name="nombreAnimal" placeholder="Ejem" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Raza*</label>
                            <input type="text" name="raza" placeholder="Ejem" required>
                        </div>
                        <div class="form-group">
                            <label>Fecha De Nacimiento*</label>
                            <input type="date" name="fechaNacimiento" placeholder="DD/MM/AAAA" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Peso Al Nacer (Kg)</label>
                            <input type="number" name="pesoNacer" placeholder="Ejem" step="0.01">
                        </div>
                        <div class="form-group">
                            <label>Origen/Procedencia</label>
                            <input type="text" name="origen" placeholder="Ejem">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Sexo*</label>
                            <select name="sexo" required>
                                <option value="">- Hembra -</option>
                                <option value="hembra">Hembra</option>
                                <option value="macho">Macho</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Peso Actual (Kg)</label>
                            <input type="number" name="pesoActual" placeholder="Ejem" step="0.01">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>ID Madre</label>
                            <input type="text" name="idMadre" placeholder="Ejem">
                        </div>
                        <div class="form-group">
                            <label>ID Padre</label>
                            <input type="text" name="idPadre" placeholder="Ejem">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Estado De Alimentacion</label>
                            <select name="estadoAlimentacion">
                                <option value="lactancia">Lactancia</option>
                                <option value="destete">Destete</option>
                                <option value="engorde">Engorde</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Edad Estimada De Destete</label>
                            <input type="date" name="edadDestete" placeholder="DD/MM/AAAA">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label>Observaciones</label>
                        <textarea name="observaciones" placeholder="Ingrese Cualquier Observacion Importante Del Animal..." rows="4"></textarea>
                    </div>

                    <div class="form-group full-width">
                        <label>Fotografia Del Animal</label>
                        <div class="file-upload">
                            <p>Haz Clic Para Subir Una Foto</p>
                            <input type="file" name="foto" accept="image/*">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-secondary" onclick="window.location.href='registro-animal.html'">Cerrar Sesión 🔓</button>
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

    <script src="js/registro-becerro.js"></script>
</body>
</html>