/* ==========================================================================
   ConixDev — Application Interactive JavaScript
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Mobile Menu Toggle
  const mobileToggle = document.getElementById('mobileToggle');
  const navMenu = document.getElementById('navMenu');

  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      navMenu.classList.toggle('active');
    });
  }

  // 2. Smooth Scroll for Navigation Anchors
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();
        if (navMenu && navMenu.classList.contains('active')) {
          navMenu.classList.remove('active');
        }
        targetElement.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // 3. Contact Form Submission Handler
  const diagnosticoForm = document.getElementById('diagnosticoForm');
  const formSuccessAlert = document.getElementById('formSuccessAlert');

  if (diagnosticoForm) {
    diagnosticoForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      // Collect form data
      const formData = new FormData(diagnosticoForm);
      const data = Object.fromEntries(formData.entries());

      // Simple frontend validation check
      if (!data.nombre || !data.empresa || !data.email || !data.whatsapp || !data.proceso_mejorar) {
        alert('Por favor, completa los campos requeridos (*).');
        return;
      }

      const submitBtn = diagnosticoForm.querySelector('button[type="submit"]');
      const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Enviar';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '⏳ Procesando diagnóstico...';
      }

      try {
        // Send request to Laravel endpoint or API
        const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
        const headers = {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        };

        if (csrfTokenMeta) {
          headers['X-CSRF-TOKEN'] = csrfTokenMeta.getAttribute('content');
        }

        const response = await fetch('/contacto/diagnostico', {
          method: 'POST',
          headers: headers,
          body: JSON.stringify(data)
        });

        // Show feedback
        if (formSuccessAlert) {
          formSuccessAlert.style.display = 'block';
          formSuccessAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        // Reset form
        diagnosticoForm.reset();

      } catch (error) {
        console.warn('Handling local response fallback:', error);
        if (formSuccessAlert) {
          formSuccessAlert.style.display = 'block';
          formSuccessAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        diagnosticoForm.reset();
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnText;
        }
      }
    });
  }
});
