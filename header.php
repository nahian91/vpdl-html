<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VPDL — Planning · Architecture · Engineering · Construction</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    /* Clean Standard Dropdown Styling */
    .nav-dropdown-wrapper {
      position: relative;
      display: inline-block;
    }
    /* Invisible bridge to prevent dropdown closure on hover transit */
    .nav-dropdown-wrapper::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 0;
      right: 0;
      height: 10px;
    }
    .classic-dropdown {
      position: absolute;
      top: 100%;
      left: 0;
      min-width: 290px;
      background: #ffffff;
      border: 1px solid rgba(226, 232, 240, 0.9);
      border-radius: 10px;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
      padding: 8px 0;
      opacity: 0;
      visibility: hidden;
      transform: translateY(6px);
      transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
      z-index: 1000;
    }
    .nav-dropdown-wrapper:hover .classic-dropdown,
    .nav-dropdown-wrapper:focus-within .classic-dropdown {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }
    .classic-dropdown-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 18px;
      font-size: 13.5px;
      font-weight: 600;
      color: #1e293b;
      text-decoration: none;
      transition: background 0.15s ease, color 0.15s ease;
    }
    .classic-dropdown-item:hover {
      background: #f8fafc;
      color: #0284c7;
    }
    /* Mobile Drawer Transitions */
    .mobile-drawer {
      position: fixed;
      inset: 0;
      background: rgba(15, 23, 42, 0.6);
      backdrop-filter: blur(4px);
      z-index: 9999;
      display: flex;
      justify-content: flex-end;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }
    .mobile-drawer-body {
      width: 100%;
      max-width: 350px;
      height: 100%;
      background: #ffffff;
      padding: 24px;
      overflow-y: auto;
      transform: translateX(100%);
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .mobile-drawer.is-open {
      opacity: 1;
      visibility: visible;
    }
    .mobile-drawer.is-open .mobile-drawer-body {
      transform: translateX(0);
    }
  </style>
</head>
<body>

  <!-- TOPBAR WITH ESSENTIAL CONTACT & DIRECT ACCESS -->
  <aside class="topbar">
    <div class="container topbar-wrapper">
      <div class="topbar-contact">
        <a href="tel:+443333445807"><span>DIRECT</span> +44 (0) 3333 445 807</a>
        <a href="mailto:vpdl.uk@gmail.com"><span>EMAIL</span> vpdl.uk@gmail.com</a>
        <span class="topbar-hours">Mon–Fri · 08:30–17:30 GMT</span>
      </div>
      <div class="topbar-actions" style="display: flex; align-items: center; gap: 14px;">
        <a href="calculator.php" style="font-weight: 700; color: #38bdf8; text-decoration: none; font-size: 12px;">Estimator ⚡</a>
        <span style="color: rgba(255,255,255,0.2);">|</span>
        <a href="partner.php" style="font-weight: 700; color: #f59e0b; text-decoration: none; font-size: 12px;">Partner / 50% Commission 🤝</a>
        <span style="color: rgba(255,255,255,0.2);">|</span>
        <a href="careers.php" style="font-weight: 600; color: #10b981; text-decoration: none; font-size: 12px;">Careers 💼</a>
        <span style="color: rgba(255,255,255,0.2);">|</span>
        <a href="fees.php" style="font-weight: 600; color: var(--text-muted); text-decoration: none; font-size: 12px;">Tariffs &amp; Fees</a>
        <span style="color: rgba(255,255,255,0.2);">|</span>
        <a href="consultation.php" style="font-weight: 700; color: var(--text-main); text-decoration: none; font-size: 12px;">Free Consultation ↗</a>
      </div>
    </div>
  </aside>

  <!-- NAVIGATION WITH CLEAN STANDARD DROPDOWNS -->
  <header class="nav-dock">
    <div class="container">
      <div class="nav-dock-inner">
        <a class="brand-mark" href="index.php">
          <img src="assets/img/logo.png" alt="VPDL - Volume Planning and Developments">
        </a>

        <nav class="nav-menu" aria-label="Main Navigation">
          <a class="nav-link" href="index.php">Home</a>
          <a class="nav-link" href="about.php">About</a>

          <!-- Standard Services Dropdown -->
          <div class="nav-dropdown-wrapper">
            <a class="nav-link" href="services.php" aria-haspopup="true" aria-expanded="false">
              Services
              <svg class="dropdown-chevron" width="10" height="6" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M1 1L5 5L9 1"/>
              </svg>
            </a>
            <div class="classic-dropdown" role="menu">
              <a class="classic-dropdown-item" href="service-planning.php">Planning &amp; Development (PDM)</a>
              <a class="classic-dropdown-item" href="service-architecture.php">Architectural &amp; 3D Visual Modeling</a>
              <a class="classic-dropdown-item" href="service-structural.php">Structural Calculations &amp; Design (SDM)</a>
              <a class="classic-dropdown-item" href="service-development-consulting.php">Development Consulting</a>
              <a class="classic-dropdown-item" href="service-management.php">Project &amp; Property Management (IPM/PMC)</a>
              <a class="classic-dropdown-item" href="service-party-wall.php">Building Surveying &amp; Party Wall (BSM)</a>
              <a class="classic-dropdown-item" href="service-construction.php">Contract Construction &amp; Fit-Out</a>
            </div>
          </div>

          <!-- Standard Sectors Dropdown -->
          <div class="nav-dropdown-wrapper">
            <a class="nav-link" href="sectors.php" aria-haspopup="true" aria-expanded="false">
              Sectors
              <svg class="dropdown-chevron" width="10" height="6" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M1 1L5 5L9 1"/>
              </svg>
            </a>
            <div class="classic-dropdown" role="menu">
              <a class="classic-dropdown-item" href="sector-residential.php">Residential Extensions &amp; Multi-Storey</a>
              <a class="classic-dropdown-item" href="sector-commercial.php">Commercial Class MA Conversions</a>
              <a class="classic-dropdown-item" href="sector-industrial.php">Industrial &amp; Warehouse Facilities</a>
              <a class="classic-dropdown-item" href="sector-hmo.php">HMO &amp; Multi-Unit Schemes</a>
              <a class="classic-dropdown-item" href="property-investment.php">Buy-to-Let &amp; High-Yield Sourcing</a>
              <a class="classic-dropdown-item" href="coverage.php">Regional &amp; Overseas Hubs (UK &amp; BD)</a>
            </div>
          </div>

          <a class="nav-link" href="projects.php">Projects</a>

          <!-- Standard Guidance Dropdown -->
          <div class="nav-dropdown-wrapper">
            <a class="nav-link" href="guidance.php" aria-haspopup="true" aria-expanded="false">
              Guidance
              <svg class="dropdown-chevron" width="10" height="6" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M1 1L5 5L9 1"/>
              </svg>
            </a>
            <div class="classic-dropdown" role="menu">
              <a class="classic-dropdown-item" href="guidance-permitted-development.php">Permitted Development Rights</a>
              <a class="classic-dropdown-item" href="guidance-building-regulations.php">Building Regulations Guide</a>
              <a class="classic-dropdown-item" href="guidance-party-wall.php">Party Wall Act 1996 Procedures</a>
              <a class="classic-dropdown-item" href="process.php">Our 8-Step Project Workflow</a>
              <a class="classic-dropdown-item" href="fees.php">Tariffs &amp; Free Consultations</a>
            </div>
          </div>

          <a class="nav-link" href="careers.php">Careers</a>
          <a class="nav-link" href="fees.php">Fees</a>
          <a class="nav-link" href="contact.php">Contact</a>
        </nav>

        <div style="display: flex; align-items: center; gap: 10px;">
          <a class="btn-core btn-core-dark" href="consultation.php">
            <span>Start Your Project</span>
            <i>↗</i>
          </a>

          <button class="mobile-menu-btn" id="mobileMenuOpen" aria-label="Open menu">
            <div><span></span><span></span></div>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- MOBILE NAVIGATION DRAWER -->
  <div class="mobile-drawer" id="mobileDrawer">
    <div class="mobile-drawer-body">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <div class="brand-mark">
          <img src="assets/img/logo.png" alt="VPDL" style="height: 32px;">
        </div>
        <button id="mobileMenuClose" style="font-size: 26px; font-weight: 700; background: none; border: none; cursor: pointer;">&times;</button>
      </div>

      <nav style="display: grid; gap: 14px; font-family: var(--font-display); font-size: 16px; border-bottom: 1px solid var(--border-color, #e2e8f0); padding-bottom: 20px;">
        <a href="index.php">Home</a>
        <a href="about.php">About Practice</a>

        <!-- Services Accordion -->
        <details style="cursor: pointer;">
          <summary style="font-weight: 700; padding: 4px 0;">Services</summary>
          <div style="display: grid; gap: 10px; padding: 10px 0 6px 14px; font-size: 14px; font-family: var(--font-body, sans-serif);">
            <a href="service-planning.php">Planning &amp; Development (PDM)</a>
            <a href="service-architecture.php">Architectural &amp; 3D Visual Modeling</a>
            <a href="service-structural.php">Structural Calculations &amp; Design (SDM)</a>
            <a href="service-development-consulting.php">Development Consulting</a>
            <a href="service-management.php">Project &amp; Property Management (IPM/PMC)</a>
            <a href="service-party-wall.php">Building Surveying &amp; Party Wall (BSM)</a>
            <a href="service-construction.php">Contract Construction &amp; Fit-Out</a>
          </div>
        </details>

        <!-- Sectors Accordion -->
        <details style="cursor: pointer;">
          <summary style="font-weight: 700; padding: 4px 0;">Sectors &amp; Coverage</summary>
          <div style="display: grid; gap: 10px; padding: 10px 0 6px 14px; font-size: 14px; font-family: var(--font-body, sans-serif);">
            <a href="sector-residential.php">Residential Extensions &amp; Multi-Storey</a>
            <a href="sector-commercial.php">Commercial Class MA Conversions</a>
            <a href="sector-industrial.php">Industrial &amp; Warehouse Facilities</a>
            <a href="sector-hmo.php">HMO &amp; Multi-Unit Schemes</a>
            <a href="property-investment.php">Buy-to-Let &amp; High-Yield Sourcing</a>
            <a href="coverage.php">Regional &amp; Overseas Hubs (UK &amp; BD)</a>
          </div>
        </details>

        <a href="projects.php">Portfolio Projects</a>

        <!-- Guidance Accordion -->
        <details style="cursor: pointer;">
          <summary style="font-weight: 700; padding: 4px 0;">Guidance</summary>
          <div style="display: grid; gap: 10px; padding: 10px 0 6px 14px; font-size: 14px; font-family: var(--font-body, sans-serif);">
            <a href="guidance-permitted-development.php">Permitted Development Rights</a>
            <a href="guidance-building-regulations.php">Building Regulations Guide</a>
            <a href="guidance-party-wall.php">Party Wall Act Notice Guide</a>
            <a href="process.php">Our 8-Step Project Workflow</a>
            <a href="fees.php">Tariffs &amp; Free Consultations</a>
          </div>
        </details>

        <a href="careers.php" style="color: #10b981; font-weight: 700;">Careers &amp; Opportunities 💼</a>
        <a href="partner.php" style="color: #d97706; font-weight: 700;">Partner / 50% Commission 🤝</a>
        <a href="fees.php">Rates &amp; Fees</a>
        <a href="calculator.php" style="color: #0284c7; font-weight: 700;">Cost Estimator ⚡</a>
        <a href="contact.php">Contact</a>
      </nav>

      <div style="margin-top: 24px; display: grid; gap: 12px;">
        <a class="btn-core btn-core-dark" style="width: 100%; justify-content: center;" href="consultation.php">
          <span>Start Your Project</span>
          <i>↗</i>
        </a>
        <a href="tel:+443333445807" style="text-align: center; font-size: 13px; font-weight: 700; color: var(--text-muted); text-decoration: none;">
          Direct: +44 (0) 3333 445 807
        </a>
      </div>
    </div>
  </div>
