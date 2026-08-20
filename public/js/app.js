/* ==========================================================================
   CONIXDEV — Interactive Frontend Engine & Theme Switcher
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Dark / Light Mode Switcher with localStorage persistence
  const themeToggleBtn = document.getElementById('themeToggleBtn');
  
  // Check user's saved preference
  const savedTheme = localStorage.getItem('conixdev_theme');
  if (savedTheme === 'light') {
    document.body.classList.add('light-theme');
    updateThemeIcon(true);
  }

  if (themeToggleBtn) {
    themeToggleBtn.addEventListener('click', () => {
      const isLight = document.body.classList.toggle('light-theme');
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

  // 5. Contact Form Handler
  const contactForm = document.getElementById('conixdevContactForm');
  const contactSuccessAlert = document.getElementById('contactSuccessAlert');

  if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      const formData = new FormData(contactForm);
      const data = Object.fromEntries(formData.entries());

      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Enviar Mensaje';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '⏳ Enviando...';
      }

      try {
        const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
        const headers = {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        };

        if (csrfTokenMeta) {
          headers['X-CSRF-TOKEN'] = csrfTokenMeta.getAttribute('content');
        }

        await fetch('/contacto/diagnostico', {
          method: 'POST',
          headers: headers,
          body: JSON.stringify(data)
        });

        if (contactSuccessAlert) {
          contactSuccessAlert.style.display = 'block';
          contactSuccessAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        contactForm.reset();

      } catch (err) {
        console.warn('Handling local fallback:', err);
        if (contactSuccessAlert) {
          contactSuccessAlert.style.display = 'block';
          contactSuccessAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        contactForm.reset();
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnText;
        }
      }
    });
  }
});
