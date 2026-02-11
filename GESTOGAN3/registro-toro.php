<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Toro Reproductor - GESTOGAN</title>
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
                <h1>¡Bienvenido al Centro de<br>Control de su Operación<br>Ganadera!</h1>
            </div>
            <div>
                <div class="decoration-placeholder">IMAGEN: Vaca decorativa</div>
            </div>
        </div>
    </div>

    <!-- Page Header -->
    <div class="page-header">Registro De Toro Reproductor</div>

    <!-- Main Content -->
    <main class="main-content">
        <div class="form-container">
            <div class="form-card">
                <div class="form-header">
                    <h2>Registro De Toro Reproductor</h2>
                    <p>Complete toda la información requerida para registrar el nuevo animal</p>
                </div>

                <div class="form-body">
                    <form id="formToro">
                        <div class="form-row">
                            <div class="form-group">
                                <label>ID/Número del Animal *</label>
                                <input type="text" class="form-control" placeholder="Ejem" required>
                            </div>
                            <div class="form-group">
                                <label>Nombre Del Animal*</label>
                                <input type="text" class="form-control" placeholder="Ejem" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Raza*</label>
                                <input type="text" class="form-control" placeholder="Ejem" required>
                            </div>
                            <div class="form-group">
                                <label>Fecha De Nacimiento*</label>
                                <input type="date" class="form-control" placeholder="DD/MM/AA" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Peso (Kg)</label>
                                <input type="number" class="form-control" placeholder="Ejem" step="0.01">
                            </div>
                            <div class="form-group">
                                <label>Origen/Procedencia</label>
                                <input type="text" class="form-control" placeholder="Ejem">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Sexo*</label>
                                <div class="radio-group">
                                    <div class="radio-option">
                                        <input type="radio" id="hembra-t" name="sexo" value="Hembra">
                                        <label for="hembra-t">Hembra</label>
                                    </div>
                                    <div class="radio-option">
                                        <input type="radio" id="macho-t" name="sexo" value="Macho" checked required>
                                        <label for="macho-t">Macho</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Estado Reproductivo*</label>
                                <input type="text" class="form-control" placeholder="Ejem" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>ID Madre</label>
                                <input type="text" class="form-control" placeholder="Ejem">
                            </div>
                            <div class="form-group">
                                <label>ID Padre</label>
                                <input type="text" class="form-control" placeholder="Ejem">
                            </div>
                        </div>

                        <hr class="form-divider">

                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea class="form-control" rows="3" placeholder="Ingrese Cualquier Observación Importante Del Animal..."></textarea>
                        </div>

                        <hr class="form-divider">

                        <div class="photo-upload">
                            <p>Fotografía Del Animal</p>
                            <div class="photo-placeholder"></div>
                            <p style="margin-top: 10px; font-size: 12px;">Haz Clic Para Subir Una Foto</p>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn-secondary" onclick="window.location.href='tipos-animal.html'">Cancelar ❌</button>
                            <button type="button" class="btn-success" onclick="alert('Toro registrado exitosamente'); window.location.href='dashboard.html'">GUARDAR</button>
                        </div>
                    </form>
                </div>
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