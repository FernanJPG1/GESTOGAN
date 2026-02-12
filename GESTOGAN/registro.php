<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario - GESTOGAN</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-box">
            <h2>REGISTRO DE USUARIO.</h2>
            
            <form id="registroForm" class="auth-form">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nombre" name="nombre" placeholder="NOMBRE." required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="apellido" name="apellido" placeholder="APELLIDO." required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="tipoId" name="tipoId" placeholder="TIPO DE ID." required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="numeroId" name="numeroId" placeholder="NUMERO ID." required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="nombreGanaderia" name="nombreGanaderia" placeholder="NOMBRE GANADERIA." required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="correo" name="correo" placeholder="CORREO ELECTRONICO." required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="password" id="contrasena" name="contrasena" placeholder="CONTRASEÑA." required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="repitaContrasena" name="repitaContrasena" placeholder="REPITA SU CONTRASEÑA." required>
                    </div>
                </div>

                <button type="submit" class="btn-submit">REGISTRATE</button>
            </form>
        </div>
    </div>

    <script src="js/registro.js"></script>
</body>
</html>