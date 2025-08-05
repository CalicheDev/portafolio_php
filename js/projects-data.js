// Projects data
const projectsData = [
  {
    id: 1,
    title: "Sistema ERP Clinic",
    category: "web",
    description: "Software ERP completo para gestión de clínicas con módulos de facturación, inventario, farmacia e historias clínicas.",
    image: "img/banner/pexels-photo-908284.jpeg",
    technologies: ["Laravel", "MySQL", "JavaScript", "Bootstrap"],
    demo: "#",
    github: "#",
    problem: "Las clínicas necesitaban un sistema integral que conectara todos sus procesos desde la facturación hasta las historias clínicas.",
    solution: "Desarrollé un ERP modular con Laravel que integra todos los procesos organizacionales, permitiendo trazabilidad completa y generación de informes en tiempo real."
  },
  {
    id: 2,
    title: "Sistema HelpDesk",
    category: "web",
    description: "Plataforma de gestión de tickets de soporte técnico con analytics y reportes avanzados.",
    image: "img/banner/pexels-photo-1068523.jpeg",
    technologies: ["PHP", "MySQL", "JavaScript", "Ajax"],
    demo: "#",
    github: "#",
    problem: "Las empresas perdían seguimiento de los tickets de soporte y no tenían métricas de rendimiento del equipo técnico.",
    solution: "Creé un sistema de tickets con dashboard analítico, automatización de flujos y generación de reportes en PDF/Excel para optimizar el soporte técnico."
  },
  {
    id: 3,
    title: "Chatbot de Atención al Cliente",
    category: "ai",
    description: "Chatbot inteligente con procesamiento de lenguaje natural para automatizar el 80% de consultas de soporte.",
    image: "img/banner/ai-chatbot.jpg",
    technologies: ["Python", "OpenAI", "FastAPI", "React"],
    demo: "#",
    github: "#",
    problem: "El equipo de soporte invertía 15 horas semanales en consultas repetitivas que podían automatizarse.",
    solution: "Implementé un chatbot con IA que comprende el contexto y resuelve consultas comunes, liberando tiempo para casos complejos."
  },
  {
    id: 4,
    title: "Arquitectura Serverless AWS",
    category: "cloud",
    description: "Migración de aplicación monolítica a arquitectura serverless, reduciendo costos en 70%.",
    image: "img/banner/aws-serverless.jpg",
    technologies: ["AWS Lambda", "API Gateway", "DynamoDB", "CloudFormation"],
    demo: "#",
    github: "#",
    problem: "Costos operativos altos ($3,000/mes) y escalabilidad limitada en aplicación monolítica tradicional.",
    solution: "Diseñé arquitectura serverless con Lambda que escala automáticamente y solo cobra por uso real, reduciendo costos a $900/mes."
  },
  {
    id: 5,
    title: "Dashboard de Analytics",
    category: "data",
    description: "Dashboard interactivo en Power BI con ETL automatizado para análisis de rendimiento empresarial.",
    image: "img/banner/dashboard-analytics.jpg",
    technologies: ["Power BI", "SQL Server", "Python", "Azure"],
    demo: "#",
    github: "#",
    problem: "Datos dispersos en múltiples sistemas sin visibilidad unificada para toma de decisiones ejecutivas.",
    solution: "Desarrollé ETL que consolida datos de múltiples fuentes en dashboard ejecutivo con métricas KPI y alertas automáticas."
  },
  {
    id: 6,
    title: "App de Control de Gastos",
    category: "web",
    description: "Aplicación web PWA para control de gastos personales con categorización inteligente y reportes.",
    image: "img/banner/expense-app.jpg",
    technologies: ["React", "Node.js", "MongoDB", "Chart.js"],
    demo: "#",
    github: "#",
    problem: "Usuarios necesitaban herramienta simple para rastrear gastos y visualizar patrones de consumo.",
    solution: "Creé PWA que categoriza gastos automáticamente y genera insights visuales para mejor control financiero personal."
  },
  {
    id: 7,
    title: "Optimización de Base de Datos",
    category: "data",
    description: "Optimización de consultas SQL que redujo tiempos de respuesta de 45s a 15s (300% mejora).",
    image: "img/banner/database-optimization.jpg",
    technologies: ["SQL Server", "T-SQL", "Indexing", "Query Plans"],
    demo: "#",
    github: "#",
    problem: "Consultas críticas tardaban 45 segundos, afectando experiencia de usuario y productividad del sistema.",
    solution: "Analicé planes de ejecución, implementé índices estratégicos y reescribí queries complejas, logrando tiempos de 15s."
  },
  {
    id: 8,
    title: "Modelo de Predicción de Ventas",
    category: "ai",
    description: "Modelo de machine learning que predice ventas mensuales con 92% de precisión.",
    image: "img/banner/sales-prediction.jpg",
    technologies: ["Python", "Scikit-learn", "Pandas", "TensorFlow"],
    demo: "#",
    github: "#",
    problem: "Empresa necesitaba anticipar demanda para optimizar inventario y reducir costos de almacenamiento.",
    solution: "Entrené modelo de regresión con datos históricos que predice ventas con 92% precisión, optimizando gestión de inventario."
  }
];

// Filter functionality
function initializeProjects() {
  const projectsGrid = document.getElementById('projects-grid');
  const filterButtons = document.querySelectorAll('.filter-btn');
  
  // Render all projects initially
  renderProjects(projectsData);
  
  // Add filter event listeners
  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Update active button
      filterButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
      
      // Filter projects
      const filter = button.getAttribute('data-filter');
      const filteredProjects = filter === 'all' 
        ? projectsData 
        : projectsData.filter(project => project.category === filter);
      
      // Animate out current projects
      const currentCards = document.querySelectorAll('.project-card');
      currentCards.forEach(card => {
        card.classList.add('hidden');
      });
      
      // Render filtered projects after animation
      setTimeout(() => {
        renderProjects(filteredProjects);
      }, 300);
    });
  });
}

function renderProjects(projects) {
  const projectsGrid = document.getElementById('projects-grid');
  
  projectsGrid.innerHTML = projects.map(project => `
    <div class="project-card" data-category="${project.category}">
      <div class="project-image">
        <img src="${project.image}" alt="${project.title}" loading="lazy">
        <div class="project-overlay">
          <a href="${project.demo}" class="project-link" target="_blank" rel="noopener">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 13V19A2 2 0 0 1 16 21H5A2 2 0 0 1 3 19V8A2 2 0 0 1 5 6H11"></path>
              <polyline points="15,3 21,3 21,9"></polyline>
              <line x1="10" y1="14" x2="21" y2="3"></line>
            </svg>
          </a>
          <a href="${project.github}" class="project-link" target="_blank" rel="noopener">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 0C5.37 0 0 5.37 0 12C0 17.31 3.435 21.795 8.205 23.385C8.805 23.49 9.03 23.13 9.03 22.815C9.03 22.53 9.015 21.585 9.015 20.58C6 21.135 5.22 19.845 4.98 19.17C4.845 18.825 4.26 17.76 3.75 17.475C3.33 17.25 2.73 16.695 3.735 16.68C4.68 16.665 5.355 17.55 5.58 17.91C6.66 19.725 8.385 19.215 9.075 18.9C9.18 18.12 9.495 17.595 9.84 17.295C7.17 16.995 4.38 15.96 4.38 11.37C4.38 10.065 4.845 8.985 5.61 8.145C5.49 7.845 5.07 6.615 5.73 4.965C5.73 4.965 6.735 4.65 9.03 6.195C9.99 5.925 11.01 5.79 12.03 5.79C13.05 5.79 14.07 5.925 15.03 6.195C17.325 4.635 18.33 4.965 18.33 4.965C18.99 6.615 18.57 7.845 18.45 8.145C19.215 8.985 19.68 10.05 19.68 11.37C19.68 15.975 16.875 16.995 14.205 17.295C14.64 17.67 15.015 18.39 15.015 19.515C15.015 21.12 15 22.41 15 22.815C15 23.13 15.225 23.505 15.825 23.385C18.2072 22.5807 20.2772 21.0497 21.7437 19.0074C23.2101 16.965 23.9993 14.5143 24 12C24 5.37 18.63 0 12 0Z"/>
            </svg>
          </a>
        </div>
      </div>
      <div class="project-content">
        <div class="project-category">${getCategoryName(project.category)}</div>
        <h3 class="project-title">${project.title}</h3>
        <p class="project-description">${project.description}</p>
        <div class="project-tech">
          ${project.technologies.map(tech => `<span class="tech-badge">${tech}</span>`).join('')}
        </div>
        <button class="project-toggle" onclick="toggleProjectDetails(${project.id})">
          <span class="toggle-text">Ver detalles</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="toggle-icon">
            <polyline points="6,9 12,15 18,9"></polyline>
          </svg>
        </button>
        <div class="project-details" id="details-${project.id}">
          <div class="project-problem">
            <h4>🎯 Problema</h4>
            <p>${project.problem}</p>
          </div>
          <div class="project-solution">
            <h4>💡 Solución</h4>
            <p>${project.solution}</p>
          </div>
        </div>
      </div>
    </div>
  `).join('');
  
  // Add fade-in animation to new cards
  setTimeout(() => {
    const newCards = document.querySelectorAll('.project-card');
    newCards.forEach((card, index) => {
      setTimeout(() => {
        card.classList.add('fade-in');
      }, index * 100);
    });
  }, 50);
}

function getCategoryName(category) {
  const categoryNames = {
    'web': 'Desarrollo Web',
    'ai': 'Inteligencia Artificial',
    'cloud': 'Cloud Computing',
    'data': 'Data Analytics'
  };
  return categoryNames[category] || category;
}

function toggleProjectDetails(projectId) {
  const detailsElement = document.getElementById(`details-${projectId}`);
  const toggleButton = event.target.closest('.project-toggle');
  const toggleText = toggleButton.querySelector('.toggle-text');
  const toggleIcon = toggleButton.querySelector('.toggle-icon');
  
  if (detailsElement.classList.contains('active')) {
    detailsElement.classList.remove('active');
    toggleText.textContent = 'Ver detalles';
    toggleIcon.style.transform = 'rotate(0deg)';
  } else {
    // Close all other open details
    document.querySelectorAll('.project-details.active').forEach(details => {
      details.classList.remove('active');
    });
    document.querySelectorAll('.project-toggle .toggle-text').forEach(text => {
      text.textContent = 'Ver detalles';
    });
    document.querySelectorAll('.project-toggle .toggle-icon').forEach(icon => {
      icon.style.transform = 'rotate(0deg)';
    });
    
    // Open clicked details
    detailsElement.classList.add('active');
    toggleText.textContent = 'Ocultar detalles';
    toggleIcon.style.transform = 'rotate(180deg)';
  }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', initializeProjects);