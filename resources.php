<?php
/**
 * Template Name: Technical Project Guidelines & Statutory Directory
 * File: resources.php
 * Practice: Volume Planning and Developments Ltd (VPDL)
 * 
 * High-End Executive Layout:
 * - Technical Drawing Grid Overlay
 * - Sticky In-Page Anchor Dock (PDR · Building Regs · Party Wall · Workflow)
 * - Bento-Box Architecture with Interactive Metric Chips
 * - Approved Documents Matrix with Status Toggles
 * - Direct Bridge to the 60-Second Calculation Desk
 */

$page_title = "Statutory Guidelines & Regulations Directory | VPDL";
$page_desc  = "Comprehensive UK property guidelines covering Permitted Development Class MA, Building Regulations Approved Documents, and the Party Wall etc. Act 1996.";
include('header.php');
?>

<main class="guidelines-page-wrapper">

  <!-- =========================================================
       01. ARCHITECTURAL DATUM HERO
       ========================================================= -->
  <div class="guidelines-top-backdrop">
    <div class="blueprint-grid-overlay" aria-hidden="true"></div>

    <div class="breadcrumb-section">
      <div class="container breadcrumb-container">
        <nav class="breadcrumb-glass" aria-label="Breadcrumb">
          <a href="index.php">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            Practice
          </a>
          <span class="separator" aria-hidden="true">/</span>
          <span class="current" aria-current="page">Technical Guidelines</span>
        </nav>
      </div>
    </div>

    <section class="guidelines-hero centered-hero">
      <div class="container hero-container" data-reveal>
        <div class="hero-kicker-pill">
          <span class="kicker-dot"></span>
          <span>Statutory Framework · UK Building Law 2026 Edition</span>
        </div>
        <h1>PROJECT GUIDELINES. <span class="highlight-brand">STATUTORY CERTAINTY.</span></h1>
        <p class="hero-lead">An authoritative technical reference on town planning orders, Approved Documents, and statutory boundary rights. Written by chartered engineers to de-risk acquisitions, extensions, and commercial conversions.</p>

        <!-- Fast Executive Stat Badges -->
        <div class="hero-stats-band">
          <div class="h-stat-item">
            <strong>56 Days</strong>
            <small>Class MA Prior Approval Window</small>
          </div>
          <div class="h-stat-separator"></div>
          <div class="h-stat-item">
            <strong>16 Codes</strong>
            <small>Approved Documents (A–S)</small>
          </div>
          <div class="h-stat-separator"></div>
          <div class="h-stat-item">
            <strong>1–2 Months</strong>
            <small>Party Wall Notice Protocol</small>
          </div>
          <div class="h-stat-separator"></div>
          <div class="h-stat-item">
            <strong>100%</strong>
            <small>Statutory Compliance Guarantee</small>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- =========================================================
       02. STICKY IN-PAGE SUB-NAVIGATION DOCK
       ========================================================= -->
  <nav class="guidelines-subnav" id="guidelineNav" aria-label="Guidelines jump links">
    <div class="container guidelines-subnav-inner">
      <a class="subnav-chip active" href="#permitted-development">
        <span class="chip-num">01</span> Permitted Development
      </a>
      <a class="subnav-chip" href="#building-regulations">
        <span class="chip-num">02</span> Building Regulations
      </a>
      <a class="subnav-chip" href="#party-wall">
        <span class="chip-num">03</span> Party Wall Act 1996
      </a>
      <a class="subnav-chip" href="#workflow">
        <span class="chip-num">04</span> 8-Step Delivery Workflow
      </a>
      <a class="subnav-cta-btn" href="quote-calculator.php">
        <span>Calculate Project in 60s</span> <i>↗</i>
      </a>
    </div>
  </nav>

  <!-- =========================================================
       03. SECTION 1: PERMITTED DEVELOPMENT (Bento Layout)
       ========================================================= -->
  <section class="guideline-block" id="permitted-development">
    <div class="container">
      
      <div class="section-title-wrap" data-reveal>
        <span class="section-kicker">Town &amp; Country Planning (GPDO)</span>
        <h2>01. PERMITTED DEVELOPMENT RIGHTS (PDR)</h2>
        <p>Execute conversions and residential expansions without full planning permission. All allowances require adherence to statutory limits and formal verification.</p>
      </div>

      <!-- Bento Grid Layout -->
      <div class="bento-grid" data-reveal>
        
        <!-- Bento Big Card: Class MA Commercial to Residential -->
        <div class="bento-card bento-span-2 bento-card-featured">
          <div class="bento-badge-row">
            <span class="tag-accent">Class MA</span>
            <span class="tag-neutral">Use Class E → Residential (C3)</span>
          </div>
          <h3>Commercial-to-Residential Prior Approval</h3>
          <p class="bento-lead">Allows conversion of offices, retail units, and commercial premises into residential flats under a streamlined 56-day statutory determination period.</p>

          <div class="bento-specs-matrix">
            <div class="bento-spec-cell">
              <span class="spec-label">Vacancy Threshold</span>
              <strong class="spec-value">3 Continuous Months</strong>
              <small>Must be demonstrably vacant prior to application</small>
            </div>
            <div class="bento-spec-cell">
              <span class="spec-label">Prior Use Record</span>
              <strong class="spec-value">2 Years Minimum</strong>
              <small>Continuous commercial (Class E) operation</small>
            </div>
            <div class="bento-spec-cell">
              <span class="spec-label">Floor Area Cap</span>
              <strong class="spec-value">1,500 sq m</strong>
              <small>Maximum cumulative floor space per scheme</small>
            </div>
            <div class="bento-spec-cell">
              <span class="spec-label">Habitable Light</span>
              <strong class="spec-value">Mandatory Standard</strong>
              <small>Daylight/sunlight to all living &amp; bedroom spaces</small>
            </div>
          </div>

          <div class="bento-callout-strip">
            <span class="strip-icon">!</span>
            <p><strong>Critical Constraint:</strong> Areas designated under an Article 4 Direction require a standard Full Planning Application. Our directors review council registers prior to acquisition.</p>
          </div>
        </div>

        <!-- Bento Card: Lawful Development Certificate -->
        <div class="bento-card bento-card-light">
          <div class="bento-badge-row">
            <span class="tag-neutral">Sections 191 &amp; 192</span>
          </div>
          <h3>Lawful Development Certificate</h3>
          <p>The definitive legal certificate proving that an existing or proposed alteration does not require planning permission. Vital for future remortgages and buyer conveyancing.</p>
          <ul class="clean-bullet-list">
            <li>Immunity against council enforcement notices</li>
            <li>Conclusive proof for RICS mortgage valuation</li>
            <li>8-week statutory council determination cycle</li>
          </ul>
          <a class="btn-ghost-dark" style="margin-top: 14px;" href="quote-calculator.php?service=planning">Check Certificate Fees →</a>
        </div>

        <!-- Bento Card: Residential Extensions (Class A) -->
        <div class="bento-card">
          <div class="bento-badge-row">
            <span class="tag-neutral">Class A Domestic</span>
          </div>
          <h3>Rear Extensions &amp; Depth Limits</h3>
          <p>Statutory boundary allowances for single-storey home enlargements:</p>
          <div class="micro-stat-row">
            <div class="m-stat">
              <strong>4.0m</strong>
              <small>Standard Attached</small>
            </div>
            <div class="m-stat">
              <strong>8.0m</strong>
              <small>Prior Approval Scheme</small>
            </div>
            <div class="m-stat">
              <strong>4.0m</strong>
              <small>Max Eaves Height</small>
            </div>
          </div>
        </div>

        <!-- Bento Card: Loft Conversions (Class B/C) -->
        <div class="bento-card">
          <div class="bento-badge-row">
            <span class="tag-neutral">Class B Roofspace</span>
          </div>
          <h3>Dormer Volume Allowances</h3>
          <p>Roof alterations and dormer additions without raising ridge heights:</p>
          <div class="micro-stat-row">
            <div class="m-stat">
              <strong>40 m³</strong>
              <small>Terraced Dwellings</small>
            </div>
            <div class="m-stat">
              <strong>50 m³</strong>
              <small>Semi &amp; Detached</small>
            </div>
            <div class="m-stat">
              <strong>0.2m</strong>
              <small>Min Eaves Setback</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================
       04. SECTION 2: BUILDING REGULATIONS (Card Grid)
       ========================================================= -->
  <section class="guideline-block alt-surface" id="building-regulations">
    <div class="container">
      
      <div class="section-title-wrap" data-reveal>
        <span class="section-kicker">Approved Documents Matrix</span>
        <h2>02. UK BUILDING REGULATIONS COMPLIANCE</h2>
        <p>Every structural alteration, habitable conversion, and commercial fit-out must adhere to the Building Act 1984. Below is our practice checklist for technical clearance.</p>
      </div>

      <!-- Approved Documents Grid -->
      <div class="reg-matrix-grid" data-reveal>
        
        <div class="reg-card">
          <div class="reg-code-pill">Part A</div>
          <h4>Structural Stability</h4>
          <p>Ground-bearing foundations, strip trenches, concrete pads, and Eurocode 3 steel beam design under static and dynamic loads.</p>
          <div class="reg-card-meta">Span / 360 Deflection Limit</div>
        </div>

        <div class="reg-card">
          <div class="reg-code-pill">Part B</div>
          <h4>Fire Safety</h4>
          <p>Safe escape routes, 30-minute fire compartmentation (FD30), mains-interlinked alarms, and structural intumescent coatings.</p>
          <div class="reg-card-meta">30–60 Min Fire Resistance</div>
        </div>

        <div class="reg-card">
          <div class="reg-code-pill">Part E</div>
          <h4>Resistance to Sound</h4>
          <p>Acoustic insulation build-ups preventing impact and airborne sound transmission between separating domestic walls and floors.</p>
          <div class="reg-card-meta">Min. 43–45 dB Reduction</div>
        </div>

        <div class="reg-card">
          <div class="reg-code-pill">Part K</div>
          <h4>Protection from Falling</h4>
          <p>Staircase pitch tolerances, minimum 2.0-meter headroom clearances, balustrade guarding heights, and step rise calculations.</p>
          <div class="reg-card-meta">Max. 42° Stair Pitch</div>
        </div>

        <div class="reg-card">
          <div class="reg-code-pill">Part L</div>
          <h4>Conservation of Fuel &amp; Power</h4>
          <p>Thermal insulation specs, strict U-value limits on fabric elements, thermal bridging details, and whole-house SAP calculations.</p>
          <div class="reg-card-meta">U-Values: 0.18 Roof / 0.18 Wall</div>
        </div>

        <div class="reg-card">
          <div class="reg-code-pill">Part M</div>
          <h4>Access to Buildings</h4>
          <p>Level step-free entrance thresholds, door clear-opening widths, ground-floor WC provisions, and accessible circulation paths.</p>
          <div class="reg-card-meta">DDA &amp; Step-Free Access</div>
        </div>

        <div class="reg-card">
          <div class="reg-code-pill">Part O</div>
          <h4>Overheating Mitigation</h4>
          <p>Dynamic thermal modeling for residential properties, calculating glazing ratios, solar gain limits, and natural purge ventilation.</p>
          <div class="reg-card-meta">Solar G-Value Audits</div>
        </div>

        <div class="reg-card">
          <div class="reg-code-pill">Part P</div>
          <h4>Electrical Safety</h4>
          <p>Certified electrical circuit design, consumer unit isolation, earthing bonding, and Part P certified sign-off documentation.</p>
          <div class="reg-card-meta">BS 7671 18th Edition</div>
        </div>

      </div>

      <!-- Comparative Authority Selector -->
      <div class="dual-authority-banner" data-reveal>
        <div class="authority-side">
          <div class="auth-tag">Route A</div>
          <h4>Local Authority Building Control (LABC)</h4>
          <p>Administered directly by council officers. We prepare Full Plans submissions, schedule mandatory site hold-point audits, and secure the final Local Authority Completion Certificate.</p>
        </div>
        <div class="auth-divider"></div>
        <div class="authority-side">
          <div class="auth-tag" style="background: var(--vpdl-red); color: #fff;">Route B</div>
          <h4>Private Approved Inspectors (RBI)</h4>
          <p>Privately licensed registered building control approvers. Offers accelerated plan checking (typically 5–7 business days) and commercial scheduling flexibility for rapid on-site inspections.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================
       05. SECTION 3: PARTY WALL ACT 1996 (Notice Protocol)
       ========================================================= -->
  <section class="guideline-block" id="party-wall">
    <div class="container">
      
      <div class="section-title-wrap" data-reveal>
        <span class="section-kicker">Statutory Boundary Law</span>
        <h2>03. PARTY WALL ETC. ACT 1996 PROCEDURES</h2>
        <p>A legally binding statutory procedure to protect building owners and adjoining neighbors during structural works, avoiding costly court injunctions.</p>
      </div>

      <div class="party-wall-split" data-reveal>
        
        <!-- Left: Statutory Notice Types -->
        <div class="notices-timeline-column">
          
          <div class="notice-card-interactive">
            <div class="notice-index-badge">Section 1</div>
            <div class="notice-content">
              <div class="notice-title-row">
                <h4>Line of Junction Notice</h4>
                <span class="notice-time-pill">1 Month Notice</span>
              </div>
              <p>Served when constructing a new wall directly astride the boundary line or building up to the boundary on your own land.</p>
            </div>
          </div>

          <div class="notice-card-interactive">
            <div class="notice-index-badge">Section 2</div>
            <div class="notice-content">
              <div class="notice-title-row">
                <h4>Party Structure Notice</h4>
                <span class="notice-time-pill">2 Months Notice</span>
              </div>
              <p>Mandatory when cutting into a shared party wall to insert steel universal beams (RSJs), removing internal chimney breasts, or underpinning party walls.</p>
            </div>
          </div>

          <div class="notice-card-interactive">
            <div class="notice-index-badge">Section 6</div>
            <div class="notice-content">
              <div class="notice-title-row">
                <h4>Adjacent Excavation Notice</h4>
                <span class="notice-time-pill">1 Month Notice</span>
              </div>
              <p>Required when excavating foundations deeper than neighboring footings within 3 meters, or within 6 meters where a 45° angle plane is met.</p>
            </div>
          </div>

        </div>

        <!-- Right: Legal Protocol & Schedule of Condition Box -->
        <div class="party-wall-aside">
          <div class="aside-framed-box">
            <div class="mono-tag" style="margin-bottom: 10px;">Essential Safeguard</div>
            <h3>Schedule of Condition Survey</h3>
            <p>Before construction begins, our party wall surveyors conduct a rigorous photographic and written audit of all adjoining properties. Every existing hairline crack is cataloged to prevent spurious damage claims during construction.</p>

            <div class="aside-feature-checklist">
              <div class="afc-item">
                <span class="afc-check">✓</span>
                <span>Pre-commencement high-resolution photographic index</span>
              </div>
              <div class="afc-item">
                <span class="afc-check">✓</span>
                <span>Legally binding Section 10 Party Wall Award drafting</span>
              </div>
              <div class="afc-item">
                <span class="afc-check">✓</span>
                <span>Agreed Surveyor or Building Owner Surveyor representation</span>
              </div>
            </div>

            <div style="margin-top: 22px;">
              <a class="btn-calc-fast" style="width: 100%; justify-content: center;" href="quote-calculator.php?service=party-wall">
                <span>Calculate Party Wall Fees</span>
                <span class="calc-pill-time">60s</span>
                <i>↗</i>
              </a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================
       06. SECTION 4: 8-STEP WORKFLOW (Architectural Timeline)
       ========================================================= -->
  <section class="guideline-block alt-surface" id="workflow">
    <div class="container">
      
      <div class="section-head-centered" data-reveal>
        <span class="section-kicker">Delivery Framework</span>
        <h2>04. OUR 8-STEP PROJECT WORKFLOW</h2>
        <p>A disciplined, multidisciplinary engineering roadmap taking projects from initial measured laser survey through to final Building Control sign-off.</p>
      </div>

      <!-- 8-Step Interactive Timeline Deck -->
      <div class="timeline-deck" data-reveal>
        
        <div class="timeline-card">
          <div class="t-card-num">01</div>
          <h4>Laser Measured Survey</h4>
          <p>Millimeter-accurate 3D point-cloud and laser surveying documenting internal floor plates, ceiling joist levels, and exterior elevations.</p>
          <span class="t-card-stage">RIBA Stage 0–1</span>
        </div>

        <div class="timeline-card">
          <div class="t-card-num">02</div>
          <h4>Architectural BIM Concepts</h4>
          <p>2D layouts, spatial flow modeling, and photorealistic 3D external visualizations to explore options with clients and stakeholders.</p>
          <span class="t-card-stage">RIBA Stage 2</span>
        </div>

        <div class="timeline-card">
          <div class="t-card-num">03</div>
          <h4>Planning Submissions</h4>
          <p>Drafting formal submission packs, Design &amp; Access Statements, and managing LPA case officer negotiations through to determination.</p>
          <span class="t-card-stage">RIBA Stage 3</span>
        </div>

        <div class="timeline-card">
          <div class="t-card-num">04</div>
          <h4>Party Wall Notices</h4>
          <p>Serving statutory Section 1, 2, and 6 notices to adjoining owners and publishing legally binding Party Wall Awards.</p>
          <span class="t-card-stage">Statutory Act</span>
        </div>

        <div class="timeline-card">
          <div class="t-card-num">05</div>
          <h4>Eurocode Calculations</h4>
          <p>Comprehensive calculations for steel universal beams, moment plates, foundation trenches, and timber trimmers under Eurocodes.</p>
          <span class="t-card-stage">RIBA Stage 4</span>
        </div>

        <div class="timeline-card">
          <div class="t-card-num">06</div>
          <h4>Building Control Sign-Off</h4>
          <p>Coordinating architectural and structural packages to clear Approved Documents Part A through P with LABC or private inspectors.</p>
          <span class="t-card-stage">Statutory Approval</span>
        </div>

        <div class="timeline-card">
          <div class="t-card-num">07</div>
          <h4>Tender Procurement &amp; JCT</h4>
          <p>Preparing contractor tender packages, auditing contractor insurance and references, and drafting JCT Minor Works contracts.</p>
          <span class="t-card-stage">RIBA Stage 5</span>
        </div>

        <div class="timeline-card">
          <div class="t-card-num">08</div>
          <h4>Site Milestone Audits</h4>
          <p>Chartered engineers inspect and certify foundation trenches, steel frame bolt torquing, and padstone alignments prior to concrete pours.</p>
          <span class="t-card-stage">RIBA Stage 6</span>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================
       07. INTERACTIVE FAST ESTIMATOR BRIDGE
       ========================================================= -->
  <section class="inter-section-cta-zone" style="margin-top: 50px;">
    <div class="container">
      <div class="inter-cta-banner" data-reveal>
        <div class="inter-cta-copy">
          <div class="mono-tag" style="margin-bottom: 8px;">Instant Cost Breakdown</div>
          <h3>CHECK STATUTORY &amp; ENGINEERING FEES IN 60 SECONDS</h3>
          <p>Select your property type, extension parameters, and required disciplines to get an itemized professional fee estimate instantly.</p>
        </div>
        <div class="inter-cta-actions">
          <a class="btn-calc-fast" href="quote-calculator.php">
            <span>Calculate in 60s</span>
            <span class="calc-pill-time">Free</span>
            <i>↗</i>
          </a>
          <a class="btn-ghost-dark" href="consultation.php">Book Free Consultation</a>
        </div>
      </div>
    </div>
  </section>

</main>

<style>
  /* =========================================================
     EXECUTIVE GUIDELINES DIRECTORY STYLES
     ========================================================= */
  :root {
    --vpdl-red: #E11D2A;
    --vpdl-purple: #6B5B95;
    --vpdl-blue: #4F83B7;
    --vpdl-black: #111827;
    --vpdl-muted: #64748B;
    --vpdl-border: #E2E8F0;
    --vpdl-surface: #FFFFFF;
    --vpdl-bg-canvas: #F8FAFC;
    --nav-height: 72px;
  }

  .guidelines-page-wrapper {
    background: var(--vpdl-bg-canvas);
    color: var(--vpdl-black);
    padding-bottom: 90px;
    position: relative;
  }

  /* 1. Header Datum & Hero */
  .guidelines-top-backdrop {
    position: relative;
    padding-top: 28px;
    padding-bottom: 50px;
    background: 
      radial-gradient(circle at 45% -10%, rgba(225, 29, 42, 0.08) 0%, transparent 50%),
      radial-gradient(circle at 75% 20%, rgba(107, 91, 149, 0.08) 0%, transparent 45%),
      linear-gradient(to bottom, #ffffff 0%, #f8fafc 100%);
    border-bottom: 1px solid var(--vpdl-border);
  }
  .blueprint-grid-overlay {
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

  .centered-hero {
    text-align: center;
    position: relative;
    z-index: 2;
    padding: 30px 0 10px;
  }
  .hero-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  .hero-kicker-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    padding: 5px 14px;
    border-radius: 999px;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: var(--vpdl-black);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
    margin-bottom: 16px;
  }
  .kicker-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--vpdl-red);
  }

  .centered-hero h1 {
    font-size: clamp(32px, 4vw, 48px);
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
    max-width: 740px;
    margin: 0 auto 34px;
    line-height: 1.7;
  }

  /* Executive Stat Badges */
  .hero-stats-band {
    display: inline-flex;
    align-items: center;
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    border-radius: 14px;
    padding: 16px 30px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.03);
    gap: 24px;
  }
  .h-stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .h-stat-item strong {
    font-size: 17px;
    font-weight: 800;
    color: var(--vpdl-black);
    line-height: 1.2;
  }
  .h-stat-item small {
    font-size: 11px;
    color: var(--vpdl-muted);
    margin-top: 2px;
  }
  .h-stat-separator {
    width: 1px;
    height: 32px;
    background: var(--vpdl-border);
  }

  /* =========================================================
     2. STICKY IN-PAGE SUBNAV DOCK
     ========================================================= */
  .guidelines-subnav {
    position: sticky;
    top: var(--nav-height);
    background: rgba(255, 255, 255, 0.96);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--vpdl-border);
    z-index: 100;
    padding: 10px 0;
    transition: box-shadow 0.2s ease;
  }
  .guidelines-subnav-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    overflow-x: auto;
    scrollbar-width: none;
  }
  .guidelines-subnav-inner::-webkit-scrollbar {
    display: none;
  }
  .subnav-chip {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    border-radius: 999px;
    background: var(--vpdl-bg-canvas);
    border: 1px solid var(--vpdl-border);
    color: var(--vpdl-black);
    font-size: 12.5px;
    font-weight: 700;
    text-decoration: none;
    white-space: nowrap;
    transition: all 0.2s ease;
  }
  .subnav-chip:hover, .subnav-chip.active {
    background: #ffffff;
    border-color: var(--vpdl-red);
    color: var(--vpdl-red);
    box-shadow: 0 4px 12px rgba(225, 29, 42, 0.08);
  }
  .chip-num {
    font-size: 10px;
    font-weight: 800;
    color: var(--vpdl-muted);
  }
  .subnav-chip.active .chip-num {
    color: var(--vpdl-red);
  }
  .subnav-cta-btn {
    background: var(--vpdl-black);
    color: #ffffff !important;
    border-radius: 999px;
    padding: 8px 16px;
    font-size: 12px;
    font-weight: 700;
    text-decoration: none;
    white-space: nowrap;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: background 0.2s ease;
  }
  .subnav-cta-btn:hover {
    background: var(--vpdl-red);
  }

  /* =========================================================
     3. BENTO GRID ARCHITECTURE (Section 1)
     ========================================================= */
  .guideline-block {
    padding: 70px 0;
    border-bottom: 1px solid var(--vpdl-border);
  }
  .guideline-block.alt-surface {
    background: #ffffff;
  }
  .section-title-wrap {
    margin-bottom: 34px;
    max-width: 780px;
  }
  .section-kicker {
    display: block;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: var(--vpdl-red);
    margin-bottom: 6px;
  }
  .section-title-wrap h2 {
    font-size: clamp(24px, 3.2vw, 34px);
    font-weight: 800;
    color: var(--vpdl-black);
    margin: 0 0 10px;
    letter-spacing: -0.01em;
  }
  .section-title-wrap p {
    color: var(--vpdl-muted);
    font-size: 15px;
    line-height: 1.65;
    margin: 0;
  }

  .bento-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }
  .bento-card {
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    border-radius: 16px;
    padding: 28px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .bento-card-featured {
    border-left: 4px solid var(--vpdl-red);
  }
  .bento-span-2 {
    grid-column: span 2;
  }
  .bento-badge-row {
    display: flex;
    gap: 8px;
    margin-bottom: 14px;
  }
  .tag-accent {
    background: var(--vpdl-red);
    color: #ffffff;
    font-size: 10px;
    font-weight: 800;
    padding: 3px 8px;
    border-radius: 4px;
    text-transform: uppercase;
  }
  .tag-neutral {
    background: var(--vpdl-bg-canvas);
    border: 1px solid var(--vpdl-border);
    color: var(--vpdl-black);
    font-size: 10px;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 4px;
    text-transform: uppercase;
  }
  .bento-card h3 {
    font-size: 19px;
    font-weight: 800;
    color: var(--vpdl-black);
    margin: 0 0 10px;
  }
  .bento-lead {
    font-size: 13.5px;
    color: var(--vpdl-muted);
    line-height: 1.6;
    margin: 0 0 22px;
  }

  .bento-specs-matrix {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
    background: var(--vpdl-bg-canvas);
    border: 1px solid var(--vpdl-border);
    border-radius: 12px;
    padding: 18px;
    margin-bottom: 20px;
  }
  .bento-spec-cell {
    display: flex;
    flex-direction: column;
  }
  .spec-label {
    font-size: 10.5px;
    font-weight: 800;
    text-transform: uppercase;
    color: var(--vpdl-muted);
    margin-bottom: 2px;
  }
  .spec-value {
    font-size: 14px;
    font-weight: 800;
    color: var(--vpdl-black);
  }
  .bento-spec-cell small {
    font-size: 11px;
    color: #64748b;
    margin-top: 3px;
    line-height: 1.35;
  }

  .bento-callout-strip {
    display: flex;
    align-items: center;
    gap: 12px;
    background: #fff8f8;
    border: 1px solid rgba(225, 29, 42, 0.2);
    border-radius: 8px;
    padding: 12px 16px;
  }
  .strip-icon {
    width: 22px;
    height: 22px;
    background: var(--vpdl-red);
    color: #ffffff;
    font-size: 12px;
    font-weight: 800;
    border-radius: 50%;
    display: grid;
    place-items: center;
    flex-shrink: 0;
  }
  .bento-callout-strip p {
    font-size: 12.5px;
    color: #475569;
    margin: 0;
    line-height: 1.5;
  }

  .clean-bullet-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 8px;
  }
  .clean-bullet-list li {
    font-size: 13px;
    color: #334155;
    position: relative;
    padding-left: 16px;
    line-height: 1.5;
  }
  .clean-bullet-list li::before {
    content: "•";
    position: absolute;
    left: 0;
    color: var(--vpdl-red);
    font-size: 16px;
    line-height: 1;
  }

  .micro-stat-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-top: 18px;
    padding-top: 14px;
    border-top: 1px solid var(--vpdl-border);
  }
  .m-stat strong {
    font-size: 16px;
    font-weight: 800;
    color: var(--vpdl-black);
    display: block;
  }
  .m-stat small {
    font-size: 11px;
    color: var(--vpdl-muted);
  }

  /* =========================================================
     4. BUILDING REGS MATRIX (Section 2)
     ========================================================= */
  .reg-matrix-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }
  .reg-card {
    background: var(--vpdl-bg-canvas);
    border: 1px solid var(--vpdl-border);
    border-radius: 14px;
    padding: 22px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }
  .reg-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.04);
    background: #ffffff;
  }
  .reg-code-pill {
    display: inline-block;
    background: var(--vpdl-black);
    color: #ffffff;
    font-size: 10.5px;
    font-weight: 800;
    padding: 3px 8px;
    border-radius: 4px;
    margin-bottom: 12px;
    width: fit-content;
  }
  .reg-card h4 {
    font-size: 16px;
    font-weight: 800;
    color: var(--vpdl-black);
    margin: 0 0 8px;
  }
  .reg-card p {
    font-size: 12.5px;
    color: var(--vpdl-muted);
    line-height: 1.6;
    margin: 0 0 16px;
  }
  .reg-card-meta {
    font-size: 11px;
    font-weight: 800;
    color: var(--vpdl-red);
    padding-top: 10px;
    border-top: 1px solid var(--vpdl-border);
    text-transform: uppercase;
    letter-spacing: 0.04em;
  }

  .dual-authority-banner {
    display: grid;
    grid-template-columns: 1fr auto 1fr;
    background: var(--vpdl-bg-canvas);
    border: 1px solid var(--vpdl-border);
    border-radius: 16px;
    padding: 32px 36px;
    margin-top: 40px;
    gap: 30px;
    align-items: center;
  }
  .auth-tag {
    display: inline-block;
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    font-size: 10.5px;
    font-weight: 800;
    padding: 2px 8px;
    border-radius: 4px;
    margin-bottom: 10px;
    text-transform: uppercase;
  }
  .authority-side h4 {
    font-size: 17px;
    font-weight: 800;
    color: var(--vpdl-black);
    margin: 0 0 8px;
  }
  .authority-side p {
    font-size: 13px;
    color: var(--vpdl-muted);
    line-height: 1.6;
    margin: 0;
  }
  .auth-divider {
    width: 1px;
    height: 80px;
    background: var(--vpdl-border);
  }

  /* =========================================================
     5. PARTY WALL TIMELINE & NOTICES (Section 3)
     ========================================================= */
  .party-wall-split {
    display: grid;
    grid-template-columns: 1.4fr 1fr;
    gap: 40px;
    align-items: start;
  }
  .notices-timeline-column {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .notice-card-interactive {
    display: flex;
    gap: 18px;
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    border-radius: 14px;
    padding: 20px 24px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
    align-items: flex-start;
  }
  .notice-index-badge {
    background: var(--vpdl-black);
    color: #ffffff;
    font-size: 11px;
    font-weight: 800;
    padding: 6px 10px;
    border-radius: 6px;
    white-space: nowrap;
    margin-top: 2px;
  }
  .notice-content {
    flex-grow: 1;
  }
  .notice-title-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 4px;
    gap: 10px;
  }
  .notice-title-row h4 {
    font-size: 15px;
    font-weight: 800;
    color: var(--vpdl-black);
    margin: 0;
  }
  .notice-time-pill {
    background: rgba(225, 29, 42, 0.08);
    color: var(--vpdl-red);
    border: 1px solid rgba(225, 29, 42, 0.2);
    font-size: 10px;
    font-weight: 800;
    padding: 2px 8px;
    border-radius: 4px;
    white-space: nowrap;
  }
  .notice-content p {
    font-size: 12.5px;
    color: var(--vpdl-muted);
    line-height: 1.6;
    margin: 0;
  }

  .aside-framed-box {
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.02);
  }
  .aside-framed-box h3 {
    font-size: 18px;
    font-weight: 800;
    color: var(--vpdl-black);
    margin: 0 0 10px;
  }
  .aside-framed-box p {
    font-size: 13px;
    color: var(--vpdl-muted);
    line-height: 1.65;
    margin: 0 0 20px;
  }
  .aside-feature-checklist {
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding: 16px 0;
    border-top: 1px solid var(--vpdl-border);
    border-bottom: 1px solid var(--vpdl-border);
  }
  .afc-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 12.5px;
    color: #334155;
    font-weight: 600;
  }
  .afc-check {
    color: var(--vpdl-red);
    font-weight: 800;
  }

  /* =========================================================
     6. 8-STEP DELIVERY TIMELINE (Section 4)
     ========================================================= */
  .timeline-deck {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }
  .timeline-card {
    background: var(--vpdl-bg-canvas);
    border: 1px solid var(--vpdl-border);
    border-radius: 14px;
    padding: 24px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.2s ease;
  }
  .timeline-card:hover {
    transform: translateY(-3px);
    background: #ffffff;
  }
  .t-card-num {
    font-size: 12px;
    font-weight: 800;
    color: var(--vpdl-red);
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    width: 28px;
    height: 28px;
    border-radius: 6px;
    display: grid;
    place-items: center;
    margin-bottom: 14px;
  }
  .timeline-card h4 {
    font-size: 15px;
    font-weight: 800;
    color: var(--vpdl-black);
    margin: 0 0 8px;
    line-height: 1.3;
  }
  .timeline-card p {
    font-size: 12.5px;
    color: var(--vpdl-muted);
    line-height: 1.6;
    margin: 0 0 16px;
  }
  .t-card-stage {
    font-size: 10px;
    font-weight: 800;
    color: var(--vpdl-black);
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    padding: 3px 8px;
    border-radius: 4px;
    width: fit-content;
    text-transform: uppercase;
  }

  /* =========================================================
     RESPONSIVE BREAKPOINTS
     ========================================================= */
  @media (max-width: 1100px) {
    .bento-grid {
      grid-template-columns: 1fr;
    }
    .bento-span-2 {
      grid-column: span 1;
    }
    .reg-matrix-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .timeline-deck {
      grid-template-columns: repeat(2, 1fr);
    }
    .party-wall-split {
      grid-template-columns: 1fr;
    }
    .bento-specs-matrix {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 768px) {
    .hero-stats-band {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
      padding: 18px 20px;
    }
    .h-stat-separator {
      display: none;
    }
    .dual-authority-banner {
      grid-template-columns: 1fr;
      padding: 24px;
    }
    .auth-divider {
      display: none;
    }
    .reg-matrix-grid {
      grid-template-columns: 1fr;
    }
    .timeline-deck {
      grid-template-columns: 1fr;
    }
    .bento-specs-matrix {
      grid-template-columns: 1fr;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // In-Page Scrollspy for Guidelines Subnav
    const sections = document.querySelectorAll('.guideline-block');
    const navChips = document.querySelectorAll('.subnav-chip');

    window.addEventListener('scroll', function () {
      let currentSection = '';
      const scrollPos = window.pageYOffset + 140;

      sections.forEach(sec => {
        const top = sec.offsetTop;
        const height = sec.offsetHeight;
        if (scrollPos >= top && scrollPos < top + height) {
          currentSection = sec.getAttribute('id');
        }
      });

      navChips.forEach(chip => {
        chip.classList.remove('active');
        if (chip.getAttribute('href') === '#' + currentSection) {
          chip.classList.add('active');
        }
      });
    }, { passive: true });
  });
</script>

<?php include('footer.php'); ?>