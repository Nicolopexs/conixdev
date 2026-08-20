@extends('layouts.main')

@section('title', 'Caso de Éxito: Cassará Ecuador | ConixDev Software')
@section('description', 'Estudio de caso visual de la plataforma empresarial desarrollada a medida por ConixDev para Cassará Ecuador: geolocalización de visitadores y escaneo de facturas con IA.')

@section('content')
<section style="padding-top: 8.5rem; padding-bottom: 3.5rem; background: linear-gradient(180deg, rgba(14, 22, 38, 0.8) 0%, rgba(7, 9, 18, 0) 100%);">
  <div class="container">
    <div style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 1rem;">
      <a href="{{ url('/') }}" style="color: var(--text-muted); text-decoration: none;">Inicio</a> / 
      <a href="{{ url('/casos-de-exito') }}" style="color: var(--text-muted); text-decoration: none;">Casos de Éxito</a> / 
      <span style="color: var(--brand-cyan-glow);">Cassará Ecuador</span>
    </div>
    <span class="trust-badge">Caso de Estudio Estrella</span>
    <h1 class="title-hero" style="margin-bottom: 1rem;">
      Caso de Éxito: <span class="text-gradient">Cassará Ecuador</span>
    </h1>
    <p style="font-size: 1.2rem; color: var(--text-muted); max-width: 820px;">
      Plataforma empresarial construida a medida para digitalizar, controlar y auditar la operación de visitadores médicos en terreno.
    </p>
  </div>
</section>

<section class="section-spacing">
  <div class="container">
    <div class="case-study-hero-card" style="margin-top: 0;">
      <div style="margin-bottom: 2rem;">
        <span class="card-tag">Industria Farmacéutica</span>
        <h2 class="title-section" style="font-size: 1.8rem; margin-top: 0.25rem;">La Necesidad Operativa</h2>
        <p style="font-size: 1.05rem; color: var(--text-muted); line-height: 1.7; margin-top: 0.75rem;">
          Cassará requería reemplazar los reportes en papel, chats de WhatsApp y archivos Excel desactualizados por una plataforma propia que permitiera supervisar las rutas en campo, confirmar las visitas a médicos y farmacias mediante GPS en tiempo real y simplificar la rendición de gastos operativos con inteligencia artificial.
        </p>
      </div>

      <h3 class="title-card" style="margin-bottom: 1.25rem;" class="text-cyan">
        Funcionalidades y Módulos Desarrollados:
      </h3>

      <div class="case-grid-capabilities">
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Geolocalización de visitadores médicos</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Registro y control de visitas</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Gestión de médicos</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Gestión de farmacias</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Dashboard para visualizar avance de ciclos</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Escaneo de facturas utilizando Inteligencia Artificial</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Organización de facturas por lotes</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Gastos deducibles y no deducibles</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Gestión de usuarios y permisos</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Reportes para seguimiento de la operación</span>
        </div>
        <div class="capability-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"/></svg>
          <span>Aplicación fácil de instalar y utilizar</span>
        </div>
      </div>

      <div style="margin-top: 3rem; border-top: 1px solid var(--border-subtle); padding-top: 2rem;">
        <h4 style="font-size: 0.9rem; font-family: var(--font-mono); color: var(--text-muted); text-transform: uppercase; margin-bottom: 1rem;">
          Sección Técnica Secundaria (Stack & Herramientas):
        </h4>
        <div style="display: flex; flex-wrap: wrap; gap: 0.6rem;">
          <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.35rem 0.75rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.82rem; color: var(--text-muted);">Laravel Engine</span>
          <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.35rem 0.75rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.82rem; color: var(--text-muted);">MySQL Storage</span>
          <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.35rem 0.75rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.82rem; color: var(--text-muted);">Geolocation API</span>
          <span style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-subtle); padding: 0.35rem 0.75rem; border-radius: 6px; font-family: var(--font-mono); font-size: 0.82rem; color: var(--text-muted);">AI Document Processing OCR</span>
        </div>
      </div>

      <div style="margin-top: 3rem; text-align: center;">
        <a href="{{ url('/diagnostico') }}" class="btn-action btn-primary-glow" style="padding: 1rem 2rem;">
          Solicitar una solución similar para mi empresa
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
