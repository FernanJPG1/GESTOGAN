<?php
$titulo_seccion = 'Tipos De Registro';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Registro - GESTOGAN</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Header -->
   <php include 'includes/header.php'; ?></php>

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
    <div class="page-header">TIPOS DE REGISTRO</div>

    <!-- Main Content -->
    <main class="main-content">
        <div class="registro-types-container">
            <div class="registro-types-grid">
                <div class="registro-type-card" onclick="window.location.href='tipos-animal.html'">
                    <h3>ANIMAL</h3>
                </div>

                <div class="registro-type-card" onclick="window.location.href='registro-vacuna.html'">
                    <h3>VACUNA</h3>
                </div>

                <div class="registro-type-card" onclick="window.location.href='registro-deceso.html'">
                    <h3>DECESO</h3>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <php include 'includes/footer.php'; ?></php>
</body>
</html>