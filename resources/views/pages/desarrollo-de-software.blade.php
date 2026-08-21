@extends('layouts.main')

@section('title', 'Desarrollo de Software en Ecuador y LATAM | ConixDev')
@section('description', 'Servicios profesionales de desarrollo de software a medida, aplicaciones web, móviles e integraciones de sistemas para empresas en Ecuador y Latinoamérica.')
@section('canonical', 'https://conixdev.com/desarrollo-de-software')

@section('content')
<!-- SCHEMA.ORG JSON-LD ESPECÍFICO DE DESARROLLO DE SOFTWARE -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://conixdev.com/desarrollo-de-software#service",
      "name": "Servicios de Desarrollo de Software Empresarial",
      "provider": {
        "@type": "Organization",
        "name": "ConixDev",
        "url": "https://conixdev.com",
        "logo": "https://conixdev.com/images/logo.png"
      },
      "description": "Desarrollo de software a medida, plataformas web corporativas, aplicaciones móviles y microservicios para empresas.",
      "areaServed": ["Ecuador", "Latinoamérica"]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Inicio",
          "item": "https://conixdev.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Desarrollo de Software",
          "item": "https://conixdev.com/desarrollo-de-software"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Qué incluye un servicio de desarrollo de software a medida?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Incluye análisis de requerimientos técnicos, diseño de arquitectura y UX/UI, desarrollo frontend y backend, pruebas de seguridad, integración con APIs/SRI y despliegue en la nube con entrega total del código fuente."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cuánto tiempo toma desarrollar una solución de software empresarial?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Un producto viable o módulo base toma entre 6 y 10 semanas, mientras que plataformas complejas con múltiples integraciones pueden tomar de 3 a 5 meses con entregas quincenales."
          }
        }
      ]
    }
  ]
}
</script>

<!-- 1. HERO DE SERVICIO EXACT MATCH -->
<section class="section-spacing" style="padding-top: 6.5rem; padding-bottom: 2rem; position: relative;">
  <div class="container" style="text-align: center;">
    <div class="trust-badge" style="margin-bottom: 1rem;">
      <span class="trust-badge-dot"></span>
      Soluciones Profesionales de Software Empresarial
    </div>

    <h1 class="title-hero" style="max-width: 980px; margin: 0 auto 1.25rem;">
      Servicios Profesionales de <span class="text-gradient">Desarrollo de Software</span>
    </h1>

    <p style="font-size: clamp(1.05rem, 1.8vw, 1.25rem); color: var(--text-muted); max-width: 820px; margin: 0 auto 2rem; line-height: 1.6;">
      Diseñamos y programamos plataformas web, aplicaciones móviles y arquitecturas escalables que digitalizan las operaciones críticas de tu empresa, eliminan la duplicación de trabajo y protegen tus datos.
    </p>

    <!-- MOCKUP VISUAL SOFTWARE -->
    <div class="hero-visual-frame" style="max-width: 960px; margin: 0 auto 2rem; position: relative;">
      <div class="visual-frame-bar" style="background: rgba(14, 22, 38, 0.9); border: 1px solid var(--border-subtle); border-bottom: none; border-radius: var(--radius-md) var(--radius-md) 0 0; padding: 0.75rem 1.25rem; display: flex; align-items: center; justify-content: space-between;">
        <div style="display: flex; gap: 0.5rem; align-items: center;">
          <span style="width: 11px; height: 11px; border-radius: 50%; background: #ef4444; display: inline-block;"></span>
          <span style="width: 11px; height: 11px; border-radius: 50%; background: #f59e0b; display: inline-block;"></span>
          <span style="width: 11px; height: 11px; border-radius: 50%; background: #10b981; display: inline-block;"></span>
        </div>
        <div style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--text-muted);">
          https://conixdev-cloud.sec/software-architecture
        </div>
        <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--brand-cyan-glow); font-weight: 600;">ENTERPRISE STACK</span>
      </div>

      <div class="visual-frame-body" style="border: 1px solid var(--border-subtle); border-radius: 0 0 var(--radius-md) var(--radius-md); overflow: hidden; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);">
        <img src="/images/hero-dashboard.jpg" alt="ConixDev Desarrollo de Software a Medida" style="width: 100%; height: auto; display: block; object-fit: cover;" />
      </div>
    </div>

    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2rem;">
      <a href="#contacto-directo" class="btn-action btn-primary-glow" style="padding: 0.85rem 1.85rem; font-size: 0.95rem;">
        <span>Solicitar Presupuesto de Software</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round"/></svg>
      </a>
      <a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="btn-action btn-secondary-dark" style="padding: 0.85rem 1.85rem; font-size: 0.95rem;">
        <span>Ver Caso Cassará</span>
      </a>
    </div>
  </div>
</section>

<!-- 2. VERTICALES DE DESARROLLO DE SOFTWARE -->
<section class="section-spacing section-alt-bg">
  <div class="container">
    <div style="text-align: center; max-width: 820px; margin: 0 auto 2.5rem;">
      <span class="trust-badge" style="margin-bottom: 0.75rem;">Nuestras Líneas de Servicio</span>
      <h2 class="title-section">Capacidades de Desarrollo Tecnológico</h2>
    </div>

    <div class="cards-layout-grid" style="margin-top: 1.5rem;">
      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Software Empresarial a Medida</h3>
        <p class="body-sm">Plataformas web centralizadas que reemplazan hojas de cálculo y procesos dispersos por flujos controlados y reportes automáticos.</p>
        <a href="{{ url('/software-empresarial') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-block; margin-top: 0.75rem;">Saber más →</a>
      </div>

      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Aplicaciones Móviles Nativas e Híbridas</h3>
        <p class="body-sm">Apps para iOS y Android con geolocalización en tiempo real, sincronización offline y captura de firmas y pedidos en terreno.</p>
        <a href="{{ url('/desarrollo-aplicaciones-moviles') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-block; margin-top: 0.75rem;">Saber más →</a>
      </div>

      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 2a10 10 0 1 0 10 10H12V2z"/><path d="M12 2a10 10 0 0 1 10 10"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Automatización e Inteligencia Artificial</h3>
        <p class="body-sm">Lectura OCR de comprobantes fiscales, procesamiento automatizado de facturas físicas e integración de flujos de trabajo sin errores.</p>
        <a href="{{ url('/automatizacion-procesos') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-block; margin-top: 0.75rem;">Saber más →</a>
      </div>

      <div class="card-box">
        <div class="card-icon-svg">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
        </div>
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Integración de APIs y Plataformas</h3>
        <p class="body-sm">Conectividad directa con servicios web externos, pasarelas de pago, CRMs y sistemas contables u operativos.</p>
        <a href="{{ url('/desarrollo-software-ecuador') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-block; margin-top: 0.75rem;">Saber más →</a>
      </div>
    </div>
  </div>
</section>

<!-- 3. PROCESO DE DESARROLLO ÁGIL -->
<section class="section-spacing">
  <div class="container">
    <div style="text-align: center; max-width: 820px; margin: 0 auto 2.5rem;">
      <span class="trust-badge" style="margin-bottom: 0.75rem;">Metodología Transparente</span>
      <h2 class="title-section">Nuestro Ciclo de Desarrollo</h2>
    </div>

    <div class="cards-layout-grid" style="margin-top: 1.5rem;">
      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--brand-cyan-glow); font-weight: 700;">FASE 1</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Relevamiento y Alcance</h3>
        <p class="body-sm">Documentamos los casos de uso, restricciones operativas y reglas de negocio para diseñar un plan de desarrollo exacto.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--brand-cyan-glow); font-weight: 700;">FASE 2</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Arquitectura y UX</h3>
        <p class="body-sm">Diseñamos la estructura de base de datos relacional y las pantallas interactivas para validación del cliente antes de codificar.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--brand-cyan-glow); font-weight: 700;">FASE 3</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Desarrollo y QA</h3>
        <p class="body-sm">Implementación con frameworks modernos, pruebas unitarias y validación continua para asegurar cero errores en producción.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--brand-cyan-glow); font-weight: 700;">FASE 4</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Lanzamiento y Entrega</h3>
        <p class="body-sm">Configuración de servidores cloud de alta disponibilidad y entrega 100% de la propiedad del código fuente y documentación.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4. FORMULARIO DE CONTACTO DIRECTO -->
<section class="section-spacing section-alt-bg" id="contacto-directo">
  <div class="container">
    <div class="contact-simple-card">
      <div style="text-align: center; margin-bottom: 2rem;">
        <span class="trust-badge" style="margin-bottom: 0.75rem;">Contacto Directo</span>
        <h2 class="title-section" style="margin-bottom: 0.5rem;">Hablar con un Desarrollador de Software</h2>
        <p style="color: var(--text-muted); font-size: 1.05rem;">Sin compromisos ni intermediarios. Evaluamos la factibilidad técnica de tu proyecto.</p>
      </div>

      <div id="contactSuccessAlert" style="display: none; background: rgba(6, 182, 212, 0.15); border: 1px solid rgba(6, 182, 212, 0.3); color: var(--brand-cyan-glow); padding: 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem; text-align: center; font-weight: 600;">
        ✔ ¡Mensaje recibido! Nos pondremos en contacto contigo a la brevedad.
      </div>

      <form id="conixdevContactForm">
        <div class="form-field-group">
          <label class="form-label-simple" for="nombre">Nombre completo *</label>
          <input type="text" id="nombre" name="nombre" class="form-input-simple" placeholder="Ej. Juan Pérez" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="empresa">Nombre de tu empresa *</label>
          <input type="text" id="empresa" name="empresa" class="form-input-simple" placeholder="Ej. Distribuidora Nacional S.A." required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="whatsapp">WhatsApp o Correo de contacto *</label>
          <input type="text" id="whatsapp" name="whatsapp" class="form-input-simple" placeholder="Ej. +593 96 276 1063 o correo@empresa.com" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="presupuesto">Presupuesto estimado del proyecto *</label>
          <select id="presupuesto" name="presupuesto" class="form-input-simple" required style="cursor: pointer; appearance: auto;">
            <option value="" disabled selected>Selecciona un rango de presupuesto...</option>
            <option value="$3,000 - $5,000 USD">$3,000 – $5,000 USD (Prototipo / Módulo Base)</option>
            <option value="$5,000 - $10,000 USD">$5,000 – $10,000 USD (Sistema Empresarial Completo)</option>
            <option value="Más de $10,000 USD">Más de $10,000 USD (Plataforma Corporativa Avanzada)</option>
          </select>
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="proceso_mejorar">Cuéntanos brevemente qué necesitas desarrollar *</label>
          <textarea id="proceso_mejorar" name="proceso_mejorar" class="form-input-simple" placeholder="Ej. Requerimos una plataforma web para gestionar clientes y sincronizar visitas médicas..." required></textarea>
        </div>

        <div style="margin-top: 1.75rem; text-align: center;">
          <button type="submit" class="btn-action btn-primary-glow" style="width: 100%; font-size: 1rem;">
            Enviar Consulta de Desarrollo
          </button>
        </div>
      </form>

      <div style="margin-top: 2rem; text-align: center; border-top: 1px solid var(--border-subtle); padding-top: 1.5rem;">
        <a href="https://wa.me/593962761063?text=Hola%20ConixDev,%20quisiera%20consultar%20sobre%20un%20proyecto%20de%20desarrollo%20de%20software" target="_blank" class="btn-whatsapp-brand">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="#25D366" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.461c-1.854 0-3.674-.497-5.263-1.442l-.377-.225-3.916 1.027 1.045-3.819-.247-.393c-1.038-1.652-1.587-3.585-1.587-5.566 0-5.74 4.671-10.411 10.413-10.411 2.781 0 5.397 1.082 7.362 3.049 1.964 1.966 3.045 4.582 3.045 7.363 0 5.742-4.671 10.417-10.475 10.417M12.051 0C5.395 0 0 5.393 0 12.05c0 2.128.556 4.204 1.614 6.035L0 24l6.097-1.599c1.764.962 3.753 1.47 5.952 1.47 6.657 0 12.051-5.395 12.051-12.052C24.1 5.393 18.707 0 12.051 0z"/>
          </svg>
          <span>WhatsApp (+593 96 276 1063)</span>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
