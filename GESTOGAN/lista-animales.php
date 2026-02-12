<?php
$titulo_seccion = 'Lista De Animales';
include 'header.php';
?>
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
    <?php include 'includes/header.php'; ?>



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
    <?php include 'includes/footer.php'; ?>

    <script src="js/lista-animales.js"></script>
</body>
</html>