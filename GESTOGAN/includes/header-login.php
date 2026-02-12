<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Sistema - GESTOGAN</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <!-- HEADER DEL SISTEMA -->
    <header class="system-header">
        <div class="header-container">
            <!-- Logo Section -->
            <div class="logo-section" onclick="window.location.href='dashboard.php'">
                <div class="logo">
                    <img src="../img/logoGestogan.png" alt="">
                </div>
            </div>
            
            <!-- Menu Toggle (Mobile) -->
            <div class="menu-toggle" onclick="toggleMobileMenu(this)">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Header Title -->
            <div class="header-title">
                <h2>Tecnología al Servicio del Campo</h2>
            </div>
            
            <!-- User Section -->
            <div class="user-section">
                <!-- Notification Bell -->
                <div class="notification-bell" onclick="showNotifications()">
                    <span class="notification-icon">🔔</span>
                    <span class="notification-badge">3</span>
                </div>
                
                <!-- User Info -->
                <div class="user-info">
                    <div class="user-avatar">
                        U
                    </div>
                    <div class="user-details">
                        <span class="user-name">Usuario Demo</span>
                        <span class="user-role">Administrador</span>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="header-buttons">
                    <button class="btn-header btn-logout" onclick="handleLogout()">
                        <span class="btn-icon">🚪</span>
                        Cerrar Sesión
                    </button>
                </div>
            </div>
        </div>
    </header>
    
    <!-- JAVASCRIPT -->
    <script>
        // ========================================
        // GESTOGAN - JavaScript del Header
        // ========================================
        
        // Toggle menu móvil
        function toggleMobileMenu(element) {
            element.classList.toggle('active');
            const userSection = document.querySelector('.user-section');
            
            if (element.classList.contains('active')) {
                userSection.style.display = 'flex';
            } else {
                if (window.innerWidth <= 768) {
                    userSection.style.display = 'none';
                }
            }
        }
        
        // Mostrar notificaciones
        function showNotifications() {
            alert('🔔 Notificaciones:\n\n' +
                  '1. Vacunación pendiente para "Manchita"\n' +
                  '2. Nuevo becerro registrado\n' +
                  '3. Reporte mensual disponible');
        }
        
        // Cerrar sesión
        function handleLogout() {
            if (confirm('¿Está seguro que desea cerrar sesión?')) {
                // Limpiar localStorage
                localStorage.clear();
                
                // Redirigir al login
                window.location.href = 'index.html';
            }
        }
        
        // Cargar datos del usuario
        function loadUserData() {
            const user = JSON.parse(localStorage.getItem('user') || '{}');
            
            if (user.nombre) {
                const userNameEl = document.querySelector('.user-name');
                const userAvatarEl = document.querySelector('.user-avatar');
                
                if (userNameEl) {
                    userNameEl.textContent = user.nombre;
                }
                
                if (userAvatarEl) {
                    userAvatarEl.textContent = user.nombre.charAt(0).toUpperCase();
                }
            }
            
            if (user.ganaderia) {
                const logoText = document.querySelector('.logo-text p');
                if (logoText) {
                    logoText.textContent = user.ganaderia;
                }
            }
        }
        
        // Actualizar badge de notificaciones
        function updateNotificationCount() {
            const notifications = JSON.parse(localStorage.getItem('notifications') || '[]');
            const badge = document.querySelector('.notification-badge');
            
            if (badge && notifications.length > 0) {
                badge.textContent = notifications.length;
                badge.style.display = 'flex';
            } else if (badge && notifications.length === 0) {
                badge.style.display = 'none';
            }
        }
        
        // Responsive: ajustar visibilidad del user section
        function handleResize() {
            const userSection = document.querySelector('.user-section');
            const menuToggle = document.querySelector('.menu-toggle');
            
            if (window.innerWidth > 768) {
                userSection.style.display = 'flex';
                if (menuToggle) {
                    menuToggle.classList.remove('active');
                }
            } else {
                if (!menuToggle.classList.contains('active')) {
                    userSection.style.display = 'none';
                }
            }
        }
        
        // Inicialización
        document.addEventListener('DOMContentLoaded', function() {
            // Cargar datos del usuario
            loadUserData();
            
            // Actualizar notificaciones
            updateNotificationCount();
            
            // Configurar responsive
            handleResize();
            window.addEventListener('resize', handleResize);
            
            // Log de bienvenida
            console.log('%c🐄 GESTOGAN Header Cargado', 
                'color: #8FBC8F; font-size: 16px; font-weight: bold;');
        });
        
        // Efecto de scroll - cambiar sombra del header
        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.system-header');
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 50) {
                header.style.boxShadow = '0 4px 12px rgba(0,0,0,0.15)';
            } else {
                header.style.boxShadow = '0 2px 8px rgba(0,0,0,0.1)';
            }
            
            lastScroll = currentScroll;
        });
    </script>
</body>
</html>