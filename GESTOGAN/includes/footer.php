<head>
    <link rel="stylesheet" href="../css/styles-footer.css">
</head>
<footer class="main-footer" id="mainFooter">
   <div class="footer-principal">
    <div class="footer-content">
        <!-- Logo  -->
        <div class="footer-section footer-brand">
            <div class="footer-logo">
                <img src="../img/logoGestoganImagotipoBlanco.png" 
                     alt="Logo GESTOGAN" 
                     class="footer-logo-img"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="footer-logo-placeholder" style="display: none;">
                        <img src="../img/brahman.png" alt="vaca">
                </div>
            </div>
        </div>
    
    <!-- Copyright -->
    <div class="footer-bottom">
        <div class="footer-bottom-content">
            <p class="copyright"> 2026 GESTOGAN - Todos los derechos reservados</p>
            <p class="footer-credits">Desarrollado por SENA - Analisis y Desarrollo de Software</p>
        </div>
    </div>

                <!-- INSERTAR ILUSTRACIÓN FOOTER AQUÍ: vaca-footer.svg (80px x 80px) -->
            <img src="imagenes/vaca-footer.svg" 
                 alt="Ilustración decorativa" 
                 class="footer-decoration-img"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
            <div class="footer-decoration-placeholder" style="display: none;">
                <img src="../img/brahman.jpeg" alt="">
            </div>
    
    <!-- Botón volver arriba -->
    <button class="back-to-top" id="backToTop" aria-label="Volver arriba">
        <span>↑</span>
    </button>
</footer>


<!-- JAVASCRIPT DEL FOOTER -->
<script>
(function() {
    // Botón volver arriba
    const backToTop = document.getElementById('backToTop');
    
    if (backToTop) {
        // Mostrar/ocultar botón según scroll
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });
        
        // Scroll suave al hacer clic
        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Año dinámico en copyright
    const currentYear = new Date().getFullYear();
    const copyrightElement = document.querySelector('.copyright');
    if (copyrightElement) {
        copyrightElement.innerHTML = copyrightElement.innerHTML.replace('2025', currentYear);
    }
    
    // Animación de entrada de los enlaces del footer
    const footerLinks = document.querySelectorAll('.footer-section a');
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 50);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    footerLinks.forEach(link => {
        link.style.opacity = '0';
        link.style.transform = 'translateY(10px)';
        link.style.transition = 'all 0.3s ease';
        observer.observe(link);
    });
})();
</script>