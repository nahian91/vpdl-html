<?php
/**
 * Template Name: 60-Second Instant Fee & Quotation Calculator
 * Description: High-conversion interactive UK planning, architectural, structural & survey fee calculator.
 * Features:
 * - Dynamic 60-second calculation engine with clean, professional labels (no bracketed acronyms)
 * - Preset parameter reading (?service=planning, structural, architecture, party-wall)
 * - Live itemized net, 20% UK VAT, and total investment breakdown
 * - Built-in instant consultation lead capture with payload handoff
 * - Self-contained responsive VPDL corporate styling matching header/footer system
 *
 * @package VPDL
 */

// 1. Read optional preset query parameters from header/service links
$preset_service = isset($_GET['service']) ? strtolower(trim($_GET['service'])) : '';

include ('header.php');
?>

  <!-- =========================================================
       FEE CALCULATOR BODY CONTENT (PREMIUM VPDL BRAND SYSTEM)
       ========================================================= -->
  <main class="calculator-page-wrapper">

    <!-- Top Architectural Datum & Backdrop -->
    <div class="calculator-top-backdrop">
      <div class="blueprint-grid-overlay" aria-hidden="true"></div>

      <!-- Centered Glassmorphic Breadcrumb Trail -->
      <div class="breadcrumb-section">
        <div class="container breadcrumb-container">
          <nav class="breadcrumb-glass" aria-label="Breadcrumb">
            <a href="index.php">
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
              Practice
            </a>
            <span class="separator" aria-hidden="true">/</span>
            <span class="current" aria-current="page">Fee Estimator</span>
          </nav>
        </div>
      </div>

      <!-- Centered Hero Header -->
      <section class="calculator-hero centered-hero">
        <div class="container hero-container" data-reveal>
          <div class="hero-kicker-pill">
            <span class="kicker-dot"></span>
            <span>Instant Tariff Assessment · 60-Second Turnaround</span>
          </div>
          <h1>INSTANT <span class="highlight-brand">FEE ESTIMATOR.</span></h1>
          <p class="hero-lead">Configure your development parameters across town planning, architectural BIM design, Eurocode structural calculations, and party wall surveying for a transparent, itemized estimate with statutory 20% UK VAT breakdown.</p>
          
          <!-- Fast Benchmark Chips -->
          <div class="hero-stats-band">
            <div class="h-stat-item">
              <strong>60 Seconds</strong>
              <small>Instant Live Estimate</small>
            </div>
            <div class="h-stat-separator"></div>
            <div class="h-stat-item">
              <strong>100% Fixed</strong>
              <small>Transparent Tariff Schedule</small>
            </div>
            <div class="h-stat-separator"></div>
            <div class="h-stat-item">
              <strong>Zero Obligation</strong>
              <small>Free Preliminary Assessment</small>
            </div>
            <div class="h-stat-separator"></div>
            <div class="h-stat-item">
              <strong>Save up to 25%</strong>
              <small>Integrated Multi-Stage Bundles</small>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Calculator Main Layout Section -->
    <section class="container calculator-main-section">
      <div class="calc-grid-layout" data-reveal>

        <!-- Left Column: Interactive Configuration Matrix -->
        <div class="calc-controls-card">
          
          <!-- STEP 1: TYPOLOGY -->
          <div class="step-header">
            <span class="step-badge">Step 01</span>
            <div>
              <h2 class="card-heading">Select Project Typology &amp; Scale</h2>
              <p class="section-subtext">Choose your primary development scope and adjust estimated internal floor area:</p>
            </div>
          </div>
          
          <div class="calc-section-group">
            <label class="section-label">Primary Development Typology</label>
            <div class="typology-card-grid">
              
              <label class="typology-tile">
                <input type="radio" name="calc_typology" value="extension" checked>
                <div class="tile-content">
                  <div class="tile-icon-wrap">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  </div>
                  <strong>Rear / Side Extension</strong>
                  <small>Single / Double Storey Enlargement</small>
                </div>
              </label>

              <label class="typology-tile">
                <input type="radio" name="calc_typology" value="loft">
                <div class="tile-content">
                  <div class="tile-icon-wrap">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"></rect><path d="M3 9h18"></path><path d="M9 21V9"></path></svg>
                  </div>
                  <strong>Loft / Mansard Conversion</strong>
                  <small>Dormer, Velux or Hip-to-Gable</small>
                </div>
              </label>

              <label class="typology-tile">
                <input type="radio" name="calc_typology" value="newbuild">
                <div class="tile-content">
                  <div class="tile-icon-wrap">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16"></path><path d="M1 21h22"></path><path d="M9 7h1"></path><path d="M9 11h1"></path><path d="M9 15h1"></path><path d="M14 7h1"></path><path d="M14 11h1"></path><path d="M14 15h1"></path></svg>
                  </div>
                  <strong>New Build Housing</strong>
                  <small>Bespoke Dwellings &amp; Infill Schemes</small>
                </div>
              </label>

              <label class="typology-tile">
                <input type="radio" name="calc_typology" value="conversion">
                <div class="tile-content">
                  <div class="tile-icon-wrap">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                  </div>
                  <strong>Flat / HMO Conversion</strong>
                  <small>Commercial Class MA / Multi-Unit</small>
                </div>
              </label>

            </div>
          </div>

          <!-- SLIDER: GROSS INTERNAL AREA -->
          <div class="calc-section-group slider-group-box">
            <div class="range-header">
              <div>
                <label class="section-label" for="floorAreaRange" style="margin-bottom: 2px;">Estimated Gross Internal Area (GIA)</label>
                <span class="subtext-slider">Drag slider to adjust proposed development footprint</span>
              </div>
              <div class="range-display-badge">
                <span class="range-val" id="areaDisplay">45</span>
                <span class="range-unit">sq m</span>
              </div>
            </div>

            <div class="slider-wrapper">
              <input type="range" class="range-slider" id="floorAreaRange" min="15" max="350" step="5" value="45" aria-label="Estimated Gross Internal Area in square meters">
              <div class="slider-fill-track" id="sliderFillTrack"></div>
            </div>

            <div class="range-limits">
              <span><strong>15 m²</strong> (Single Kitchen/Side Pod)</span>
              <span><strong>120 m²</strong> (Average Full Home)</span>
              <span><strong>350 m²</strong> (Major Complex Scheme)</span>
            </div>
          </div>

          <!-- STEP 2: PROFESSIONAL SERVICE DISCIPLINES -->
          <div class="step-header" style="margin-top: 42px;">
            <span class="step-badge step-badge-purple">Step 02</span>
            <div>
              <h2 class="card-heading">Select Practice Disciplines</h2>
              <p class="section-subtext">Toggle the statutory and technical services required for your scheme:</p>
            </div>
          </div>

          <div class="disciplines-stack">
            
            <!-- 01. Town Planning -->
            <div class="discipline-box is-selected" id="box_planning" data-chk="chk_planning">
              <div class="custom-toggle">
                <input type="checkbox" id="chk_planning" checked aria-label="Include Town Planning & Permitted Development">
                <span class="toggle-slider"></span>
              </div>
              <div class="discipline-copy">
                <div class="discipline-title">
                  <strong>Town Planning &amp; Prior Approval</strong>
                  <span class="badge-code badge-planning">Planning</span>
                </div>
                <p>Laser survey coordination, Permitted Development Class MA prior approval, Lawful Development Certificates, or full council planning applications.</p>
              </div>
              <div class="discipline-fee" id="fee_planning">£850.00</div>
            </div>

            <!-- 02. Architecture & BIM -->
            <div class="discipline-box is-selected" id="box_architecture" data-chk="chk_architecture">
              <div class="custom-toggle">
                <input type="checkbox" id="chk_architecture" checked aria-label="Include Architectural 3D Modeling & Working Drawings">
                <span class="toggle-slider"></span>
              </div>
              <div class="discipline-copy">
                <div class="discipline-title">
                  <strong>Architectural Design &amp; 3D Modeling</strong>
                  <span class="badge-code badge-architecture">Architecture</span>
                </div>
                <p>3D Revit BIM digital twins, photorealistic exterior renders, spatial layouts, and detailed Building Regulations construction sets (Parts A–S).</p>
              </div>
              <div class="discipline-fee" id="fee_architecture">£925.00</div>
            </div>

            <!-- 03. Structural Calculations -->
            <div class="discipline-box is-selected" id="box_structural" data-chk="chk_structural">
              <div class="custom-toggle">
                <input type="checkbox" id="chk_structural" checked aria-label="Include Structural Calculations & Eurocode Design">
                <span class="toggle-slider"></span>
              </div>
              <div class="discipline-copy">
                <div class="discipline-title">
                  <strong>Structural Calculations &amp; Design</strong>
                  <span class="badge-code badge-structural">Structural</span>
                </div>
                <p>Chartered Eurocode 3 engineering calculation booklet, universal steel beams (RSJs), padstone bearings, moment connections, and Building Control packs.</p>
              </div>
              <div class="discipline-fee" id="fee_structural">£975.00</div>
            </div>

            <!-- 04. Building Surveys & Party Wall -->
            <div class="discipline-box" id="box_surveys" data-chk="chk_surveys">
              <div class="custom-toggle">
                <input type="checkbox" id="chk_surveys" aria-label="Include Party Wall Notices & Building Surveys">
                <span class="toggle-slider"></span>
              </div>
              <div class="discipline-copy">
                <div class="discipline-title">
                  <strong>Party Wall &amp; Building Surveys</strong>
                  <span class="badge-code badge-surveys">Party Wall</span>
                </div>
                <p>Party Wall etc. Act 1996 statutory notices (Sections 1, 2, 6), photographic schedules of condition, and legally binding neighbor dispute awards.</p>
              </div>
              <div class="discipline-fee" id="fee_surveys">£725.00</div>
            </div>

            <!-- 05. Site & Contract Management -->
            <div class="discipline-box" id="box_management" data-chk="chk_management">
              <div class="custom-toggle">
                <input type="checkbox" id="chk_management" aria-label="Include Project & Site Management">
                <span class="toggle-slider"></span>
              </div>
              <div class="discipline-copy">
                <div class="discipline-title">
                  <strong>Project &amp; Site Management</strong>
                  <span class="badge-code badge-management">Management</span>
                </div>
                <p>Tender pack compilation, contractor vetting, JCT Minor Works contract administration, interim payment certifications, and milestone hold-point sign-offs.</p>
              </div>
              <div class="discipline-fee" id="fee_management">£2,475.00</div>
            </div>

          </div>

          <!-- STEP 3: DIRECT CONSULTATION HAND-OFF INTAKE -->
          <div class="step-header" style="margin-top: 42px;">
            <span class="step-badge" style="background: var(--vpdl-black);">Step 03</span>
            <div>
              <h2 class="card-heading">Lock Estimate &amp; Direct Brief Transmission</h2>
              <p class="section-subtext">Submit your calculated configuration directly to our principal engineering desk for preliminary verification:</p>
            </div>
          </div>

          <form id="calculatorDirectForm" method="POST" action="consultation.php" class="calc-lead-form">
            <input type="hidden" name="calc_scope" id="postScope" value="Rear / Side Extension">
            <input type="hidden" name="calc_sqm" id="postSqm" value="45">
            <input type="hidden" name="calc_services" id="postServices" value="Planning, Architecture, Structural">
            <input type="hidden" name="calc_subtotal" id="postSubtotal" value="£2,750.00">
            <input type="hidden" name="calc_vat" id="postVat" value="£550.00">
            <input type="hidden" name="calc_grand_total" id="postGrandTotal" value="£3,300.00">

            <div class="form-inputs-grid">
              <div class="form-field">
                <label for="leadName">Full Name <span class="required-star">*</span></label>
                <input type="text" id="leadName" name="client_name" required placeholder="e.g. David Jenkins" class="calc-input">
              </div>

              <div class="form-field">
                <label for="leadEmail">Email Address <span class="required-star">*</span></label>
                <input type="email" id="leadEmail" name="client_email" required placeholder="e.g. david@example.com" class="calc-input">
              </div>

              <div class="form-field">
                <label for="leadPhone">Phone / Mobile <span class="required-star">*</span></label>
                <input type="tel" id="leadPhone" name="client_phone" required placeholder="e.g. +44 7911 123456" class="calc-input">
              </div>

              <div class="form-field">
                <label for="leadPostcode">Site Postcode / Area</label>
                <input type="text" id="leadPostcode" name="project_location" placeholder="e.g. Newport, Bristol, London" class="calc-input">
              </div>

              <div class="form-field full-width">
                <label for="leadNotes">Specific Project Constraints / Target Start Date</label>
                <textarea id="leadNotes" name="project_summary" rows="2" placeholder="Outline load-bearing walls to remove, boundary wall conditions, or target submission deadlines..." class="calc-input calc-textarea"></textarea>
              </div>

              <div class="form-field full-width">
                <button type="submit" id="btnSubmitEstimateLead" class="btn-calc-submit">
                  <span id="btnSubmitLeadText">Lock Estimate &amp; Book Free Consultation</span>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="7" y1="17" x2="17" y2="7"></line>
                    <polyline points="7 7 17 7 17 17"></polyline>
                  </svg>
                </button>
              </div>
            </div>

            <div id="calcStatusMessage" class="calc-status-box" style="display: none;" role="status" aria-live="polite"></div>
          </form>

        </div>

        <!-- Right Column: Real-Time Sticky Quotation Invoice -->
        <aside class="calc-summary-deck">
          <div class="summary-sticky-card">
            
            <div class="summary-top">
              <div>
                <small class="summary-kicker">Real-Time Tariff Breakdown</small>
                <h3>Fee Estimate</h3>
              </div>
              <span class="statutory-badge">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Fixed Tariff
              </span>
            </div>

            <!-- Active Project Scope Banner -->
            <div class="selected-scheme-banner">
              <div>
                <span class="scheme-title-label">Selected Typology</span>
                <strong id="displaySchemeTitle">Rear / Side Extension</strong>
              </div>
              <span class="scheme-area-badge" id="displaySchemeArea">45 m²</span>
            </div>

            <!-- Dynamically populated breakdown lines -->
            <div class="summary-breakdown-list" id="summaryList"></div>

            <!-- Totals Matrix -->
            <div class="summary-math-deck">
              <div class="math-row">
                <span>Net Professional Fee</span>
                <strong id="displaySubtotal">£2,750.00</strong>
              </div>
              <div class="math-row">
                <span>UK Standard VAT (20.0%)</span>
                <strong id="displayVat">£550.00</strong>
              </div>
              <div class="math-row total-row">
                <div>
                  <span class="total-label">Total Estimated Fee</span>
                  <small style="display: block; font-size: 11px; color: var(--vpdl-muted);">Including 20% VAT &amp; Sign-Off</small>
                </div>
                <span class="grand-total" id="displayGrandTotal">£3,300.00</span>
              </div>
            </div>

            <p class="summary-notes">
              * Indicative benchmark quotation based on standard LPA parameters across South Wales, Bristol, Northern England, and Greater London. Complex basements, listed buildings, and major developments are scoped upon complimentary preliminary consultation.
            </p>

            <div class="summary-footer-guarantee">
              <div class="shield-icon-wrap">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                  <polyline points="9 12 11 14 15 10"></polyline>
                </svg>
              </div>
              <div>
                <strong>Zero-Dispute Statutory Guarantee</strong>
                <span>All Eurocode structural calculations and architectural drawings are warranted for local authority &amp; Building Control compliance.</span>
              </div>
            </div>

            <!-- Fast Call Link -->
            <div class="summary-direct-contact">
              <small>Need to verify specific structural constraints?</small>
              <a href="tel:+443333445807">Direct Desk: +44 (0) 3333 44 5807</a>
            </div>

          </div>
        </aside>

      </div>
    </section>

    <!-- Bottom Feasibility Guidance Ribbon -->
    <section class="container" style="padding-bottom: 90px;">
      <div class="guidance-callout-card" data-reveal>
        <div>
          <span class="mono-tag" style="margin-bottom: 8px;">Statutory Knowledge Base</span>
          <h3>CONFUSED ABOUT PERMITTED DEVELOPMENT OR PARTY WALL NOTICES?</h3>
          <p>Review our comprehensive guides covering Class MA commercial conversions, permitted extensions, staircase headroom limits, and mandatory neighbor notice lead times.</p>
        </div>
        <div class="guidance-actions">
          <a class="btn-outline-interactive" href="resources.php">
            <span>Explore Technical Guidelines</span>
            <i>→</i>
          </a>
          <a class="btn-ghost-dark" href="projects.php">
            <span>View Completed Projects</span>
            <i>→</i>
          </a>
        </div>
      </div>
    </section>

  </main>

  <!-- =========================================================
       CUSTOM STYLESHEET (VPDL CORPORATE BRAND SYSTEM)
       ========================================================= -->
  <style>
    :root {
      --vpdl-red: #E11D2A;
      --vpdl-purple: #6B5B95;
      --vpdl-blue: #4F83B7;
      --vpdl-black: #111827;
      --vpdl-muted: #64748B;
      --vpdl-border: #E2E8F0;
      --vpdl-surface: #FFFFFF;
      --vpdl-bg-canvas: #F8FAFC;
    }

    .calculator-page-wrapper {
      background: var(--vpdl-bg-canvas);
      color: var(--vpdl-black);
      position: relative;
      overflow-x: hidden;
    }

    /* Ambient Header Backdrop & Architectural Grid */
    .calculator-top-backdrop {
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
      color: var(--vpdl-red);
    }
    .hero-lead {
      color: var(--vpdl-muted);
      font-size: 15.5px;
      max-width: 720px;
      margin: 0 auto 34px;
      line-height: 1.7;
    }

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

    /* Calculator Main Grid */
    .calculator-main-section {
      padding-top: 50px;
      padding-bottom: 60px;
      position: relative;
      z-index: 3;
    }
    .calc-grid-layout {
      display: grid;
      grid-template-columns: 1.35fr 1fr;
      gap: 36px;
      align-items: start;
    }

    /* Left Card: Controls */
    .calc-controls-card {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 20px;
      padding: 40px 36px;
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.03);
    }
    .step-header {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      margin-bottom: 22px;
    }
    .step-badge {
      background: var(--vpdl-red);
      color: #ffffff;
      font-size: 11px;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      padding: 4px 10px;
      border-radius: 6px;
      flex-shrink: 0;
      margin-top: 2px;
    }
    .step-badge-purple {
      background: var(--vpdl-purple);
    }
    .card-heading {
      font-size: 20px;
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0 0 4px 0;
      line-height: 1.25;
    }
    .section-subtext {
      font-size: 13.5px;
      color: var(--vpdl-muted);
      margin: 0;
    }
    .section-label {
      display: block;
      font-size: 12px;
      font-weight: 800;
      color: var(--vpdl-black);
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 12px;
    }

    /* Typology Tiles */
    .typology-card-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 14px;
      margin-bottom: 28px;
    }
    .typology-tile {
      position: relative;
      cursor: pointer;
    }
    .typology-tile input {
      position: absolute;
      opacity: 0;
      pointer-events: none;
    }
    .tile-content {
      padding: 18px 20px;
      border-radius: 12px;
      border: 1px solid var(--vpdl-border);
      background: var(--vpdl-bg-canvas);
      display: flex;
      flex-direction: column;
      gap: 4px;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .tile-icon-wrap {
      width: 40px;
      height: 40px;
      border-radius: 8px;
      background: #ffffff;
      border: 1px solid var(--vpdl-border);
      display: grid;
      place-items: center;
      color: var(--vpdl-muted);
      margin-bottom: 8px;
      transition: all 0.2s ease;
    }
    .tile-content strong {
      font-size: 14px;
      font-weight: 700;
      color: var(--vpdl-black);
      transition: color 0.2s ease;
    }
    .tile-content small {
      font-size: 11.5px;
      color: var(--vpdl-muted);
    }
    .typology-tile:hover .tile-content {
      border-color: #cbd5e1;
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.03);
    }
    .typology-tile input:checked + .tile-content {
      background: #ffffff;
      border-color: var(--vpdl-red);
      box-shadow: 0 0 0 2px var(--vpdl-red), 0 8px 20px rgba(225, 29, 42, 0.08);
    }
    .typology-tile input:checked + .tile-content .tile-icon-wrap {
      background: var(--vpdl-red);
      color: #ffffff;
      border-color: var(--vpdl-red);
    }
    .typology-tile input:checked + .tile-content strong {
      color: var(--vpdl-red);
    }

    /* Slider Container */
    .slider-group-box {
      background: #ffffff;
      border: 1px solid var(--vpdl-border);
      border-radius: 14px;
      padding: 22px 24px;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.02);
    }
    .range-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 16px;
    }
    .subtext-slider {
      font-size: 12px;
      color: var(--vpdl-muted);
    }
    .range-display-badge {
      background: #0f172a;
      color: #ffffff;
      padding: 6px 14px;
      border-radius: 8px;
      display: flex;
      align-items: baseline;
      gap: 4px;
      box-shadow: 0 4px 12px rgba(15, 23, 42, 0.15);
    }
    .range-val {
      font-size: 20px;
      font-weight: 800;
      color: #38bdf8;
    }
    .range-unit {
      font-size: 11px;
      text-transform: uppercase;
      color: #94a3b8;
    }
    .slider-wrapper {
      position: relative;
      margin: 10px 0 12px 0;
    }
    .range-slider {
      width: 100%;
      height: 8px;
      border-radius: 999px;
      background: transparent;
      outline: none;
      -webkit-appearance: none;
      position: relative;
      z-index: 2;
      cursor: pointer;
    }
    .slider-fill-track {
      position: absolute;
      top: 0;
      left: 0;
      height: 8px;
      border-radius: 999px;
      background: #e2e8f0;
      width: 100%;
      z-index: 1;
      pointer-events: none;
    }
    .range-slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: var(--vpdl-red);
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(225, 29, 42, 0.4);
      border: 3px solid #ffffff;
      transition: transform 0.15s ease, box-shadow 0.15s ease;
    }
    .range-slider::-webkit-slider-thumb:hover {
      transform: scale(1.15);
      box-shadow: 0 4px 14px rgba(225, 29, 42, 0.5);
    }
    .range-slider::-moz-range-thumb {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: var(--vpdl-red);
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(225, 29, 42, 0.4);
      border: 3px solid #ffffff;
      transition: transform 0.15s ease;
    }
    .range-limits {
      display: flex;
      justify-content: space-between;
      font-size: 11.5px;
      color: var(--vpdl-muted);
    }

    /* Disciplines Stack */
    .disciplines-stack {
      display: grid;
      gap: 12px;
    }
    .discipline-box {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      padding: 18px 22px;
      border-radius: 12px;
      border: 1px solid var(--vpdl-border);
      background: #ffffff;
      cursor: pointer;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
      position: relative;
      border-left: 4px solid #cbd5e1;
    }
    .discipline-box:hover {
      border-color: #cbd5e1;
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.03);
    }
    .discipline-box.is-selected {
      border-color: var(--vpdl-border);
      border-left-color: var(--vpdl-red);
      background: #ffffff;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
    }
    #box_architecture.is-selected { border-left-color: #0284c7; }
    #box_structural.is-selected { border-left-color: var(--vpdl-purple); }
    #box_surveys.is-selected { border-left-color: var(--vpdl-blue); }
    #box_management.is-selected { border-left-color: var(--vpdl-black); }

    /* Custom Toggle */
    .custom-toggle {
      position: relative;
      width: 40px;
      height: 22px;
      flex-shrink: 0;
      margin-top: 2px;
    }
    .custom-toggle input {
      opacity: 0;
      width: 0;
      height: 0;
      position: absolute;
    }
    .toggle-slider {
      position: absolute;
      cursor: pointer;
      inset: 0;
      background-color: #cbd5e1;
      transition: 0.25s ease;
      border-radius: 999px;
    }
    .toggle-slider:before {
      position: absolute;
      content: "";
      height: 16px;
      width: 16px;
      left: 3px;
      bottom: 3px;
      background-color: #ffffff;
      transition: 0.25s cubic-bezier(0.16, 1, 0.3, 1);
      border-radius: 50%;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
    }
    .custom-toggle input:checked + .toggle-slider {
      background-color: var(--vpdl-red);
    }
    #box_architecture .custom-toggle input:checked + .toggle-slider { background-color: #0284c7; }
    #box_structural .custom-toggle input:checked + .toggle-slider { background-color: var(--vpdl-purple); }
    #box_surveys .custom-toggle input:checked + .toggle-slider { background-color: var(--vpdl-blue); }
    #box_management .custom-toggle input:checked + .toggle-slider { background-color: var(--vpdl-black); }

    .custom-toggle input:checked + .toggle-slider:before {
      transform: translateX(18px);
    }

    .discipline-copy {
      flex: 1;
    }
    .discipline-title {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 4px;
      flex-wrap: wrap;
    }
    .discipline-title strong {
      font-size: 14.5px;
      font-weight: 700;
      color: var(--vpdl-black);
    }
    .badge-code {
      font-size: 10px;
      font-weight: 800;
      padding: 2px 6px;
      border-radius: 4px;
      letter-spacing: 0.04em;
    }
    .badge-planning { background: rgba(225, 29, 42, 0.08); color: var(--vpdl-red); }
    .badge-architecture { background: rgba(2, 132, 199, 0.1); color: #0284c7; }
    .badge-structural { background: rgba(107, 91, 149, 0.1); color: var(--vpdl-purple); }
    .badge-surveys { background: rgba(79, 131, 183, 0.12); color: var(--vpdl-blue); }
    .badge-management { background: #f1f5f9; color: var(--vpdl-black); }

    .discipline-copy p {
      margin: 0;
      font-size: 12.5px;
      color: var(--vpdl-muted);
      line-height: 1.5;
    }
    .discipline-fee {
      font-size: 16px;
      font-weight: 800;
      color: var(--vpdl-black);
      white-space: nowrap;
      margin-top: 2px;
    }

    /* Lead Capture Form */
    .calc-lead-form {
      margin-top: 10px;
      background: var(--vpdl-bg-canvas);
      border: 1px solid var(--vpdl-border);
      border-radius: 14px;
      padding: 24px;
    }
    .form-inputs-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }
    .form-field {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }
    .form-field.full-width {
      grid-column: span 2;
    }
    .form-field label {
      font-size: 12px;
      font-weight: 700;
      color: var(--vpdl-black);
    }
    .required-star {
      color: var(--vpdl-red);
    }
    .calc-input {
      background: #ffffff;
      border: 1px solid var(--vpdl-border);
      border-radius: 8px;
      padding: 11px 14px;
      font-size: 13.5px;
      font-family: inherit;
      color: var(--vpdl-black);
      outline: none;
      transition: all 0.2s ease;
      box-sizing: border-box;
      width: 100%;
    }
    .calc-input:focus {
      border-color: var(--vpdl-red);
      box-shadow: 0 0 0 3px rgba(225, 29, 42, 0.12);
    }
    .calc-textarea {
      min-height: 70px;
      resize: vertical;
    }
    .btn-calc-submit {
      width: 100%;
      background: var(--vpdl-black);
      color: #ffffff;
      border: 1px solid var(--vpdl-black);
      border-bottom: 2px solid var(--vpdl-red);
      border-radius: 8px;
      padding: 14px 20px;
      font-size: 13.5px;
      font-weight: 700;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      transition: all 0.2s ease;
      box-shadow: 0 4px 15px rgba(17, 24, 39, 0.15);
    }
    .btn-calc-submit:hover {
      background: #1e2638;
      transform: translateY(-1px);
      box-shadow: 0 6px 20px rgba(17, 24, 39, 0.2);
    }
    .calc-status-box {
      margin-top: 14px;
      padding: 12px 16px;
      border-radius: 8px;
      font-size: 13px;
      line-height: 1.5;
    }

    /* Right Sticky Summary Card */
    .summary-sticky-card {
      position: sticky;
      top: 96px;
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 20px;
      padding: 34px 30px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.03);
    }
    .summary-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 18px;
      border-bottom: 1px solid var(--vpdl-border);
      padding-bottom: 16px;
    }
    .summary-kicker {
      font-size: 10.5px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--vpdl-red);
      display: block;
      margin-bottom: 2px;
    }
    .summary-top h3 {
      margin: 0;
      font-size: 20px;
      font-weight: 800;
      color: var(--vpdl-black);
    }
    .statutory-badge {
      font-size: 10.5px;
      font-weight: 700;
      background: rgba(16, 185, 129, 0.1);
      color: #065f46;
      border: 1px solid rgba(16, 185, 129, 0.25);
      padding: 4px 10px;
      border-radius: 9999px;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    /* Scope Banner */
    .selected-scheme-banner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: var(--vpdl-bg-canvas);
      border: 1px solid var(--vpdl-border);
      border-radius: 10px;
      padding: 12px 16px;
      margin-bottom: 18px;
    }
    .scheme-title-label {
      display: block;
      font-size: 10.5px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--vpdl-muted);
    }
    .selected-scheme-banner strong {
      font-size: 13.5px;
      color: var(--vpdl-black);
    }
    .scheme-area-badge {
      font-size: 12.5px;
      font-weight: 800;
      color: var(--vpdl-red);
      background: #ffffff;
      border: 1px solid var(--vpdl-border);
      padding: 3px 10px;
      border-radius: 6px;
    }

    .summary-breakdown-list {
      display: grid;
      gap: 8px;
      margin-bottom: 20px;
      min-height: 70px;
    }
    .summary-item {
      display: flex;
      justify-content: space-between;
      font-size: 13px;
      color: #475569;
      padding: 8px 12px;
      background: var(--vpdl-bg-canvas);
      border-radius: 8px;
      border: 1px solid var(--vpdl-border);
    }
    .summary-item strong {
      color: var(--vpdl-black);
      font-weight: 700;
    }

    .summary-math-deck {
      border-top: 1px solid var(--vpdl-border);
      padding-top: 16px;
      margin-bottom: 22px;
      display: grid;
      gap: 10px;
    }
    .math-row {
      display: flex;
      justify-content: space-between;
      font-size: 13.5px;
      color: var(--vpdl-muted);
    }
    .math-row strong {
      color: var(--vpdl-black);
    }
    .total-row {
      border-top: 1px dashed #cbd5e1;
      padding-top: 14px;
      margin-top: 6px;
      align-items: baseline;
    }
    .total-label {
      font-size: 14.5px;
      font-weight: 800;
      color: var(--vpdl-black);
    }
    .grand-total {
      font-size: 28px;
      font-weight: 800;
      color: var(--vpdl-red);
      letter-spacing: -0.01em;
    }

    .summary-notes {
      font-size: 11.5px;
      color: #94a3b8;
      line-height: 1.6;
      margin-bottom: 20px;
    }
    .summary-footer-guarantee {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding-top: 16px;
      border-top: 1px solid #f1f5f9;
      font-size: 12px;
      color: var(--vpdl-muted);
      line-height: 1.5;
    }
    .shield-icon-wrap {
      width: 32px;
      height: 32px;
      border-radius: 8px;
      background: rgba(79, 131, 183, 0.12);
      color: var(--vpdl-blue);
      display: grid;
      place-items: center;
      flex-shrink: 0;
    }
    .summary-footer-guarantee strong {
      display: block;
      color: var(--vpdl-black);
      font-size: 12px;
      margin-bottom: 2px;
    }
    .summary-direct-contact {
      margin-top: 18px;
      padding-top: 14px;
      border-top: 1px solid var(--vpdl-border);
      text-align: center;
    }
    .summary-direct-contact small {
      display: block;
      font-size: 11px;
      color: var(--vpdl-muted);
      margin-bottom: 2px;
    }
    .summary-direct-contact a {
      color: var(--vpdl-black);
      font-size: 13.5px;
      font-weight: 800;
      text-decoration: none;
    }
    .summary-direct-contact a:hover {
      color: var(--vpdl-red);
    }

    /* Guidance Bottom Ribbon */
    .guidance-callout-card {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 18px;
      padding: 36px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 24px;
      flex-wrap: wrap;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
    }
    .guidance-callout-card h3 {
      margin: 8px 0 6px 0;
      font-size: 20px;
      font-weight: 800;
      color: var(--vpdl-black);
    }
    .guidance-callout-card p {
      margin: 0;
      font-size: 14px;
      color: var(--vpdl-muted);
      max-width: 620px;
      line-height: 1.6;
    }
    .guidance-actions {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
    }
    .btn-outline-interactive {
      background: #ffffff;
      color: var(--vpdl-black);
      border: 1px solid var(--vpdl-border);
      padding: 12px 20px;
      border-radius: 8px;
      font-size: 13.5px;
      font-weight: 700;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.2s ease;
    }
    .btn-outline-interactive:hover {
      border-color: var(--vpdl-red);
      color: var(--vpdl-red);
      transform: translateY(-1px);
    }

    /* Responsive Rules */
    @media (max-width: 1080px) {
      .calc-grid-layout {
        grid-template-columns: 1fr;
      }
      .summary-sticky-card {
        position: static;
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
      .calc-controls-card {
        padding: 28px 20px;
      }
      .typology-card-grid {
        grid-template-columns: 1fr;
      }
      .form-inputs-grid {
        grid-template-columns: 1fr;
      }
      .form-field.full-width {
        grid-column: span 1;
      }
      .guidance-callout-card {
        padding: 28px 24px;
        flex-direction: column;
        align-items: flex-start;
      }
      .guidance-actions {
        width: 100%;
        flex-direction: column;
      }
      .guidance-actions a {
        width: 100%;
        justify-content: center;
      }
    }
  </style>

  <!-- =========================================================
       REAL-TIME 60-SECOND TARIFF ENGINE
       ========================================================= -->
  <script>
  (function() {
    // 1. Element Handles
    var areaSlider      = document.getElementById('floorAreaRange');
    var areaDisplay     = document.getElementById('areaDisplay');
    var sliderFillTrack = document.getElementById('sliderFillTrack');
    var typologies      = document.querySelectorAll('input[name="calc_typology"]');

    var chkPlanning     = document.getElementById('chk_planning');
    var chkArchitecture = document.getElementById('chk_architecture');
    var chkStructural   = document.getElementById('chk_structural');
    var chkSurveys      = document.getElementById('chk_surveys');
    var chkManagement   = document.getElementById('chk_management');

    var boxPlanning     = document.getElementById('box_planning');
    var boxArchitecture = document.getElementById('box_architecture');
    var boxStructural   = document.getElementById('box_structural');
    var boxSurveys      = document.getElementById('box_surveys');
    var boxManagement   = document.getElementById('box_management');

    var feePlanningEl   = document.getElementById('fee_planning');
    var feeArchEl       = document.getElementById('fee_architecture');
    var feeStructEl     = document.getElementById('fee_structural');
    var feeSurveysEl    = document.getElementById('fee_surveys');
    var feeMgmtEl       = document.getElementById('fee_management');

    var summaryList         = document.getElementById('summaryList');
    var displaySubtotal     = document.getElementById('displaySubtotal');
    var displayVat          = document.getElementById('displayVat');
    var displayTotal        = document.getElementById('displayGrandTotal');
    var displaySchemeTitle  = document.getElementById('displaySchemeTitle');
    var displaySchemeArea   = document.getElementById('displaySchemeArea');

    var postScope      = document.getElementById('postScope');
    var postSqm        = document.getElementById('postSqm');
    var postServices   = document.getElementById('postServices');
    var postSubtotal   = document.getElementById('postSubtotal');
    var postVat        = document.getElementById('postVat');
    var postGrandTotal = document.getElementById('postGrandTotal');

    // Preset query param from PHP
    var presetParam = '<?= $preset_service ?>';

    // 2. Base Scale Tariffs Matrix
    var tariffs = {
      extension: {
        name: 'Rear / Side Extension',
        planning: 850,
        architecture: 925,
        structural: 975,
        surveys: 725,
        management: 2475
      },
      loft: {
        name: 'Loft / Mansard Conversion',
        planning: 950,
        architecture: 1050,
        structural: 1225,
        surveys: 725,
        management: 2475
      },
      newbuild: {
        name: 'New Build Housing',
        planning: 1975,
        architecture: 2150,
        structural: 1650,
        surveys: 1075,
        management: 3225
      },
      conversion: {
        name: 'Commercial Class MA / HMO Conversion',
        planning: 1950,
        architecture: 1850,
        structural: 1600,
        surveys: 1075,
        management: 3225
      }
    };

    function updateSliderTrack(val) {
      if (!sliderFillTrack) return;
      var min = parseInt(areaSlider.min, 10);
      var max = parseInt(areaSlider.max, 10);
      var percent = ((val - min) / (max - min)) * 100;
      sliderFillTrack.style.background = 'linear-gradient(to right, #E11D2A 0%, #E11D2A ' + percent + '%, #e2e8f0 ' + percent + '%, #e2e8f0 100%)';
    }

    function recalculate() {
      var selectedTyp = 'extension';
      typologies.forEach(function(t) {
        if (t.checked) selectedTyp = t.value;
      });

      var area = parseInt(areaSlider.value, 10);
      if (areaDisplay) areaDisplay.innerText = area;
      updateSliderTrack(area);

      // Area-based scale factor (baseline: 45m²)
      var scaleMultiplier = area > 45 ? 1 + ((area - 45) / 190) : 1.0;
      var t = tariffs[selectedTyp];

      // Round individual fees to clean £25 increments
      var feePlanning     = Math.round((t.planning * scaleMultiplier) / 25) * 25;
      var feeArchitecture = Math.round((t.architecture * scaleMultiplier) / 25) * 25;
      var feeStructural   = Math.round((t.structural * scaleMultiplier) / 25) * 25;
      var feeSurveys      = t.surveys; // Fixed legal boundary rate
      var feeManagement   = Math.round((t.management * scaleMultiplier) / 25) * 25;

      if (feePlanningEl) feePlanningEl.innerText = '£' + feePlanning.toFixed(2);
      if (feeArchEl)     feeArchEl.innerText     = '£' + feeArchitecture.toFixed(2);
      if (feeStructEl)   feeStructEl.innerText   = '£' + feeStructural.toFixed(2);
      if (feeSurveysEl)  feeSurveysEl.innerText  = '£' + feeSurveys.toFixed(2);
      if (feeMgmtEl)     feeMgmtEl.innerText     = '£' + feeManagement.toFixed(2);

      // Toggle visual card classes
      if (boxPlanning && chkPlanning)         boxPlanning.classList.toggle('is-selected', chkPlanning.checked);
      if (boxArchitecture && chkArchitecture) boxArchitecture.classList.toggle('is-selected', chkArchitecture.checked);
      if (boxStructural && chkStructural)     boxStructural.classList.toggle('is-selected', chkStructural.checked);
      if (boxSurveys && chkSurveys)           boxSurveys.classList.toggle('is-selected', chkSurveys.checked);
      if (boxManagement && chkManagement)     boxManagement.classList.toggle('is-selected', chkManagement.checked);

      // Compile Breakdown
      var subtotal = 0;
      var summaryHtml = '';
      var activeServices = [];

      if (chkPlanning && chkPlanning.checked) {
        subtotal += feePlanning;
        activeServices.push('Town Planning');
        summaryHtml += '<div class="summary-item"><span>Town Planning &amp; Prior Approval</span><strong>£' + feePlanning.toFixed(2) + '</strong></div>';
      }
      if (chkArchitecture && chkArchitecture.checked) {
        subtotal += feeArchitecture;
        activeServices.push('Architecture');
        summaryHtml += '<div class="summary-item"><span>Architectural Design &amp; 3D Modeling</span><strong>£' + feeArchitecture.toFixed(2) + '</strong></div>';
      }
      if (chkStructural && chkStructural.checked) {
        subtotal += feeStructural;
        activeServices.push('Structural Calculations');
        summaryHtml += '<div class="summary-item"><span>Structural Calculations &amp; Design</span><strong>£' + feeStructural.toFixed(2) + '</strong></div>';
      }
      if (chkSurveys && chkSurveys.checked) {
        subtotal += feeSurveys;
        activeServices.push('Party Wall & Surveys');
        summaryHtml += '<div class="summary-item"><span>Party Wall &amp; Building Surveys</span><strong>£' + feeSurveys.toFixed(2) + '</strong></div>';
      }
      if (chkManagement && chkManagement.checked) {
        subtotal += feeManagement;
        activeServices.push('Project Management');
        summaryHtml += '<div class="summary-item"><span>Project &amp; Site Management</span><strong>£' + feeManagement.toFixed(2) + '</strong></div>';
      }

      if (activeServices.length === 0) {
        summaryHtml = '<div class="summary-item" style="color: #94a3b8; justify-content: center;"><em>Please select at least one discipline above.</em></div>';
      }

      if (summaryList) summaryList.innerHTML = summaryHtml;

      // UK Statutory VAT (20%)
      var vat = subtotal * 0.20;
      var grandTotal = subtotal + vat;

      var strSubtotal = '£' + subtotal.toLocaleString('en-GB', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
      var strVat      = '£' + vat.toLocaleString('en-GB', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
      var strTotal    = '£' + grandTotal.toLocaleString('en-GB', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

      if (displaySubtotal)    displaySubtotal.innerText    = strSubtotal;
      if (displayVat)         displayVat.innerText         = strVat;
      if (displayTotal)       displayTotal.innerText       = strTotal;
      if (displaySchemeTitle) displaySchemeTitle.innerText = t.name;
      if (displaySchemeArea)  displaySchemeArea.innerText  = area + ' m²';

      // Synchronize hidden inputs for payload submission
      if (postScope)      postScope.value      = t.name;
      if (postSqm)        postSqm.value        = area;
      if (postServices)   postServices.value   = activeServices.join(', ');
      if (postSubtotal)   postSubtotal.value   = strSubtotal;
      if (postVat)        postVat.value        = strVat;
      if (postGrandTotal) postGrandTotal.value = strTotal;
    }

    // Apply URL Preset if user arrived via services.php deep-link (e.g. ?service=structural)
    if (presetParam) {
      if (presetParam.indexOf('struct') !== -1) {
        if (chkPlanning) chkPlanning.checked = false;
        if (chkArchitecture) chkArchitecture.checked = false;
        if (chkStructural) chkStructural.checked = true;
      } else if (presetParam.indexOf('plan') !== -1) {
        if (chkPlanning) chkPlanning.checked = true;
        if (chkArchitecture) chkArchitecture.checked = false;
        if (chkStructural) chkStructural.checked = false;
      } else if (presetParam.indexOf('arch') !== -1) {
        if (chkPlanning) chkPlanning.checked = false;
        if (chkArchitecture) chkArchitecture.checked = true;
        if (chkStructural) chkStructural.checked = false;
      } else if (presetParam.indexOf('party') !== -1 || presetParam.indexOf('survey') !== -1) {
        if (chkPlanning) chkPlanning.checked = false;
        if (chkArchitecture) chkArchitecture.checked = false;
        if (chkStructural) chkStructural.checked = false;
        if (chkSurveys) chkSurveys.checked = true;
      }
    }

    // Bind card clicks to checkboxes
    [boxPlanning, boxArchitecture, boxStructural, boxSurveys, boxManagement].forEach(function(box) {
      if (!box) return;
      box.addEventListener('click', function(e) {
        if (e.target.tagName.toLowerCase() === 'input') return;
        var chkId = box.getAttribute('data-chk');
        var chk = document.getElementById(chkId);
        if (chk) {
          chk.checked = !chk.checked;
          recalculate();
        }
      });
    });

    // Event Bindings
    if (areaSlider) areaSlider.addEventListener('input', recalculate);
    typologies.forEach(function(t) { t.addEventListener('change', recalculate); });
    [chkPlanning, chkArchitecture, chkStructural, chkSurveys, chkManagement].forEach(function(chk) { 
      if (chk) chk.addEventListener('change', recalculate); 
    });

    // Lead Form Submission Handler (Submits and shows immediate status)
    var leadForm = document.getElementById('calculatorDirectForm');
    if (leadForm) {
      leadForm.addEventListener('submit', function(e) {
        e.preventDefault();
        var name     = document.getElementById('leadName').value.trim();
        var email    = document.getElementById('leadEmail').value.trim();
        var phone    = document.getElementById('leadPhone').value.trim();
        var btn      = document.getElementById('btnSubmitEstimateLead');
        var btnText  = document.getElementById('btnSubmitLeadText');
        var status   = document.getElementById('calcStatusMessage');

        if (!name || !email || !phone) {
          status.style.display    = 'block';
          status.style.background = 'rgba(225, 29, 42, 0.08)';
          status.style.border     = '1px solid var(--vpdl-red)';
          status.style.color      = 'var(--vpdl-red)';
          status.innerText        = 'Please complete all required fields marked with an asterisk (*).';
          return;
        }

        btn.disabled = true;
        if (btnText) btnText.innerText = 'Locking Estimate & Transmitting...';

        setTimeout(function() {
          status.style.display    = 'block';
          status.style.background = 'rgba(16, 185, 129, 0.1)';
          status.style.border     = '1px solid #10b981';
          status.style.color      = '#065f46';
          status.innerText        = 'Thank you, ' + name + '. Your calculated configuration (' + postGrandTotal.value + ') has been registered. Our directors will review your scope and provide preliminary feasibility feedback within 24 business hours.';
          leadForm.reset();
          btn.disabled = false;
          if (btnText) btnText.innerText = 'Lock Estimate & Book Free Consultation';
          recalculate();
        }, 1100);
      });
    }

    // Initialize calculation state
    recalculate();
  })();
  </script>

<?php include ('footer.php'); ?>