@extends('layouts.main')

@section('title', 'Centro de Conocimiento de Software Empresarial | ConixDev')
@section('description', 'Guías técnicas, criterios de inversión y arquitectura de software a medida en Ecuador. Artículos diseñados para directivos y líderes de operaciones.')
@section('canonical', 'https://conixdev.com/blog')

@section('content')
<!-- SCHEMA.ORG JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Blog",
      "@id": "https://conixdev.com/blog#blog",
      "name": "Centro de Conocimiento ConixDev",
      "description": "Artículos técnicos y criterios ejecutivos sobre desarrollo de software a medida, automatización e Inteligencia Artificial en Ecuador."
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
          "name": "Centro de Conocimiento",
          "item": "https://conixdev.com/blog"
        }
      ]
    }
  ]
}
</script>

<section style="padding-top: 7.5rem; padding-bottom: 4rem; position: relative;">
  <div class="canvas-glow-1"></div>
  <div class="container" style="text-align: center;">
    <div class="trust-badge" style="margin-bottom: 1.25rem;">
      <span class="trust-badge-dot"></span>
      Criterios Técnicos para Líderes de Negocio
    </div>

    <h1 class="title-hero" style="max-width: 950px; margin: 0 auto 1.25rem;">
      Centro de <span class="text-gradient">Conocimiento en Software</span>
    </h1>

    <p style="font-size: clamp(1.05rem, 1.8vw, 1.25rem); color: var(--text-muted); max-width: 780px; margin: 0 auto 2.5rem; line-height: 1.6;">
      Respuestas claras, análisis de ROI y criterios de ingeniería para tomar decisiones estratégicas de tecnología en tu empresa.
    </p>
  </div>
</section>

<section class="section-spacing section-alt-bg">
  <div class="container">
    <div class="cards-layout-grid">
      <a href="{{ url('/blog/cuanto-cuesta-desarrollar-software-ecuador') }}" class="card-box" style="text-decoration: none; display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <span style="font-size: 0.8rem; color: var(--brand-cyan); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; display: block; margin-bottom: 0.5rem;">Guía de Inversión</span>
          <h2 class="title-card" style="margin-bottom: 0.75rem; color: var(--text-main);">¿Cuánto Cuesta Desarrollar un Software Empresarial en Ecuador?</h2>
          <p class="body-sm" style="color: var(--text-muted);">Análisis transparente de rangos de inversión, factores de costo y retorno económico al reemplazar Excel.</p>
        </div>
        <span style="margin-top: 1.5rem; color: var(--brand-cyan); font-weight: 600; font-size: 0.9rem;">Leer artículo completo →</span>
      </a>

      <a href="{{ url('/blog/software-a-medida-vs-estandar') }}" class="card-box" style="text-decoration: none; display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <span style="font-size: 0.8rem; color: var(--brand-cyan); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; display: block; margin-bottom: 0.5rem;">Comparativa Ejecutiva</span>
          <h2 class="title-card" style="margin-bottom: 0.75rem; color: var(--text-main);">Software a Medida vs. Software Comercial Estándar</h2>
          <p class="body-sm" style="color: var(--text-muted);">Cuándo conviene a tu empresa desarrollar un sistema propio y cuándo utilizar un programa comercial.</p>
        </div>
        <span style="margin-top: 1.5rem; color: var(--brand-cyan); font-weight: 600; font-size: 0.9rem;">Leer artículo completo →</span>
      </a>
    </div>
  </div>
</section>
@endsection
