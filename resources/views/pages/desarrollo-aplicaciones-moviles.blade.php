@extends('layouts.main')

@section('title', 'Desarrollo de Aplicaciones Móviles Empresariales en Ecuador | ConixDev')
@section('description', 'Desarrollo de aplicaciones móviles a medida para iOS y Android en Ecuador. Creamos apps para equipos en terreno, supervisión GPS y portales de clientes.')
@section('canonical', 'https://conixdev.com/desarrollo-aplicaciones-moviles')

@section('content')
<!-- SCHEMA.ORG JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://conixdev.com/desarrollo-aplicaciones-moviles#service",
      "name": "Desarrollo de Aplicaciones Móviles Empresariales",
      "provider": {
        "@type": "Organization",
        "name": "ConixDev",
        "url": "https://conixdev.com"
      },
      "description": "Desarrollo de aplicaciones móviles corporativas para smartphones Android y iOS enfocadas en personal operativo de campo, geolocalización y sincronización de datos."
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
          "name": "Aplicaciones Móviles",
          "item": "https://conixdev.com/desarrollo-aplicaciones-moviles"
        }
      ]
    }
  ]
}
</script>

<section style="padding-top: 7.5rem; padding-bottom: 3.5rem; position: relative;">
  <div class="canvas-glow-1"></div>
  <div class="container" style="text-align: center;">
    <div class="trust-badge" style="margin-bottom: 1.25rem;">
      <span class="trust-badge-dot"></span>
      Apps Empresariales para iOS & Android
    </div>

    <h1 class="title-hero" style="max-width: 950px; margin: 0 auto 1.25rem;">
      Desarrollo de <span class="text-gradient">Aplicaciones Móviles Empresariales</span>
    </h1>

    <p style="font-size: clamp(1.05rem, 1.8vw, 1.25rem); color: var(--text-muted); max-width: 820px; margin: 0 auto 2.25rem; line-height: 1.6;">
      Construimos aplicaciones móviles personalizadas para smartphones que conectan a tu personal de campo con la central de tu empresa en tiempo real.
    </p>

    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2rem;">
      <a href="#contacto-directo" class="btn-action btn-primary-glow" style="padding: 0.85rem 1.85rem; font-size: 0.95rem;">
        <span>Cotizar App Móvil Empresarial</span>
      </a>
      <a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="btn-action btn-secondary-dark" style="padding: 0.85rem 1.85rem; font-size: 0.95rem;">
        <span>Ver App en Caso Cassará</span>
      </a>
    </div>
  </div>
</section>

<section class="section-spacing section-alt-bg">
  <div class="container">
    <div style="text-align: center; max-width: 820px; margin: 0 auto 2.5rem;">
      <span class="trust-badge" style="margin-bottom: 0.75rem;">Capacidades Técnicas</span>
      <h2 class="title-section">
        ¿Qué tipo de <span class="text-gradient">apps móviles</span> desarrollamos?
      </h2>
    </div>

    <div class="cards-layout-grid" style="margin-top: 1.5rem;">
      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Apps para Personal de Terreno</h3>
        <p class="body-sm">Supervisión por GPS de visitadores médicos, técnicos, vendedores y entregas con registro instantáneo de coordenadas y fotos.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Captura de Datos Offline</h3>
        <p class="body-sm">Permite a tus colaboradores registrar información sin conexión a internet y sincronizarla automáticamente al recuperar cobertura.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Escaneo de Facturas y Documentos</h3>
        <p class="body-sm">Integración de cámara con lectura inteligente por Inteligencia Artificial para digitalizar recibos de gastos al instante.</p>
      </div>

      <div class="card-box">
        <h3 class="title-card" style="margin-bottom: 0.75rem;">Portales y Apps de Clientes</h3>
        <p class="body-sm">Canales móviles privados para que tus clientes corporativos soliciten servicios, revisen estados y aprueben pedidos.</p>
      </div>
    </div>
  </div>
</section>

<!-- FORMULARIO CONTACTO -->
<section class="section-spacing" id="contacto-directo">
  <div class="container">
    <div class="contact-simple-card">
      <div style="text-align: center; margin-bottom: 2rem;">
        <span class="trust-badge" style="margin-bottom: 0.75rem;">Consulta Directa</span>
        <h2 class="title-section" style="margin-bottom: 0.5rem;">Desarrolla tu <span class="text-gradient">App Empresarial</span></h2>
        <p style="color: var(--text-muted); font-size: 1.05rem;">Sin compromisos ni intermediarios. Conversa directamente con el equipo de ConixDev.</p>
      </div>

      <div id="contactSuccessAlert" style="display: none; background: rgba(6, 182, 212, 0.15); border: 1px solid rgba(6, 182, 212, 0.3); color: var(--brand-cyan-glow); padding: 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem; text-align: center; font-weight: 600;">
        ✔ ¡Formulario enviado! Abriendo WhatsApp con los datos para atención inmediata...
      </div>

      <form id="conixdevContactForm">
        <div class="form-field-group">
          <label class="form-label-simple" for="nombre">Nombre completo *</label>
          <input type="text" id="nombre" name="nombre" class="form-input-simple" placeholder="Ej. Javier Ramírez" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="empresa">Nombre de tu empresa *</label>
          <input type="text" id="empresa" name="empresa" class="form-input-simple" placeholder="Ej. Distribuidora del Pacífico" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="whatsapp">WhatsApp de contacto *</label>
          <input type="text" id="whatsapp" name="whatsapp" class="form-input-simple" placeholder="Ej. +593 96 276 1063" required />
        </div>

        <div class="form-field-group">
          <label class="form-label-simple" for="proceso_mejorar">¿Qué función debe tener tu aplicación móvil? *</label>
          <textarea id="proceso_mejorar" name="proceso_mejorar" class="form-input-simple" placeholder="Ej. Requerimos una app móvil para que nuestros supervisores registren visitas con GPS..." required></textarea>
        </div>

        <div style="margin-top: 1.75rem; text-align: center;">
          <button type="submit" class="btn-action btn-primary-glow" style="width: 100%; font-size: 1rem;">
            Enviar Consulta de App Móvil
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
