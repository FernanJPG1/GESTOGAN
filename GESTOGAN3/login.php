<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - GESTOGAN</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-box auth-box-small">
            <h2>INICIO DE SESIÓN.</h2>
            
            <form id="loginForm" class="auth-form">
                <div class="form-group">
                    <input type="text" id="nombreGanaderia" name="nombreGanaderia" placeholder="NOMBRE GANADERIA." required>
                </div>

                <div class="form-group">
                    <input type="password" id="contrasena" name="contrasena" placeholder="CONTRASEÑA." required>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="recordarme" name="recordarme">
                    <label for="recordarme">RECUERDAME.</label>
                </div>

                <button type="submit" class="btn-submit">INICIAR SESIÓN</button>

                <a href="recuperar-contrasena.html" class="link-secondary">RECUPERAR CONTRASEÑA.</a>
            </form>
        </div>
    </div>

    <script src="js/login.js"></script>
</body>
</html>