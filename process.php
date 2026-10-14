<?php 
// Page SEO Metadata Variables
$page_title = "Our 5-Stage Project Workflow | VPDL Chartered Practice";
$page_desc  = "Discover VPDL's transparent 5-stage project execution workflow, bridging consultation, site assessment, planning design, construction build, and final delivery.";
include ('header.php'); 
?>

  <!-- Schema.org JSON-LD Structured Data: Service + BreadcrumbList -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Service",
        "@id": "https://vpdl.co.uk/process.php#service",
        "name": "VPDL 5-Stage Project Workflow",
        "serviceType": "Integrated Design & Construction Process",
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
        "description": "Our transparent 5-stage multidisciplinary workflow taking property developments from initial free consultation through to practical completion."
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://vpdl.co.uk/process.php#breadcrumb",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://vpdl.co.uk/index.php" },
          { "@type": "ListItem", "position": 2, "name": "Our Process", "item": "https://vpdl.co.uk/process.php" }
        ]
      }
    ]
  }
  </script>

  <!-- =========================================================
       PROCESS PAGE BODY CONTENT (ALIGNED WITH VPDL PALETTE)
       ========================================================= -->
  <main class="process-page-wrapper">

    <!-- Top Light Backdrop: Brand Tint + Architectural Grid -->
    <div class="process-top-backdrop">
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
            <span class="current" aria-current="page">Our Process</span>
          </nav>
        </div>
      </div>

      <!-- Centered Process Hero -->
      <section class="process-hero centered-hero">
        <div class="container hero-container" data-reveal>
          <h1>A CLEAR ROUTE TO <span class="highlight-brand">COMPLETION.</span></h1>
          <p class="hero-lead">Every development is unique, but our disciplined 5-stage framework ensures seamless coordination, transparency, and top-tier execution at every milestone.</p>
        </div>
      </section>
    </div>

    <!-- Detailed Process Stage Stack -->
    <section class="container" style="padding-top: 50px; padding-bottom: 30px;" aria-label="5-Stage Process Overview">
      <div class="process-flow-stack" data-reveal>
        
        <!-- Stage 01 -->
        <article class="process-stage-card">
          <div class="process-stage-num">01</div>
          <div class="process-stage-info">
            <h3>Consult</h3>
            <p>We begin by listening. Understanding your property, project vision, core priorities, and budget parameters sets the foundational direction for all subsequent work.</p>
          </div>
          <div class="process-stage-details">
            <h4>Key Deliverables</h4>
            <ul>
              <li>Initial Briefing Session</li>
              <li>Scope Definition</li>
              <li>Objectives &amp; Timeline Alignment</li>
            </ul>
          </div>
        </article>

        <!-- Stage 02 -->
        <article class="process-stage-card">
          <div class="process-stage-num">02</div>
          <div class="process-stage-info">
            <h3>Assess</h3>
            <p>Our planning and technical teams evaluate site constraints, zoning laws, planning history, and physical feasibility parameters to eliminate risks upfront.</p>
          </div>
          <div class="process-stage-details">
            <h4>Key Deliverables</h4>
            <ul>
              <li>Site Feasibility Audit</li>
              <li>Planning Constraints Review</li>
              <li>Budget &amp; Risk Estimation</li>
            </ul>
          </div>
        </article>

        <!-- Stage 03 -->
        <article class="process-stage-card">
          <div class="process-stage-num">03</div>
          <div class="process-stage-info">
            <h3>Plan &amp; Design</h3>
            <p>Concepts evolve into coordinated architectural drawings, structural engineering plans, and comprehensive planning documentation ready for local authority submission.</p>
          </div>
          <div class="process-stage-details">
            <h4>Key Deliverables</h4>
            <ul>
              <li>Architectural Schematics</li>
              <li>Planning Application Package</li>
              <li>Detailed Construction Specs</li>
            </ul>
          </div>
        </article>

        <!-- Stage 04 -->
        <article class="process-stage-card">
          <div class="process-stage-num">04</div>
          <div class="process-stage-info">
            <h3>Build</h3>
            <p>Physical execution begins under rigorous project management. We oversee trade specialists, program schedules, site safety, and continuous quality audits.</p>
          </div>
          <div class="process-stage-details">
            <h4>Key Deliverables</h4>
            <ul>
              <li>Site Mobilization &amp; Groundwork</li>
              <li>Structural &amp; MEP Installation</li>
              <li>Milestone Quality Inspections</li>
            </ul>
          </div>
        </article>

        <!-- Stage 05 -->
        <article class="process-stage-card">
          <div class="process-stage-num">05</div>
          <div class="process-stage-info">
            <h3>Deliver</h3>
            <p>The final stage of our journey. We conduct rigorous snagging inspections, compile compliance certificates, and prepare your property for a confident handover.</p>
          </div>
          <div class="process-stage-details">
            <h4>Key Deliverables</h4>
            <ul>
              <li>Zero-Defect Snagging Review</li>
              <li>O&amp;M Manuals &amp; Certification</li>
              <li>Key Handover &amp; Post-Project Care</li>
            </ul>
          </div>
        </article>

      </div>

      <!-- Process Bottom Callout -->
      <div class="field-equal-footer" data-reveal style="margin-top: 50px; margin-bottom: 90px;">
        <div class="field-equal-footer-left">
          <span class="ready-badge">READY</span>
          <div>
            <strong style="font-size: 15px; display: block; color: var(--vpdl-black); font-weight: 800;">Start Your Stage 01 Consultation</strong>
            <small style="color: var(--vpdl-muted); font-size: 13px;">Speak directly with our project leads to assess site viability and planning options.</small>
          </div>
        </div>
        <a class="btn-brand-submit" href="consultation.php">
          <span>Book Consultation</span>
          <i aria-hidden="true">↗</i>
        </a>
      </div>
    </section>
  </main>

  <!-- Component Styles Aligned with VPDL Brand Palette -->
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

    .process-page-wrapper {
      background: var(--vpdl-bg-canvas);
      color: var(--vpdl-black);
      position: relative;
      overflow-x: hidden;
    }

    /* Top Light Backdrop: Brand Tint + Architectural Grid */
    .process-top-backdrop {
      position: relative;
      padding-top: 28px;
      padding-bottom: 40px;
      background: 
        radial-gradient(circle at 45% -10%, rgba(225, 29, 42, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 75% 20%, rgba(107, 91, 149, 0.08) 0%, transparent 45%),
        linear-gradient(to bottom, #ffffff 0%, #f8fafc 100%);
      border-bottom: 1px solid var(--vpdl-border);
    }

    .process-top-backdrop::before {
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

    /* Centered Process Hero */
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
      font-size: clamp(32px, 4vw, 46px);
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0 0 16px 0;
      letter-spacing: -0.02em;
      line-height: 1.15;
    }
    .centered-hero h1 .highlight-brand {
      color: var(--vpdl-purple);
    }
    .hero-lead {
      color: var(--vpdl-muted);
      font-size: 16px;
      max-width: 680px;
      margin: 0 auto;
      line-height: 1.7;
    }

    /* Process Flow Stack */
    .process-flow-stack {
      display: grid;
      gap: 20px;
    }
    .process-stage-card {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 16px;
      padding: 30px 36px;
      display: grid;
      grid-template-columns: 80px 1.5fr 1fr;
      gap: 30px;
      align-items: center;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
      transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }
    .process-stage-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 16px 35px rgba(0, 0, 0, 0.05);
      border-color: #cbd5e1;
    }
    .process-stage-num {
      font-size: 32px;
      font-weight: 800;
      color: var(--vpdl-red);
      background: rgba(225, 29, 42, 0.08);
      border: 1px solid rgba(225, 29, 42, 0.2);
      width: 64px;
      height: 64px;
      border-radius: 12px;
      display: grid;
      place-items: center;
    }
    .process-stage-info h3 {
      font-size: 20px;
      font-weight: 800;
      margin: 0 0 8px 0;
      color: var(--vpdl-black);
    }
    .process-stage-info p {
      font-size: 13.5px;
      color: var(--vpdl-muted);
      line-height: 1.65;
      margin: 0;
    }
    .process-stage-details {
      background: var(--vpdl-bg-canvas);
      border: 1px solid var(--vpdl-border);
      border-radius: 10px;
      padding: 16px 20px;
    }
    .process-stage-details h4 {
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: var(--vpdl-muted);
      margin: 0 0 8px 0;
      font-weight: 700;
    }
    .process-stage-details ul {
      margin: 0;
      padding-left: 16px;
      font-size: 13px;
      color: #334155;
      display: grid;
      gap: 4px;
    }

    /* Bottom Footer Prompt */
    .field-equal-footer {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 16px;
      padding: 24px 32px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.02);
    }
    .field-equal-footer-left {
      display: flex;
      align-items: center;
      gap: 16px;
    }
    .ready-badge {
      font-size: 16px;
      font-weight: 800;
      color: var(--vpdl-red);
      letter-spacing: 0.05em;
    }
    .btn-brand-submit {
      background: var(--vpdl-black) !important;
      color: #ffffff !important;
      border: 1px solid var(--vpdl-black) !important;
      border-radius: 8px;
      padding: 13px 22px;
      font-size: 14px;
      font-weight: 700;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      text-decoration: none;
      transition: all 0.2s ease;
      box-shadow: 0 4px 15px rgba(17, 24, 39, 0.15);
    }
    .btn-brand-submit:hover {
      background: var(--vpdl-red) !important;
      border-color: var(--vpdl-red) !important;
      transform: translateY(-1px);
      box-shadow: 0 6px 20px rgba(225, 29, 42, 0.3);
    }

    @media (max-width: 960px) {
      .process-stage-card {
        grid-template-columns: 1fr;
        gap: 16px;
        padding: 24px;
      }
      .process-stage-num {
        width: 48px;
        height: 48px;
        font-size: 24px;
      }
      .field-equal-footer {
        flex-direction: column;
        align-items: flex-start;
      }
      .btn-brand-submit {
        width: 100%;
      }
    }
  </style>

<?php include ('footer.php'); ?>