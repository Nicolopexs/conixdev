@extends('layouts.main')

@section('title', 'Nuestras Capacidades de Software | ConixDev')
@section('description', 'Conoce las soluciones que construimos para empresas: aplicaciones web, móviles, sistemas de geolocalización, inteligencia artificial e integraciones.')
@section('canonical', 'https://conixdev.com/servicios')

@section('content')
<section style="padding-top: 6.5rem; padding-bottom: 1.25rem;">
  <div class="container">
    <span class="trust-badge" style="margin-bottom: 0.75rem;">Soluciones para Empresas</span>
    <h1 class="title-hero" style="margin-bottom: 0.75rem;">
      ¿Qué desarrollamos para <span class="text-gradient">tu empresa</span>?
    </h1>
    <p style="font-size: 1.15rem; color: var(--text-muted); max-width: 800px; line-height: 1.6;">
      Organizamos nuestras capacidades alrededor de los problemas operativos de tu negocio, no mediante listas aburridas de código.
    </p>
  </div>
</section>

<section class="section-spacing" style="padding-top: 0.75rem;">
  <div class="container">
    <div class="cards-layout-grid">
      <a href="{{ url('/software-empresarial') }}" class="card-box" style="text-decoration: none;">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow); font-weight: 600;">01 / OPERACIONES CENTRALIZADAS</span>
        <h3 class="title-card" style="margin: 0.5rem 0 0.4rem; color: var(--text-main);">Aplicaciones Empresariales</h3>
        <p class="body-sm" style="color: var(--text-muted);">Sistemas completos accesibles desde cualquier navegador para administrar, controlar y auditar las actividades de tu empresa.</p>
      </a>

      <a href="{{ url('/desarrollo-aplicaciones-moviles') }}" class="card-box" style="text-decoration: none;">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow); font-weight: 600;">02 / EQUIPOS Y CLIENTES</span>
        <h3 class="title-card" style="margin: 0.5rem 0 0.4rem; color: var(--text-main);">Aplicaciones Móviles</h3>
        <p class="body-sm" style="color: var(--text-muted);">Apps intuitivas diseñadas para que tus empleados en terreno o tus clientes interactúen desde cualquier lugar sin depender de una computadora.</p>
      </a>

      <a href="{{ url('/automatizacion-procesos') }}" class="card-box" style="text-decoration: none;">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow); font-weight: 600;">03 / EFICIENCIA OPERATIVA</span>
        <h3 class="title-card" style="margin: 0.5rem 0 0.4rem; color: var(--text-main);">Automatización de Procesos</h3>
        <p class="body-sm" style="color: var(--text-muted);">Convertimos tareas manuales repetitivas en flujos digitales automáticos para ahorrar cientos de horas a tu personal.</p>
      </a>

      <a href="{{ url('/desarrollo-software-ecuador') }}" class="card-box" style="text-decoration: none;">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow); font-weight: 600;">04 / SOFTWARE A TU MEDIDA</span>
        <h3 class="title-card" style="margin: 0.5rem 0 0.4rem; color: var(--text-main);">Plataformas Personalizadas</h3>
        <p class="body-sm" style="color: var(--text-muted);">Software diseñado específicamente para las necesidades únicas de tu negocio, sin las limitaciones de plantillas genéricas.</p>
      </a>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow); font-weight: 600;">05 / TOMA DE DECISIONES</span>
        <h3 class="title-card" style="margin: 0.5rem 0 0.4rem;">Inteligencia y Datos</h3>
        <p class="body-sm" style="color: var(--text-muted);">Dashboards ejecutivos y reportes en tiempo real que consolidan la información crítica de tu empresa.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow); font-weight: 600;">06 / CONECTIVIDAD</span>
        <h3 class="title-card" style="margin: 0.5rem 0 0.4rem;">Integraciones de Herramientas</h3>
        <p class="body-sm" style="color: var(--text-muted);">Conectamos el nuevo software con las herramientas, bases de datos o facturación que tu empresa ya utiliza.</p>
      </div>
    </div>

    <!-- Stack de Tecnologías Profesional Compacto -->
    <div style="margin-top: 3rem; background: var(--surface-card); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 2rem; text-align: center;">
      <h3 style="font-size: 1rem; font-family: var(--font-mono); color: var(--text-muted); text-transform: uppercase; margin-bottom: 0.75rem;">
        Stack de Tecnologías Profesionales
      </h3>
      <p style="font-size: 0.92rem; color: var(--text-muted); max-width: 650px; margin: 0 auto 1.25rem;">
        Construimos con herramientas profesionales de código limpio y arquitectura escalable:
      </p>
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 0.6rem;">
        <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.4rem 0.85rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.85rem;">Laravel 11</span>
        <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.4rem 0.85rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.85rem;">PHP 8.3</span>
        <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.4rem 0.85rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.85rem;">PostgreSQL / MySQL</span>
        <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.4rem 0.85rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.85rem;">REST APIs</span>
        <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.4rem 0.85rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.85rem;">OCR & Vision AI</span>
      </div>
    </div>
  </div>
</section>
@endsection
