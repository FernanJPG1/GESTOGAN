<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTOGAN - Software de Gestión Ganadera</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- HEADER -->
    <?php include 'includes/header.php'; ?>
    

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-image">
                <!-- AQUÍ VA LA IMAGEN DEL GANADERO (imagen izquierda) -->
                <div class="image-placeholder">
                    [Imagen del ganadero trabajando]
                </div>
            </div>
            <div class="hero-text">
                <h2>Tradición en Datos</h2>
                <p>La tradición ganadera se escribe entre potrerios y amaneceres... Pero hoy, también se escribe en datos. GESTOGAN es el puente entre la herencia del campo y el futuro digital. Porque su pasión merece herramientas a la altura.</p>
            </div>
            <!-- AQUÍ VA LA ILUSTRACIÓN DE VACA (lado derecho) -->
            <div class="hero-decoration">
                <img src="img/imagen1.png" alt="">
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="main-content">
        <div class="content-box">
            <h3>Tu abuelo conocía cada animal por su nombre. Tú conocerás cada dato con un solo vistazo.</h3>
            <button class="btn-primary" onclick="window.location.href='login.html'">SABER MÁS</button>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>