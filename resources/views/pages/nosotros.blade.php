@extends('layouts.main')

@section('title', 'Sobre ConixDev | Orgullo & Filosofía de Desarrollo')
@section('description', 'Conoce a ConixDev: empresa tecnológica nacida en Ecuador creando software de nivel internacional para empresas que buscan controlar y escalar sus operaciones.')

@section('content')
<section style="padding-top: 6.5rem; padding-bottom: 1rem;">
  <div class="container">
    <span class="trust-badge" style="margin-bottom: 0.75rem;">Filosofía & Identidad</span>
    <h1 class="title-hero" style="margin-bottom: 0.75rem;">
      Sobre <span class="text-gradient">ConixDev</span>
    </h1>
    <p style="font-size: 1.15rem; color: var(--text-muted); max-width: 800px; line-height: 1.6;">
      Desde Ecuador, construimos software de nivel internacional para empresas que quieren crecer y controlar mejor sus procesos.
    </p>
  </div>
</section>

<section class="section-spacing" style="padding-top: 0.5rem;">
  <div class="container">
    <div class="contact-simple-card" style="max-width: 860px; margin-bottom: 3rem;">
      <h2 class="title-section" style="font-size: 1.8rem; margin-bottom: 1.25rem;">Nuestra Forma de Trabajar</h2>
      <p style="font-size: 1.1rem; color: var(--text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
        No pretendemos ser una agencia masiva que revende plantillas. Somos un equipo de desarrollo extremadamente dedicado que analiza la realidad de tu empresa y programa el sistema exacto que tu negocio necesita.
      </p>

      <p style="font-size: 1rem; color: var(--brand-cyan-glow); font-weight: 600; margin-bottom: 2rem;">
        🇪🇨 Operamos desde Ecuador atendiendo proyectos para empresas nacionales e internacionales.
      </p>

      <div style="border-top: 1px solid var(--border-subtle); padding-top: 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem;">
        <div>
          <strong style="font-size: 1.1rem; color: var(--text-main); display: block;">Nico López // ConixDev</strong>
          <span style="color: var(--text-muted); font-size: 0.9rem;">Desarrollador Principal & Fundador</span>
        </div>
        <div>
          <a href="{{ url('/diagnostico') }}" class="btn-action btn-primary-glow">
            Hablar de mi proyecto →
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
