<?php 
// Page SEO Metadata Variables
$page_title = "Architectural Design & 3D Modeling (ARC) | RIBA Stages 1-4 | VPDL UK Practice";
$page_desc  = "Chartered architectural design, concept feasibility, 3D visual modeling, and building regulations packs across Wales, Newport, Bristol, London, and Northern England.";
include ('header.php'); 
?>

  <!-- Schema.org JSON-LD Structured Data: ProfessionalService + BreadcrumbList + FAQPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Service",
        "@id": "https://vpdl.co.uk/service-architecture.php#service",
        "name": "Architectural Design & 3D Visual Modeling (ARC)",
        "serviceType": "Chartered Architectural Design & Technical Delivery",
        "provider": {
          "@type": "ProfessionalService",
          "name": "Volume Planning & Developments Ltd",
          "telephone": "+443333445807",
          "email": "vpdl.uk@gmail.com",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "ESL Office 256B, 182-184 High Street North",
            "addressLocality": "London",
            "postalCode": "E6 2JA",
            "addressCountry": "GB"
          }
        },
        "description": "Full-spectrum architectural design from concept 3D modeling through to statutory planning packages, technical detailing, structural coordination, and Building Control approval."
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://vpdl.co.uk/service-architecture.php#breadcrumb",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://vpdl.co.uk/index.php"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Services",
            "item": "https://vpdl.co.uk/services.php"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Architectural & 3D Modeling",
            "item": "https://vpdl.co.uk/service-architecture.php"
          }
        ]
      },
      {
        "@type": "FAQPage",
        "@id": "https://vpdl.co.uk/service-architecture.php#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "How does your studio align with the official RIBA Plan of Work?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our practice operates across concept development, spatial coordination (Stage 3), and technical building control design (Stage 4). Each milestone delivers specific drawings, 3D visualisations, and statutory sign-offs before transitioning to the next phase."
            }
          },
          {
            "@type": "Question",
            "name": "Are your architectural plans pre-coordinated with structural engineers?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. Because our architectural studio operates under the same practice umbrella as our in-house structural engineers, steel beam sizes, padstone locations, load-bearing piers, and foundation depths are integrated directly into our 1:50 general arrangements, eliminating costly on-site variation claims."
            }
          },
          {
            "@type": "Question",
            "name": "What is the difference between a Planning drawing set and a Building Regulations set?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Planning drawings demonstrate external scale, context, massing, materials, and streetscene impact to the local authority. Building Regulations technical sets provide construction details showing thermal U-values, fire compartmentalisation, acoustic separation, and structural junctions required for statutory approval."
            }
          }
        ]
      }
    ]
  }
  </script>

  <!-- =========================================================
       SERVICE DETAIL: ARCHITECTURAL DESIGN (ARC)
       ========================================================= -->
  <main class="service-page-wrapper">

    <!-- Top Light Backdrop: Brand Gradient Tint + Architectural Grid -->
    <div class="service-top-backdrop">
      <!-- Centered Glassmorphic Breadcrumb Trail -->
      <div class="breadcrumb-section">
        <div class="container breadcrumb-container">
          <nav class="breadcrumb-glass" aria-label="Breadcrumb">
            <a href="index.php">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
              Home
            </a> 
            <span class="separator" aria-hidden="true">/</span> 
            <a href="services.php">Services</a> 
            <span class="separator" aria-hidden="true">/</span> 
            <span class="current" aria-current="page">Architectural &amp; 3D Modeling</span>
          </nav>
        </div>
      </div>

      <!-- Centered Service Hero -->
      <header class="service-hero centered-hero">
        <div class="container hero-container" data-reveal>
          <h1>ARCHITECTURAL &amp; <span class="highlight-brand">3D VISUAL MODELING.</span></h1>
          <p class="service-lead-copy">
            Spatial clarity grounded in absolute constructability. We design residential home extensions, commercial conversions, office layouts, and industrial schemes that balance 3D concept modeling with direct structural calculation integration and statutory Building Regulations compliance.
          </p>
        </div>
      </header>
    </div>

    <!-- Main Workspace Layout -->
    <section class="container" style="padding-top: 50px; padding-bottom: 110px;">
      <div class="service-layout" data-reveal>
        
        <!-- Primary Article Stream -->
        <article class="service-main-panel">
          
          <!-- Master Visual Dossier Frame -->
          <div class="dossier-media-card">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80" alt="Contemporary architectural elevation, material specification, and structural spatial arrangement" loading="eager">
            <div class="dossier-media-footer">
              <span class="media-meta-tag">Case File: Design &amp; Buildability</span>
              <span class="media-meta-date">RIBA Plan of Work &middot; Up to Stage 4</span>
            </div>
          </div>

          <!-- Introduction Manifesto -->
          <div class="dossier-statement">
            <h2>Spatial vision engineered for buildability, not just presentation renders.</h2>
            <p>
              Too many architectural concepts unravel during contractor tendering due to a disconnect between creative visual volume and physical engineering. At Volume Planning &amp; Developments Ltd, our designers work alongside our in-house structural engineers (25+ years experience) and statutory surveyors from day one. Every opening, roof junction, and load-bearing layout is resolved for real-world execution.
            </p>
          </div>

          <!-- Technical Parameters Matrix (01) -->
          <div class="dossier-section">
            <div class="dossier-section-head">
              <span class="mono-idx">01</span>
              <div>
                <h3>Technical Design Parameters</h3>
                <p>The core performance metrics governing every studio package.</p>
              </div>
            </div>

            <div class="dossier-matrix">
              <div class="matrix-cell">
                <div class="cell-top">
                  <span class="cell-label">Spatial Ergonomics</span>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                </div>
                <h4>Circulation &amp; Volumetric Flow</h4>
                <p>Optimising interior daylight factors, internal sightlines, and movement pathways to deliver functional, high net-usable space for commercial and residential occupants.</p>
              </div>

              <div class="matrix-cell">
                <div class="cell-top">
                  <span class="cell-label">Fabric Performance</span>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <h4>Thermal &amp; Acoustic Integrity</h4>
                <p>Specifying high-performance envelopes tested against Building Regulations Part L (energy efficiency) and supporting Net Zero sustainable design strategies.</p>
              </div>

              <div class="matrix-cell">
                <div class="cell-top">
                  <span class="cell-label">Coordination</span>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                </div>
                <h4>3D Modeling &amp; Clash Detection</h4>
                <p>Aligning structural steel frames, timber rafters, and service zones using advanced 3D visual modeling before packages reach site contractors.</p>
              </div>

              <div class="matrix-cell">
                <div class="cell-top">
                  <span class="cell-label">Statutory Safety</span>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                </div>
                <h4>Building Control Compliance</h4>
                <p>Full integration of Part B fire safety, structural integrity sign-offs, and accessibility provisions directly into technical drawing packages.</p>
              </div>
            </div>
          </div>

          <!-- Chronological RIBA Workflow (02) -->
          <div class="dossier-section">
            <div class="dossier-section-head">
              <span class="mono-idx">02</span>
              <div>
                <h3>RIBA Workstage Delivery</h3>
                <p>Phased project progression from initial brief to technical sign-off.</p>
              </div>
            </div>

            <div class="process-ledger">
              <div class="ledger-row">
                <div class="ledger-index">RIBA 0–1</div>
                <div class="ledger-content">
                  <div class="ledger-title-line">
                    <h4>Strategic Definition &amp; Feasibility Scoping</h4>
                    <span class="ledger-tag">Briefing</span>
                  </div>
                  <p>Site constraint mapping, daylight availability studies, client aspiration workshops, and boundary verifications to establish a firm project brief and massing envelope.</p>
                </div>
              </div>

              <div class="ledger-row">
                <div class="ledger-index">RIBA 2–3</div>
                <div class="ledger-content">
                  <div class="ledger-title-line">
                    <h4>Concept Development &amp; Planning Submission Sets</h4>
                    <span class="ledger-tag">Statutory</span>
                  </div>
                  <p>Developing 1:50 plans, contextual elevations, 3D visual renders, and authoring rigorous Design &amp; Access Statements formatted for local authority planning officers.</p>
                </div>
              </div>

              <div class="ledger-row">
                <div class="ledger-index">RIBA 4</div>
                <div class="ledger-content">
                  <div class="ledger-title-line">
                    <h4>Technical Design &amp; Building Regulations Packages</h4>
                    <span class="ledger-tag">Production</span>
                  </div>
                  <p>1:20 construction details, 1:5 junction callouts, waterproofing details, thermal insulation schedules, and NBS specification documents prepared for contractor pricing.</p>
                </div>
              </div>

              <div class="ledger-row">
                <div class="ledger-index">RIBA 5–6</div>
                <div class="ledger-content">
                  <div class="ledger-title-line">
                    <h4>Construction Oversight &amp; Handover Support</h4>
                    <span class="ledger-tag">Execution</span>
                  </div>
                  <p>Reviewing contractor submittals, inspecting structural installations alongside engineers, and ensuring smooth project delivery through to final completion.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Architectural Deliverables Register (03) -->
          <div class="dossier-section">
            <div class="dossier-section-head">
              <span class="mono-idx">03</span>
              <div>
                <h3>Documentation &amp; Drawing Register</h3>
                <p>Standard architectural drawing packs authored and issued by our practice.</p>
              </div>
            </div>

            <div class="register-table">
              <div class="register-row">
                <div class="register-col-main">
                  <strong>1:50 / 1:100 General Arrangement Floor Plans</strong>
                  <span>Fully dimensioned layouts showing structural partitions, room areas, and circulation flow</span>
                </div>
                <div class="register-col-badge">
                  <span class="pill-type">GA Plans</span>
                </div>
              </div>

              <div class="register-row">
                <div class="register-col-main">
                  <strong>Contextual Elevation &amp; Section Profiles</strong>
                  <span>Accurate topological cut-sections showing structural joists, ridge heights, and streetscene relationships</span>
                </div>
                <div class="register-col-badge">
                  <span class="pill-type">Elevations</span>
                </div>
              </div>

              <div class="register-row">
                <div class="register-col-main">
                  <strong>High-End 3D Visual Concept Renderings</strong>
                  <span>Photorealistic exterior and interior visualisations for planning advocacy and client visualization</span>
                </div>
                <div class="register-col-badge">
                  <span class="pill-type">3D Models</span>
                </div>
              </div>

              <div class="register-row">
                <div class="register-col-main">
                  <strong>1:20 &amp; 1:5 Technical Junction Detailing</strong>
                  <span>Foundation-to-damp-proof courses, parapet copings, window reveals, and acoustic separating floors</span>
                </div>
                <div class="register-col-badge">
                  <span class="pill-type">Technical Details</span>
                </div>
              </div>

              <div class="register-row">
                <div class="register-col-main">
                  <strong>Structural Interface &amp; Steelwork Integration Packs</strong>
                  <span>Coordinated packs illustrating universal column (UC) and universal beam (UB) bearing positions</span>
                </div>
                <div class="register-col-badge">
                  <span class="pill-type">Structural Align</span>
                </div>
              </div>

              <div class="register-row">
                <div class="register-col-main">
                  <strong>Full Building Regulations Compliance Dossier</strong>
                  <span>Complete statutory documentation suite for approved inspectors and local authority building control</span>
                </div>
                <div class="register-col-badge">
                  <span class="pill-type">Building Control</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Structured FAQ Accordion (04) -->
          <div class="dossier-section" style="border-bottom: none;">
            <div class="dossier-section-head">
              <span class="mono-idx">04</span>
              <div>
                <h3>Architectural Practice Q&amp;A</h3>
                <p>Common questions regarding design appointments, technical detailing, and timescales.</p>
              </div>
            </div>

            <div class="faq-accordion">
              <div class="faq-item is-open">
                <button type="button" class="faq-trigger" aria-expanded="true" onclick="toggleDossierFaq(this)">
                  <span class="faq-num">Q.1</span>
                  <span class="faq-title">How does your studio align with the official RIBA Plan of Work?</span>
                  <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-pane" style="max-height: none;">
                  <p>
                    Our practice operates across concept development, spatial coordination (Stage 3), and technical building control design (Stage 4). Each milestone delivers specific drawings, 3D visualisations, and statutory sign-offs before transitioning to the next phase.
                  </p>
                </div>
              </div>

              <div class="faq-item">
                <button type="button" class="faq-trigger" aria-expanded="false" onclick="toggleDossierFaq(this)">
                  <span class="faq-num">Q.2</span>
                  <span class="faq-title">Are your architectural plans pre-coordinated with structural engineers?</span>
                  <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-pane">
                  <p>
                    Yes[cite: 1]. Because our architectural studio operates under the same practice umbrella as our in-house structural engineers, steel beam sizes, padstone locations, load-bearing piers, and foundation depths are integrated directly into our 1:50 general arrangements, eliminating costly on-site variation claims.
                  </p>
                </div>
              </div>

              <div class="faq-item">
                <button type="button" class="faq-trigger" aria-expanded="false" onclick="toggleDossierFaq(this)">
                  <span class="faq-num">Q.3</span>
                  <span class="faq-title">What is the difference between a Planning drawing set and a Building Regulations set?</span>
                  <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-pane">
                  <p>
                    Planning drawings demonstrate external scale, context, massing, materials, and streetscene impact to the local authority. Building Regulations technical sets provide construction details showing thermal U-values, fire compartmentalisation, acoustic separation, and structural junctions required for statutory approval.
                  </p>
                </div>
              </div>
            </div>
          </div>

        </article>

        <!-- Sticky Sidebar Navigation: Synchronised with Main Navigation -->
        <aside class="service-sidebar">
          <h4>Core Disciplines</h4>
          <nav class="sidebar-directory">
            <a href="service-planning.php">
              <div class="dir-meta">
                <span class="dir-code">PDM</span>
                <span class="dir-name">Planning &amp; Development</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <a href="service-architecture.php" class="active">
              <div class="dir-meta">
                <span class="dir-code">ARC</span>
                <span class="dir-name">Architectural &amp; 3D Modeling</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <a href="service-structural.php">
              <div class="dir-meta">
                <span class="dir-code">SDM</span>
                <span class="dir-name">Structural Calculations (SDM)</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <a href="service-development-consulting.php">
              <div class="dir-meta">
                <span class="dir-code">DEV</span>
                <span class="dir-name">Development Consulting[cite: 1]</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <a href="service-management.php">
              <div class="dir-meta">
                <span class="dir-code">PMC</span>
                <span class="dir-name">Project Management (PMC/IPM)[cite: 1]</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <a href="service-party-wall.php">
              <div class="dir-meta">
                <span class="dir-code">BSM</span>
                <span class="dir-name">Building Surveys &amp; Party Wall[cite: 1]</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <a href="service-construction.php">
              <div class="dir-meta">
                <span class="dir-code">BLD</span>
                <span class="dir-name">Contract Construction &amp; Build</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
          </nav>

          <!-- Direct Instruction Action Panel -->
          <div class="dossier-inquiry-box">
            <span class="box-kicker">Design Consultation</span>
            <h5>Discuss your architectural brief</h5>
            <p>Schedule an early consultation with our team to appraise your site parameters, floor plans, and planning prospects free of charge.</p>
            <a class="btn-brand-submit" href="consultation.php" style="width: 100%;">
              <span>Book Free Consultation</span>
              <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
          </div>
        </aside>

      </div>
    </section>
  </main>

  <!-- =========================================================
       CUSTOM DOSSIER-FORMAT STYLING (VPDL CORPORATE BRAND SYSTEM)
       ========================================================= -->
  <style>
    :root {
      --vpdl-red: #E11D2A;         /* 'V' & Center Roofline Accent */
      --vpdl-purple: #E11D2A;      /* Main Arch Roofline */
      --vpdl-blue: #4F83B7;        /* Outer Accent Roofline */
      --vpdl-black: #111827;       /* Core 'PDL' Typography */
      --vpdl-muted: #64748B;
      --vpdl-border: #E2E8F0;
      --vpdl-surface: #FFFFFF;
      --vpdl-bg-canvas: #F8FAFC;
    }

    .service-page-wrapper {
      background: var(--vpdl-bg-canvas);
      color: var(--vpdl-black);
      position: relative;
      overflow-x: hidden;
    }

    /* Top Light Backdrop: Brand Tint + Architectural Grid */
    .service-top-backdrop {
      position: relative;
      padding-top: 28px;
      padding-bottom: 40px;
      background: 
        radial-gradient(circle at 45% -10%, rgba(225, 29, 42, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 75% 20%, rgba(107, 91, 149, 0.08) 0%, transparent 45%),
        linear-gradient(to bottom, #ffffff 0%, #f8fafc 100%);
      border-bottom: 1px solid var(--vpdl-border);
    }

    .service-top-backdrop::before {
      content: "";
      position: absolute;
      inset: 0;
      background-image: 
        linear-gradient(rgba(17, 24, 39, 0.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(17, 24, 39, 0.035) 1px, transparent 1px);
      background-size: 34px 34px;
      mask-image: radial-gradient(ellipse at 50% 30%, black 40%, transparent 80%);
      -webkit-mask-image: radial-gradient(ellipse at 50% 30%, black 40%, transparent 80%);
      pointer-events: none;
    }

    /* Centered Breadcrumbs */
    .breadcrumb-container {
      display: flex;
      justify-content: center;
      position: relative;
      z-index: 2;
    }
    .breadcrumb-glass {
      background: rgba(255, 255, 255, 0.88) !important;
      backdrop-filter: blur(12px) !important;
      -webkit-backdrop-filter: blur(12px) !important;
      border: 1px solid rgba(226, 232, 240, 0.9) !important;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03) !important;
      border-radius: 9999px;
      padding: 8px 20px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
    }
    .breadcrumb-glass a {
      color: var(--vpdl-muted);
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: color 0.15s ease;
      font-weight: 500;
    }
    .breadcrumb-glass a:hover {
      color: var(--vpdl-red);
    }
    .breadcrumb-glass .separator {
      color: #cbd5e1;
    }
    .breadcrumb-glass .current {
      color: var(--vpdl-black);
      font-weight: 700;
    }

    /* Centered Service Hero */
    .centered-hero {
      text-align: center;
      position: relative;
      z-index: 2;
      padding: 34px 0 10px;
    }
    .hero-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    .mono-tag {
      margin: 0 auto 16px auto;
      background: rgba(225, 29, 42, 0.08);
      border: 1px solid rgba(225, 29, 42, 0.25);
      color: var(--vpdl-red);
      font-size: 11px;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      padding: 5px 14px;
      border-radius: 4px;
      font-weight: 700;
      display: inline-block;
    }
    .centered-hero h1 {
      font-size: clamp(30px, 4vw, 44px);
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0 0 16px 0;
      letter-spacing: -0.02em;
      line-height: 1.15;
    }
    .centered-hero h1 .highlight-brand {
      color: var(--vpdl-purple);
    }
    .service-lead-copy {
      color: var(--vpdl-muted);
      font-size: 16px;
      max-width: 680px;
      line-height: 1.75;
      margin: 0 auto;
    }

    /* Service Layout Grid */
    .service-layout {
      display: grid;
      grid-template-columns: 1fr 340px;
      gap: 40px;
      align-items: start;
    }

    /* Master Visual Dossier Frame */
    .dossier-media-card {
      border-radius: 16px;
      overflow: hidden;
      margin-bottom: 34px;
      border: 1px solid var(--vpdl-border);
      background: var(--vpdl-surface);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    }
    .dossier-media-card img {
      width: 100%;
      height: 380px;
      object-fit: cover;
      display: block;
      transition: transform 1.2s ease;
    }
    .service-main-panel:hover .dossier-media-card img {
      transform: scale(1.02);
    }
    .dossier-media-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 20px;
      background: var(--vpdl-surface);
      border-top: 1px solid var(--vpdl-border);
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
    }
    .media-meta-tag {
      color: var(--vpdl-red);
    }
    .media-meta-date {
      color: var(--vpdl-muted);
    }

    /* Editorial Statement */
    .dossier-statement {
      margin-bottom: 44px;
    }
    .dossier-statement h2 {
      font-size: 24px;
      font-weight: 800;
      line-height: 1.3;
      margin-bottom: 14px;
      color: var(--vpdl-black);
      letter-spacing: -0.01em;
    }
    .dossier-statement p {
      font-size: 15px;
      line-height: 1.8;
      color: var(--vpdl-muted);
      margin: 0;
    }

    /* Section Headers */
    .dossier-section {
      margin-top: 48px;
      padding-top: 36px;
      border-top: 1px solid var(--vpdl-border);
    }
    .dossier-section-head {
      display: flex;
      gap: 18px;
      align-items: flex-start;
      margin-bottom: 28px;
    }
    .mono-idx {
      font-size: 13px;
      font-weight: 800;
      color: var(--vpdl-red);
      background: rgba(225, 29, 42, 0.08);
      border: 1px solid rgba(225, 29, 42, 0.2);
      padding: 4px 10px;
      border-radius: 6px;
      line-height: 1.3;
    }
    .dossier-section-head h3 {
      font-size: 20px;
      font-weight: 800;
      line-height: 1.2;
      color: var(--vpdl-black);
      margin-bottom: 4px;
    }
    .dossier-section-head p {
      font-size: 13px;
      color: var(--vpdl-muted);
      margin: 0;
    }

    /* Technical Matrix */
    .dossier-matrix {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }
    .matrix-cell {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 12px;
      padding: 22px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
      transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .matrix-cell:hover {
      transform: translateY(-4px);
      border-color: #cbd5e1;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.04);
    }
    .cell-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
      color: var(--vpdl-purple);
    }
    .cell-label {
      font-size: 10px;
      font-weight: 800;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--vpdl-red);
    }
    .matrix-cell h4 {
      font-size: 15px;
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0 0 6px 0;
    }
    .matrix-cell p {
      font-size: 12.5px;
      color: var(--vpdl-muted);
      line-height: 1.6;
      margin: 0;
    }

    /* Process Ledger */
    .process-ledger {
      display: grid;
      gap: 12px;
    }
    .ledger-row {
      display: flex;
      gap: 20px;
      padding: 20px;
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 12px;
      align-items: flex-start;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
      transition: transform 0.3s ease, border-color 0.3s ease;
    }
    .ledger-row:hover {
      transform: translateX(6px);
      border-color: #cbd5e1;
    }
    .ledger-index {
      font-size: 11px;
      font-weight: 800;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--vpdl-muted);
      padding: 6px 10px;
      background: var(--vpdl-bg-canvas);
      border-radius: 6px;
      flex-shrink: 0;
      border: 1px solid var(--vpdl-border);
    }
    .ledger-content {
      flex: 1;
    }
    .ledger-title-line {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 6px;
    }
    .ledger-title-line h4 {
      font-size: 15px;
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0;
    }
    .ledger-tag {
      font-size: 9.5px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--vpdl-purple);
      background: rgba(107, 91, 149, 0.1);
      padding: 2px 8px;
      border-radius: 999px;
    }
    .ledger-content p {
      font-size: 13px;
      color: var(--vpdl-muted);
      line-height: 1.6;
      margin: 0;
    }

    /* Register Table */
    .register-table {
      border: 1px solid var(--vpdl-border);
      border-radius: 12px;
      background: var(--vpdl-surface);
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
    }
    .register-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 14px 20px;
      border-bottom: 1px solid var(--vpdl-border);
      transition: background 0.2s ease;
    }
    .register-row:last-child {
      border-bottom: none;
    }
    .register-row:hover {
      background: var(--vpdl-bg-canvas);
    }
    .register-col-main strong {
      display: block;
      font-size: 13.5px;
      font-weight: 700;
      color: var(--vpdl-black);
      margin-bottom: 2px;
    }
    .register-col-main span {
      font-size: 11.5px;
      color: var(--vpdl-muted);
    }
    .pill-type {
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--vpdl-red);
      background: rgba(225, 29, 42, 0.08);
      border: 1px solid rgba(225, 29, 42, 0.2);
      padding: 4px 10px;
      border-radius: 999px;
      white-space: nowrap;
    }

    /* Sidebar Navigation Tree */
    .service-sidebar h4 {
      font-size: 16px;
      font-weight: 800;
      margin: 0 0 16px 0;
      color: var(--vpdl-black);
    }
    .sidebar-directory {
      display: grid;
      gap: 8px;
    }
    .sidebar-directory a {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 13px 18px;
      border-radius: 10px;
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      font-size: 13px;
      font-weight: 600;
      color: var(--vpdl-muted);
      text-decoration: none;
      transition: all 0.2s ease;
    }
    .sidebar-directory a:hover {
      border-color: #cbd5e1;
      color: var(--vpdl-black);
      transform: translateX(4px);
    }
    .sidebar-directory a.active {
      background: var(--vpdl-black);
      color: #ffffff;
      border-color: var(--vpdl-black);
    }
    .sidebar-directory a.active svg {
      stroke: var(--vpdl-red);
    }
    .dir-meta {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .dir-code {
      font-size: 9.5px;
      font-weight: 800;
      letter-spacing: 0.08em;
      opacity: 0.7;
    }
    .dir-name {
      font-size: 13px;
      font-weight: 600;
    }

    /* Sidebar CTA Box */
    .dossier-inquiry-box {
      margin-top: 26px;
      background: radial-gradient(circle at 100% 0%, rgba(225, 29, 42, 0.18), transparent 55%), #0f172a;
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 16px;
      padding: 28px 24px;
      color: #ffffff;
      position: relative;
      overflow: hidden;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    }
    .box-kicker {
      font-size: 9.5px;
      font-weight: 800;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--vpdl-red);
      display: block;
      margin-bottom: 8px;
    }
    .dossier-inquiry-box h5 {
      font-size: 18px;
      font-weight: 800;
      margin: 0 0 8px 0;
      color: #ffffff;
    }
    .dossier-inquiry-box p {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.7);
      margin: 0 0 20px 0;
      line-height: 1.6;
    }
    .btn-brand-submit {
      background: var(--vpdl-red) !important;
      color: #ffffff !important;
      border: 1px solid var(--vpdl-red) !important;
      border-radius: 8px;
      padding: 12px 18px;
      font-size: 13.5px;
      font-weight: 700;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      text-decoration: none;
      transition: all 0.2s ease;
      box-shadow: 0 4px 14px rgba(225, 29, 42, 0.35);
    }
    .btn-brand-submit:hover {
      background: #b91c1c !important;
      border-color: #b91c1c !important;
      transform: translateY(-1px);
    }

    @media (max-width: 960px) {
      .service-layout {
        grid-template-columns: 1fr;
      }
      .dossier-matrix {
        grid-template-columns: 1fr;
      }
      .register-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
      .ledger-row {
        flex-direction: column;
        gap: 12px;
      }
    }
  </style>

  <!-- Interactive Accordion Handler -->
  <script>
    function toggleDossierFaq(button) {
      var currentItem = button.closest('.faq-item');
      var pane = currentItem.querySelector('.faq-pane');
      var isAlreadyOpen = currentItem.classList.contains('is-open');

      document.querySelectorAll('.faq-item').forEach(function(item) {
        item.classList.remove('is-open');
        item.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
        var itemPane = item.querySelector('.faq-pane');
        itemPane.style.maxHeight = itemPane.scrollHeight + 'px';
        requestAnimationFrame(function() {
          itemPane.style.maxHeight = null;
        });
      });

      if (!isAlreadyOpen) {
        currentItem.classList.add('is-open');
        button.setAttribute('aria-expanded', 'true');
        pane.style.maxHeight = pane.scrollHeight + 30 + 'px';
      }
    }
  </script>

<?php include ('footer.php'); ?>