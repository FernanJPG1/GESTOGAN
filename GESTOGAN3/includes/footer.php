<!-- ========================================
     GESTOGAN - FOOTER COMPONENT
     Archivo: components/footer.html
     Uso: Incluir en todas las páginas
     ======================================== -->

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

<!-- ESTILOS DEL FOOTER -->
<style>
/* === FOOTER STYLES === */
.main-footer {
    background-color: #000000;
    color: #FFFFFF;
    padding: 50px 20px 0;
    position: relative;
    margin-top: 80px;
}

.footer-content {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
    gap: 40px;
    padding-bottom: 40px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

/* Footer Brand */
.footer-brand {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.footer-logo {
    width: 120px;
    height: 120px;
    border-radius: 8px;
}

.footer-logo-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    border-radius: 8px;
    padding: 8px;
}

.footer-logo-placeholder {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
}

.footer-text {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.footer-title {
    font-size: 20px;
    font-weight: bold;
    margin: 0;
    color: #8FBC8F;
}

.footer-subtitle {
    font-size: 13px;
    color: #CCCCCC;
    margin: 0;
}

.footer-description {
    font-size: 12px;
    color: #999999;
    margin: 0;
    font-style: italic;
}

/* Footer Sections */
.footer-section {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.footer-section h4 {
    color: #8FBC8F;
    font-size: 16px;
    margin-bottom: 15px;
    font-weight: 600;
}

.footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-section li {
    margin-bottom: 5px;
}

.footer-section a {
    color: #CCCCCC;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s ease, padding-left 0.3s ease;
    display: inline-block;
}

.footer-section a:hover {
    color: #FFFFFF;
    padding-left: 5px;
}

/* Footer Decoration */
.footer-decoration {
    display: flex;
    align-items: center;
}

.footer-decoration-img {
    width: 80px;
    height: 80px;
    object-fit: contain;
    opacity: 0.5;
    animation: float 4s ease-in-out infinite;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-15px);
    }
}

.footer-decoration-placeholder {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 40px;
    opacity: 0.5;
}

/* Footer Bottom */
.footer-bottom {
    background-color: rgba(0, 0, 0, 0.3);
    padding: 20px 0;
}

.footer-bottom-content {
    max-width: 100%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    padding: 0 10px;
    font-size: 20px;
}

.copyright {
    font-size: 14px;
    color: #CCCCCC;
    margin: 0;
    font-weight: 500;
}

.footer-bottom-links {
    display: flex;
    align-items: center;
    gap: 10px;
}

.footer-bottom-links a {
    color: #999999;
    text-decoration: none;
    font-size: 12px;
    transition: color 0.3s ease;
}

.footer-bottom-links a:hover {
    color: #FFFFFF;
}

.separator {
    color: #666666;
    font-size: 12px;
}

.footer-credits {
    font-size: 11px;
    color: #666666;
    margin: 0;
}

/* Back to Top Button */
.back-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    background-color: #8FBC8F;
    color: #FFFFFF;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    font-size: 24px;
    display: none;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
    z-index: 999;
}

.back-to-top:hover {
    background-color: #6B9B6B;
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.4);
}

.back-to-top.visible {
    display: flex;
    animation: fadeInUp 0.3s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* === RESPONSIVE === */
@media (max-width: 1024px) {
    .footer-content {
        grid-template-columns: repeat(3, 1fr);
    }
    
    .footer-brand {
        grid-column: 1 / -1;
    }
    
    .footer-decoration {
        grid-column: 1 / -1;
        justify-content: center;
        margin-top: 20px;
    }
}

@media (max-width: 768px) {
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .footer-bottom-content {
        padding: 0 20px;
    }
    
    .footer-bottom-links {
        flex-wrap: wrap;
        justify-content: center;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .main-footer {
        padding: 30px 15px 0;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .footer-section h4 {
        font-size: 14px;
    }
    
    .footer-section a {
        font-size: 13px;
    }
    
    .back-to-top {
        width: 45px;
        height: 45px;
        bottom: 20px;
        right: 20px;
        font-size: 20px;
    }
    
    .copyright,
    .footer-bottom-links a {
        font-size: 12px;
    }
}
</style>

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