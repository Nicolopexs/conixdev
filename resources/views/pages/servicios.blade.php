@extends('layouts.main')

@section('title', 'Servicios Empresariales de Software | ConixDev')
@section('description', 'Desarrollo aplicaciones web, móviles, sistemas de geolocalización, inteligencia artificial para facturas y dashboards a medida.')

@section('content')
<div class="page-banner">
  <div class="container">
    <div class="breadcrumb-nav">
      <a href="{{ url('/') }}">Inicio</a>
      <span>/</span>
      <span style="color: var(--text-primary);">Servicios Empresariales</span>
    </div>
    <span class="badge-corp">Capacidades Técnicas B2B</span>
    <h1 class="heading-xl text-gradient-white" style="margin-bottom: 1rem;">
      ¿Qué puedo desarrollar para <span class="text-indigo">tu empresa</span>?
    </h1>
    <p class="body-lead" style="max-width: 800px;">
      Soluciones de software diseñadas alrededor de la operación real de tu negocio, enfocadas en eliminar cuellos de botella y automatizar procesos.
    </p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <div class="b2b-grid">
      <div class="b2b-card">
        <span class="card-tag">Desarrollo Web</span>
        <h3 class="heading-md" style="font-size: 1.25rem; margin-bottom: 0.75rem;">Aplicaciones Web Empresariales</h3>
        <p class="body-sm">Plataformas centralizadas accesibles desde cualquier navegador para gestionar clientes, inventarios o flujos de trabajo con permisos avanzados.</p>
      </div>

      <div class="b2b-card">
        <span class="card-tag">Móvil iOS & Android</span>
        <h3 class="heading-md" style="font-size: 1.25rem; margin-bottom: 0.75rem;">Aplicaciones Móviles</h3>
        <p class="body-sm">Apps intuitivas diseñadas para que tus empleados en terreno o tus clientes interactúen desde cualquier lugar sin depender de una computadora.</p>
      </div>

      <div class="b2b-card">
        <span class="card-tag">Sistemas ERP / CRM</span>
        <h3 class="heading-md" style="font-size: 1.25rem; margin-bottom: 0.75rem;">Sistemas de Gestión Personalizados</h3>
        <p class="body-sm">Software adaptado 100% a la lógica de tu negocio, reemplazando plantillas rígidas por herramientas creadas específicamente a tu medida.</p>
      </div>

      <div class="b2b-card">
        <span class="card-tag">Operaciones Terreno</span>
        <h3 class="heading-md" style="font-size: 1.25rem; margin-bottom: 0.75rem;">Plataformas para Equipos de Campo</h3>
        <p class="card-desc">Herramientas especializadas para coordinar técnicos, vendedores o personal operativo que trabaja fuera de la oficina.</p>
      </div>

      <div class="b2b-card">
        <span class="card-tag">GPS & Trazabilidad</span>
        <h3 class="heading-md" style="font-size: 1.25rem; margin-bottom: 0.75rem;">Sistemas de Geolocalización</h3>
        <p class="body-sm">Rastreo inteligente y verificación geográfica para confirmar visitas, entregas y rutas de tu personal en tiempo real.</p>
      </div>

      <div class="b2b-card">
        <span class="card-tag">Business Intelligence</span>
        <h3 class="heading-md" style="font-size: 1.25rem; margin-bottom: 0.75rem;">Dashboards y Reportes Executivos</h3>
        <p class="body-sm">Paneles visuales e indicadores ejecutivos (KPIs) actualizados automáticamente para tomar decisiones con información real.</p>
      </div>

      <div class="b2b-card">
        <span class="card-tag">Eficiencia Operativa</span>
        <h3 class="heading-md" style="font-size: 1.25rem; margin-bottom: 0.75rem;">Automatización de Procesos</h3>
        <p class="body-sm">Eliminación de tareas repetitivas conectando sistemas, notificaciones automáticas y aprobaciones sin intervención manual.</p>
      </div>

      <div class="b2b-card">
        <span class="card-tag">Inteligencia Artificial</span>
        <h3 class="heading-md" style="font-size: 1.25rem; margin-bottom: 0.75rem;">Procesamiento de Documentos con IA</h3>
        <p class="body-sm">Lectura inteligente y extracción automática de datos en facturas, recibos y formularios mediante IA y OCR de alta precisión.</p>
      </div>

      <div class="b2b-card">
        <span class="card-tag">Fuerza Comercial</span>
        <h3 class="heading-md" style="font-size: 1.25rem; margin-bottom: 0.75rem;">Control de Ventas y Visitas</h3>
        <p class="body-sm">Seguimiento detallado de metas comerciales, pedidos en terreno y la actividad diaria de tus asesores de ventas.</p>
      </div>

      <div class="b2b-card">
        <span class="card-tag">Conectividad API</span>
        <h3 class="heading-md" style="font-size: 1.25rem; margin-bottom: 0.75rem;">Integraciones de Servicios</h3>
        <p class="body-sm">Conexión de tu nuevo software con bases de datos existentes, pasarelas de pago, facturación electrónica o servicios de terceros.</p>
      </div>

      <div class="b2b-card">
        <span class="card-tag">Soporte Continuo</span>
        <h3 class="heading-md" style="font-size: 1.25rem; margin-bottom: 0.75rem;">Mantenimiento y Evolución</h3>
        <p class="body-sm">Soporte técnico, optimización de velocidad y desarrollo continuo de nuevas funciones para sistemas ya construidos.</p>
      </div>
    </div>

    <div style="margin-top: 4rem; text-align: center; background: var(--bg-surface); padding: 3rem 2rem; border-radius: var(--radius-lg); border: 1px solid var(--border-subtle);">
      <h3 class="heading-md" style="margin-bottom: 1rem;">¿Tienes un requerimiento especial para tu empresa?</h3>
      <p class="body-lead" style="max-width: 650px; margin: 0 auto 2rem; font-size: 1.05rem;">
        Explícame cómo funciona tu operación actual y te propondré la arquitectura de software más eficiente.
      </p>
      <a href="{{ url('/diagnostico') }}" class="btn btn-primary">
        Solicitar Diagnóstico Sin Compromiso
      </a>
    </div>
  </div>
</section>
@endsection
