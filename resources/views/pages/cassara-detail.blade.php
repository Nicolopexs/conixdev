@extends('layouts.main')

@section('title', 'Caso de Éxito: Cassará Ecuador | ConixDev')
@section('description', 'Plataforma empresarial a medida desarrollada por ConixDev para digitalizar la operación de visitadores médicos, geolocalización y procesamiento de facturas con IA.')

@section('content')
<div class="page-banner">
  <div class="container">
    <div class="breadcrumb-nav">
      <a href="{{ url('/') }}">Inicio</a>
      <span>/</span>
      <a href="{{ url('/casos-de-exito') }}">Casos de Éxito</a>
      <span>/</span>
      <span style="color: var(--text-primary);">Cassará Ecuador</span>
    </div>
    <span class="badge-corp">Plataforma Empresarial Entregada</span>
    <h1 class="heading-xl text-gradient-white" style="margin-bottom: 1rem;">
      Caso de Éxito: <span class="text-indigo">Cassará Ecuador</span>
    </h1>
    <p class="body-lead" style="max-width: 820px;">
      Plataforma empresarial desarrollada a medida para digitalizar, controlar y auditar la operación completa de visitadores médicos en terreno.
    </p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <div class="showcase-block">
      <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 2rem;">
        <div>
          <span class="card-tag">Cliente Empresarial</span>
          <h2 class="heading-md" style="font-size: 1.6rem;">Cassará Ecuador — Industria Farmacéutica</h2>
        </div>
        <div class="tech-matrix" style="margin: 0;">
          <span class="tech-chip">Laravel Engine</span>
          <span class="tech-chip">Geolocalización GPS</span>
          <span class="tech-chip">IA para Facturación</span>
          <span class="tech-chip">App Móvil de Campo</span>
        </div>
      </div>

      <p class="body-lead" style="font-size: 1rem; color: var(--text-secondary); margin-bottom: 2rem; line-height: 1.7;">
        Cassará requería una solución tecnológica propia que reemplazara los procesos manuales y hojas de cálculo desactualizadas, permitiendo a los líderes supervisar las rutas, confirmar las visitas a médicos y farmacias en tiempo real y automatizar la rendición de gastos operativos con inteligencia artificial.
      </p>

      <h3 class="heading-md" style="font-size: 1.3rem; margin-top: 2.5rem; margin-bottom: 1.25rem;" class="text-indigo">
        Módulos y Capacidades Desarrolladas:
      </h3>

      <div class="showcase-grid-list">
        <div class="showcase-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>Geolocalización de visitadores médicos</span>
        </div>

        <div class="showcase-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>Registro y control de visitas</span>
        </div>

        <div class="showcase-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>Gestión de médicos</span>
        </div>

        <div class="showcase-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>Gestión de farmacias</span>
        </div>

        <div class="showcase-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>Dashboard para visualizar avance de ciclos</span>
        </div>

        <div class="showcase-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>Escaneo de facturas utilizando Inteligencia Artificial</span>
        </div>

        <div class="showcase-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>Organización de facturas por lotes</span>
        </div>

        <div class="showcase-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>Clasificación de gastos deducibles y no deducibles</span>
        </div>

        <div class="showcase-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>Gestión de usuarios y permisos</span>
        </div>

        <div class="showcase-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>Reportes para seguimiento de la operación</span>
        </div>

        <div class="showcase-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>Aplicación fácil de instalar y utilizar</span>
        </div>
      </div>

      <!-- Contenedor visual preparado para capturas y demostración -->
      <h4 style="font-size: 1.1rem; color: var(--text-primary); margin-top: 3rem; margin-bottom: 1.25rem;">
        Vista Previa del Sistema (Espacio preparado para capturas y video):
      </h4>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 2.5rem;">
        <div style="background: rgba(8, 10, 17, 0.8); border: 2px dashed var(--border-subtle); border-radius: var(--radius-md); padding: 2.5rem 1.5rem; text-align: center;">
          <div style="font-size: 2rem; margin-bottom: 0.5rem;">🖥️</div>
          <strong style="color: var(--text-primary); display: block;">Dashboard Web Administrador</strong>
          <span style="font-size: 0.82rem; color: var(--text-tertiary);">[Captura de pantalla del sistema web]</span>
        </div>

        <div style="background: rgba(8, 10, 17, 0.8); border: 2px dashed var(--border-subtle); border-radius: var(--radius-md); padding: 2.5rem 1.5rem; text-align: center;">
          <div style="font-size: 2rem; margin-bottom: 0.5rem;">📱</div>
          <strong style="color: var(--text-primary); display: block;">Aplicación Móvil de Campo</strong>
          <span style="font-size: 0.82rem; color: var(--text-tertiary);">[Mockup de smartphone para visitadores]</span>
        </div>

        <div style="background: rgba(8, 10, 17, 0.8); border: 2px dashed var(--border-subtle); border-radius: var(--radius-md); padding: 2.5rem 1.5rem; text-align: center;">
          <div style="font-size: 2rem; margin-bottom: 0.5rem;">🎥</div>
          <strong style="color: var(--text-primary); display: block;">Demostración Interactiva</strong>
          <span style="font-size: 0.82rem; color: var(--text-tertiary);">[Video demostrativo de flujo operativo]</span>
        </div>
      </div>

      <div style="background: rgba(79, 70, 229, 0.08); border-left: 4px solid var(--brand-indigo-light); padding: 1.75rem 2rem; border-radius: 0 var(--radius-md) var(--radius-md) 0; font-style: italic; color: #e2e8f0; font-size: 1.05rem;">
        “Cassará demuestra que ConixDev puede convertir una necesidad operativa compleja en una plataforma empresarial funcional.”
      </div>

      <div style="margin-top: 3rem; text-align: center;">
        <a href="{{ url('/diagnostico') }}" class="btn btn-primary" style="padding: 1rem 2rem;">
          Solicitar una solución similar para mi empresa
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
