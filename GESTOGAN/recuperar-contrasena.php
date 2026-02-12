<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - GESTOGAN</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="auth-page">
    <!-- PASO 1: Ingresar correo -->
    <div id="paso1" class="auth-container">
        <div class="auth-box auth-box-small">
            <h2>RECUPERAR CONTRASEÑA.</h2>
            
            <form id="recuperarForm" class="auth-form">
                <div class="form-group">
                    <input type="email" id="correoRecuperar" name="correoRecuperar" placeholder="INGRESE SU CORREO ELECTRONICO." required>
                </div>

                <button type="submit" class="btn-submit">ENVIAR CORREO</button>
            </form>
        </div>
    </div>

    <!-- PASO 2: Confirmación de envío -->
    <div id="paso2" class="auth-container" style="display: none;">
        <div class="auth-box auth-box-small">
            <h2>RECUPERAR CONTRASEÑA.</h2>
            
            <div class="message-box">
                <p>EL CORREO ELECTRÓNICO FUE ENVIADO.</p>
                <button class="btn-submit" onclick="window.location.href='login.html'">IR AL INICIO</button>
            </div>
        </div>
    </div>

    <!-- PASO 3: Cambiar contraseña -->
    <div id="paso3" class="auth-container" style="display: none;">
        <div class="auth-box auth-box-small">
            <h2>INGRESE SU NUEVA CONTRASEÑA.</h2>
            
            <form id="nuevaContrasenaForm" class="auth-form">
                <div class="form-group">
                    <input type="password" id="nuevaContrasena" name="nuevaContrasena" placeholder="INGRESE SU CONTRASEÑA." required>
                </div>

                <div class="form-group">
                    <input type="password" id="repitaNuevaContrasena" name="repitaNuevaContrasena" placeholder="REPITA SU CONTRASEÑA." required>
                </div>

                <button type="submit" class="btn-submit">IR AL INICIO.</button>
            </form>
        </div>
    </div>

    <script src="js/recuperar.js"></script>
</body>
</html>