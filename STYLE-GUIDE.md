# Guía de Estilos - Portafolio Moderno

## Paleta de Colores

### Colores Primarios
- **Primary 500**: `#3b82f6` - Azul principal para CTAs y elementos destacados
- **Primary 600**: `#2563eb` - Azul más oscuro para hover states
- **Primary 700**: `#1d4ed8` - Azul oscuro para texto sobre fondos claros

### Colores de Soporte
- **Success**: `#10b981` - Verde para estados exitosos
- **Warning**: `#f59e0b` - Amarillo para alertas
- **Error**: `#ef4444` - Rojo para errores

### Escalas de Grises
- **Gray 50**: `#f9fafb` - Fondo secundario claro
- **Gray 100**: `#f3f4f6` - Fondo terciario
- **Gray 600**: `#4b5563` - Texto secundario
- **Gray 900**: `#111827` - Texto principal

### Tema Oscuro
- **Background Primary**: `#111827`
- **Background Secondary**: `#1f2937`
- **Text Primary**: `#f3f4f6`
- **Border Color**: `#374151`

## Tipografía

### Fuentes
- **Headings**: `'Poppins', sans-serif`
- **Body Text**: `'Inter', sans-serif`

### Escalas de Tamaño
- **text-xs**: `0.75rem` (12px)
- **text-sm**: `0.875rem` (14px)
- **text-base**: `1rem` (16px)
- **text-lg**: `1.125rem` (18px)
- **text-xl**: `1.25rem` (20px)
- **text-2xl**: `1.5rem` (24px)
- **text-3xl**: `1.875rem` (30px)
- **text-4xl**: `2.25rem` (36px)
- **text-5xl**: `3rem` (48px)
- **text-6xl**: `3.75rem` (60px)

### Pesos de Fuente
- **Light**: 300
- **Regular**: 400
- **Medium**: 500
- **SemiBold**: 600
- **Bold**: 700

## Espaciado

### Sistema de Espaciado (basado en 0.25rem)
- **space-1**: `0.25rem` (4px)
- **space-2**: `0.5rem` (8px)
- **space-3**: `0.75rem` (12px)
- **space-4**: `1rem` (16px)
- **space-5**: `1.25rem` (20px)
- **space-6**: `1.5rem` (24px)
- **space-8**: `2rem` (32px)
- **space-10**: `2.5rem` (40px)
- **space-12**: `3rem` (48px)
- **space-16**: `4rem` (64px)
- **space-20**: `5rem` (80px)
- **space-24**: `6rem` (96px)

## Border Radius

- **radius-sm**: `0.375rem` (6px)
- **radius-md**: `0.5rem` (8px)
- **radius-lg**: `0.75rem` (12px)
- **radius-xl**: `1rem` (16px)
- **radius-2xl**: `1.5rem` (24px)

## Sombras

### Elevaciones
- **shadow-sm**: `0 1px 2px 0 rgba(0, 0, 0, 0.1)`
- **shadow-md**: `0 4px 6px -1px rgba(0, 0, 0, 0.1)`
- **shadow-lg**: `0 10px 15px -3px rgba(0, 0, 0, 0.1)`
- **shadow-xl**: `0 20px 25px -5px rgba(0, 0, 0, 0.1)`
- **shadow-2xl**: `0 25px 50px -12px rgba(0, 0, 0, 0.1)`

## Transiciones

### Duraciones
- **transition-fast**: `150ms ease-in-out`
- **transition-normal**: `250ms ease-in-out`
- **transition-slow**: `350ms ease-in-out`

## Componentes

### Botones

#### Botón Primario
```css
.btn-primary {
  background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
  color: white;
  padding: 12px 24px;
  border-radius: 12px;
  font-weight: 500;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: all 150ms ease-in-out;
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}
```

#### Botón Outline
```css
.btn-outline {
  background: transparent;
  color: #374151;
  border: 2px solid #e5e7eb;
  padding: 10px 22px;
  border-radius: 12px;
  font-weight: 500;
  transition: all 150ms ease-in-out;
}

.btn-outline:hover {
  border-color: #2563eb;
  color: #2563eb;
  background: rgba(59, 130, 246, 0.05);
}
```

### Tarjetas

#### Tarjeta de Servicio
```css
.service-card {
  background: white;
  border: 1px solid #e5e7eb;
  border-radius: 24px;
  padding: 32px;
  transition: all 250ms ease-in-out;
}

.service-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 25px rgba(0, 0, 0, 0.1);
  border-color: #bfdbfe;
}
```

#### Tarjeta de Proyecto
```css
.project-card {
  background: white;
  border: 1px solid #e5e7eb;
  border-radius: 24px;
  overflow: hidden;
  transition: all 250ms ease-in-out;
}

.project-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}
```

### Formularios

#### Grupo de Campo
```css
.form-group {
  position: relative;
  margin-bottom: 24px;
}

.form-group input {
  width: 100%;
  padding: 16px;
  border: 2px solid #e5e7eb;
  border-radius: 12px;
  font-size: 16px;
  transition: all 150ms ease-in-out;
}

.form-group input:focus {
  outline: none;
  border-color: #2563eb;
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.form-group label {
  position: absolute;
  left: 16px;
  top: 16px;
  color: #9ca3af;
  pointer-events: none;
  transition: all 150ms ease-in-out;
  background: white;
  padding: 0 8px;
}

.form-group input:focus + label,
.form-group input:not(:placeholder-shown) + label {
  top: -8px;
  left: 12px;
  font-size: 14px;
  color: #2563eb;
}
```

## Breakpoints Responsivos

```css
/* Mobile First Approach */
@media (min-width: 640px) { /* sm */ }
@media (min-width: 768px) { /* md */ }
@media (min-width: 1024px) { /* lg */ }
@media (min-width: 1280px) { /* xl */ }
@media (min-width: 1536px) { /* 2xl */ }
```

## Micro-interacciones

### Hover Effects
- **Elevación**: `translateY(-2px)` a `translateY(-8px)`
- **Escala**: `scale(1.02)` a `scale(1.05)`
- **Sombra**: Incrementar elevación gradualmente

### Loading States
- **Spinner**: Animación de rotación con `border-top` animado
- **Pulse**: Animación de escala `scale(1)` a `scale(1.05)`
- **Shimmer**: Gradiente animado de izquierda a derecha

### Focus States
- **Outline personalizado**: `box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1)`
- **Border highlight**: Cambio de color del borde a primario

## Iconografía

### Tamaños Estándar
- **Pequeño**: 16px
- **Mediano**: 20px
- **Grande**: 24px
- **Extra Grande**: 32px

### Estilo
- **Stroke width**: 2px para iconos de línea
- **Corner radius**: Redondeado
- **Style**: Minimalista, consistente con Heroicons/Feather Icons

## Layout Grid

### Container
- **Max-width**: 1200px
- **Padding horizontal**: 24px (desktop), 16px (mobile)
- **Centrado**: `margin: 0 auto`

### Grid System
- **Servicios**: `repeat(auto-fit, minmax(300px, 1fr))`
- **Proyectos**: `repeat(auto-fit, minmax(350px, 1fr))`
- **About**: `1fr 1fr` (desktop), `1fr` (mobile)

## Mejores Prácticas

### Performance
- Usar `will-change` para elementos animados
- Implementar `transform` y `opacity` para animaciones suaves
- Lazy loading para imágenes
- Minificar CSS y JavaScript

### Accesibilidad
- Contraste mínimo 4.5:1 para texto normal
- Contraste mínimo 3:1 para texto grande
- Focus visible en todos los elementos interactivos
- Soporte para `prefers-reduced-motion`

### SEO
- Estructura semántica HTML5
- Meta tags apropiados
- Schema markup para datos estructurados
- Imágenes optimizadas con alt text descriptivo