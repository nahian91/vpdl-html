<?php 
// Page SEO Metadata Variables
$page_title = "UK Building Regulations Guide | Approved Documents A to S | VPDL";
$page_desc  = "Comprehensive guide to UK Building Regulations approval. Explore structural safety (Part A), fire protection (Part B), thermal performance (Part L), and building control routes across England & Wales.";
include ('header.php'); 
?>

  <!-- Schema.org JSON-LD Structured Data: Service + BreadcrumbList + FAQPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Service",
        "@id": "https://vpdl.co.uk/building-regulations-guide.php#service",
        "name": "Building Regulations Compliance & Building Control Packages",
        "serviceType": "Technical Architectural Detailing & Structural Engineering Sign-Off",
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
        "description": "Full technical architectural detailing, structural calculations, and building control packages ensuring statutory compliance with UK Approved Documents A through S."
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://vpdl.co.uk/building-regulations-guide.php#breadcrumb",
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
            "name": "Resources",
            "item": "https://vpdl.co.uk/resources.php"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Building Regulations Guide",
            "item": "https://vpdl.co.uk/building-regulations-guide.php"
          }
        ]
      },
      {
        "@type": "FAQPage",
        "@id": "https://vpdl.co.uk/building-regulations-guide.php#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What is the difference between Planning Permission and Building Regulations?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Planning permission determines whether a development is appropriate in terms of land use, scale, appearance, and impact on neighbors. Building Regulations dictate how the building is physically constructed, setting statutory minimum standards for structural integrity, fire egress, damp protection, ventilation, energy efficiency, and accessibility."
            }
          },
          {
            "@type": "Question",
            "name": "Should I submit a Full Plans application or a Building Notice?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "A Full Plans application involves submitting comprehensive working drawings and structural calculations for checking and approval before construction begins, providing cost certainty and eliminating the risk of having to alter work on-site. A Building Notice allows work to begin 48 hours after submission without pre-approved plans, but carries substantial financial risk if work fails on-site inspections."
            }
          },
          {
            "@type": "Question",
            "name": "Can I choose between Local Authority Building Control (LABC) and a Registered Building Control Approver (RBCA)?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. Private developers and homeowners can appoint either their municipal council's LABC department or an independent Registered Building Control Approver (formerly Approved Inspector). Both have statutory authority to inspect works and issue final Building Regulations Completion Certificates."
            }
          },
          {
            "@type": "Question",
            "name": "What updates have been introduced under the Building Safety Act and Part L?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Recent reforms include stringent dutyholder regimes under the Building Safety Act, higher thermal envelope performance targets and photographic compliance logs under Part L (Conservation of Fuel and Power), mandated overheat mitigation under Part O, and mandatory EV charging provisions under Part S."
            }
          }
        ]
      }
    ]
  }
  </script>

  <!-- =========================================================
       PAGE CONTENT: BUILDING REGULATIONS GUIDE
       ========================================================= -->
  <main class="resource-page-wrapper">

    <!-- Top Light Backdrop: Brand Tint + Architectural Grid -->
    <div class="resource-top-backdrop">
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
            <a href="resources.php">Resources</a>
            <span class="separator" aria-hidden="true">/</span>
            <span class="current" aria-current="page">Building Regulations Guide</span>
          </nav>
        </div>
      </div>

      <!-- Centered Hero Header -->
      <section class="resource-hero centered-hero">
        <div class="container hero-container" data-reveal>
          <h1>UK BUILDING REGULATIONS <span class="highlight-brand">COMPLIANCE GUIDE.</span></h1>
          <p class="hero-lead">
            De-risk your construction delivery from groundwork to completion. Discover how VPDL’s unified architectural designers and chartered structural engineers assemble coordinated Approved Documents packages for seamless Building Control sign-off.
          </p>
        </div>
      </section>
    </div>

    <!-- Main Workspace Layout -->
    <section class="container resource-main-section">
      <div class="resource-grid-layout" data-reveal>

        <!-- Primary Article Stream -->
        <article class="resource-main-panel">

          <!-- Master Visual Dossier Frame -->
          <div class="dossier-media-card">
            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1200&q=80" alt="Architects and structural engineers reviewing building regulations specifications and technical details" loading="eager">
            <div class="dossier-media-footer">
              <span class="media-meta-tag">Building Control Dossier &middot; Approved Documents A–S</span>
              <span class="media-meta-date">Current UK Building Standards</span>
            </div>
          </div>

          <!-- Editorial Summary -->
          <div class="editorial-summary">
            <h2>The Technical Bridge Between Architectural Vision &amp; On-Site Safety</h2>
            <p>
              While planning permission evaluates external appearance and community context, <strong>UK Building Regulations</strong> govern the physical, structural, and environmental performance of the building. Compliance is mandatory for extensions, conversions, structural knock-throughs, and new developments.
            </p>
            <p style="margin-top: 14px;">
              Carrying out construction work without Building Control notification is unlawful and can lead to costly enforcement notices, uninsurable assets, and unsellable properties. At VPDL, we eliminate translation gaps between disciplines by authoring 1:20 construction details, NBS specifications, and Eurocode structural calculation books in-house.
            </p>
          </div>

          <!-- Section 01: Core Approved Documents Matrix -->
          <div class="dossier-section">
            <div class="dossier-section-head">
              <span class="mono-idx">01</span>
              <div>
                <h3>Essential Approved Documents Breakdown</h3>
                <p>The primary statutory schedules enforced on residential and commercial building sites.</p>
              </div>
            </div>

            <div class="dossier-matrix">
              <!-- Part A -->
              <div class="matrix-cell">
                <span class="cell-label">Approved Document A</span>
                <h4>Structure &amp; Foundations</h4>
                <p>Ensures the building transfers vertical and lateral loads safely into the subsoil. Covers strip footings, raft slabs, steel box frames, universal beams (RSJs), padstone sizing, and chimney breast removals.</p>
              </div>

              <!-- Part B -->
              <div class="matrix-cell">
                <span class="cell-label">Approved Document B</span>
                <h4>Fire Safety &amp; Egress</h4>
                <p>Specifies protected stairways, fire-resisting doors (FD30), mains-wired heat/smoke alarms, escape windows, sprinkler systems, and boundary fire-spread separation to protect occupants.</p>
              </div>

              <!-- Part L -->
              <div class="matrix-cell">
                <span class="cell-label">Approved Document L</span>
                <h4>Conservation of Fuel &amp; Power</h4>
                <p>Mandates strict U-values for cavity walls, floor insulation, and high-performance glazing. Includes BREL compliance reports, air permeability testing, and photographic evidence of thermal detailing.</p>
              </div>

              <!-- Part E & F -->
              <div class="matrix-cell">
                <span class="cell-label">Approved Documents E &amp; F</span>
                <h4>Acoustics &amp; Ventilation</h4>
                <p>Regulates airborne and impact sound insulation between separating floors and party walls (Part E), alongside trickle vents, continuous mechanical extract (MEV), and background ventilation (Part F).</p>
              </div>
            </div>
          </div>

          <!-- Section 02: Building Control Approval Routes -->
          <div class="dossier-section">
            <div class="dossier-section-head">
              <span class="mono-idx">02</span>
              <div>
                <h3>Building Control Approval Pathways</h3>
                <p>Selecting the optimal statutory submission route for your project scale and complexity.</p>
              </div>
            </div>

            <div class="comparison-dual-deck">
              <!-- Full Plans -->
              <div class="comparison-deck-card deck-recommended">
                <div class="deck-badge">VPDL Standard &middot; Recommended</div>
                <h4>Full Plans Application</h4>
                <p class="deck-desc">Comprehensive working drawings, 1:20 junctions, material schedules, and chartered structural calculations are submitted for assessment prior to work starting on site.</p>
                <ul class="deck-checklist">
                  <li><strong>Complete Cost Certainty:</strong> Contractors price fixed tenders against pre-checked drawings.</li>
                  <li><strong>Statutory Notice of Approval:</strong> Legal confirmation of compliance before ground is broken.</li>
                  <li><strong>Minimal On-Site Risk:</strong> Eliminates unexpected variation claims or remedial demolition.</li>
                </ul>
              </div>

              <!-- Building Notice -->
              <div class="comparison-deck-card">
                <div class="deck-badge-subtle">Fast-Track &middot; High Risk</div>
                <h4>Building Notice Procedure</h4>
                <p class="deck-desc">Work starts 48 hours after submitting a notice without pre-approved architectural or structural packs. Inspectors evaluate compliance directly during on-site inspections.</p>
                <ul class="deck-checklist">
                  <li><strong>Immediate Site Start:</strong> Avoids the 5 to 8 week plan-checking period.</li>
                  <li><strong>Severe Financial Exposure:</strong> If inspector rejects work, walls or steels must be redone.</li>
                  <li><strong>Limited Suitability:</strong> Prohibited near public sewers or for commercial/complex works.</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Section 03: Inspection Milestone Lifecycle -->
          <div class="dossier-section">
            <div class="dossier-section-head">
              <span class="mono-idx">03</span>
              <div>
                <h3>Mandatory Statutory Inspection Stages</h3>
                <p>Critical site milestones where the appointed Building Control surveyor must inspect the physical work.</p>
              </div>
            </div>

            <div class="inspection-timeline-grid">
              <div class="inspection-node">
                <span class="node-num">01</span>
                <strong>Excavations &amp; Foundations</strong>
                <p>Inspection of ground bearing, trench depth, and proximity to trees before concrete pour.</p>
              </div>
              <div class="inspection-node">
                <span class="node-num">02</span>
                <strong>Damp-Proofing &amp; Oversite</strong>
                <p>Verification of DPC layers, DPM membranes, radon barriers, and subfloor void ventilation.</p>
              </div>
              <div class="inspection-node">
                <span class="node-num">03</span>
                <strong>Structural Steel &amp; Timbers</strong>
                <p>Checking steel beam sizes, padstone bearings, timber joist sizes, and restraint straps before boarding.</p>
              </div>
              <div class="inspection-node">
                <span class="node-num">04</span>
                <strong>Drainage &amp; Pre-Backfill</strong>
                <p>Air or water testing on foul and surface water pipe runs, gradients, and inspection chambers.</p>
              </div>
              <div class="inspection-node">
                <span class="node-num">05</span>
                <strong>Final Completion</strong>
                <p>Full operational audit of fire alarms, balustrade heights, ventilation, and insulation sign-off.</p>
              </div>
            </div>
          </div>

          <!-- Section 04: FAQ Accordion -->
          <div class="dossier-section" style="border-bottom: none;">
            <div class="dossier-section-head">
              <span class="mono-idx">04</span>
              <div>
                <h3>Building Regulations Q&amp;A</h3>
                <p>Common questions regarding approvals, certifications, and compliance.</p>
              </div>
            </div>

            <div class="faq-accordion">
              <div class="faq-item is-open">
                <button type="button" class="faq-trigger" aria-expanded="true" onclick="toggleDossierFaq(this)">
                  <span class="faq-num">Q.1</span>
                  <span class="faq-title">What is the difference between Planning Permission and Building Regulations?</span>
                  <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-pane" style="max-height: none;">
                  <p>
                    Planning permission determines whether a development is appropriate in terms of land use, scale, appearance, and impact on neighbors. Building Regulations dictate how the building is physically constructed, setting statutory minimum standards for structural integrity, fire egress, damp protection, ventilation, energy efficiency, and accessibility.
                  </p>
                </div>
              </div>

              <div class="faq-item">
                <button type="button" class="faq-trigger" aria-expanded="false" onclick="toggleDossierFaq(this)">
                  <span class="faq-num">Q.2</span>
                  <span class="faq-title">Should I submit a Full Plans application or a Building Notice?</span>
                  <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-pane">
                  <p>
                    A Full Plans application involves submitting comprehensive working drawings and structural calculations for checking and approval before construction begins, providing cost certainty and eliminating the risk of having to alter work on-site. A Building Notice allows work to begin 48 hours after submission without pre-approved plans, but carries substantial financial risk if work fails on-site inspections.
                  </p>
                </div>
              </div>

              <div class="faq-item">
                <button type="button" class="faq-trigger" aria-expanded="false" onclick="toggleDossierFaq(this)">
                  <span class="faq-num">Q.3</span>
                  <span class="faq-title">Can I choose between Local Authority Building Control (LABC) and an RBCA?</span>
                  <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-pane">
                  <p>
                    Yes. Private developers and homeowners can appoint either their municipal council's LABC department or an independent Registered Building Control Approver (formerly Approved Inspector). Both have statutory authority to inspect works and issue final Building Regulations Completion Certificates.
                  </p>
                </div>
              </div>

              <div class="faq-item">
                <button type="button" class="faq-trigger" aria-expanded="false" onclick="toggleDossierFaq(this)">
                  <span class="faq-num">Q.4</span>
                  <span class="faq-title">What happens if building work was completed without Building Regulations approval?</span>
                  <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-pane">
                  <p>
                    If unauthorized work was carried out, property owners must apply for a Regularisation Certificate from the Local Authority. This typically involves opening up completed structures, exposing foundations or steels for destructive inspection, and providing retrospective structural calculation books before a certificate can be granted.
                  </p>
                </div>
              </div>
            </div>
          </div>

        </article>

        <!-- Sticky Sidebar Navigation -->
        <aside class="service-sidebar">
          <h4>Practice Resources</h4>
          <nav class="sidebar-directory">
            <a href="permitted-development-rights.php">
              <div class="dir-meta">
                <span class="dir-code">PDR</span>
                <span class="dir-name">Permitted Development Rights</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <a href="building-regulations-guide.php" class="active">
              <div class="dir-meta">
                <span class="dir-code">BRG</span>
                <span class="dir-name">Building Regulations Guide</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <a href="party-wall-procedures.php">
              <div class="dir-meta">
                <span class="dir-code">PWR</span>
                <span class="dir-name">Party Wall Act 1996 Procedures</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <a href="process.php">
              <div class="dir-meta">
                <span class="dir-code">WFC</span>
                <span class="dir-name">Our 8-Step Project Workflow</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <a href="fees.php">
              <div class="dir-meta">
                <span class="dir-code">FEE</span>
                <span class="dir-name">Tariffs &amp; Free Consultations</span>
              </div>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
          </nav>

          <!-- Direct Callout Action Panel -->
          <div class="dossier-inquiry-box">
            <span class="box-kicker">Technical Approval Desk</span>
            <h5>Require Building Regs Drawings &amp; Steels?</h5>
            <p>Send our integrated design team your planning drawings for a complimentary Building Control package review.</p>
            <a class="btn-brand-submit" href="consultation.php" style="width: 100%;">
              <span>Book Technical Consultation</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </a>
          </div>
        </aside>

      </div>
    </section>
  </main>

  <style>
    /* =========================================================
       BUILDING REGULATIONS GUIDE STYLESHEET (VPDL PALETTE)
       ========================================================= */
    :root {
      --vpdl-red: #E11D2A;         /* Primary Accent & CTAs */
      --vpdl-purple: #E11D2A;      /* Secondary Corporate Accent */
      --vpdl-blue: #4F83B7;        /* Technical / Highlight Accent */
      --vpdl-black: #111827;       /* Primary Typography & Headers */
      --vpdl-muted: #64748B;
      --vpdl-border: #E2E8F0;
      --vpdl-surface: #FFFFFF;
      --vpdl-bg-canvas: #F8FAFC;
    }

    .resource-page-wrapper {
      background: var(--vpdl-bg-canvas);
      color: var(--vpdl-black);
      position: relative;
      overflow-x: hidden;
    }

    /* Top Ambient Backdrop */
    .resource-top-backdrop {
      position: relative;
      padding-top: 28px;
      padding-bottom: 40px;
      background: 
        radial-gradient(circle at 45% -10%, rgba(225, 29, 42, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 75% 20%, rgba(107, 91, 149, 0.08) 0%, transparent 45%),
        linear-gradient(to bottom, #ffffff 0%, #f8fafc 100%);
      border-bottom: 1px solid var(--vpdl-border);
    }

    .resource-top-backdrop::before {
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

    /* Centered Glassmorphic Breadcrumbs */
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
    .hero-lead {
      color: var(--vpdl-muted);
      font-size: 16px;
      max-width: 680px;
      line-height: 1.75;
      margin: 0 auto;
    }

    /* Layout Grids */
    .resource-main-section {
      padding-top: 50px;
      padding-bottom: 96px;
    }
    .resource-grid-layout {
      display: grid;
      grid-template-columns: 1fr 340px;
      gap: 40px;
      align-items: start;
    }

    /* Dossier Media Frame */
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
    .resource-main-panel:hover .dossier-media-card img {
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

    /* Editorial Section */
    .editorial-summary h2 {
      font-size: 24px;
      font-weight: 800;
      line-height: 1.3;
      margin: 0 0 14px 0;
      color: var(--vpdl-black);
      letter-spacing: -0.01em;
    }
    .editorial-summary p {
      font-size: 15px;
      line-height: 1.8;
      color: var(--vpdl-muted);
      margin: 0;
    }

    /* Section Subheaders */
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

    /* Matrix Cards */
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
    .cell-label {
      font-size: 10px;
      font-weight: 800;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--vpdl-red);
      display: block;
      margin-bottom: 8px;
    }
    .matrix-cell h4 {
      font-size: 16px;
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0 0 6px 0;
    }
    .matrix-cell p {
      font-size: 13px;
      color: var(--vpdl-muted);
      line-height: 1.6;
      margin: 0;
    }

    /* Comparison Deck (Full Plans vs Building Notice) */
    .comparison-dual-deck {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }
    .comparison-deck-card {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 14px;
      padding: 26px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
      display: flex;
      flex-direction: column;
    }
    .deck-recommended {
      border: 2px solid var(--vpdl-blue);
      box-shadow: 0 8px 25px rgba(79, 131, 183, 0.12);
    }
    .deck-badge {
      display: inline-block;
      align-self: flex-start;
      background: rgba(79, 131, 183, 0.12);
      color: var(--vpdl-blue);
      border: 1px solid rgba(79, 131, 183, 0.25);
      font-size: 10.5px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      padding: 3px 10px;
      border-radius: 9999px;
      margin-bottom: 12px;
    }
    .deck-badge-subtle {
      display: inline-block;
      align-self: flex-start;
      background: rgba(225, 29, 42, 0.08);
      color: var(--vpdl-red);
      border: 1px solid rgba(225, 29, 42, 0.2);
      font-size: 10.5px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      padding: 3px 10px;
      border-radius: 9999px;
      margin-bottom: 12px;
    }
    .comparison-deck-card h4 {
      font-size: 18px;
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0 0 8px 0;
    }
    .deck-desc {
      font-size: 13px;
      color: var(--vpdl-muted);
      line-height: 1.6;
      margin-bottom: 18px;
    }
    .deck-checklist {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 10px;
      border-top: 1px solid var(--vpdl-border);
      padding-top: 16px;
    }
    .deck-checklist li {
      font-size: 12.5px;
      color: #334155;
      line-height: 1.5;
    }

    /* Inspection Milestone Timeline Grid */
    .inspection-timeline-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 14px;
    }
    .inspection-node {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 12px;
      padding: 18px 16px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
      transition: transform 0.3s ease;
    }
    .inspection-node:hover {
      transform: translateY(-4px);
      border-color: #cbd5e1;
    }
    .node-num {
      font-size: 20px;
      font-weight: 800;
      color: var(--vpdl-red);
      display: block;
      margin-bottom: 8px;
    }
    .inspection-node strong {
      display: block;
      font-size: 13px;
      font-weight: 700;
      color: var(--vpdl-black);
      margin-bottom: 6px;
    }
    .inspection-node p {
      font-size: 11.5px;
      color: var(--vpdl-muted);
      line-height: 1.5;
      margin: 0;
    }

    /* FAQ Accordion */
    .faq-accordion {
      display: grid;
      gap: 12px;
    }
    .faq-item {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 12px;
      overflow: hidden;
      transition: border-color 0.3s ease;
    }
    .faq-item.is-open {
      border-color: var(--vpdl-purple);
    }
    .faq-trigger {
      width: 100%;
      padding: 18px 20px;
      display: flex;
      align-items: center;
      gap: 14px;
      text-align: left;
      font-size: 14.5px;
      font-weight: 700;
      color: var(--vpdl-black);
      cursor: pointer;
      background: none;
      border: none;
    }
    .faq-num {
      color: var(--vpdl-red);
      font-size: 11px;
      font-weight: 800;
      letter-spacing: 0.08em;
    }
    .faq-title {
      flex: 1;
    }
    .faq-icon {
      font-size: 18px;
      color: var(--vpdl-muted);
      line-height: 1;
      transition: transform 0.3s ease;
    }
    .faq-item.is-open .faq-icon {
      transform: rotate(45deg);
      color: var(--vpdl-purple);
    }
    .faq-pane {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease;
      padding: 0 20px;
    }
    .faq-pane p {
      font-size: 13px;
      color: var(--vpdl-muted);
      line-height: 1.7;
      margin: 0;
      padding-bottom: 20px;
      border-top: 1px solid #f1f5f9;
      padding-top: 12px;
    }

    /* Sidebar Directory Navigation */
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

    /* Sidebar Inquiry Callout Box */
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

    /* Brand Submit Button */
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

    /* Responsive */
    @media (max-width: 1080px) {
      .inspection-timeline-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }
    @media (max-width: 960px) {
      .resource-grid-layout {
        grid-template-columns: 1fr;
      }
      .dossier-matrix,
      .comparison-dual-deck {
        grid-template-columns: 1fr;
      }
    }
    @media (max-width: 640px) {
      .inspection-timeline-grid {
        grid-template-columns: 1fr;
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