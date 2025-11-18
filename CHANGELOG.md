# Changelog

Todos los cambios notables en este proyecto serán documentados en este archivo.

## [1.3.0] - 2024-11-18

### Optimizaciones de Rendimiento
- Añadido lazy loading a imágenes 2 y 3
- Hero image carga con `loading="eager"` para aparecer inmediatamente
- Comprimidas todas las imágenes (reducción del 72%)
- Eliminadas imágenes no utilizadas (4.7MB ahorrados)
- Añadido preconnect para Google Fonts
- **Resultado:** Reducción de tamaño total de 6.5MB a 1.8MB

### Limpieza
- Eliminados archivos duplicados
- Eliminadas imágenes de pexels no utilizadas
- Eliminado portada.png (no usado en landing)
- Eliminado Untitled design.png

## [1.2.0] - 2024-11-18

### Correcciones
- Corregido número de páginas de "100" a "80" en 3 ubicaciones:
  - Sección de beneficios
  - Sección de actividades
  - FAQ

## [1.1.0] - 2024-11-18

### Animaciones
- Implementadas animaciones de scroll con Intersection Observer
- Fade-in y slide-up para secciones principales
- Animaciones escalonadas para tarjetas de actividades (6 cards)
- Animaciones escalonadas para testimonios (3 reviews)
- Efectos hover en todas las imágenes (rotate + scale)

### Contenido
- Integrados 3 testimonios reales de Amazon:
  - Francisco: "Regalo de cumple perfecto"
  - Elizabeth: "Un libro muy divertido"
  - Brenda Stc: "Para reducir uso de pantallas"
- Reducido de 6 a 3 testimonios para mejor UX
- Cambiado texto de beneficios para evitar repetición con imagen2

### Mejoras Visuales
- Añadidos efectos hover a imágenes (rotación y escala)
- Mejorada responsividad mobile

## [1.0.0] - 2024-11-18

### Lanzamiento Inicial
- Estructura completa de landing page
- 7 secciones principales:
  - Hero con CTA
  - Beneficios
  - Actividades (6 tipos)
  - Interior del libro
  - Testimonios
  - FAQ (7 preguntas)
  - CTA final
- Diseño responsive (mobile, tablet, desktop)
- Paleta de colores de marca
- Tipografía: Bangers + Inter
- Fondo estilo cuaderno
- Múltiples CTAs a Amazon
- Deploy inicial a Vercel
- Repositorio creado en GitHub

### Características
- Botones 3D con efectos de sombra
- Dividers decorativos entre secciones
- Botón de descarga de muestra gratuita
- Icons de Lucide
- Smooth scroll

---

**Formato del changelog:** [Keep a Changelog](https://keepachangelog.com/es-ES/1.0.0/)
**Versionado:** [Semantic Versioning](https://semver.org/lang/es/)
