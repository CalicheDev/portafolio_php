// Advanced Animation System
class AnimationController {
  constructor() {
    this.animations = new Map();
    this.observers = new Map();
    this.init();
  }

  init() {
    this.setupScrollAnimations();
    this.setupHoverEffects();
    this.setupParallaxEffects();
    this.setupMorphingEffects();
  }

  // Simplified AOS (Animate On Scroll) implementation
  setupScrollAnimations() {
    const animationConfig = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          this.triggerAnimation(entry.target);
        }
      });
    }, animationConfig);

    // Auto-discover elements with animation attributes
    document.querySelectorAll('[data-aos]').forEach(element => {
      observer.observe(element);
    });

    this.observers.set('scroll', observer);
  }

  triggerAnimation(element) {
    const animationType = element.getAttribute('data-aos');
    const delay = element.getAttribute('data-aos-delay') || 0;
    const duration = element.getAttribute('data-aos-duration') || 600;

    setTimeout(() => {
      element.classList.add('aos-animate');
      this.applyAnimation(element, animationType, duration);
    }, parseInt(delay));
  }

  applyAnimation(element, type, duration) {
    element.style.transition = `all ${duration}ms ease-out`;
    
    switch (type) {
      case 'fade-up':
        element.style.opacity = '1';
        element.style.transform = 'translateY(0)';
        break;
      case 'fade-down':
        element.style.opacity = '1';
        element.style.transform = 'translateY(0)';
        break;
      case 'fade-left':
        element.style.opacity = '1';
        element.style.transform = 'translateX(0)';
        break;
      case 'fade-right':
        element.style.opacity = '1';
        element.style.transform = 'translateX(0)';
        break;
      case 'zoom-in':
        element.style.opacity = '1';
        element.style.transform = 'scale(1)';
        break;
      case 'flip-up':
        element.style.opacity = '1';
        element.style.transform = 'rotateX(0)';
        break;
    }
  }

  setupHoverEffects() {
    // Service cards hover effects
    document.querySelectorAll('.service-card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        this.animateServiceCard(card, true);
      });
      
      card.addEventListener('mouseleave', () => {
        this.animateServiceCard(card, false);
      });
    });

    // Project cards hover effects
    document.querySelectorAll('.project-card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        this.animateProjectCard(card, true);
      });
      
      card.addEventListener('mouseleave', () => {
        this.animateProjectCard(card, false);
      });
    });

    // Button hover effects
    document.querySelectorAll('.btn').forEach(button => {
      button.addEventListener('mouseenter', () => {
        this.animateButton(button, true);
      });
      
      button.addEventListener('mouseleave', () => {
        this.animateButton(button, false);
      });
    });
  }

  animateServiceCard(card, isHover) {
    const icon = card.querySelector('.service-icon');
    const title = card.querySelector('.service-title');
    
    if (isHover) {
      card.style.transform = 'translateY(-8px) scale(1.02)';
      card.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.1)';
      if (icon) icon.style.transform = 'scale(1.1) rotate(5deg)';
      if (title) title.style.color = 'var(--primary-600)';
    } else {
      card.style.transform = 'translateY(0) scale(1)';
      card.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.05)';
      if (icon) icon.style.transform = 'scale(1) rotate(0deg)';
      if (title) title.style.color = 'var(--text-primary)';
    }
  }

  animateProjectCard(card, isHover) {
    const image = card.querySelector('.project-image img');
    const overlay = card.querySelector('.project-overlay');
    
    if (isHover) {
      card.style.transform = 'translateY(-12px)';
      card.style.boxShadow = '0 25px 50px rgba(0, 0, 0, 0.15)';
      if (image) image.style.transform = 'scale(1.05)';
      if (overlay) overlay.style.opacity = '1';
    } else {
      card.style.transform = 'translateY(0)';
      card.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.05)';
      if (image) image.style.transform = 'scale(1)';
      if (overlay) overlay.style.opacity = '0';
    }
  }

  animateButton(button, isHover) {
    const icon = button.querySelector('svg');
    
    if (isHover) {
      button.style.transform = 'translateY(-2px)';
      button.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.1)';
      if (icon) icon.style.transform = 'translateX(4px)';
    } else {
      button.style.transform = 'translateY(0)';
      button.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.05)';
      if (icon) icon.style.transform = 'translateX(0)';
    }
  }

  setupParallaxEffects() {
    const parallaxElements = document.querySelectorAll('.parallax');
    
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      
      parallaxElements.forEach(element => {
        const rate = scrolled * -0.5;
        element.style.transform = `translateY(${rate}px)`;
      });
    });
  }

  setupMorphingEffects() {
    // Morphing background shapes
    this.createMorphingShapes();
    
    // Floating particles
    this.createFloatingParticles();
  }

  createMorphingShapes() {
    const hero = document.querySelector('.hero');
    if (!hero) return;

    const shapes = [];
    for (let i = 0; i < 3; i++) {
      const shape = document.createElement('div');
      shape.className = 'morphing-shape';
      shape.style.cssText = `
        position: absolute;
        width: ${100 + Math.random() * 200}px;
        height: ${100 + Math.random() * 200}px;
        background: linear-gradient(45deg, rgba(59, 130, 246, 0.1), rgba(147, 51, 234, 0.1));
        border-radius: 50%;
        top: ${Math.random() * 100}%;
        left: ${Math.random() * 100}%;
        animation: morph ${8 + Math.random() * 4}s ease-in-out infinite;
        animation-delay: ${Math.random() * 2}s;
        z-index: -1;
      `;
      
      hero.appendChild(shape);
      shapes.push(shape);
    }

    // Add morphing keyframes
    if (!document.querySelector('#morph-styles')) {
      const style = document.createElement('style');
      style.id = 'morph-styles';
      style.textContent = `
        @keyframes morph {
          0%, 100% {
            border-radius: 50%;
            transform: scale(1) rotate(0deg);
          }
          25% {
            border-radius: 60% 40% 30% 70%;
            transform: scale(1.1) rotate(90deg);
          }
          50% {
            border-radius: 30% 60% 70% 40%;
            transform: scale(0.9) rotate(180deg);
          }
          75% {
            border-radius: 40% 30% 60% 50%;
            transform: scale(1.05) rotate(270deg);
          }
        }
      `;
      document.head.appendChild(style);
    }
  }

  createFloatingParticles() {
    const hero = document.querySelector('.hero');
    if (!hero) return;

    const particleCount = 20;
    const particles = [];

    for (let i = 0; i < particleCount; i++) {
      const particle = document.createElement('div');
      particle.className = 'floating-particle';
      particle.style.cssText = `
        position: absolute;
        width: ${2 + Math.random() * 4}px;
        height: ${2 + Math.random() * 4}px;
        background: var(--primary-600);
        border-radius: 50%;
        top: ${Math.random() * 100}%;
        left: ${Math.random() * 100}%;
        animation: float ${3 + Math.random() * 4}s ease-in-out infinite;
        animation-delay: ${Math.random() * 2}s;
        opacity: 0.6;
        z-index: -1;
      `;
      
      hero.appendChild(particle);
      particles.push(particle);
    }

    // Add floating keyframes
    if (!document.querySelector('#float-styles')) {
      const style = document.createElement('style');
      style.id = 'float-styles';
      style.textContent = `
        @keyframes float {
          0%, 100% {
            transform: translateY(0px) rotate(0deg);
          }
          50% {
            transform: translateY(-20px) rotate(180deg);
          }
        }
      `;
      document.head.appendChild(style);
    }
  }

  // Intersection Observer for counter animations
  setupCounterAnimations() {
    const counters = document.querySelectorAll('.stat-number');
    
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          this.animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
      counterObserver.observe(counter);
    });
  }

  animateCounter(element) {
    const target = parseInt(element.textContent.replace(/\D/g, ''));
    const suffix = element.textContent.replace(/[\d]/g, '');
    let current = 0;
    const increment = target / 100;
    
    const timer = setInterval(() => {
      current += increment;
      element.textContent = Math.floor(current) + suffix;
      
      if (current >= target) {
        element.textContent = target + suffix;
        clearInterval(timer);
      }
    }, 20);
  }

  // Text reveal animation
  setupTextReveal() {
    const textElements = document.querySelectorAll('.reveal-text');
    
    textElements.forEach(element => {
      const text = element.textContent;
      element.innerHTML = '';
      
      // Wrap each character in a span
      text.split('').forEach((char, index) => {
        const span = document.createElement('span');
        span.textContent = char === ' ' ? '\u00A0' : char;
        span.style.cssText = `
          display: inline-block;
          opacity: 0;
          transform: translateY(20px);
          animation: revealChar 0.5s ease-out forwards;
          animation-delay: ${index * 0.03}s;
        `;
        element.appendChild(span);
      });
    });

    // Add reveal keyframes
    if (!document.querySelector('#reveal-styles')) {
      const style = document.createElement('style');
      style.id = 'reveal-styles';
      style.textContent = `
        @keyframes revealChar {
          to {
            opacity: 1;
            transform: translateY(0);
          }
        }
      `;
      document.head.appendChild(style);
    }
  }

  // Magnetic button effect
  setupMagneticEffect() {
    const magneticElements = document.querySelectorAll('.magnetic');
    
    magneticElements.forEach(element => {
      element.addEventListener('mousemove', (e) => {
        const rect = element.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        
        element.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;
      });
      
      element.addEventListener('mouseleave', () => {
        element.style.transform = 'translate(0, 0)';
      });
    });
  }

  // Cleanup function
  destroy() {
    this.observers.forEach(observer => {
      observer.disconnect();
    });
    this.observers.clear();
    this.animations.clear();
  }
}

// Page transition effects
class PageTransitions {
  constructor() {
    this.setupPageTransitions();
  }

  setupPageTransitions() {
    // Smooth page enter animation
    document.addEventListener('DOMContentLoaded', () => {
      document.body.classList.add('page-loaded');
    });

    // Link transitions
    document.querySelectorAll('a[href]').forEach(link => {
      if (link.hostname === window.location.hostname) {
        link.addEventListener('click', (e) => {
          if (!link.hash) {
            this.transitionOut(() => {
              window.location.href = link.href;
            });
            e.preventDefault();
          }
        });
      }
    });
  }

  transitionOut(callback) {
    const overlay = document.createElement('div');
    overlay.style.cssText = `
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: var(--bg-primary);
      z-index: 10000;
      opacity: 0;
      transition: opacity 0.5s ease;
    `;
    
    document.body.appendChild(overlay);
    
    requestAnimationFrame(() => {
      overlay.style.opacity = '1';
      setTimeout(callback, 500);
    });
  }
}

// Initialize animations when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
  window.animationController = new AnimationController();
  window.pageTransitions = new PageTransitions();
  
  // Setup additional animations
  setTimeout(() => {
    if (window.animationController) {
      window.animationController.setupCounterAnimations();
      window.animationController.setupTextReveal();
      window.animationController.setupMagneticEffect();
    }
  }, 1000);
});

// Performance optimization: disable animations on low-end devices
if (navigator.hardwareConcurrency < 4 || 
    navigator.connection?.effectiveType === 'slow-2g' ||
    navigator.connection?.effectiveType === '2g') {
  document.documentElement.style.setProperty('--transition-fast', '0ms');
  document.documentElement.style.setProperty('--transition-normal', '0ms');
  document.documentElement.style.setProperty('--transition-slow', '0ms');
}