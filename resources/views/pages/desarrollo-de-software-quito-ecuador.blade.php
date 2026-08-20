@extends('layouts.main')

@section('title', 'Desarrollo de Software en Quito Ecuador | ConixDev')
@section('description', 'Empresa de desarrollo de software a medida en Quito, Ecuador. Creamos sistemas web, apps móviles e integraciones para empresas en Pichincha y todo el país.')
@section('canonical', 'https://conixdev.com/desarrollo-de-software-quito-ecuador')

@section('content')
<!-- SCHEMA.ORG JSON-LD LOCAL BUSINESS QUITO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "https://conixdev.com/#localbusiness-quito",
      "name": "ConixDev - Desarrollo de Software en Quito",
      "image": "https://conixdev.com/images/hero-dashboard.jpg",
      "telephone": "+593962761063",
      "priceRange": "$$$",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Quito",
        "addressRegion": "Pichincha",
        "addressCountry": "EC"
      },
      "url": "https://conixdev.com/desarrollo-de-software-quito-ecuador"
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
          "name": "Desarrollo de Software en Quito",
          "item": "https://conixdev.com/desarrollo-de-software-quito-ecuador"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿ConixDev atiende empresas en Quito y sus valles?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí, nuestra sede principal de ingeniería opera desde Quito y atendemos empresas en el Centro Financiero, Cumbayá, Tumbaco, Valle de los Chillos y a nivel nacional."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo coordina ConixDev el desarrollo con empresas en Quito?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Realizamos reuniones presenciales y remotas de diagnóstico, entregas quincenales funcionales y soporte directo sin intermediarios."
          }
        }
      ]
    }
  ]
}
</script>

<!-- 1. HERO DE SERVICIO QUITO -->
<section class="section-spacing" style="padding-top: 6.5rem; padding-bottom: 2rem; position: relative;">
  <div class="container" style="text-align: center;">
    <div class="trust-badge" style="margin-bottom: 1rem;">
      <span class="trust-badge-dot"></span>
      Sede de Ingeniería en Quito, Pichincha
    </div>

    <h1 class="title-hero" style="max-width: 980px; margin: 0 auto 1.25rem;">
      Desarrollo de Software en <span class="text-gradient">Quito, Ecuador</span>
    </h1>

    <p style="font-size: clamp(1.05rem, 1.8vw, 1.25rem); color: var(--text-muted); max-width: 820px; margin: 0 auto 2rem; line-height: 1.6;">
      Construimos soluciones tecnológicas a medida para corporaciones, distribuidoras y pymes en Quito. Desde sistemas de trazabilidad y geolocalización hasta facturación electrónica con el SRI y automatización con IA.
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
          https://conixdev-cloud.sec/quito-enterprise-hub
        </div>
        <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--brand-cyan-glow); font-weight: 600;">QUITO NODE</span>
      </div>

      <div class="visual-frame-body" style="border: 1px solid var(--border-subtle); border-radius: 0 0 var(--radius-md) var(--radius-md); overflow: hidden; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);">
        <img src="/images/hero-dashboard.jpg" alt="Desarrollo de Software en Quito ConixDev" style="width: 100%; height: auto; display: block; object-fit: cover;" />
      </div>
    </div>

    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2rem;">
      <a href="#contacto-directo" class="btn-action btn-primary-glow" style="padding: 0.85rem 1.85rem; font-size: 0.95rem;">
        <span>Solicitar Evaluación en Quito</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round"/></svg>
      </a>
      <a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="btn-action btn-secondary-dark" style="padding: 0.85rem 1.85rem; font-size: 0.95rem;">
        <span>Ver Caso Cassará</span>
      </a>
    </div>
  </div>
</section>

<!-- 2. SERVICIOS EN QUITO -->
<section class="section-spacing section-alt-bg">
  <div class="container">
    <div style="text-align: center; max-width: 820px; margin: 0 auto 2.5rem;">
      <span class="trust-badge" style="margin-bottom: 0.75rem;">Capacidades Locales</span>
      <h2 class="title-section">Soluciones de Software para Empresas en Quito</h2>
    </div>

    <div class="cards-layout-grid" style="margin-top: 1.5rem;">
      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Sistemas de Gestión a Medida</h3>
        <p class="body-sm">Plataformas web que centralizan compras, inventarios, facturación electrónica del SRI y reportería ejecutiva en un solo lugar.</p>
        <a href="{{ url('/software-empresarial') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-block; margin-top: 0.75rem;">Ver software empresarial →</a>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Apps Móviles de Campo</h3>
        <p class="body-sm">Aplicaciones para visitadores médicos, técnicos y vendedores en Quito y Pichincha con GPS y modo offline.</p>
        <a href="{{ url('/desarrollo-aplicaciones-moviles') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-block; margin-top: 0.75rem;">Ver apps móviles →</a>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Automatización con IA & OCR</h3>
        <p class="body-sm">Extracción digital de facturas físicas y documentos contables para acelerar las declaraciones tributarias y reembolsos.</p>
        <a href="{{ url('/automatizacion-procesos') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-block; margin-top: 0.75rem;">Ver automatización →</a>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.5rem;">Integraciones SRI y Pasarelas</h3>
        <p class="body-sm">Conectividad con Web Services del SRI, bancos locales, Kushki, Payphone y plataformas contables.</p>
        <a href="{{ url('/desarrollo-software-ecuador') }}" style="color: var(--brand-cyan-glow); font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-block; margin-top: 0.75rem;">Ver integraciones →</a>
      </div>
    </div>
  </div>
</section>

<!-- 3. FORMULARIO DE CONTACTO -->
<section class="section-spacing" id="contacto-directo">
  <div class="container">
    <div class="contact-simple-card">
      <div style="text-align: center; margin-bottom: 2rem;">
        <span class="trust-badge" style="margin-bottom: 0.75rem;">Atención en Quito</span>
        <h2 class="title-section" style="margin-bottom: 0.5rem;">Hablar con ConixDev en Quito</h2>
        <p style="color: var(--text-muted); font-size: 1.05rem;">Atención directa con ingenieros de software. Evaluamos tus requerimientos técnicos.</p>
      </div>

      <div id="contactSuccessAlert" style="display: none; background: rgba(6, 182, 212, 0.15); border: 1px solid rgba(6, 182, 212, 0.3); color: var(--brand-cyan-glow); padding: 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem; text-align: center; font-weight: 600;">
        ✔ ¡Mensaje recibido! Nos pondremos en contacto contigo a la brevedad.
      </div>

      <form id="conixdevContactForm">
        <div class="form-field-group">
          <label class="form-label-simple" for="nombre">Nombre completo *</label>
          <input type="text" id="nombre" name="nombre" class="form-input-simple" placeholder="Ej. Carlos Mendoza" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="empresa">Nombre de tu empresa *</label>
          <input type="text" id="empresa" name="empresa" class="form-input-simple" placeholder="Ej. Corporación Pichincha S.A." required />
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
          <label class="form-label-simple" for="proceso_mejorar">Cuéntanos brevemente qué necesita tu empresa *</label>
          <textarea id="proceso_mejorar" name="proceso_mejorar" class="form-input-simple" placeholder="Ej. Requerimos un sistema para centralizar nuestras operaciones en Quito y provincias..." required></textarea>
        </div>

        <div style="margin-top: 1.75rem; text-align: center;">
          <button type="submit" class="btn-action btn-primary-glow" style="width: 100%; font-size: 1rem;">
            Enviar Consulta de Software en Quito
          </button>
        </div>
      </form>

      <div style="margin-top: 2rem; text-align: center; border-top: 1px solid var(--border-subtle); padding-top: 1.5rem;">
        <a href="https://wa.me/593962761063?text=Hola%20ConixDev,%20quisiera%20consultar%20sobre%20desarrollo%20de%20software%20en%20Quito" target="_blank" class="btn-whatsapp-brand">
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
