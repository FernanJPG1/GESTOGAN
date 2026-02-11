<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animales - GESTOGAN</title>
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
            <li><a href="dashboard.html"> Inicio</a></li>
            <li><a href="registro-tipos.html"> Registro</a></li>
            <li><a href="reportes.html"> Reporte</a></li>
            <li><a href="lista-animales.html" class="active"> Lista Animales</a></li>
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

    <!-- LISTA ANIMALES SECTION -->
    <section class="lista-section">
        <div class="section-header">
            <h2>LISTA ANIMALES</h2>
        </div>

        <!-- BÚSQUEDA -->
        <div class="busqueda-box">
            <label>Búsqueda ID/Numero del Animal *</label>
            <input type="text" placeholder="Buscar...">
            <button class="btn-search">Buscar</button>
        </div>

        <!-- TABLA DE ANIMALES -->
        <div class="tabla-container">
            <table class="tabla-animales-lista">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>ID Numero</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Raza</th>
                        <th>Peso (Kg)</th>
                        <th>Sexo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Estado</th>
                        <th>Observaciones</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><div class="img-placeholder">🐄</div></td>
                        <td>0001</td>
                        <td>MANCHITA</td>
                        <td>Vaca</td>
                        <td>Brahman</td>
                        <td>480 kg</td>
                        <td class="sexo-hembra">♀ Hembra</td>
                        <td>01/01/2022</td>
                        <td><span class="badge badge-activo">Disponible</span></td>
                        <td>Excelente condición</td>
                        <td>
                            <button class="btn-action btn-edit">✏️</button>
                            <button class="btn-action btn-delete">🗑️</button>
                            <button class="btn-action btn-info">ℹ️</button>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="img-placeholder">🐄</div></td>
                        <td>0002</td>
                        <td>LUCERO</td>
                        <td>Toro</td>
                        <td>Brahman</td>
                        <td>650 kg</td>
                        <td class="sexo-macho">♂ Macho</td>
                        <td>15/03/2020</td>
                        <td><span class="badge badge-activo">Disponible</span></td>
                        <td>Reproductor</td>
                        <td>
                            <button class="btn-action btn-edit">✏️</button>
                            <button class="btn-action btn-delete">🗑️</button>
                            <button class="btn-action btn-info">ℹ️</button>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="img-placeholder">🐄</div></td>
                        <td>0003</td>
                        <td>PALOMO</td>
                        <td>Novillo</td>
                        <td>Angus</td>
                        <td>420 kg</td>
                        <td class="sexo-macho">♂ Macho</td>
                        <td>10/06/2021</td>
                        <td><span class="badge badge-vendido">Vendido</span></td>
                        <td>Vendido en subasta</td>
                        <td>
                            <button class="btn-action btn-edit">✏️</button>
                            <button class="btn-action btn-delete">🗑️</button>
                            <button class="btn-action btn-info">ℹ️</button>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="img-placeholder">🐄</div></td>
                        <td>0004</td>
                        <td>ESTRELLA</td>
                        <td>Becerro</td>
                        <td>Holstein</td>
                        <td>180 kg</td>
                        <td class="sexo-hembra">♀ Hembra</td>
                        <td>20/11/2023</td>
                        <td><span class="badge badge-activo">Disponible</span></td>
                        <td>En crecimiento</td>
                        <td>
                            <button class="btn-action btn-edit">✏️</button>
                            <button class="btn-action btn-delete">🗑️</button>
                            <button class="btn-action btn-info">ℹ️</button>
                        </td>
                    </tr>
                    <tr>
                        <td><div class="img-placeholder">🐄</div></td>
                        <td>0005</td>
                        <td>TORITO</td>
                        <td>Toro</td>
                        <td>Brahman</td>
                        <td>700 kg</td>
                        <td class="sexo-macho">♂ Macho</td>
                        <td>05/02/2019</td>
                        <td><span class="badge badge-activo">Disponible</span></td>
                        <td>Semental principal</td>
                        <td>
                            <button class="btn-action btn-edit">✏️</button>
                            <button class="btn-action btn-delete">🗑️</button>
                            <button class="btn-action btn-info">ℹ️</button>
                        </td>
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

    <script src="js/lista-animales.js"></script>
</body>
</html>