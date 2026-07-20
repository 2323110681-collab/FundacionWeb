// ==========================================
// NAVBAR - MENÚ MÓVIL Y DROPDOWNS
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    // Menú móvil
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
            const icon = this.querySelector('i');
            icon.className = mobileMenu.classList.contains('hidden') 
                ? 'fas fa-bars' 
                : 'fas fa-times';
        });
        
        document.addEventListener('click', function(e) {
            if (!mobileMenu.classList.contains('hidden') && 
                !mobileMenu.contains(e.target) && 
                !menuBtn.contains(e.target)) {
                mobileMenu.classList.add('hidden');
                const icon = menuBtn.querySelector('i');
                icon.className = 'fas fa-bars';
            }
        });
    }
    
    // Dropdowns en móvil
    document.querySelectorAll('.mobile-dropdown-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('i');
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.className = 'fas fa-chevron-up text-xs';
                
                document.querySelectorAll('.mobile-dropdown-btn').forEach(other => {
                    if (other !== this) {
                        other.nextElementSibling.classList.add('hidden');
                        other.querySelector('i').className = 'fas fa-chevron-down text-xs';
                    }
                });
            } else {
                content.classList.add('hidden');
                icon.className = 'fas fa-chevron-down text-xs';
            }
        });
    });
});