@extends('layouts.main')

@section('title', 'Casos de Éxito & Proyectos Empresariales | ConixDev')
@section('description', 'Conoce las plataformas de software a medida desarrolladas por ConixDev para empresas que necesitan digitalizar y automatizar operaciones.')

@section('content')
<div class="page-banner">
  <div class="container">
    <div class="breadcrumb-nav">
      <a href="{{ url('/') }}">Inicio</a>
      <span>/</span>
      <span style="color: var(--text-primary);">Casos de Éxito</span>
    </div>
    <span class="badge-corp">Portafolio de Soluciones Reales</span>
    <h1 class="heading-xl text-gradient-white" style="margin-bottom: 1rem;">
      Casos de éxito y <span class="text-indigo">plataformas construidas</span>
    </h1>
    <p class="body-lead" style="max-width: 800px;">
      Proyectos de software desarrollados a medida para resolver necesidades operativas complejas en empresas reales.
    </p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <div class="showcase-block" style="margin-top: 0;">
      <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 1.5rem;">
        <div>
          <span class="card-tag">Caso Destacado</span>
          <h2 class="heading-lg">Cassará Ecuador</h2>
        </div>
        <a href="{{ url('/casos-de-exito/cassara-ecuador') }}" class="btn btn-primary">
          Ver caso de estudio completo →
        </a>
      </div>

      <p class="body-lead" style="font-size: 1.05rem; color: var(--text-secondary); margin-bottom: 2rem;">
        Plataforma empresarial a medida desarrollada para digitalizar y controlar la operación completa de visitadores médicos, integrando geolocalización GPS y procesamiento automático de facturas con Inteligencia Artificial.
      </p>

      <div class="showcase-grid-list">
        <div class="showcase-item">✓ Geolocalización de visitadores médicos</div>
        <div class="showcase-item">✓ Registro y control de visitas</div>
        <div class="showcase-item">✓ Gestión de médicos y farmacias</div>
        <div class="showcase-item">✓ Escaneo de facturas con IA</div>
        <div class="showcase-item">✓ Organización de facturas por lotes</div>
        <div class="showcase-item">✓ Dashboard de avance de ciclos</div>
      </div>
    </div>
  </div>
</section>
@endsection
