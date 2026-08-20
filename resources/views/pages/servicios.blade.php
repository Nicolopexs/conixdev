@extends('layouts.main')

@section('title', 'Nuestras Capacidades de Software | ConixDev')
@section('description', 'Conoce las soluciones que construimos para empresas: aplicaciones web, móviles, sistemas de geolocalización, inteligencia artificial e integraciones.')

@section('content')
<section style="padding-top: 7rem; padding-bottom: 2.5rem;">
  <div class="container">
    <span class="trust-badge">Soluciones para Empresas</span>
    <h1 class="title-hero" style="margin-bottom: 1rem;">
      ¿Qué desarrollamos para <span class="text-gradient">tu empresa</span>?
    </h1>
    <p style="font-size: 1.2rem; color: var(--text-muted); max-width: 800px;">
      Organizamos nuestras capacidades alrededor de los problemas operativos de tu negocio, no mediante listas aburridas de código.
    </p>
  </div>
</section>

<section class="section-spacing">
  <div class="container">
    <div class="cards-layout-grid">
      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow);">01 / OPERACIONES CENTRALIZADAS</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Aplicaciones Empresariales</h3>
        <p class="body-sm">Sistemas completos accesibles desde cualquier navegador para administrar, controlar y auditar las actividades de tu empresa.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow);">02 / EQUIPOS Y CLIENTES</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Aplicaciones Móviles</h3>
        <p class="body-sm">Apps intuitivas diseñadas para que tus empleados en terreno o tus clientes interactúen desde cualquier lugar sin depender de una computadora.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow);">03 / EFICIENCIA OPERATIVA</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Automatización de Procesos</h3>
        <p class="body-sm">Convertimos tareas manuales repetitivas en flujos digitales automáticos para ahorrar cientos de horas a tu personal.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow);">04 / SOFTWARE A TU MEDIDA</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Plataformas Personalizadas</h3>
        <p class="body-sm">Software diseñado específicamente para las necesidades únicas de tu negocio, sin las limitaciones de plantillas genéricas.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow);">05 / TOMA DE DECISIONES</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Inteligencia y Datos</h3>
        <p class="body-sm">Dashboards ejecutivos y reportes en tiempo real que consolidan la información crítica de tu empresa.</p>
      </div>

      <div class="card-box">
        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--brand-cyan-glow);">06 / CONECTIVIDAD</span>
        <h3 class="title-card" style="margin: 0.5rem 0;">Integraciones de Herramientas</h3>
        <p class="body-sm">Conectamos el nuevo software con las herramientas, bases de datos o facturación que tu empresa ya utiliza.</p>
      </div>
    </div>

    <!-- Sección Secundaria de Tecnologías para Investigadores -->
    <div style="margin-top: 5rem; background: var(--surface-card); border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 2.5rem; text-align: center;">
    <div class="section-spacing section-alt-bg">
      <h3 style="font-size: 1.1rem; font-family: var(--font-mono); color: var(--text-muted); text-transform: uppercase; margin-bottom: 1rem;">
        Sección Secundaria: Stack de Tecnologías Profesionales
      </h3>
      <p style="font-size: 0.92rem; color: var(--text-muted); max-width: 650px; margin: 0 auto 1.5rem;">
        Construimos con tecnologías modernas y herramientas profesionales de código limpio:
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
