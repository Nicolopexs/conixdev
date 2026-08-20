/* ==========================================================================
   CONIXDEV — Interactive Frontend Engine, 3D Tilt Motion & Cyber Canvas Intro
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

  // 🎥 1. CINEMATIC INTRO: Laser Beam Sweep Line
  const laserScan = document.createElement('div');
  laserScan.className = 'laser-scan-line';
  document.body.appendChild(laserScan);
  setTimeout(() => laserScan.remove(), 2600);

  // 🪐 2. INTERACTIVE CYBER PARTICLE CANVAS BACKDROP
  initCyberCanvas();

  function initCyberCanvas() {
    let canvas = document.getElementById('cinematicCanvas');
    if (!canvas) {
      canvas = document.createElement('canvas');
      canvas.id = 'cinematicCanvas';
      document.body.appendChild(canvas);
    }

    const ctx = canvas.getContext('2d');
    let width = (canvas.width = window.innerWidth);
    let height = (canvas.height = window.innerHeight);

    window.addEventListener('resize', () => {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    });

    const particles = [];
    const particleCount = Math.min(Math.floor(width / 30), 45);

    let mouse = { x: null, y: null, radius: 150 };

    window.addEventListener('mousemove', (e) => {
      mouse.x = e.clientX;
      mouse.y = e.clientY;
    });

    for (let i = 0; i < particleCount; i++) {
      particles.push({
        x: Math.random() * width,
        y: Math.random() * height,
        vx: (Math.random() - 0.5) * 0.6,
        vy: (Math.random() - 0.5) * 0.6,
        radius: Math.random() * 2 + 1,
      });
    }

    function animate() {
      ctx.clearRect(0, 0, width, height);

      const isLight = document.documentElement.classList.contains('light-theme');
      const dotColor = isLight ? 'rgba(2, 132, 199, 0.4)' : 'rgba(56, 189, 248, 0.6)';
      const lineColor = isLight ? 'rgba(2, 132, 199, 0.08)' : 'rgba(6, 182, 212, 0.12)';

      for (let i = 0; i < particles.length; i++) {
        const p = particles[i];
        p.x += p.vx;
        p.y += p.vy;

        if (p.x < 0 || p.x > width) p.vx *= -1;
        if (p.y < 0 || p.y > height) p.vy *= -1;

        ctx.beginPath();
        ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
        ctx.fillStyle = dotColor;
        ctx.fill();

        // Connect nearby particles
        for (let j = i + 1; j < particles.length; j++) {
          const p2 = particles[j];
          const dx = p.x - p2.x;
          const dy = p.y - p2.y;
          const dist = Math.sqrt(dx * dx + dy * dy);

          if (dist < 130) {
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(p2.x, p2.y);
            ctx.strokeStyle = lineColor;
            ctx.lineWidth = 1 - dist / 130;
            ctx.stroke();
          }
        }
      }

      requestAnimationFrame(animate);
    }

    animate();
  }

  // 🎬 3. INTERACTIVE 3D MOVIE TILT MOTION ENGINE
  const heroTitles = document.querySelectorAll('.title-hero');
  const heroFrames = document.querySelectorAll('.hero-visual-frame, .hero-software-showcase');

  window.addEventListener('mousemove', (e) => {
    const cx = window.innerWidth / 2;
    const cy = window.innerHeight / 2;
    const dx = (e.clientX - cx) / cx;
    const dy = (e.clientY - cy) / cy;

    const tiltX = (dy * -8).toFixed(2); // Max 8 deg tilt
    const tiltY = (dx * 8).toFixed(2);

    heroTitles.forEach(t => {
      t.style.transform = `perspective(1000px) rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
    });

    heroFrames.forEach(f => {
      f.style.transform = `perspective(1200px) rotateX(${(tiltX * 0.5).toFixed(2)}deg) rotateY(${(tiltY * 0.5).toFixed(2)}deg) translateY(-2px)`;
    });
  });

  // Reset 3D position when mouse leaves window
  window.addEventListener('mouseleave', () => {
    heroTitles.forEach(t => (t.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)'));
    heroFrames.forEach(f => (f.style.transform = 'perspective(1200px) rotateX(0deg) rotateY(0deg) translateY(0)'));
  });

  // 4. Dark / Light Mode Switcher with localStorage persistence
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

  // 5. Interactive Software Demonstration Tabs (Cassará & Operational Panels)
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

  // 6. Highlight Active Menu Link based on pathname
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-item-link');
  
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath !== '/' && href !== '/' && currentPath.startsWith(href))) {
      link.classList.add('active');
    }
  });

  // 7. Mobile Navigation Menu Toggle
  const mobileToggleBtn = document.getElementById('mobileToggleBtn');
  const navLinksWrap = document.getElementById('navLinksWrap');

  if (mobileToggleBtn && navLinksWrap) {
    mobileToggleBtn.addEventListener('click', () => {
      navLinksWrap.classList.toggle('open');
    });
  }

  // 8. Contact Form Handler -> Envío Directo al WhatsApp +593962761063
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

      setTimeout(() => {
        window.open(waURL, '_blank');
        contactForm.reset();
      }, 700);
    });
  }
});
