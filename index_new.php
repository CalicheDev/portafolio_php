<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <title>Desarrollador Full-Stack | Especialista en IA y Cloud | Tu Nombre</title>
    <meta name="description" content="Transformo datos en soluciones escalables. Especialista en desarrollo web, inteligencia artificial, cloud computing y analytics. Contacta para proyectos innovadores.">
    <meta name="keywords" content="desarrollador full-stack, inteligencia artificial, AWS, machine learning, react, node.js, data analytics">
    <meta name="author" content="Carlos Bejarano">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Desarrollador Full-Stack | Especialista en IA y Cloud">
    <meta property="og:description" content="Transformo datos en soluciones escalables">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tudominio.com">
    <meta property="og:image" content="https://tudominio.com/img/og-image.jpg">
    
    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Tu Nombre",
        "jobTitle": "Desarrollador Full-Stack & Especialista en IA",
        "description": "Especialista en desarrollo web, inteligencia artificial y cloud computing",
        "url": "https://tudominio.com",
        "sameAs": [
            "https://linkedin.com/in/tu-perfil",
            "https://github.com/tu-usuario"
        ]
    }
    </script>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="css/modern-style.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/animations.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="img/favicon.svg">
    <link rel="alternate icon" href="img/favicon.ico">
    
    <!-- Theme Color -->
    <meta name="theme-color" content="#1a1a2e">
</head>
<body class="light-theme">
    <!-- Loading Screen -->
    <div id="loading-screen" class="loading-screen">
        <div class="loading-spinner"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a href="#home" class="logo">
                    <span class="logo-text">Portfolio</span>
                </a>
            </div>
            
            <div class="navbar-menu">
                <div class="navbar-nav">
                    <a href="#home" class="nav-link active">Inicio</a>
                    <a href="#services" class="nav-link">Servicios</a>
                    <a href="#projects" class="nav-link">Proyectos</a>
                    <a href="#about" class="nav-link">Sobre Mí</a>
                    <a href="#contact" class="nav-link">Contacto</a>
                </div>
                
                <div class="navbar-actions">
                    <button class="theme-toggle" id="theme-toggle" aria-label="Cambiar tema">
                        <span class="theme-icon light-icon">🌙</span>
                        <span class="theme-icon dark-icon">☀️</span>
                    </button>
                    <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Menú">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="home" class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text" data-aos="fade-up">
                        <h1 class="hero-title">
                            Transformo <span class="gradient-text">datos</span> en 
                            <span class="gradient-text">soluciones escalables</span>
                        </h1>
                        <p class="hero-subtitle">
                            Desarrollador Full-Stack especializado en IA, Cloud Computing y Data Analytics. 
                            Creo experiencias digitales que impulsan el crecimiento empresarial.
                        </p>
                        <div class="hero-stats">
                            <div class="stat">
                                <span class="stat-number">50+</span>
                                <span class="stat-label">Proyectos</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">5+</span>
                                <span class="stat-label">Años Exp.</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">100%</span>
                                <span class="stat-label">Satisfacción</span>
                            </div>
                        </div>
                        <div class="hero-actions">
                            <a href="#contact" class="btn btn-primary">
                                <span>Trabajemos Juntos</span>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#projects" class="btn btn-outline">Ver Proyectos</a>
                        </div>
                    </div>
                    <div class="hero-visual" data-aos="fade-left" data-aos-delay="200">
                        <div class="hero-image">
                            <div class="floating-elements">
                                <div class="floating-card tech-card" data-tech="React">
                                    <span>React</span>
                                </div>
                                <div class="floating-card tech-card" data-tech="AWS">
                                    <span>AWS</span>
                                </div>
                                <div class="floating-card tech-card" data-tech="Python">
                                    <span>Python</span>
                                </div>
                                <div class="floating-card tech-card" data-tech="SQL">
                                    <span>SQL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-scroll-indicator">
                <span>Scroll</span>
                <div class="scroll-arrow"></div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2 class="section-title">Servicios Especializados</h2>
                    <p class="section-subtitle">
                        Soluciones tecnológicas que impulsan el crecimiento de tu negocio
                    </p>
                </div>
                
                <div class="services-grid">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                                <path d="M16 18L22 12L16 6M8 6L2 12L8 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="service-title">Desarrollo Web Full-Stack</h3>
                        <p class="service-description">
                            Aplicaciones web modernas con React, Node.js y arquitecturas escalables
                        </p>
                        <ul class="service-benefits">
                            <li>MVP rápidos en 2-4 semanas</li>
                            <li>Performance optimizada</li>
                            <li>Arquitectura escalable</li>
                            <li>Testing automatizado</li>
                        </ul>
                        <div class="service-tech">
                            <span class="tech-badge">React</span>
                            <span class="tech-badge">Node.js</span>
                            <span class="tech-badge">TypeScript</span>
                        </div>
                    </div>

                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                                <path d="M9.663 17H4L14 7L12 9L19 2L22 5L12 15L10 13L7 20Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="service-title">Inteligencia Artificial</h3>
                        <p class="service-description">
                            Soluciones de ML, NLP y automatización inteligente para tu negocio
                        </p>
                        <ul class="service-benefits">
                            <li>Automatización de procesos</li>
                            <li>Análisis predictivo</li>
                            <li>Chatbots inteligentes</li>
                            <li>Procesamiento de lenguaje</li>
                        </ul>
                        <div class="service-tech">
                            <span class="tech-badge">Python</span>
                            <span class="tech-badge">TensorFlow</span>
                            <span class="tech-badge">OpenAI</span>
                        </div>
                    </div>

                    <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                                <path d="M18 10H20A2 2 0 0 1 22 12V20A2 2 0 0 1 20 22H4A2 2 0 0 1 2 20V12A2 2 0 0 1 4 10H6M6 10V6A2 2 0 0 1 8 4H16A2 2 0 0 1 18 6V10M6 10L12 16L18 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="service-title">Cloud Computing (AWS)</h3>
                        <p class="service-description">
                            Arquitecturas cloud escalables, seguras y optimizadas en costos
                        </p>
                        <ul class="service-benefits">
                            <li>Migración a la nube</li>
                            <li>Infraestructura como código</li>
                            <li>DevOps y CI/CD</li>
                            <li>Optimización de costos</li>
                        </ul>
                        <div class="service-tech">
                            <span class="tech-badge">AWS</span>
                            <span class="tech-badge">Docker</span>
                            <span class="tech-badge">Terraform</span>
                        </div>
                    </div>

                    <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                                <path d="M3 3V21H21V3H3ZM9 17V7L17 12L9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="service-title">Data Analytics</h3>
                        <p class="service-description">
                            Transformación de datos en insights accionables con herramientas avanzadas
                        </p>
                        <ul class="service-benefits">
                            <li>Dashboards interactivos</li>
                            <li>ETL automatizados</li>
                            <li>Análisis de rendimiento</li>
                            <li>Reportes ejecutivos</li>
                        </ul>
                        <div class="service-tech">
                            <span class="tech-badge">SQL Server</span>
                            <span class="tech-badge">Power BI</span>
                            <span class="tech-badge">Python</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="projects">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2 class="section-title">Proyectos Destacados</h2>
                    <p class="section-subtitle">
                        Casos de éxito que demuestran mi experiencia técnica
                    </p>
                </div>

                <div class="project-filters" data-aos="fade-up" data-aos-delay="100">
                    <button class="filter-btn active" data-filter="all">Todos</button>
                    <button class="filter-btn" data-filter="web">Desarrollo Web</button>
                    <button class="filter-btn" data-filter="ai">Inteligencia Artificial</button>
                    <button class="filter-btn" data-filter="cloud">Cloud Computing</button>
                    <button class="filter-btn" data-filter="data">Data Analytics</button>
                </div>

                <div class="projects-grid" id="projects-grid">
                    <!-- Project cards will be dynamically loaded here -->
                </div>
                
                <div class="projects-cta" data-aos="fade-up">
                    <p>¿Interesado en colaborar?</p>
                    <a href="#contact" class="btn btn-primary">Conversemos sobre tu proyecto</a>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-text" data-aos="fade-right">
                        <h2 class="section-title">Sobre Mí</h2>
                        <p class="about-intro">
                            Desarrollador apasionado por crear soluciones tecnológicas que generen 
                            impacto real en los negocios. Con más de 5 años de experiencia, 
                            especializado en arquitecturas escalables y tecnologías emergentes.
                        </p>
                        
                        <div class="experience-timeline">
                            <div class="timeline-item">
                                <div class="timeline-year">2024</div>
                                <div class="timeline-content">
                                    <h4>Senior Full-Stack Developer</h4>
                                    <p>Liderando proyectos de IA y cloud computing</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-year">2022</div>
                                <div class="timeline-content">
                                    <h4>Cloud Solutions Architect</h4>
                                    <p>Especialización en AWS y arquitecturas serverless</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-year">2020</div>
                                <div class="timeline-content">
                                    <h4>Full-Stack Developer</h4>
                                    <p>Desarrollo de aplicaciones web modernas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="about-skills" data-aos="fade-left">
                        <h3>Habilidades Técnicas</h3>
                        <div class="skills-grid">
                            <div class="skill-category">
                                <h4>Frontend</h4>
                                <div class="skill-item">
                                    <span class="skill-name">React/Next.js</span>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-progress="95"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <span class="skill-name">TypeScript</span>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-progress="90"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="skill-category">
                                <h4>Backend</h4>
                                <div class="skill-item">
                                    <span class="skill-name">Node.js</span>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-progress="92"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <span class="skill-name">Python</span>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-progress="88"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="skill-category">
                                <h4>Cloud & DevOps</h4>
                                <div class="skill-item">
                                    <span class="skill-name">AWS</span>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-progress="90"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <span class="skill-name">Docker</span>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-progress="85"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="certifications">
                            <h4>Certificaciones</h4>
                            <div class="cert-badges">
                                <div class="cert-badge">AWS Solutions Architect</div>
                                <div class="cert-badge">Microsoft Azure AI</div>
                                <div class="cert-badge">Google Cloud Professional</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Success Cases Section -->
        <section id="success-cases" class="success-cases">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2 class="section-title">Casos de Éxito</h2>
                    <p class="section-subtitle">Resultados medibles que demuestran el impacto</p>
                </div>
                
                <div class="cases-grid">
                    <div class="case-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="case-metric">300%</div>
                        <div class="case-description">
                            <h4>Optimización de Base de Datos</h4>
                            <p>Reduje los tiempos de consulta SQL de 45s a 15s mediante indexación inteligente y optimización de queries</p>
                        </div>
                    </div>
                    
                    <div class="case-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="case-metric">70%</div>
                        <div class="case-description">
                            <h4>Reducción de Costos AWS</h4>
                            <p>Implementé arquitectura serverless que redujo costos operativos mensuales de $3,000 a $900</p>
                        </div>
                    </div>
                    
                    <div class="case-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="case-metric">15x</div>
                        <div class="case-description">
                            <h4>Automatización con IA</h4>
                            <p>Desarrollé chatbot que automatizó el 80% de consultas de soporte, liberando 15 horas semanales del equipo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-main" data-aos="fade-up">
                    <h2 class="footer-title">¿Listo para transformar tu negocio?</h2>
                    <p class="footer-subtitle">
                        Conversemos sobre cómo puedo ayudarte a alcanzar tus objetivos tecnológicos
                    </p>
                </div>
                
                <div class="footer-form" data-aos="fade-up" data-aos-delay="200">
                    <form id="contact-form" class="contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="name" name="name" required>
                                <label for="name">Nombre completo</label>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject">
                            <label for="subject">Asunto</label>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" rows="5" required></textarea>
                            <label for="message">Mensaje</label>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <span>Enviar Mensaje</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M22 2L11 13M22 2L15 22L11 13M22 2L2 9L11 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-social">
                    <a href="https://linkedin.com/in/tu-perfil" target="_blank" rel="noopener" class="social-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 0H5C2.2 0 0 2.2 0 5V19C0 21.8 2.2 24 5 24H19C21.8 24 24 21.8 24 19V5C24 2.2 21.8 0 19 0ZM8 19H5V8H8V19ZM6.5 6.7C5.5 6.7 4.7 5.9 4.7 4.9S5.5 3.1 6.5 3.1S8.3 3.9 8.3 4.9S7.5 6.7 6.5 6.7ZM20 19H17V13.4C17 12.2 16.8 10.7 15.2 10.7C13.6 10.7 13.4 12 13.4 13.3V19H10.4V8H13.3V9.3H13.4C13.8 8.5 14.8 7.7 16.3 7.7C19.3 7.7 20 9.9 20 12.7V19Z"/>
                        </svg>
                    </a>
                    <a href="https://github.com/tu-usuario" target="_blank" rel="noopener" class="social-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.37 0 0 5.37 0 12C0 17.31 3.435 21.795 8.205 23.385C8.805 23.49 9.03 23.13 9.03 22.815C9.03 22.53 9.015 21.585 9.015 20.58C6 21.135 5.22 19.845 4.98 19.17C4.845 18.825 4.26 17.76 3.75 17.475C3.33 17.25 2.73 16.695 3.735 16.68C4.68 16.665 5.355 17.55 5.58 17.91C6.66 19.725 8.385 19.215 9.075 18.9C9.18 18.12 9.495 17.595 9.84 17.295C7.17 16.995 4.38 15.96 4.38 11.37C4.38 10.065 4.845 8.985 5.61 8.145C5.49 7.845 5.07 6.615 5.73 4.965C5.73 4.965 6.735 4.65 9.03 6.195C9.99 5.925 11.01 5.79 12.03 5.79C13.05 5.79 14.07 5.925 15.03 6.195C17.325 4.635 18.33 4.965 18.33 4.965C18.99 6.615 18.57 7.845 18.45 8.145C19.215 8.985 19.68 10.05 19.68 11.37C19.68 15.975 16.875 16.995 14.205 17.295C14.64 17.67 15.015 18.39 15.015 19.515C15.015 21.12 15 22.41 15 22.815C15 23.13 15.225 23.505 15.825 23.385C18.2072 22.5807 20.2772 21.0497 21.7437 19.0074C23.2101 16.965 23.9993 14.5143 24 12C24 5.37 18.63 0 12 0Z"/>
                        </svg>
                    </a>
                </div>
                <div class="footer-copy">
                    <p>&copy; 2025 Carlos Bejarano. Hecho con ❤️ y código limpio.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/modern-app.js"></script>
    <script src="js/animations.js"></script>
    <script src="js/projects-data.js"></script>
</body>
</html>