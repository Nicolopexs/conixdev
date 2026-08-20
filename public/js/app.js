/* ==========================================================================
   CONIXDEV — Interactive Frontend Engine & Instant Anti-Flicker Theme Switcher
   ========================================================================== */

// 0. Immediate theme evaluation on script load (Anti-Flicker Protection)
(function applyThemeEarly() {
  try {
    const savedTheme = localStorage.getItem('conixdev_theme');
    if (savedTheme === 'light') {
      document.documentElement.classList.add('light-theme');
    }
  } catch (e) {}
})();

document.addEventListener('DOMContentLoaded', () => {
  // 1. Dark / Light Mode Switcher with localStorage persistence & Zero FOUC
  const themeToggleBtn = document.getElementById('themeToggleBtn');
  
  // Sync HTML and Body classes
  const savedTheme = localStorage.getItem('conixdev_theme');
  if (savedTheme === 'light') {
    document.documentElement.classList.add('light-theme');
    document.body.classList.add('light-theme');
    updateThemeIcon(true);
  }

  if (themeToggleBtn) {
    themeToggleBtn.addEventListener('click', () => {
      const isLight = document.documentElement.classList.toggle('light-theme');
      document.body.classList.toggle('light-theme', isLight);
      localStorage.setItem('conixdev_theme', isLight ? 'light' : 'dark');
      updateThemeIcon(isLight);
    });
  }

  function updateThemeIcon(isLight) {
    const iconDark = document.querySelector('.theme-icon-dark');
    const iconLight = document.querySelector('.theme-icon-light');
    if (iconDark && iconLight) {
      iconDark.style.display = isLight ? 'none' : 'inline-block';
      iconLight.style.display = isLight ? 'inline-block' : 'none';
    }
  }

  // 2. Interactive Software Demonstration Tabs (Cassará & Operational Panels)
  const tabBtns = document.querySelectorAll('.tab-btn');
  const showcasePanels = document.querySelectorAll('.showcase-panel');

  if (tabBtns.length > 0) {
    tabBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const targetTab = btn.getAttribute('data-tab');

        tabBtns.forEach(b => b.classList.remove('active'));
        showcasePanels.forEach(p => p.classList.remove('active'));

        btn.classList.add('active');
        const targetPanel = document.getElementById(targetTab);
        if (targetPanel) {
          targetPanel.classList.add('active');
        }
      });
    });
  }

  // 3. Highlight Active Menu Link based on pathname
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-item-link');
  
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath !== '/' && href !== '/' && currentPath.startsWith(href))) {
      link.classList.add('active');
    }
  });

  // 4. Mobile Navigation Menu Toggle
  const mobileToggleBtn = document.getElementById('mobileToggleBtn');
  const navLinksWrap = document.getElementById('navLinksWrap');

  if (mobileToggleBtn && navLinksWrap) {
    mobileToggleBtn.addEventListener('click', () => {
      navLinksWrap.classList.toggle('open');
    });
  }

  // 5. Contact Form Handler -> Envío Directo al WhatsApp +593962761063
  const contactForm = document.getElementById('conixdevContactForm');
  const contactSuccessAlert = document.getElementById('contactSuccessAlert');

  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();

      const nombre = document.getElementById('nombre')?.value || '';
      const empresa = document.getElementById('empresa')?.value || '';
      const whatsapp = document.getElementById('whatsapp')?.value || '';
      const presupuesto = document.getElementById('presupuesto')?.value || 'No especificado';
      const proceso = document.getElementById('proceso_mejorar')?.value || '';

      // Formatear mensaje estructurado profesional para WhatsApp
      const mensajeWA = `Hola ConixDev! 👋 Quisiera consultar sobre un proyecto de software:\n\n` +
        `• *Nombre:* ${nombre}\n` +
        `• *Empresa:* ${empresa}\n` +
        `• *Contacto:* ${whatsapp}\n` +
        `• *Presupuesto Estimado:* ${presupuesto}\n` +
        `• *Detalle:* ${proceso}`;

      const waURL = `https://wa.me/593962761063?text=${encodeURIComponent(mensajeWA)}`;

      if (contactSuccessAlert) {
        contactSuccessAlert.style.display = 'block';
        contactSuccessAlert.innerHTML = '✔ ¡Formulario enviado! Abriendo WhatsApp con los datos para atención inmediata...';
        contactSuccessAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }

      // Redirigir a WhatsApp de inmediato
      setTimeout(() => {
        window.open(waURL, '_blank');
        contactForm.reset();
      }, 700);
    });
  }
});
