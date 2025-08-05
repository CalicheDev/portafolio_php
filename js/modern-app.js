// Modern Portfolio App - Main JavaScript File
class PortfolioApp {
  constructor() {
    this.currentTheme = localStorage.getItem('theme') || 'light';
    this.scrolled = false;
    this.mobileMenuOpen = false;
    
    this.init();
  }

  init() {
    this.setupEventListeners();
    this.setupTheme();
    this.setupNavigation();
    this.setupScrollEffects();
    this.setupAnimations();
    this.setupForms();
    this.hideLoadingScreen();
    
    // Initialize components after DOM is fully loaded
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', () => {
        this.initializeSkillBars();
      });
    } else {
      this.initializeSkillBars();
    }
  }

  setupEventListeners() {
    // Theme toggle
    const themeToggle = document.getElementById('theme-toggle');
    if (themeToggle) {
      themeToggle.addEventListener('click', () => this.toggleTheme());
    }

    // Mobile menu toggle
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    if (mobileMenuToggle) {
      mobileMenuToggle.addEventListener('click', () => this.toggleMobileMenu());
    }

    // Scroll events
    window.addEventListener('scroll', () => this.handleScroll());

    // Resize events
    window.addEventListener('resize', () => this.handleResize());

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', (e) => this.handleSmoothScroll(e));
    });

    // Intersection Observer for animations
    this.setupIntersectionObserver();
  }

  setupTheme() {
    document.body.classList.toggle('dark-theme', this.currentTheme === 'dark');
    document.body.classList.toggle('light-theme', this.currentTheme === 'light');
  }

  toggleTheme() {
    this.currentTheme = this.currentTheme === 'light' ? 'dark' : 'light';
    localStorage.setItem('theme', this.currentTheme);
    
    document.body.classList.toggle('dark-theme', this.currentTheme === 'dark');
    document.body.classList.toggle('light-theme', this.currentTheme === 'light');

    // Add transition class for smooth theme change
    document.body.style.transition = 'background-color 0.3s ease, color 0.3s ease';
    setTimeout(() => {
      document.body.style.transition = '';
    }, 300);
  }

  setupNavigation() {
    const navbar = document.getElementById('navbar');
    const navLinks = document.querySelectorAll('.nav-link');

    // Update active nav link based on scroll position
    this.updateActiveNavLink();
  }

  toggleMobileMenu() {
    const navbarNav = document.querySelector('.navbar-nav');
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    
    this.mobileMenuOpen = !this.mobileMenuOpen;
    
    navbarNav.classList.toggle('active', this.mobileMenuOpen);
    mobileMenuToggle.classList.toggle('active', this.mobileMenuOpen);
  }

  setupScrollEffects() {
    const navbar = document.getElementById('navbar');
    
    window.addEventListener('scroll', () => {
      const scrollTop = window.pageYOffset;
      
      // Navbar background opacity
      if (scrollTop > 50 && !this.scrolled) {
        this.scrolled = true;
        navbar.style.background = this.currentTheme === 'dark' 
          ? 'rgba(17, 24, 39, 0.95)' 
          : 'rgba(255, 255, 255, 0.95)';
      } else if (scrollTop <= 50 && this.scrolled) {
        this.scrolled = false;
        navbar.style.background = this.currentTheme === 'dark' 
          ? 'rgba(17, 24, 39, 0.9)' 
          : 'rgba(255, 255, 255, 0.9)';
      }

      // Parallax effect for hero section
      const hero = document.querySelector('.hero');
      if (hero) {
        const heroRect = hero.getBoundingClientRect();
        if (heroRect.bottom > 0) {
          const parallaxSpeed = scrollTop * 0.5;
          hero.style.transform = `translateY(${parallaxSpeed}px)`;
        }
      }

      // Update active navigation
      this.updateActiveNavLink();
    });
  }

  updateActiveNavLink() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    
    let currentSection = '';
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 100;
      const sectionHeight = section.offsetHeight;
      
      if (window.pageYOffset >= sectionTop && 
          window.pageYOffset < sectionTop + sectionHeight) {
        currentSection = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${currentSection}`) {
        link.classList.add('active');
      }
    });
  }

  handleSmoothScroll(e) {
    const targetId = e.target.getAttribute('href');
    if (targetId.startsWith('#')) {
      e.preventDefault();
      const targetElement = document.querySelector(targetId);
      
      if (targetElement) {
        const offsetTop = targetElement.offsetTop - 80;
        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth'
        });

        // Close mobile menu if open
        if (this.mobileMenuOpen) {
          this.toggleMobileMenu();
        }
      }
    }
  }

  setupIntersectionObserver() {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('aos-animate');
          
          // Trigger skill bar animations
          if (entry.target.classList.contains('about-skills')) {
            this.animateSkillBars();
          }
        }
      });
    }, observerOptions);

    // Observe elements with data-aos attribute
    document.querySelectorAll('[data-aos]').forEach(el => {
      observer.observe(el);
    });

    // Observe skill section
    const skillsSection = document.querySelector('.about-skills');
    if (skillsSection) {
      observer.observe(skillsSection);
    }
  }

  initializeSkillBars() {
    const skillBars = document.querySelectorAll('.skill-progress');
    skillBars.forEach(bar => {
      const progress = bar.getAttribute('data-progress');
      bar.style.setProperty('--progress-width', `${progress}%`);
    });
  }

  animateSkillBars() {
    const skillBars = document.querySelectorAll('.skill-progress');
    skillBars.forEach((bar, index) => {
      setTimeout(() => {
        const progress = bar.getAttribute('data-progress');
        bar.style.width = `${progress}%`;
        bar.classList.add('animate');
      }, index * 200);
    });
  }

  setupAnimations() {
    // Floating elements animation
    const floatingElements = document.querySelectorAll('.floating-card');
    floatingElements.forEach((element, index) => {
      element.style.animationDelay = `${index * 1.5}s`;
    });

    // Stagger animations for service cards
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach((card, index) => {
      card.style.animationDelay = `${index * 0.1}s`;
    });

    // Text typing effect for hero title
    this.setupTypingEffect();
  }

  setupTypingEffect() {
    const heroTitle = document.querySelector('.hero-title');
    if (heroTitle) {
      const text = heroTitle.textContent;
      heroTitle.textContent = '';
      
      let i = 0;
      const typeWriter = () => {
        if (i < text.length) {
          heroTitle.textContent += text.charAt(i);
          i++;
          setTimeout(typeWriter, 50);
        }
      };
      
      // Start typing effect after a delay
      setTimeout(typeWriter, 1000);
    }
  }

  setupForms() {
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
      contactForm.addEventListener('submit', (e) => this.handleFormSubmission(e));
    }

    // Floating label effects
    const formInputs = document.querySelectorAll('.form-group input, .form-group textarea');
    formInputs.forEach(input => {
      input.addEventListener('focus', () => {
        input.parentElement.classList.add('focused');
      });
      
      input.addEventListener('blur', () => {
        if (!input.value) {
          input.parentElement.classList.remove('focused');
        }
      });

      // Check if input has value on load
      if (input.value) {
        input.parentElement.classList.add('focused');
      }
    });
  }

  handleFormSubmission(e) {
    e.preventDefault();
    
    const form = e.target;
    const formData = new FormData(form);
    const submitButton = form.querySelector('button[type="submit"]');
    
    // Add loading state
    submitButton.classList.add('loading');
    submitButton.disabled = true;
    
    // Simulate form submission (replace with actual endpoint)
    setTimeout(() => {
      this.showNotification('¡Mensaje enviado correctamente!', 'success');
      form.reset();
      
      // Remove focused class from form groups
      document.querySelectorAll('.form-group').forEach(group => {
        group.classList.remove('focused');
      });
      
      // Remove loading state
      submitButton.classList.remove('loading');
      submitButton.disabled = false;
    }, 2000);
  }

  showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    
    // Style the notification
    Object.assign(notification.style, {
      position: 'fixed',
      top: '20px',
      right: '20px',
      background: type === 'success' ? '#10b981' : '#ef4444',
      color: 'white',
      padding: '12px 24px',
      borderRadius: '8px',
      zIndex: '10000',
      transform: 'translateX(400px)',
      transition: 'transform 0.3s ease'
    });
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
      notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Remove after delay
    setTimeout(() => {
      notification.style.transform = 'translateX(400px)';
      setTimeout(() => {
        document.body.removeChild(notification);
      }, 300);
    }, 3000);
  }

  handleResize() {
    // Close mobile menu on resize to desktop
    if (window.innerWidth > 768 && this.mobileMenuOpen) {
      this.toggleMobileMenu();
    }
  }

  handleScroll() {
    // Throttle scroll events for performance
    if (!this.scrollTimeout) {
      this.scrollTimeout = setTimeout(() => {
        this.scrollTimeout = null;
        
        // Update scroll progress indicator
        this.updateScrollProgress();
      }, 16); // ~60fps
    }
  }

  updateScrollProgress() {
    const scrolled = window.pageYOffset;
    const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
    const scrollProgress = (scrolled / maxScroll) * 100;
    
    // Update progress bar if it exists
    const progressBar = document.querySelector('.scroll-progress');
    if (progressBar) {
      progressBar.style.width = `${scrollProgress}%`;
    }
  }

  hideLoadingScreen() {
    const loadingScreen = document.getElementById('loading-screen');
    if (loadingScreen) {
      setTimeout(() => {
        loadingScreen.classList.add('hidden');
        setTimeout(() => {
          loadingScreen.remove();
        }, 500);
      }, 1000);
    }
  }
}

// Utility functions
const utils = {
  // Debounce function for performance optimization
  debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
      const later = () => {
        clearTimeout(timeout);
        func(...args);
      };
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  },

  // Throttle function for scroll events
  throttle(func, limit) {
    let inThrottle;
    return function() {
      const args = arguments;
      const context = this;
      if (!inThrottle) {
        func.apply(context, args);
        inThrottle = true;
        setTimeout(() => inThrottle = false, limit);
      }
    }
  },

  // Check if element is in viewport
  isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  },

  // Animate counter numbers
  animateCounter(element, target, duration = 2000) {
    let current = 0;
    const step = target / (duration / 16);
    
    const timer = setInterval(() => {
      current += step;
      element.textContent = Math.floor(current);
      
      if (current >= target) {
        element.textContent = target;
        clearInterval(timer);
      }
    }, 16);
  }
};

// Initialize the app when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
  window.portfolioApp = new PortfolioApp();
});

// Performance monitoring
if ('performance' in window) {
  window.addEventListener('load', () => {
    const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
    console.log(`Page load time: ${loadTime}ms`);
    
    // Log Core Web Vitals if available
    if ('PerformanceObserver' in window) {
      try {
        const observer = new PerformanceObserver((list) => {
          for (const entry of list.getEntries()) {
            if (entry.entryType === 'navigation') {
              console.log('Navigation timing:', entry);
            }
          }
        });
        observer.observe({ entryTypes: ['navigation'] });
      } catch (e) {
        console.log('Performance Observer not fully supported');
      }
    }
  });
}