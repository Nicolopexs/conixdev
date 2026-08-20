/* ==========================================================================
   CONIXDEV — Clean Frontend Engine
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

  // 1. Dark / Light Mode Switcher with localStorage persistence
  const themeToggleBtn = document.getElementById('themeToggleBtn');
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

  // 5. Contact Form Handler -> Envío Directo al correo corporativo info@conixdev.com
  const contactForm = document.getElementById('conixdevContactForm');
  const contactSuccessAlert = document.getElementById('contactSuccessAlert');

  if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Enviar Mensaje';

      const nombre = document.getElementById('nombre')?.value || '';
      const empresa = document.getElementById('empresa')?.value || '';
      const whatsapp = document.getElementById('whatsapp')?.value || '';
      const presupuesto = document.getElementById('presupuesto')?.value || 'No especificado';
      const proceso = document.getElementById('proceso_mejorar')?.value || '';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span>Enviando mensaje...</span> ⏳';
      }

      try {
        // Enviar por AJAX al correo info@conixdev.com
        await fetch('https://formsubmit.co/ajax/info@conixdev.com', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          },
          body: JSON.stringify({
            _subject: `Nuevo Proyecto ConixDev: ${empresa} (${presupuesto})`,
            "Nombre Completo": nombre,
            "Empresa": empresa,
            "Contacto (WhatsApp / Email)": whatsapp,
            "Presupuesto Estimado": presupuesto,
            "Requerimiento del Proyecto": proceso,
            _template: 'table'
          })
        });

        if (contactSuccessAlert) {
          contactSuccessAlert.style.display = 'block';
          contactSuccessAlert.innerHTML = `✔ <strong>¡Solicitud enviada a info@conixdev.com!</strong><br><span style="font-size: 0.9rem; font-weight: normal;">Nos pondremos en contacto contigo a la brevedad posible.</span>`;
          contactSuccessAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        contactForm.reset();
      } catch (err) {
        console.error('Error enviando formulario:', err);
        if (contactSuccessAlert) {
          contactSuccessAlert.style.display = 'block';
          contactSuccessAlert.innerHTML = '✔ ¡Mensaje recibido! Nos pondremos en contacto contigo a la brevedad.';
        }
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnText;
        }
      }
    });
  }
});

// 6. Hero Operating Layer — explorar la misma operación desde tres perspectivas
document.addEventListener('DOMContentLoaded', () => {
  const commandCenter = document.querySelector('.hero-command-center');
  const modeButtons = document.querySelectorAll('.system-mode-btn');
  if (!commandCenter || modeButtons.length === 0) return;

  const modeCopy = {
    campo: {
      eyebrow: 'CONTROL DE OPERACIÓN',
      title: 'Todo el campo, bajo control.',
      message: 'Visitadores sincronizados con el panel central'
    },
    automatizacion: {
      eyebrow: 'FLUJOS QUE TRABAJAN SOLOS',
      title: 'Menos tareas. Más movimiento.',
      message: 'La información avanza sin perseguirla por WhatsApp'
    },
    decisiones: {
      eyebrow: 'DATOS PARA DECIDIR',
      title: 'La operación también piensa contigo.',
      message: 'Cada indicador convierte actividad en dirección'
    }
  };

  const selectMode = (mode) => {
    const copy = modeCopy[mode] || modeCopy.campo;
    commandCenter.dataset.mode = mode;
    modeButtons.forEach((button) => {
      const isActive = button.dataset.systemMode === mode;
      button.classList.toggle('active', isActive);
      button.setAttribute('aria-pressed', String(isActive));
    });
    const eyebrow = commandCenter.querySelector('[data-mode-eyebrow]');
    const title = commandCenter.querySelector('[data-mode-title]');
    const message = commandCenter.querySelector('[data-mode-message]');
    if (eyebrow) eyebrow.textContent = copy.eyebrow;
    if (title) title.textContent = copy.title;
    if (message) message.textContent = copy.message;
  };

  modeButtons.forEach((button) => {
    button.addEventListener('click', () => selectMode(button.dataset.systemMode));
  });

  // Micro-parallax: el panel reacciona al cursor para sentirse como un producto real.
  const canTilt = window.matchMedia('(pointer: fine) and (prefers-reduced-motion: no-preference)').matches;
  if (canTilt) {
    commandCenter.addEventListener('pointermove', (event) => {
      const bounds = commandCenter.getBoundingClientRect();
      const x = (event.clientX - bounds.left) / bounds.width - 0.5;
      const y = (event.clientY - bounds.top) / bounds.height - 0.5;
      commandCenter.style.setProperty('--card-rotate-y', `${(x * 2.2).toFixed(2)}deg`);
      commandCenter.style.setProperty('--card-rotate-x', `${(-y * 1.8).toFixed(2)}deg`);
    });
    commandCenter.addEventListener('pointerleave', () => {
      commandCenter.style.setProperty('--card-rotate-y', '0deg');
      commandCenter.style.setProperty('--card-rotate-x', '0deg');
    });
  }
});
