<?php 
// Page SEO Metadata Variables
$page_title = "Professional Fee Tariffs & Free Consultations | VPDL";
$page_desc  = "Transparent UK professional fee tariffs for town planning (PDM), structural engineering (SDM), party wall surveys (BSM), and free initial consultations.";
include ('header.php'); 
?>

  <!-- Schema.org JSON-LD Structured Data: Service + BreadcrumbList -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Service",
        "@id": "https://vpdl.co.uk/fees.php#service",
        "name": "VPDL Professional Fee Tariffs & Free Consultations",
        "serviceType": "Architectural & Engineering Fee Structuring",
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
        "description": "Transparent UK fee benchmarks and complimentary initial consultations for planning, structural engineering, and project management."
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://vpdl.co.uk/fees.php#breadcrumb",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://vpdl.co.uk/index.php" },
          { "@type": "ListItem", "position": 2, "name": "Tariffs & Free Consultations", "item": "https://vpdl.co.uk/fees.php" }
        ]
      }
    ]
  }
  </script>

  <!-- =========================================================
       FEES & TARIFF STRUCTURE - VOLUME PLANNING & DEVELOPMENTS LTD
       ========================================================= -->
  <main class="fees-page-wrapper">

    <!-- Top Light Backdrop: Brand Tint + Architectural Grid -->
    <div class="fees-top-backdrop">
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
            <span class="current" aria-current="page">Tariffs &amp; Fees</span>
          </nav>
        </div>
      </div>

      <!-- Centered Hero Header -->
      <section class="fees-hero centered-hero">
        <div class="container hero-container" data-reveal>
          <h1>TRANSPARENT PRICING.<br><span class="highlight-brand">ZERO HIDDEN CONSULTATION FEES.</span></h1>
          <p class="fees-hero-lead">
            While typical market consultancies charge up to £150 for an initial meeting, VPDL provides early planning and feasibility consultations free of charge. Explore our structured fee schedules across planning, structural engineering, building surveying, and property management.
          </p>
        </div>
      </section>
    </div>

    <!-- Consultation Comparison Banner -->
    <section class="container" style="padding-top: 50px; padding-bottom: 50px;">
      <div class="consultation-highlight-box" data-reveal>
        <div class="highlight-left">
          <div class="pill-badge">The VPDL Advantage</div>
          <h2>Free Early Project &amp; Planning Consultations</h2>
          <p>Our competitors frequently charge upfront advisory rates of £100–£150 before reviewing your drawings or site. At VPDL, we believe every homeowner and developer deserves clear advice and feasibility guidance from day one without financial friction.</p>
        </div>
        <div class="highlight-right">
          <div class="price-comparison">
            <div class="price-competitor">
              <span>Competitor Consultations</span>
              <strong>Up to £150</strong>
            </div>
            <div class="price-vpdl">
              <span>VPDL Advisory</span>
              <strong>£0 · Free</strong>
            </div>
          </div>
          <a class="btn-brand-submit" href="consultation.php" style="width: 100%; justify-content: center;">
            <span>Book Free Session</span>
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </a>
        </div>
      </div>
    </section>

    <!-- Core Fee Schedules Matrix -->
    <section class="container" style="padding-bottom: 60px;">
      <div class="section-title-wrap" data-reveal>
        <div class="mono-tag" style="margin-bottom: 12px;">Service Fee Schedules</div>
        <h2 style="font-size: 28px; font-weight: 800; color: var(--vpdl-black); margin: 0 0 6px;">INDICATIVE TARIFFS BY DISCIPLINE</h2>
        <p style="color: var(--vpdl-muted); font-size: 14px; margin: 0;">Fixed and stage-gated transparent pricing tailored to domestic extensions, multi-unit schemes, and commercial developments.</p>
      </div>

      <div class="fee-cards-grid" data-reveal>
        
        <!-- Tariff Card 01: Planning Design Management (PDM) -->
        <div class="fee-card">
          <div class="fee-card-top">
            <span class="discipline-tag tag-red">PDM Discipline</span>
            <h3>Planning &amp; Design Management</h3>
            <p>From initial concept through to formal local authority planning application submissions.</p>
          </div>
          <div class="fee-price-block">
            <span class="from-text">From</span>
            <span class="price-amount">£750</span>
            <span class="vat-text">+ VAT (Stage Gated)</span>
          </div>
          <ul class="fee-features">
            <li>Existing &amp; proposed floor plans and elevations</li>
            <li>Permitted Development / Full Planning submissions</li>
            <li>Liaison with local council planning officers</li>
            <li>Free preliminary feasibility review</li>
          </ul>
          <a href="service-planning.php" class="fee-action-link">Explore PDM Scope →</a>
        </div>

        <!-- Tariff Card 02: Structural Design Management (SDM) -->
        <div class="fee-card highlighted-fee-card">
          <div class="highlight-corner-badge">Most Popular</div>
          <div class="fee-card-top">
            <span class="discipline-tag tag-blue">SDM Discipline</span>
            <h3>Structural Calculations (SDM)</h3>
            <p>Comprehensive steel, timber, and foundation calculations approved for UK Building Control.</p>
          </div>
          <div class="fee-price-block">
            <span class="from-text">From</span>
            <span class="price-amount">£650</span>
            <span class="vat-text">+ VAT (Calculations &amp; Details)</span>
          </div>
          <ul class="fee-features">
            <li>Steel beam &amp; column calculations (RSJ/box frames)</li>
            <li>Foundation, slab &amp; underpinning engineering</li>
            <li>Direct submission to Building Control (Council or AI)</li>
            <li>Signed off by chartered structural consultants (25+ yrs exp)</li>
          </ul>
          <a href="service-structural.php" class="fee-action-link">Explore SDM Scope →</a>
        </div>

        <!-- Tariff Card 03: Architectural & 3D Visual Modeling -->
        <div class="fee-card">
          <div class="fee-card-top">
            <span class="discipline-tag tag-purple">RIBA Stages 1–4</span>
            <h3>Architectural &amp; 3D Modeling</h3>
            <p>High-definition spatial layout plans, building extensions, and photorealistic 3D visualisations.</p>
          </div>
          <div class="fee-price-block">
            <span class="from-text">From</span>
            <span class="price-amount">£950</span>
            <span class="vat-text">+ VAT (Drawing Package)</span>
          </div>
          <ul class="fee-features">
            <li>High-end 3D visual concept modeling</li>
            <li>Detailed building regulations technical drawing pack</li>
            <li>Fit-out design, layout optimisation &amp; utility planning</li>
            <li>End-to-end guidance up to RIBA Stage 4</li>
          </ul>
          <a href="service-architecture.php" class="fee-action-link">Explore Architecture Scope →</a>
        </div>

        <!-- Tariff Card 04: Building Survey Management (BSM) & Party Wall -->
        <div class="fee-card">
          <div class="fee-card-top">
            <span class="discipline-tag tag-blue">BSM Discipline</span>
            <h3>Building Surveys &amp; Party Wall</h3>
            <p>Statutory boundary surveys, condition schedules, and Party Wall etc. Act 1996 dispute resolutions.</p>
          </div>
          <div class="fee-price-block">
            <span class="from-text">From</span>
            <span class="price-amount">£450</span>
            <span class="vat-text">+ VAT (Notice / Inspection)</span>
          </div>
          <ul class="fee-features">
            <li>Party Wall Notice preparation &amp; service</li>
            <li>Schedule of Condition inspections with photo evidence</li>
            <li>Agreed Surveyor Party Wall Awards</li>
            <li>Comprehensive ground-level local market insight</li>
          </ul>
          <a href="service-party-wall.php" class="fee-action-link">Explore BSM Scope →</a>
        </div>

        <!-- Tariff Card 05: Project & Property Management (PMC / IPM) -->
        <div class="fee-card">
          <div class="fee-card-top">
            <span class="discipline-tag tag-purple">PMC / IPM</span>
            <h3>Project &amp; Property Management</h3>
            <p>Contract administration, contractor vetting, site oversight, and ongoing lettings management.</p>
          </div>
          <div class="fee-price-block">
            <span class="from-text">From</span>
            <span class="price-amount">6–12%</span>
            <span class="vat-text">of Build Cost / Lettings Yield</span>
          </div>
          <ul class="fee-features">
            <li>Contractor procurement &amp; JCT tender administration</li>
            <li>Site inspection, quality control &amp; staged payment sign-offs</li>
            <li>Tenant placement &amp; recurring property management</li>
            <li>Enterprise cloud portal tracking &amp; document security</li>
          </ul>
          <a href="service-management.php" class="fee-action-link">Explore PMC Scope →</a>
        </div>

        <!-- Tariff Card 06: Buy-to-Let Yield Sourcing & Development Consulting -->
        <div class="fee-card">
          <div class="fee-card-top">
            <span class="discipline-tag tag-red">Investment Advisory</span>
            <h3>Buy-to-Let &amp; Development Advisory</h3>
            <p>End-to-end investment sourcing, conversion appraisal, and asset value maximisation across high-yield UK regions.</p>
          </div>
          <div class="fee-price-block">
            <span class="from-text">Sourcing Fee</span>
            <span class="price-amount">1.5–2%</span>
            <span class="vat-text">or Tailored Retainer</span>
          </div>
          <ul class="fee-features">
            <li>Targeted sourcing across Newport, Bristol, and Northern England</li>
            <li>Gross &amp; net yield financial modeling and stress-testing</li>
            <li>Turnkey refurbishment &amp; structural value uplift oversight</li>
            <li>Access to strategic 50% project share partnerships</li>
          </ul>
          <a href="projects.php" class="fee-action-link">Explore Investment Advisory →</a>
        </div>

      </div>
    </section>

    <!-- Partner Referral Revenue Banner -->
    <section class="container" style="padding-bottom: 90px;">
      <div class="partner-revenue-box" data-reveal>
        <div class="partner-box-content">
          <div class="mono-tag" style="background: rgba(245, 158, 11, 0.1); color: #d97706; border-color: rgba(245, 158, 11, 0.25);">Strategic Partner Programme</div>
          <h2>EARN UP TO 50% COMMISSION OR PROJECT SHARES</h2>
          <p>Are you an estate agent, mortgage broker, contractor, or commercial intermediary? Refer your clients to VPDL's planning, engineering, and development services to generate recurring monthly returns or share equity on major schemes.</p>
          <div class="partner-metrics">
            <div>
              <strong>Up to 50%</strong>
              <span>Commission Paid on New Business</span>
            </div>
            <div>
              <strong>Up to £5,000</strong>
              <span>Recurring Returns Available</span>
            </div>
            <div>
              <strong>Cloud Portal</strong>
              <span>Transparent Tracking &amp; Statements</span>
            </div>
          </div>
        </div>
        <div class="partner-box-action">
          <a class="btn-brand-submit" href="consultation.php">
            <span>Join Partner Programme</span>
            <i aria-hidden="true">↗</i>
          </a>
        </div>
      </div>
    </section>

    <!-- Tariff FAQ Section -->
    <section class="container" style="padding-bottom: 100px;">
      <div class="section-title-wrap" data-reveal>
        <div class="mono-tag" style="margin-bottom: 12px;">Frequently Asked Questions</div>
        <h2 style="font-size: 26px; font-weight: 800; color: var(--vpdl-black); margin: 0;">TARIFF &amp; BILLING CLARITY</h2>
      </div>

      <div class="faq-accordion-list" data-reveal>
        <details class="faq-item">
          <summary>Are your initial project consultations genuinely free of charge?</summary>
          <div class="faq-content">
            <p>Yes. While many UK architectural practices and surveying consultancies charge £100 to £150 for an initial consultation, VPDL provides preliminary project and planning feasibility consultations completely free of charge to give your scheme the best possible foundation.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary>How are structural engineering calculations charged?</summary>
          <div class="faq-content">
            <p>Structural calculations (SDM) are priced on a transparent fixed-fee basis depending on the complexity of your scheme (e.g. single RSJ knockout vs. multi-storey vertical extension or multi-unit frame). Once we review your architectural drawings, we issue a clear fixed quote with no hidden extras.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary>Do your fees include council planning application and building control submission charges?</summary>
          <div class="faq-content">
            <p>Our fees cover all professional drawings, calculations, documentation, and agent representation. Statutory council planning fees and approved inspector/building control application charges are statutory disbursements paid directly to the respective authorities.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary>How does the 50% commission or project share structure work?</summary>
          <div class="faq-content">
            <p>We provide strategic partners and introducers up to 50% commission on incremental fee revenue or equivalent equity shares on qualified development projects. Commission statements are logged and tracked via our secure cloud data management platform.</p>
          </div>
        </details>
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

    .fees-page-wrapper {
      background: var(--vpdl-bg-canvas);
      color: var(--vpdl-black);
      position: relative;
      overflow-x: hidden;
    }

    /* Top Light Backdrop: Brand Tint + Architectural Grid */
    .fees-top-backdrop {
      position: relative;
      padding-top: 28px;
      padding-bottom: 40px;
      background: 
        radial-gradient(circle at 45% -10%, rgba(225, 29, 42, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 75% 20%, rgba(107, 91, 149, 0.08) 0%, transparent 45%),
        linear-gradient(to bottom, #ffffff 0%, #f8fafc 100%);
      border-bottom: 1px solid var(--vpdl-border);
    }

    .fees-top-backdrop::before {
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

    /* Centered Hero Header */
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
    .fees-hero-lead {
      color: var(--vpdl-muted);
      font-size: 16px;
      max-width: 680px;
      margin: 0 auto;
      line-height: 1.75;
    }
    
    /* Consultation Banner */
    .consultation-highlight-box {
      background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
      border-radius: 18px;
      padding: 38px 42px;
      color: #ffffff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 32px;
      border: 1px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    }
    .consultation-highlight-box .pill-badge {
      display: inline-block;
      background: rgba(56, 189, 248, 0.15);
      color: #38bdf8;
      border: 1px solid rgba(56, 189, 248, 0.3);
      padding: 3px 10px;
      border-radius: 999px;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 10px;
    }
    .consultation-highlight-box h2 {
      font-size: clamp(22px, 2.5vw, 30px);
      font-weight: 800;
      margin: 0 0 8px 0;
    }
    .consultation-highlight-box p {
      color: rgba(255, 255, 255, 0.7);
      font-size: 14px;
      line-height: 1.6;
      max-width: 560px;
      margin: 0;
    }
    .highlight-right {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 18px;
      flex-shrink: 0;
    }
    .price-comparison {
      display: flex;
      gap: 20px;
      align-items: center;
      background: rgba(255, 255, 255, 0.05);
      padding: 12px 20px;
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.08);
    }
    .price-competitor {
      text-align: right;
      border-right: 1px solid rgba(255, 255, 255, 0.15);
      padding-right: 16px;
    }
    .price-competitor span, .price-vpdl span {
      display: block;
      font-size: 11px;
      color: rgba(255, 255, 255, 0.5);
      text-transform: uppercase;
      font-weight: 600;
    }
    .price-competitor strong {
      font-size: 17px;
      color: #f87171;
      text-decoration: line-through;
    }
    .price-vpdl strong {
      font-size: 20px;
      color: #38bdf8;
    }

    /* Fee Cards Grid */
    .fee-cards-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 26px;
    }
    .fee-card {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 16px;
      padding: 30px 26px;
      display: flex;
      flex-direction: column;
      position: relative;
      transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
    }
    .fee-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 18px 35px rgba(0, 0, 0, 0.06);
      border-color: #cbd5e1;
    }
    .highlighted-fee-card {
      border: 2px solid var(--vpdl-blue);
      box-shadow: 0 10px 30px rgba(79, 131, 183, 0.1);
    }
    .highlight-corner-badge {
      position: absolute;
      top: -12px;
      right: 22px;
      background: var(--vpdl-blue);
      color: #ffffff;
      font-size: 10px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      padding: 3px 10px;
      border-radius: 999px;
    }
    .discipline-tag {
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      display: inline-block;
      margin-bottom: 4px;
    }
    .tag-red { color: var(--vpdl-red); }
    .tag-blue { color: var(--vpdl-blue); }
    .tag-purple { color: var(--vpdl-purple); }

    .fee-card h3 {
      font-size: 19px;
      font-weight: 800;
      margin: 4px 0 6px;
      color: var(--vpdl-black);
    }
    .fee-card-top p {
      font-size: 13px;
      color: var(--vpdl-muted);
      line-height: 1.5;
      margin-bottom: 20px;
    }
    .fee-price-block {
      background: var(--vpdl-bg-canvas);
      padding: 16px 18px;
      border-radius: 10px;
      border: 1px solid var(--vpdl-border);
      margin-bottom: 22px;
      display: flex;
      flex-direction: column;
      gap: 2px;
    }
    .fee-price-block .from-text {
      font-size: 11px;
      text-transform: uppercase;
      font-weight: 700;
      color: var(--vpdl-muted);
    }
    .fee-price-block .price-amount {
      font-size: 30px;
      font-weight: 800;
      color: var(--vpdl-black);
      line-height: 1.1;
    }
    .fee-price-block .vat-text {
      font-size: 11px;
      color: var(--vpdl-muted);
    }
    .fee-features {
      list-style: none;
      padding: 0;
      margin: 0 0 24px 0;
      display: flex;
      flex-direction: column;
      gap: 10px;
      flex-grow: 1;
    }
    .fee-features li {
      font-size: 13px;
      color: #334155;
      position: relative;
      padding-left: 20px;
      line-height: 1.45;
    }
    .fee-features li::before {
      content: "✓";
      position: absolute;
      left: 0;
      color: var(--vpdl-red);
      font-weight: 800;
    }
    .fee-action-link {
      font-size: 13px;
      font-weight: 700;
      color: var(--vpdl-blue);
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 4px;
      transition: color 0.15s ease;
    }
    .fee-action-link:hover {
      color: var(--vpdl-black);
      text-decoration: underline;
    }

    /* Partner Revenue Box */
    .partner-revenue-box {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 18px;
      padding: 38px 44px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 36px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }
    .partner-box-content h2 {
      font-size: 26px;
      font-weight: 800;
      margin: 12px 0 8px;
      color: var(--vpdl-black);
    }
    .partner-box-content p {
      color: var(--vpdl-muted);
      font-size: 14px;
      line-height: 1.6;
      max-width: 620px;
      margin: 0;
    }
    .partner-metrics {
      display: flex;
      gap: 28px;
      margin-top: 20px;
    }
    .partner-metrics strong {
      display: block;
      font-size: 20px;
      font-weight: 800;
      color: #d97706;
    }
    .partner-metrics span {
      font-size: 11.5px;
      color: var(--vpdl-muted);
    }

    /* Brand Submit Button */
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

    /* FAQ List */
    .faq-accordion-list {
      display: grid;
      gap: 12px;
      max-width: 860px;
    }
    .faq-item {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 10px;
      padding: 16px 20px;
      cursor: pointer;
      transition: border-color 0.2s ease;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
    }
    .faq-item[open] {
      border-color: var(--vpdl-purple);
    }
    .faq-item summary {
      font-size: 15px;
      font-weight: 700;
      color: var(--vpdl-black);
      list-style: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .faq-item summary::-webkit-details-marker {
      display: none;
    }
    .faq-item summary::after {
      content: "+";
      font-size: 18px;
      color: var(--vpdl-red);
      font-weight: 700;
    }
    .faq-item[open] summary::after {
      content: "–";
    }
    .faq-content {
      padding-top: 12px;
      border-top: 1px solid #f1f5f9;
      margin-top: 12px;
    }
    .faq-content p {
      font-size: 13.5px;
      color: var(--vpdl-muted);
      line-height: 1.6;
      margin: 0;
    }

    /* Responsive */
    @media (max-width: 1080px) {
      .fee-cards-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 768px) {
      .fee-cards-grid {
        grid-template-columns: 1fr;
      }
      .consultation-highlight-box {
        flex-direction: column;
        align-items: flex-start;
        padding: 28px 24px;
      }
      .highlight-right {
        align-items: flex-start;
        width: 100%;
      }
      .price-comparison {
        width: 100%;
        justify-content: space-between;
      }
      .partner-revenue-box {
        flex-direction: column;
        align-items: flex-start;
        padding: 28px 24px;
      }
      .partner-metrics {
        flex-direction: column;
        gap: 12px;
      }
    }
  </style>

<?php include ('footer.php'); ?>