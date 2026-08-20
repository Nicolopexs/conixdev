/* ==========================================================================
   ConixDev — Corporate B2B Interactive JavaScript Engine
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Highlight Active Menu Link
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-link');
  
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath !== '/' && href !== '/' && currentPath.startsWith(href))) {
      link.classList.add('active');
    }
  });

  // 2. Mobile Menu Toggle
  const mobileNavToggle = document.getElementById('mobileNavToggle');
  const navLinksContainer = document.getElementById('navLinks');

  if (mobileNavToggle && navLinksContainer) {
    mobileNavToggle.addEventListener('click', () => {
      navLinksContainer.classList.toggle('show');
    });
  }

  // 3. Multi-Step Wizard or Diagnostic Form Submit
  const wizardForm = document.getElementById('diagnosticoWizardForm');
  const wizardSuccessAlert = document.getElementById('wizardSuccessAlert');

  if (wizardForm) {
    wizardForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      const formData = new FormData(wizardForm);
      const data = Object.fromEntries(formData.entries());

      const submitBtn = wizardForm.querySelector('button[type="submit"]');
      const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Enviar';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '⏳ Enviando solicitud...';
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

        if (wizardSuccessAlert) {
          wizardSuccessAlert.style.display = 'block';
          wizardSuccessAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        wizardForm.reset();

      } catch (err) {
        console.warn('Handling submit fallback:', err);
        if (wizardSuccessAlert) {
          wizardSuccessAlert.style.display = 'block';
          wizardSuccessAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        wizardForm.reset();
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnText;
        }
      }
    });
  }
});
