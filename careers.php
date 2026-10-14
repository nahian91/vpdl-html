<?php
/**
 * Template Name: Careers & Practice Opportunities
 * Description: Recruitment hub and practice opportunities portal for VPDL.
 *
 * @package VPDL
 */

// Page SEO Metadata Variables
$page_title = "Careers & Practice Opportunities | Volume Planning & Developments Ltd";
$page_desc  = "Join our integrated multidisciplinary practice. Current openings for chartered structural engineers, town planning consultants, architectural visualisers, and project managers across Wales, Bristol, and London.";
include ('header.php');
?>

  <!-- Schema.org JSON-LD Structured Data: Breadcrumbs + JobPosting Graph -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "BreadcrumbList",
        "@id": "https://vpdl.co.uk/careers.php#breadcrumb",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://vpdl.co.uk/index.php" },
          { "@type": "ListItem", "position": 2, "name": "Careers & Practice Opportunities", "item": "https://vpdl.co.uk/careers.php" }
        ]
      },
      {
        "@type": "JobPosting",
        "title": "Senior / Chartered Structural Design Engineer",
        "description": "Lead structural Eurocode calculations, steel connection schedules, and foundation engineering for residential extensions and multi-storey builds across the South West and Wales.",
        "identifier": { "@type": "PropertyValue", "name": "VPDL", "value": "SDM-2026-01" },
        "datePosted": "2026-01-15",
        "employmentType": "FULL_TIME",
        "hiringOrganization": {
          "@type": "Organization",
          "name": "Volume Planning & Developments Ltd",
          "sameAs": "https://vpdl.co.uk"
        },
        "jobLocation": {
          "@type": "Place",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Newport / Bristol Hub",
            "addressRegion": "South Wales & South West",
            "addressCountry": "GB"
          }
        }
      }
    ]
  }
  </script>

  <!-- =========================================================
       CAREERS & OPPORTUNITIES - VOLUME PLANNING & DEVELOPMENTS LTD
       ========================================================= -->
  <main class="careers-page-wrapper">

    <!-- Top Light Backdrop: Brand Gradient Tint + Architectural Grid -->
    <div class="careers-top-backdrop">
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
            <span class="current" aria-current="page">Careers &amp; Opportunities</span>
          </nav>
        </div>
      </div>

      <!-- Centered Careers Hero Section -->
      <section class="careers-hero centered-hero">
        <div class="container hero-container" data-reveal>
          <h1>BUILD YOUR CAREER WITH <span class="highlight-brand">VPDL.</span></h1>
          <p class="careers-hero-lead">
            Volume Planning and Developments Limited (VPDL) brings together chartered engineers, planning consultants, architectural designers, technicians, and project managers under one accountable roof. Operating across Wales, South West England (Newport/Bristol), Northern England, and international development hubs, we are expanding our multidisciplinary team to meet growing UK property and construction demands.
          </p>
        </div>
      </section>
    </div>

    <!-- Why Work at VPDL Culture Matrix -->
    <section class="container" style="padding-top: 50px; padding-bottom: 50px;">
      <div class="careers-culture-banner" data-reveal>
        <div class="culture-card">
          <div class="culture-icon badge-red">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
          </div>
          <div>
            <h3>360° Multidisciplinary Practice</h3>
            <p>Collaborate across architectural concept design, structural Eurocode calculations, party wall surveying, and on-site building works without discipline silos.</p>
          </div>
        </div>

        <div class="culture-card">
          <div class="culture-icon badge-purple">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
          </div>
          <div>
            <h3>Regional Hubs &amp; Global Scope</h3>
            <p>Gain direct exposure to high-yield residential conversions, Class MA repurposing schemes, and cross-border commercial and industrial development schemes.</p>
          </div>
        </div>

        <div class="culture-card">
          <div class="culture-icon badge-blue">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
          </div>
          <div>
            <h3>BIM &amp; Enterprise Cloud Platforms</h3>
            <p>Design using advanced Building Information Modeling (BIM), laser point-cloud surveys, and secure cloud management systems guided by in-house IT leadership.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Open Positions Grid -->
    <section class="container" style="padding-bottom: 90px;">
      <div class="section-title-wrap" data-reveal style="margin-bottom: 30px;">
        <h2 style="font-size: 28px; font-weight: 800; color: var(--vpdl-black); margin: 0 0 8px;">EXPLORE OPEN POSITIONS</h2>
        <p style="color: var(--vpdl-muted); font-size: 14.5px; margin: 0;">We are welcoming applications across structural design, statutory town planning, 3D architectural delivery, and site project management.</p>
      </div>

      <div class="positions-list" data-reveal>
        
        <!-- Role 01: Structural Engineer -->
        <article class="position-card" id="role-structural">
          <div class="pos-header">
            <div>
              <div class="pos-top-badge-row">
                <span class="discipline-tag tag-blue">Structural Engineering (SDM)</span>
                <span class="status-live-tag">Active Recruitment</span>
              </div>
              <h3>Senior / Chartered Structural Design Engineer</h3>
              <div class="pos-meta">
                <span>📍 Newport / Bristol Hub &middot; Hybrid</span>
                <span>⏱ Full-Time (Permanent)</span>
                <span>💼 5+ Years UK Practice</span>
                <span>💷 £45,000 – £58,000 + Benefits</span>
              </div>
            </div>
            <a href="career-single.php" class="btn-brand-submit" style="padding: 10px 20px; font-size: 13.5px;">
              <span>Enquire to Apply</span>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
          </div>
          <p class="pos-desc">
            Lead structural engineering calculations and detail drafting for residential house extensions, steel frame knockouts (RSJ/box frames), reinforced concrete foundations, and multi-storey commercial conversions up to RIBA Stage 4. You will work alongside our founder and lead structural consultant (25+ years experience) to interface directly with local authority Building Control and private approved inspectors.
          </p>
          <div class="pos-tags">
            <span>Steel (BS EN 1993)</span>
            <span>Concrete &amp; Raft Foundations</span>
            <span>Building Control Sign-Off</span>
            <span>MasterSeries / Tedds</span>
            <span>RIBA Stages 1–4</span>
          </div>
        </article>

        <!-- Role 02: Planning Consultant & PDM Coordinator -->
        <article class="position-card" id="role-planning">
          <div class="pos-header">
            <div>
              <div class="pos-top-badge-row">
                <span class="discipline-tag tag-red">Planning Design Management (PDM)</span>
                <span class="status-live-tag">Active Recruitment</span>
              </div>
              <h3>Chartered Town Planning Consultant &amp; PDM Lead</h3>
              <div class="pos-meta">
                <span>📍 London / Newport Studio &middot; Hybrid</span>
                <span>⏱ Full-Time</span>
                <span>💼 3+ Years Planning Consultancy</span>
                <span>💷 £38,000 – £48,000 + Bonus</span>
              </div>
            </div>
            <a href="career-single.php" class="btn-brand-submit" style="padding: 10px 20px; font-size: 13.5px;">
              <span>Enquire to Apply</span>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
          </div>
          <p class="pos-desc">
            Lead statutory planning appraisals, Design &amp; Access Statements (DAS), Class MA prior approval submissions, and lawful development certificates. You will negotiate directly with local planning officers across Newport, Bristol, Cardiff, London, and Northern England to de-risk investment assets and unlock development potential.
          </p>
          <div class="pos-tags">
            <span>Town Planning Appeals</span>
            <span>Permitted Development (GPDO 2015)</span>
            <span>Class MA Conversions</span>
            <span>Section 106 Negotiations</span>
            <span>LPA Officer Liaison</span>
          </div>
        </article>

        <!-- Role 03: Architectural Designer & 3D Visualiser -->
        <article class="position-card" id="role-architecture">
          <div class="pos-header">
            <div>
              <div class="pos-top-badge-row">
                <span class="discipline-tag tag-purple">Architectural Design (ARC)</span>
                <span class="status-live-tag">Active Recruitment</span>
              </div>
              <h3>Architectural Designer &amp; 3D Visualisation Specialist</h3>
              <div class="pos-meta">
                <span>📍 London / South Wales Studio</span>
                <span>⏱ Full-Time</span>
                <span>💼 2+ Years Technical Architecture</span>
                <span>💷 £32,000 – £42,000</span>
              </div>
            </div>
            <a href="career-single.php" class="btn-brand-submit" style="padding: 10px 20px; font-size: 13.5px;">
              <span>Enquire to Apply</span>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
          </div>
          <p class="pos-desc">
            Develop 1:50 general arrangement plans, contextual elevations, high-resolution photorealistic 3D renders, and technical Building Regulations drawing packs. You will collaborate directly with our structural engineering team to ensure aesthetic designs align with structural load paths and building fabric constraints.
          </p>
          <div class="pos-tags">
            <span>3D Concept Modeling</span>
            <span>Revit / AutoCAD / SketchUp</span>
            <span>1:20 Technical Junctions</span>
            <span>Approved Document L &amp; B</span>
            <span>Residential &amp; Commercial</span>
          </div>
        </article>

        <!-- Role 04: Project Management & Surveyor (PMC/BSM) -->
        <article class="position-card" id="role-management">
          <div class="pos-header">
            <div>
              <div class="pos-top-badge-row">
                <span class="discipline-tag tag-blue">Project Management &amp; Surveying (PMC/BSM)</span>
                <span class="status-live-tag">Active Recruitment</span>
              </div>
              <h3>Project Management &amp; Party Wall Surveying Officer</h3>
              <div class="pos-meta">
                <span>📍 Regional UK / South West &middot; Site &amp; Office</span>
                <span>⏱ Full-Time</span>
                <span>💼 4+ Years Site &amp; Surveying Exp</span>
                <span>💷 £42,000 – £52,000 + Travel</span>
              </div>
            </div>
            <a href="career-single.php" class="btn-brand-submit" style="padding: 10px 20px; font-size: 13.5px;">
              <span>Enquire to Apply</span>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
          </div>
          <p class="pos-desc">
            Administer JCT minor works and intermediate building contracts, oversee on-site quality verification milestones, manage contractor vetting, and draft statutory Party Wall Act 1996 notices and Schedules of Condition across commercial and residential sites.
          </p>
          <div class="pos-tags">
            <span>JCT Contract Administration</span>
            <span>Party Wall Act 1996 Awards</span>
            <span>Photographic Schedules</span>
            <span>Site Milestone Sign-Off</span>
            <span>Contractor Vetting</span>
          </div>
        </article>

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

    .careers-page-wrapper {
      background: var(--vpdl-bg-canvas);
      color: var(--vpdl-black);
      position: relative;
      overflow-x: hidden;
    }

    /* Top Light Backdrop */
    .careers-top-backdrop {
      position: relative;
      padding-top: 28px;
      padding-bottom: 40px;
      background: 
        radial-gradient(circle at 45% -10%, rgba(225, 29, 42, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 75% 20%, rgba(107, 91, 149, 0.08) 0%, transparent 45%),
        linear-gradient(to bottom, #ffffff 0%, #f8fafc 100%);
      border-bottom: 1px solid var(--vpdl-border);
    }

    .careers-top-backdrop::before {
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
    .careers-hero-lead {
      color: var(--vpdl-muted);
      font-size: 16px;
      max-width: 680px;
      margin: 0 auto;
      line-height: 1.75;
    }

    /* Culture Matrix Banner */
    .careers-culture-banner {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .culture-card {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 16px;
      padding: 28px 24px;
      display: flex;
      gap: 18px;
      align-items: flex-start;
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.2s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
    }
    .culture-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 14px 30px rgba(0, 0, 0, 0.05);
      border-color: #cbd5e1;
    }
    .culture-icon {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      display: grid;
      place-items: center;
      flex-shrink: 0;
    }
    .badge-red { background: rgba(225, 29, 42, 0.09); color: var(--vpdl-red); }
    .badge-purple { background: rgba(107, 91, 149, 0.1); color: var(--vpdl-purple); }
    .badge-blue { background: rgba(79, 131, 183, 0.12); color: var(--vpdl-blue); }

    .culture-card h3 {
      font-size: 16px;
      font-weight: 800;
      margin: 0 0 6px;
      color: var(--vpdl-black);
    }
    .culture-card p {
      font-size: 13px;
      color: var(--vpdl-muted);
      line-height: 1.6;
      margin: 0;
    }

    /* Positions List & Cards */
    .positions-list {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .position-card {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 18px;
      padding: 32px 34px;
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.2s ease, box-shadow 0.25s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
    }
    .position-card:hover {
      transform: translateY(-3px);
      border-color: #cbd5e1;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.04);
    }
    .pos-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 20px;
      margin-bottom: 14px;
      flex-wrap: wrap;
    }
    .pos-top-badge-row {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 6px;
    }
    .discipline-tag {
      font-size: 11px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      display: inline-block;
    }
    .tag-blue { color: var(--vpdl-blue); }
    .tag-red { color: var(--vpdl-red); }
    .tag-purple { color: var(--vpdl-purple); }

    .status-live-tag {
      font-size: 10.5px;
      font-weight: 700;
      background: rgba(16, 185, 129, 0.1);
      color: #059669;
      border: 1px solid rgba(16, 185, 129, 0.25);
      padding: 2px 8px;
      border-radius: 9999px;
      letter-spacing: 0.04em;
    }

    .position-card h3 {
      font-size: 21px;
      font-weight: 800;
      margin: 4px 0 8px;
      color: var(--vpdl-black);
    }
    .pos-meta {
      display: flex;
      gap: 18px;
      font-size: 12.5px;
      color: var(--vpdl-muted);
      font-weight: 600;
      flex-wrap: wrap;
    }
    .pos-desc {
      font-size: 14px;
      color: #334155;
      line-height: 1.7;
      margin: 0 0 20px;
    }
    .pos-tags {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
    }
    .pos-tags span {
      background: var(--vpdl-bg-canvas);
      border: 1px solid var(--vpdl-border);
      padding: 5px 12px;
      border-radius: 6px;
      font-size: 12px;
      color: #475569;
      font-weight: 600;
    }

    /* Buttons */
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
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
      box-shadow: 0 4px 15px rgba(17, 24, 39, 0.15);
    }
    .btn-brand-submit:hover {
      background: var(--vpdl-red) !important;
      border-color: var(--vpdl-red) !important;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(225, 29, 42, 0.3);
    }

    @media (max-width: 960px) {
      .careers-culture-banner {
        grid-template-columns: 1fr;
      }
    }
    @media (max-width: 640px) {
      .pos-header {
        flex-direction: column;
        align-items: flex-start;
      }
      .btn-brand-submit {
        width: 100%;
      }
    }
  </style>

<?php include ('footer.php'); ?>