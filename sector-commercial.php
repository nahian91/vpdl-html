<?php 
// Page SEO Metadata Variables
$page_title = "Commercial & Industrial Property Sector | VPDL UK Practice";
$page_desc  = "Integrated commercial development, workplace fit-outs, industrial logistics facilities, Class MA conversions, and structural engineering across the UK.";
include ('header.php'); 
?>

<!-- Schema.org JSON-LD Structured Data: Service + BreadcrumbList + FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://vpdl.co.uk/sector-commercial.php#service",
      "name": "Commercial & Industrial Property Services",
      "serviceType": "Commercial Architecture, Industrial Engineering & Development Consulting",
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
      "description": "Comprehensive commercial property solutions including office fit-outs, industrial warehouse design, steel portal framing, Class MA adaptive reuse, and development agency across the UK and internationally."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://vpdl.co.uk/sector-commercial.php#breadcrumb",
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
          "name": "Sectors",
          "item": "https://vpdl.co.uk/index.php#sectors"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Commercial Sector",
          "item": "https://vpdl.co.uk/sector-commercial.php"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://vpdl.co.uk/sector-commercial.php#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What commercial and industrial services does VPDL undertake?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We handle commercial workplace extensions, office spatial fit-outs, industrial warehouse developments, Class MA commercial-to-residential conversions, development asset sales, and steel portal calculations."
          }
        },
        {
          "@type": "Question",
          "name": "How does VPDL assist with Class MA permitted development conversions?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our team coordinates prior approval applications, daylight assessments, transport impact statements, and structural remodeling to convert redundant commercial assets into compliant residential schemes."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide preliminary feasibility reviews for commercial asset owners?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer free preliminary consultations to assess planning history, structural viability, and asset value maximisation before financial commitments are made."
          }
        }
      ]
    }
  ]
}
</script>

<main class="sector-page">
  <!-- Minimalist Breadcrumb Bar -->
  <div class="breadcrumb-strip">
    <div class="container">
      <nav class="breadcrumb-nav" aria-label="Breadcrumb">
        <a href="index.php">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
          Home
        </a>
        <span class="sep">/</span>
        <a href="index.php#sectors">Sectors</a>
        <span class="sep">/</span>
        <span class="active" aria-current="page">Commercial &amp; Industrial</span>
      </nav>
    </div>
  </div>

  <!-- Split Editorial Hero -->
  <section class="split-hero">
    <div class="container">
      <div class="split-hero-grid">
        <div class="split-hero-copy" data-reveal>
          <div class="status-badge">
            <span class="pulse-dot"></span>
            <span>Commercial &amp; Industrial Practice · 2026</span>
          </div>
          <h1>SPACES BUILT FOR <span>COMMERCIAL PERFORMANCE.</span></h1>
          <p class="hero-summary">
            We deliver high-efficiency workplace fit-outs, industrial logistics facilities, commercial extensions, and Class MA conversions. Our team connects architectural volume with structural steel calculations and commercial asset strategy.
          </p>
          <div class="hero-actions-deck">
            <a href="consultation.php" class="btn-solid btn-interactive">
              <span>Book Commercial Appraisal</span>
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
            <a href="service-development-consulting.php" class="btn-ghost btn-interactive">
              <span>Development Consulting</span>
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>

        <div class="split-hero-visual" data-reveal>
          <div class="visual-wrapper card-hover-lift">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80" alt="Commercial Office Building and Development" loading="eager">
            <div class="visual-caption-card glass-panel">
              <div class="caption-icon-badge">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
              </div>
              <div>
                <span class="caption-tag">Commercial Sector</span>
                <strong>Workplace &amp; Industrial Delivery</strong>
                <p>Fit-Outs · Logistics Hubs · Class MA Conversions</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Metric Matrix -->
  <section class="metric-strip">
    <div class="container">
      <div class="metric-grid" data-reveal>
        <div class="metric-item card-hover-subtle">
          <div class="metric-icon-wrap">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
          </div>
          <div class="metric-text-group">
            <span class="num">B2B</span>
            <span class="lbl">Commercial &amp; Industrial Delivery</span>
          </div>
        </div>
        <div class="metric-item card-hover-subtle">
          <div class="metric-icon-wrap">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          </div>
          <div class="metric-text-group">
            <span class="num">BIM</span>
            <span class="lbl">Clash Detection &amp; Coordination</span>
          </div>
        </div>
        <div class="metric-item card-hover-subtle">
          <div class="metric-icon-wrap">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
          </div>
          <div class="metric-text-group">
            <span class="num">Cross-Border</span>
            <span class="lbl">UK &amp; International Projects</span>
          </div>
        </div>
        <div class="metric-item card-hover-subtle">
          <div class="metric-icon-wrap">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
          </div>
          <div class="metric-text-group">
            <span class="num">50%</span>
            <span class="lbl">Partner Commission / Project Shares</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modular Capabilities Showcase -->
  <section class="capabilities-section">
    <div class="container">
      <div class="section-heading" data-reveal>
        <div class="eyebrow">
          <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          <span>Commercial Solutions</span>
        </div>
        <h2>COMMERCIAL &amp; INDUSTRIAL CAPABILITIES</h2>
        <p>Strategic services structured to elevate operational performance and commercial asset valuation.</p>
      </div>

      <div class="capabilities-grid" data-reveal>
        <!-- Capability 1 -->
        <article class="cap-card card-interactive">
          <div class="cap-header">
            <span class="cap-idx">01</span>
            <div class="cap-icon-box">
              <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
            </div>
          </div>
          <h3>Office Fit-Outs &amp; Workplace Design</h3>
          <p>Architectural spatial reconfigurations, open-plan workspaces, executive boardrooms, and staff breakout facilities designed for productivity.</p>
          <ul class="cap-points">
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Circulation, acoustic, and lighting optimisation</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Internal wall removals and structural beam integration</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Building Regulations Part B fire safety &amp; Part M access</span>
            </li>
          </ul>
        </article>

        <!-- Capability 2 -->
        <article class="cap-card card-interactive">
          <div class="cap-header">
            <span class="cap-idx">02</span>
            <div class="cap-icon-box">
              <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
            </div>
          </div>
          <h3>Industrial Warehouses &amp; Logistics Hubs</h3>
          <p>Multi-use industrial/office warehouse design and construction drawings delivering high-capacity logistics layouts and administrative zones.</p>
          <ul class="cap-points">
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Steel portal frames and mezzanine calculations</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>HGV loading bays, turn radii, and vehicular flow</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Integrated administrative and staff amenity spaces</span>
            </li>
          </ul>
        </article>

        <!-- Capability 3 -->
        <article class="cap-card card-interactive">
          <div class="cap-header">
            <span class="cap-idx">03</span>
            <div class="cap-icon-box">
              <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
            </div>
          </div>
          <h3>Class MA Adaptive Reuse &amp; Conversions</h3>
          <p>Converting underperforming commercial buildings, offices, and light-industrial units into residential apartments under Class MA.</p>
          <ul class="cap-points">
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Permitted Development prior approval applications</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Habitable room daylighting and noise mitigation</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Spatial yield optimisation and structural reconfiguration</span>
            </li>
          </ul>
        </article>

        <!-- Capability 4 -->
        <article class="cap-card card-interactive">
          <div class="cap-header">
            <span class="cap-idx">04</span>
            <div class="cap-icon-box">
              <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg>
            </div>
          </div>
          <h3>Development Consulting &amp; Site Disposal</h3>
          <p>Helping commercial property owners unlock site residual land value through planning, optioneering, and discreet agency disposal.</p>
          <ul class="cap-points">
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Gross Development Value (GDV) appraisals</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Site disposal marketing to verified buyers</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Up to 50% commission &amp; equity sharing joint ventures</span>
            </li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- Interactive Case Study Row -->
  <section class="case-study-banner">
    <div class="container">
      <div class="case-study-box card-hover-lift" data-reveal>
        <div class="case-study-meta">
          <span class="meta-pill">
            <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            Featured Commercial Project
          </span>
          <h2>HAYES COMMERCIAL OFFICE FIT-OUT &amp; EXTENSION</h2>
          <p class="case-desc">
            Office fit-out design and layout extension delivering an expansive modern commercial workplace, welcoming client waiting zones, high-spec executive conference rooms, and staff breakout hubs with health-focused circulation pathways.
          </p>
          <div class="case-highlights">
            <div class="highlight-node">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              <div>
                <strong>Location</strong>
                <span>Hayes, UK</span>
              </div>
            </div>
            <div class="highlight-node">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
              <div>
                <strong>Discipline</strong>
                <span>Spatial Design &amp; Build</span>
              </div>
            </div>
            <div class="highlight-node">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
              <div>
                <strong>Status</strong>
                <span>Completed &amp; Occupied</span>
              </div>
            </div>
          </div>
          <div class="case-cta">
            <a href="consultation.php" class="btn-solid-light btn-interactive">
              <span>Book Commercial Review</span>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
          </div>
        </div>
        <div class="case-study-img-frame">
          <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1000&q=80" alt="Hayes Commercial Office Interior Fit-Out" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Step-by-Step Delivery Rail -->
  <section class="delivery-flow">
    <div class="container">
      <div class="section-heading" data-reveal>
        <div class="eyebrow">
          <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          <span>Execution Roadmap</span>
        </div>
        <h2>HOW WE DELIVER COMMERCIAL SCHEMES</h2>
        <p>A milestone-controlled delivery structure ensuring minimal operational disruption and cost certainty.</p>
      </div>

      <div class="flow-track" data-reveal>
        <div class="flow-step card-interactive">
          <div class="flow-icon-header">
            <span class="flow-count">01</span>
            <div class="flow-step-icon">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            </div>
          </div>
          <h4>Commercial Feasibility</h4>
          <p>Asset survey, planning zoning checks, spatial efficiency analysis, and preliminary budget modeling free of charge.</p>
        </div>
        <div class="flow-step card-interactive">
          <div class="flow-icon-header">
            <span class="flow-count">02</span>
            <div class="flow-step-icon">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
            </div>
          </div>
          <h4>Design &amp; Approvals</h4>
          <p>Architectural 3D space planning, fire engineering strategy, and statutory council planning or prior approval applications.</p>
        </div>
        <div class="flow-step card-interactive">
          <div class="flow-icon-header">
            <span class="flow-count">03</span>
            <div class="flow-step-icon">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
            </div>
          </div>
          <h4>Structural Packages</h4>
          <p>Steel frame calculations, mezzanine specifications, foundation load checks, and technical Building Control sign-offs.</p>
        </div>
        <div class="flow-step card-interactive">
          <div class="flow-icon-header">
            <span class="flow-count">04</span>
            <div class="flow-step-icon">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            </div>
          </div>
          <h4>Contractor Management</h4>
          <p>JCT contract administration, site quality control, staged progress certification, and practical handover.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Comprehensive FAQ Section -->
  <section class="faq-container-section">
    <div class="container">
      <div class="faq-layout" data-reveal>
        <div class="faq-sidebar">
          <div class="eyebrow">
            <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            <span>Advisory &amp; Insights</span>
          </div>
          <h2>COMMERCIAL PROPERTY FAQ</h2>
          <p>Key information regarding commercial regulations, structural engineering, fit-out timescales, and asset appraisals.</p>
          <div class="direct-contact-note card-hover-subtle">
            <div class="contact-note-head">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              <strong>Direct Commercial Line</strong>
            </div>
            <p>Speak directly with our technical directors about your commercial building or site.</p>
            <a href="tel:+443333445807" class="phone-link">
              <span>+44 (0) 3333 44 5807</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
          </div>
        </div>

        <div class="faq-accordion-group">
          <details class="faq-row" open>
            <summary>
              <span>How does Class MA permitted development apply to commercial offices?</span>
              <span class="icon">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
              </span>
            </summary>
            <div class="faq-answer">
              <p>Class MA allows the change of use from Commercial, Business, and Service uses (Class E) to residential dwellings (Class C3) under Permitted Development, subject to prior approval from the local planning authority. We verify that the property meets vacancy and floor area thresholds, and manage transport, contamination, flood risk, and natural daylight assessments.</p>
            </div>
          </details>

          <details class="faq-row">
            <summary>
              <span>Can VPDL handle structural calculations for industrial mezzanines and portals?</span>
              <span class="icon">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
              </span>
            </summary>
            <div class="faq-answer">
              <p>Yes. Backed by over 25 years of structural engineering design experience, our chartered engineering team designs cold-rolled and hot-rolled portal frames, column baseplates, mezzanine flooring systems, and foundation load enhancements per UK Eurocodes for Building Control sign-off.</p>
            </div>
          </details>

          <details class="faq-row">
            <summary>
              <span>What is your strategic development partnership model?</span>
              <span class="icon">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
              </span>
            </summary>
            <div class="faq-answer">
              <p>We work alongside commercial agents, property brokers, and institutional introducers, offering commission structures up to 50% on new business introduction or up to 50% project shares in qualified property joint ventures, tracked transparently through our enterprise cloud management systems.</p>
            </div>
          </details>

          <details class="faq-row">
            <summary>
              <span>Are your initial commercial project reviews free of charge?</span>
              <span class="icon">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
              </span>
            </summary>
            <div class="faq-answer">
              <p>Yes. While competitors in the commercial sector typically charge substantial upfront consultation fees, VPDL provides initial planning, design, and structural feasibility reviews free of charge.</p>
            </div>
          </details>
        </div>
      </div>
    </div>
  </section>

  <!-- Final Call to Action -->
  <section class="cta-banner-strip">
    <div class="container">
      <div class="cta-inner card-hover-lift" data-reveal>
        <div>
          <span class="status-badge cta-badge">
            <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polyline></svg>
            <span>Start Your Commercial Scheme</span>
          </span>
          <h2>READY TO APPRAISE YOUR COMMERCIAL ASSET?</h2>
          <p>Send our commercial development directors your site location, warehouse details, or office layout for a confidential feasibility review free of charge.</p>
        </div>
        <div class="cta-buttons">
          <a href="consultation.php" class="btn-solid-light btn-interactive">
            <span>Book Free Consultation</span>
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </a>
          <a href="contact.php" class="btn-ghost-light btn-interactive">
            <span>Contact Commercial Desk</span>
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
/* =========================================================
   ANIMATED & INTERACTIVE COMMERCIAL SECTOR STYLES
   ========================================================= */

.sector-page {
  background-color: var(--page-bg, #f8fafc);
  color: var(--text-dark, #0f172a);
}

/* Global Acceleration & Hover Transformations */
.card-hover-lift,
.card-hover-subtle,
.card-interactive,
.btn-interactive,
.visual-wrapper img,
.cap-icon-box,
.flow-step-icon,
.metric-icon-wrap {
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  transform: translateZ(0);
  transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), 
              box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1), 
              border-color 0.25s ease,
              background-color 0.25s ease,
              color 0.25s ease;
}

/* Breadcrumb Strip */
.breadcrumb-strip {
  padding: 16px 0;
  border-bottom: 1px solid var(--border-color, #e2e8f0);
  background: #ffffff;
}
.breadcrumb-nav {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 13px;
  color: var(--text-muted, #64748b);
}
.breadcrumb-nav a {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  color: var(--text-muted, #64748b);
  text-decoration: none;
  transition: color 0.2s ease, transform 0.2s ease;
}
.breadcrumb-nav a:hover {
  color: var(--text-dark, #0f172a);
  transform: translateX(-1px);
}
.breadcrumb-nav a svg {
  transition: stroke 0.2s ease;
}
.breadcrumb-nav a:hover svg {
  stroke: var(--brand-red, #ed1c24);
}
.breadcrumb-nav .sep {
  color: #cbd5e1;
}
.breadcrumb-nav .active {
  color: var(--brand-red, #ed1c24);
  font-weight: 600;
}

/* Split Hero Section */
.split-hero {
  padding: 70px 0 80px;
  background: #ffffff;
}
.split-hero-grid {
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: 50px;
  align-items: center;
}
.status-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #f1f5f9;
  color: #334155;
  font-size: 11.5px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.06em;
  padding: 6px 14px;
  border-radius: 999px;
  margin-bottom: 18px;
  border: 1px solid rgba(226, 232, 240, 0.8);
}
.pulse-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: var(--brand-red, #ed1c24);
  box-shadow: 0 0 0 0 rgba(237, 28, 36, 0.6);
  animation: pulseBeacon 2s infinite cubic-bezier(0.66, 0, 0, 1);
}
@keyframes pulseBeacon {
  0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(237, 28, 36, 0.6); }
  70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(237, 28, 36, 0); }
  100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(237, 28, 36, 0); }
}

.split-hero h1 {
  font-family: var(--font-display, sans-serif);
  font-size: clamp(32px, 3.8vw, 48px);
  font-weight: 800;
  line-height: 1.15;
  color: var(--text-dark, #0f172a);
  margin-bottom: 18px;
}
.split-hero h1 span {
  color: var(--brand-purple, #6757a2);
  background: linear-gradient(135deg, #6757a2 0%, #ed1c24 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.hero-summary {
  font-size: 16px;
  line-height: 1.7;
  color: var(--text-muted, #475569);
  margin-bottom: 30px;
  max-width: 580px;
}
.hero-actions-deck {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
}

/* Interactive Buttons */
.btn-solid {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: #0f172a;
  color: #ffffff;
  padding: 14px 26px;
  border-radius: 8px;
  font-weight: 700;
  font-size: 13.5px;
  text-decoration: none;
  box-shadow: 0 4px 14px rgba(15, 23, 42, 0.15);
}
.btn-solid:hover {
  background: #1e293b;
  transform: translateY(-3px);
  box-shadow: 0 8px 24px rgba(15, 23, 42, 0.25);
}
.btn-solid svg, .btn-ghost svg, .btn-solid-light svg, .btn-ghost-light svg {
  transition: transform 0.25s ease;
}
.btn-solid:hover svg, .btn-ghost:hover svg, .btn-solid-light:hover svg, .btn-ghost-light:hover svg {
  transform: translateX(3px) translateY(-1px);
}

.btn-ghost {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: transparent;
  color: #0f172a;
  border: 1px solid #cbd5e1;
  padding: 14px 24px;
  border-radius: 8px;
  font-weight: 700;
  font-size: 13.5px;
  text-decoration: none;
}
.btn-ghost:hover {
  background: #f1f5f9;
  border-color: #94a3b8;
  transform: translateY(-3px);
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
}

/* Visual Media Frame with Hover Depth */
.visual-wrapper {
  position: relative;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 20px 45px rgba(0, 0, 0, 0.08);
}
.visual-wrapper img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}
.visual-wrapper:hover img {
  transform: scale(1.05);
}
.visual-caption-card {
  position: absolute;
  bottom: 20px;
  left: 20px;
  right: 20px;
  background: rgba(15, 23, 42, 0.88);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  padding: 18px 22px;
  border-radius: 12px;
  color: #ffffff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  display: flex;
  align-items: center;
  gap: 16px;
  transition: transform 0.35s ease, background 0.35s ease;
}
.visual-wrapper:hover .visual-caption-card {
  transform: translateY(-4px);
  background: rgba(15, 23, 42, 0.94);
}
.caption-icon-badge {
  width: 38px;
  height: 38px;
  border-radius: 8px;
  background: rgba(237, 28, 36, 0.15);
  border: 1px solid rgba(237, 28, 36, 0.3);
  color: var(--brand-red, #ed1c24);
  display: grid;
  place-items: center;
  flex-shrink: 0;
}
.caption-tag {
  font-size: 10px;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: var(--brand-red, #ed1c24);
  font-weight: 800;
  display: block;
}
.visual-caption-card strong {
  font-family: var(--font-display, sans-serif);
  font-size: 16.5px;
  display: block;
  margin-top: 2px;
}
.visual-caption-card p {
  font-size: 12px;
  color: #cbd5e1;
  margin: 3px 0 0;
}

/* Metric Strip */
.metric-strip {
  background: #f1f5f9;
  border-top: 1px solid var(--border-color, #e2e8f0);
  border-bottom: 1px solid var(--border-color, #e2e8f0);
  padding: 28px 0;
}
.metric-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}
.metric-item {
  display: flex;
  align-items: center;
  gap: 16px;
  padding: 10px 14px;
  border-radius: 10px;
  border-left: 3px solid var(--brand-purple, #6757a2);
}
.metric-item:hover {
  background: #ffffff;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.04);
}
.metric-icon-wrap {
  width: 42px;
  height: 42px;
  border-radius: 8px;
  background: #ffffff;
  display: grid;
  place-items: center;
  color: var(--brand-purple, #6757a2);
  border: 1px solid var(--border-color, #e2e8f0);
  flex-shrink: 0;
}
.metric-item:hover .metric-icon-wrap {
  transform: scale(1.08) rotate(3deg);
  color: var(--brand-red, #ed1c24);
  border-color: rgba(237, 28, 36, 0.3);
}
.metric-item .num {
  font-family: var(--font-display, sans-serif);
  font-size: 26px;
  font-weight: 800;
  color: #0f172a;
  display: block;
  line-height: 1.1;
}
.metric-item .lbl {
  font-size: 12px;
  color: #64748b;
  margin-top: 3px;
  display: block;
  font-weight: 600;
}

/* Capabilities Section */
.capabilities-section {
  padding: 85px 0;
}
.section-heading {
  text-align: center;
  max-width: 650px;
  margin: 0 auto 50px;
}
.eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-family: var(--font-display, sans-serif);
  font-size: 11px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.12em;
  color: var(--brand-red, #ed1c24);
  margin-bottom: 10px;
}
.section-heading h2 {
  font-family: var(--font-display, sans-serif);
  font-size: clamp(26px, 3vw, 36px);
  font-weight: 800;
  color: #0f172a;
}
.section-heading p {
  font-size: 14.5px;
  color: #64748b;
  margin-top: 10px;
}
.capabilities-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 26px;
}
.cap-card {
  background: #ffffff;
  border: 1px solid var(--border-color, #e2e8f0);
  border-radius: 14px;
  padding: 34px;
  position: relative;
  overflow: hidden;
}
.cap-card::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--brand-purple, #6757a2), var(--brand-red, #ed1c24));
  opacity: 0;
  transition: opacity 0.3s ease;
}
.cap-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.06);
  border-color: #cbd5e1;
}
.cap-card:hover::after {
  opacity: 1;
}
.cap-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}
.cap-idx {
  font-family: var(--font-display, sans-serif);
  font-size: 15px;
  font-weight: 800;
  color: var(--brand-purple, #6757a2);
}
.cap-icon-box {
  width: 44px;
  height: 44px;
  border-radius: 10px;
  background: #f8fafc;
  border: 1px solid var(--border-color, #e2e8f0);
  display: grid;
  place-items: center;
  color: #0f172a;
}
.cap-card:hover .cap-icon-box {
  background: #0f172a;
  color: #ffffff;
  transform: scale(1.1) rotate(-4deg);
}
.cap-card h3 {
  font-family: var(--font-display, sans-serif);
  font-size: 21px;
  font-weight: 700;
  color: #0f172a;
  margin-bottom: 10px;
  transition: color 0.2s ease;
}
.cap-card:hover h3 {
  color: var(--brand-purple, #6757a2);
}
.cap-card p {
  font-size: 13.5px;
  color: #64748b;
  line-height: 1.6;
  margin-bottom: 20px;
}
.cap-points {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 10px;
  border-top: 1px solid #f1f5f9;
  padding-top: 18px;
}
.cap-points li {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 13px;
  color: #334155;
  line-height: 1.5;
}
.cap-points li svg {
  flex-shrink: 0;
  color: var(--brand-red, #ed1c24);
  transition: transform 0.25s ease;
}
.cap-card:hover .cap-points li svg {
  transform: scale(1.15);
}

/* Case Study Banner */
.case-study-banner {
  padding: 10px 0 80px;
}
.case-study-box {
  background: linear-gradient(135deg, #090d16 0%, #0f172a 100%);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 18px;
  overflow: hidden;
  display: grid;
  grid-template-columns: 1.25fr 1fr;
  color: #ffffff;
}
.case-study-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 25px 60px rgba(15, 23, 42, 0.4);
}
.case-study-meta {
  padding: 50px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.meta-pill {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(103, 87, 162, 0.25);
  color: #b7a9e6;
  border: 1px solid rgba(103, 87, 162, 0.4);
  font-size: 11px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  padding: 5px 14px;
  border-radius: 999px;
  margin-bottom: 18px;
  align-self: flex-start;
}
.case-study-meta h2 {
  font-family: var(--font-display, sans-serif);
  font-size: 28px;
  font-weight: 800;
  margin-bottom: 14px;
  line-height: 1.2;
}
.case-desc {
  font-size: 14px;
  color: #cbd5e1;
  line-height: 1.7;
  margin-bottom: 26px;
}
.case-highlights {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  border-top: 1px solid rgba(255, 255, 255, 0.12);
  padding-top: 22px;
  margin-bottom: 30px;
}
.highlight-node {
  display: flex;
  align-items: flex-start;
  gap: 10px;
}
.highlight-node svg {
  flex-shrink: 0;
  margin-top: 2px;
  color: var(--brand-purple, #6757a2);
}
.highlight-node strong {
  display: block;
  font-size: 11px;
  text-transform: uppercase;
  color: #94a3b8;
}
.highlight-node span {
  font-size: 13px;
  font-weight: 600;
  color: #ffffff;
  margin-top: 2px;
  display: block;
}
.btn-solid-light {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #ffffff;
  color: #0f172a;
  padding: 13px 24px;
  border-radius: 8px;
  font-weight: 700;
  font-size: 13px;
  text-decoration: none;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.2);
}
.btn-solid-light:hover {
  background: #f1f5f9;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
}
.case-study-img-frame {
  position: relative;
  overflow: hidden;
}
.case-study-img-frame img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}
.case-study-box:hover .case-study-img-frame img {
  transform: scale(1.06);
}

/* Delivery Track */
.delivery-flow {
  padding: 20px 0 85px;
}
.flow-track {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 22px;
}
.flow-step {
  background: #ffffff;
  border: 1px solid var(--border-color, #e2e8f0);
  border-radius: 14px;
  padding: 28px 24px;
  position: relative;
}
.flow-step:hover {
  transform: translateY(-6px);
  box-shadow: 0 16px 36px rgba(0, 0, 0, 0.05);
  border-color: #cbd5e1;
}
.flow-icon-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 16px;
}
.flow-count {
  font-family: var(--font-display, sans-serif);
  font-size: 28px;
  font-weight: 800;
  color: var(--brand-purple, #6757a2);
  line-height: 1;
}
.flow-step-icon {
  width: 38px;
  height: 38px;
  border-radius: 8px;
  background: #f8fafc;
  display: grid;
  place-items: center;
  color: var(--brand-purple, #6757a2);
  border: 1px solid var(--border-color, #e2e8f0);
}
.flow-step:hover .flow-step-icon {
  background: var(--brand-purple, #6757a2);
  color: #ffffff;
  transform: scale(1.1);
}
.flow-step h4 {
  font-family: var(--font-display, sans-serif);
  font-size: 17px;
  font-weight: 700;
  color: #0f172a;
  margin-bottom: 8px;
}
.flow-step p {
  font-size: 13px;
  color: #64748b;
  line-height: 1.6;
  margin: 0;
}

/* FAQ Layout */
.faq-container-section {
  padding: 20px 0 90px;
}
.faq-layout {
  display: grid;
  grid-template-columns: 1fr 1.5fr;
  gap: 50px;
}
.faq-sidebar h2 {
  font-family: var(--font-display, sans-serif);
  font-size: 28px;
  font-weight: 800;
  margin-bottom: 12px;
}
.faq-sidebar p {
  font-size: 14px;
  color: #64748b;
  line-height: 1.6;
}
.direct-contact-note {
  margin-top: 30px;
  padding: 22px;
  background: #ffffff;
  border: 1px solid var(--border-color, #e2e8f0);
  border-radius: 12px;
}
.direct-contact-note:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.04);
}
.contact-note-head {
  display: flex;
  align-items: center;
  gap: 8px;
  color: var(--brand-purple, #6757a2);
  margin-bottom: 6px;
}
.contact-note-head strong {
  font-size: 14px;
  color: #0f172a;
}
.direct-contact-note p {
  font-size: 12.5px;
  margin-bottom: 14px;
}
.phone-link {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-family: var(--font-display, sans-serif);
  font-size: 15px;
  font-weight: 800;
  color: var(--brand-purple, #6757a2);
  text-decoration: none;
  transition: transform 0.2s ease;
}
.phone-link:hover {
  transform: translateX(4px);
  color: var(--brand-red, #ed1c24);
}
.faq-accordion-group {
  display: flex;
  flex-direction: column;
  gap: 14px;
}
.faq-row {
  background: #ffffff;
  border: 1px solid var(--border-color, #e2e8f0);
  border-radius: 12px;
  overflow: hidden;
  transition: border-color 0.25s ease, box-shadow 0.25s ease;
}
.faq-row:hover {
  border-color: #cbd5e1;
}
.faq-row[open] {
  border-color: #94a3b8;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.03);
}
.faq-row summary {
  list-style: none;
  padding: 20px 24px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-family: var(--font-display, sans-serif);
  font-size: 15px;
  font-weight: 700;
  color: #0f172a;
  cursor: pointer;
  user-select: none;
}
.faq-row summary::-webkit-details-marker {
  display: none;
}
.faq-row .icon {
  width: 28px;
  height: 28px;
  border-radius: 6px;
  background: #f8fafc;
  display: grid;
  place-items: center;
  color: var(--brand-purple, #6757a2);
  flex-shrink: 0;
  transition: transform 0.3s ease, background 0.3s ease, color 0.3s ease;
}
.faq-row:hover .icon {
  background: var(--brand-purple, #6757a2);
  color: #ffffff;
}
.faq-row[open] .icon {
  transform: rotate(45deg);
  background: var(--brand-red, #ed1c24);
  color: #ffffff;
}
.faq-answer {
  padding: 0 24px 22px;
  border-top: 1px solid #f8fafc;
}
.faq-answer p {
  font-size: 13.5px;
  color: #64748b;
  line-height: 1.7;
  margin: 12px 0 0;
}

/* Call to Action Banner */
.cta-banner-strip {
  padding: 0 0 90px;
}
.cta-inner {
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
  border-radius: 18px;
  padding: 50px 48px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 36px;
  color: #ffffff;
  border: 1px solid rgba(255, 255, 255, 0.1);
}
.cta-inner:hover {
  transform: translateY(-4px);
  box-shadow: 0 25px 60px rgba(15, 23, 42, 0.25);
}
.cta-badge {
  background: rgba(255, 255, 255, 0.15);
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.2);
}
.cta-inner h2 {
  font-family: var(--font-display, sans-serif);
  font-size: 28px;
  font-weight: 800;
  margin: 10px 0 8px;
}
.cta-inner p {
  font-size: 14px;
  color: #cbd5e1;
  max-width: 520px;
  margin: 0;
  line-height: 1.6;
}
.cta-buttons {
  display: flex;
  gap: 14px;
  flex-shrink: 0;
}
.btn-ghost-light {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: transparent;
  color: #ffffff;
  border: 1px solid rgba(255, 255, 255, 0.3);
  padding: 13px 22px;
  border-radius: 8px;
  font-weight: 700;
  font-size: 13px;
  text-decoration: none;
}
.btn-ghost-light:hover {
  background: rgba(255, 255, 255, 0.1);
  border-color: #ffffff;
  transform: translateY(-2px);
}

/* Reduced Motion Override */
@media (prefers-reduced-motion: reduce) {
  .card-hover-lift,
  .card-hover-subtle,
  .card-interactive,
  .btn-interactive,
  .visual-wrapper img,
  .cap-icon-box,
  .flow-step-icon,
  .metric-icon-wrap {
    transition: none !important;
    transform: none !important;
  }
  .pulse-dot {
    animation: none !important;
  }
}

/* Responsive Rules */
@media (max-width: 1024px) {
  .split-hero-grid,
  .case-study-box,
  .faq-layout,
  .cta-inner {
    grid-template-columns: 1fr;
  }
  .flow-track {
    grid-template-columns: repeat(2, 1fr);
  }
  .capabilities-grid {
    grid-template-columns: 1fr;
  }
  .metric-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .case-highlights {
    grid-template-columns: 1fr;
    gap: 14px;
  }
  .case-study-meta {
    padding: 38px;
  }
  .cta-inner {
    flex-direction: column;
    align-items: flex-start;
  }
}

@media (max-width: 640px) {
  .flow-track,
  .metric-grid {
    grid-template-columns: 1fr;
  }
  .cta-buttons {
    flex-direction: column;
    width: 100%;
  }
  .cta-buttons a {
    justify-content: center;
  }
  .hero-actions-deck {
    flex-direction: column;
  }
  .hero-actions-deck a {
    width: 100%;
    justify-content: center;
  }
}
</style>

<!-- Scroll Reveal Observer -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  var revealTargets = document.querySelectorAll('[data-reveal]');
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
    revealTargets.forEach(function (el) { observer.observe(el); });
  } else {
    revealTargets.forEach(function (el) { el.classList.add('is-visible'); });
  }
});
</script>

<?php include ('footer.php'); ?>