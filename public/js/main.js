// ==========================================
// FUNCIONALIDADES PRINCIPALES
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    console.log('%c🏛️ Fundación DU', 'font-size: 24px; font-weight: bold; color: #0F2C59;');
    console.log('%cDesarrollado para la comunidad universitaria', 'font-size: 14px; color: #2B72C4;');
    
    // Scroll suave
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});