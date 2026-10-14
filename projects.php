<?php
/**
 * Template Name: Projects Portfolio & Visual Gallery
 * Description: Executive multidisciplinary project archive featuring category filters, project counter chips, technical datum styling, interactive visual lightbox gallery, and regional operations hub.
 * File: projects.php
 *
 * @package VPDL
 */

$page_title = "Projects Portfolio & Regional Management Hub | VPDL";
$page_desc  = "Explore verified schemes across the UK: residential extensions, commercial fit-outs, industrial hubs, and active project management sites.";
include ('header.php');
?>

  <main class="projects-page-wrapper">

    <!-- =========================================================
         01. ARCHITECTURAL HERO & METRIC STRIP
         ========================================================= -->
    <div class="projects-top-backdrop">
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
            <span class="current" aria-current="page">Projects &amp; Gallery</span>
          </nav>
        </div>
      </div>

      <section class="projects-hero centered-hero">
        <div class="container hero-container" data-reveal>
          <div class="hero-kicker-pill">
            <span class="kicker-dot"></span>
            <span>Multidisciplinary Project Delivery</span>
          </div>
          <h1>PROJECTS SHAPED <span class="highlight-brand">WITH RIGOUR.</span></h1>
          <p class="hero-lead">From complex residential alterations and high-density commercial conversions to industrial warehouses and high-yield property investment portfolios.</p>

          <div class="hero-stats-band">
            <div class="h-stat-item">
              <strong>£28M+</strong>
              <small>Delivered GDV</small>
            </div>
            <div class="h-stat-separator"></div>
            <div class="h-stat-item">
              <strong>100%</strong>
              <small>Building Control Clearance</small>
            </div>
            <div class="h-stat-separator"></div>
            <div class="h-stat-item">
              <strong>4 Regional Hubs</strong>
              <small>South Wales, Bristol, London, North</small>
            </div>
            <div class="h-stat-separator"></div>
            <div class="h-stat-item">
              <strong>RIBA 0–6</strong>
              <small>Full Lifecycle Coverage</small>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- =========================================================
         02. PORTFOLIO SHOWCASE & INTERACTIVE FILTER DECK
         ========================================================= -->
    <section class="container" style="padding-top: 50px; padding-bottom: 70px;">
      
      <div class="filter-deck-wrapper" data-reveal>
        <div class="filter-deck" role="toolbar" aria-label="Project category filter">
          <button type="button" class="filter-btn active" data-filter="all" aria-pressed="true">
            <span>All Projects</span>
            <span class="filter-count" id="count-all">6</span>
          </button>
          <button type="button" class="filter-btn" data-filter="residential" aria-pressed="false">
            <span>Residential</span>
            <span class="filter-count" id="count-residential">2</span>
          </button>
          <button type="button" class="filter-btn" data-filter="commercial" aria-pressed="false">
            <span>Commercial &amp; Fit-Out</span>
            <span class="filter-count" id="count-commercial">2</span>
          </button>
          <button type="button" class="filter-btn" data-filter="industrial" aria-pressed="false">
            <span>Industrial &amp; Logistics</span>
            <span class="filter-count" id="count-industrial">1</span>
          </button>
          <button type="button" class="filter-btn" data-filter="investment" aria-pressed="false">
            <span>Property Investment</span>
            <span class="filter-count" id="count-investment">1</span>
          </button>
        </div>
        <div class="filter-view-note">Showing verified case studies with engineering specifications</div>
      </div>

      <!-- Projects Grid -->
      <div class="projects-grid" id="projectsGrid" data-reveal>
        
        <!-- Project 1: House Extension (Bentry Road, UK) -->
        <article class="project-card" data-category="residential">
          <a href="project-single.php?id=bentry-road" class="project-card-img" aria-label="View Bentry Road project details">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80" alt="Bentry Road Residential Kitchen and Utility Extension" loading="lazy">
            <span class="project-card-badge">Residential Extension</span>
            <span class="project-card-uplift">+60% Footprint</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">RIBA Stage 4 · Building Control Sign-Off</span>
              <h3><a href="project-single.php?id=bentry-road">House Extension &amp; Garden Integration</a></h3>
              <p>House extension drawings for planning and building control up to RIBA Stage 4. Kitchen enlarged from 500 sq ft to 800 sq ft, incorporating a utility room, linked living area, and redesigned garden access.</p>
            </div>
            <div class="project-card-footer">
              <div class="project-location-meta">
                <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                <span>Bentry Road, UK</span>
              </div>
              <a class="project-card-link" href="project-single.php?id=bentry-road">View Case Study <i>→</i></a>
            </div>
          </div>
        </article>

        <!-- Project 2: Office Fit-out Design Extension (Hayes, UK) -->
        <article class="project-card" data-category="commercial">
          <a href="project-single.php?id=hayes-fitout" class="project-card-img" aria-label="View Hayes Office Fit-Out project details">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=80" alt="Hayes Commercial Office Fit-Out and Spatial Design Extension" loading="lazy">
            <span class="project-card-badge">Commercial Fit-Out</span>
            <span class="project-card-uplift">140+ Workstations</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">Commercial Extension · Spatial Design</span>
              <h3><a href="project-single.php?id=hayes-fitout">Office Fit-Out Design &amp; Extension</a></h3>
              <p>Comprehensive layout reconfiguration creating expansive office space, modern client waiting area, board meeting rooms, employee breakout facilities, and health-focused circulation pathways.</p>
            </div>
            <div class="project-card-footer">
              <div class="project-location-meta">
                <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                <span>Hayes, UK</span>
              </div>
              <a class="project-card-link" href="project-single.php?id=hayes-fitout">View Case Study <i>→</i></a>
            </div>
          </div>
        </article>

        <!-- Project 3: Major Industrial Warehouse Design (Johor, Malaysia) -->
        <article class="project-card" data-category="industrial">
          <a href="project-single.php?id=johor-warehouse" class="project-card-img" aria-label="View Johor Industrial Warehouse project details">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80" alt="Johor Multi-Use Industrial Warehouse Facility Design" loading="lazy">
            <span class="project-card-badge">Industrial &amp; Logistics</span>
            <span class="project-card-uplift">120k sq ft Clear Span</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">Industrial Design · Logistics Layout</span>
              <h3><a href="project-single.php?id=johor-warehouse">Major Industrial Warehouse Complex</a></h3>
              <p>Multi-use industrial/office warehouse design delivering high-capacity logistics space, integrated administration suites, meeting hubs, staff facilities, and functional vehicular circulation.</p>
            </div>
            <div class="project-card-footer">
              <div class="project-location-meta">
                <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                <span>Johor, Malaysia</span>
              </div>
              <a class="project-card-link" href="project-single.php?id=johor-warehouse">View Case Study <i>→</i></a>
            </div>
          </div>
        </article>

        <!-- Project 4: Residential Multi-Storey Development (Dhaka, Bangladesh) -->
        <article class="project-card" data-category="residential">
          <a href="project-single.php?id=dhaka-residential" class="project-card-img" aria-label="View Dhaka Residential Development project details">
            <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=1200&q=80" alt="Dhaka Vertical Residential Development and Engineering Design" loading="lazy">
            <span class="project-card-badge">Vertical Development</span>
            <span class="project-card-uplift">700 → 1,800 sqm</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">Structural Design · Planning Stage</span>
              <h3><a href="project-single.php?id=dhaka-residential">Vertical Residential Development</a></h3>
              <p>Planning and structural engineering drawings for a major vertical residential extension, scaling total gross building area from 700 sqm up to 1,800 sqm with modern open-plan living and landscape integration.</p>
            </div>
            <div class="project-card-footer">
              <div class="project-location-meta">
                <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                <span>Dhaka, Bangladesh</span>
              </div>
              <a class="project-card-link" href="project-single.php?id=dhaka-residential">View Case Study <i>→</i></a>
            </div>
          </div>
        </article>

        <!-- Project 5: High-Yield Buy-to-Let Sourcing & Conversion (Newport / Bristol Hub) -->
        <article class="project-card" data-category="investment">
          <a href="project-single.php?id=welsh-investment" class="project-card-img" aria-label="View Welsh Buy-to-Let Portfolio details">
            <img src="https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?auto=format&fit=crop&w=1200&q=80" alt="UK Welsh Property Investment Portfolio" loading="lazy">
            <span class="project-card-badge">Property Investment</span>
            <span class="project-card-uplift">12.4% Net Yield</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">Acquisition · Turnkey Refurbishment</span>
              <h3><a href="project-single.php?id=welsh-investment">High-Yield Buy-to-Let Portfolio Scheme</a></h3>
              <p>End-to-end investment journey covering property acquisition, structural reconfiguration, building control certification, and full lettings onboarding across high-demand regional growth zones.</p>
            </div>
            <div class="project-card-footer">
              <div class="project-location-meta">
                <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                <span>Newport &amp; Bristol, UK</span>
              </div>
              <a class="project-card-link" href="project-single.php?id=welsh-investment">View Case Study <i>→</i></a>
            </div>
          </div>
        </article>

        <!-- Project 6: Commercial Class MA Conversion Scheme (Northern England) -->
        <article class="project-card" data-category="commercial">
          <a href="project-single.php?id=northern-conversion" class="project-card-img" aria-label="View Northern England Conversion Scheme details">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80" alt="Northern England Commercial Conversion" loading="lazy">
            <span class="project-card-badge">Commercial Conversion</span>
            <span class="project-card-uplift">Class MA 14 Units</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">Class MA · Development Consulting</span>
              <h3><a href="project-single.php?id=northern-conversion">Commercial to Multi-Unit Conversion</a></h3>
              <p>Development consulting, permitted development prior approval, structural beam engineering, and spatial optimization to repurpose an underutilised commercial asset into multi-unit residential accommodation.</p>
            </div>
            <div class="project-card-footer">
              <div class="project-location-meta">
                <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                <span>Northern England, UK</span>
              </div>
              <a class="project-card-link" href="project-single.php?id=northern-conversion">View Case Study <i>→</i></a>
            </div>
          </div>
        </article>

      </div>
    </section>

    <!-- =========================================================
         03. VISUAL GALLERY & LIGHTBOX ZOOM (Serves #gallery link)
         ========================================================= -->
    <section class="gallery-section" id="gallery">
      <div class="container">
        
        <div class="section-head-centered" data-reveal>
          <div class="mono-tag">Visual Archives</div>
          <h2>ARCHITECTURAL &amp; ENGINEERING <span style="color: var(--vpdl-red);">GALLERY.</span></h2>
          <p>Click any plate to inspect structural details, BIM working models, 3D renderings, and certified on-site milestones.</p>
        </div>

        <div class="gallery-grid" data-reveal>
          
          <figure class="gallery-item" onclick="openGalleryLightbox('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1600&q=85', 'Bentry Road Exterior Elevation', '3D Photorealistic Render & Structural Glazing Layout')">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=900&q=80" alt="Contemporary Residential Extension Exterior" loading="lazy">
            <div class="gallery-zoom-badge">⤢</div>
            <figcaption class="gallery-caption">
              <span class="gallery-tag">Residential BIM</span>
              <strong>Bentry Road Exterior Elevation</strong>
              <small>3D Visualization &amp; Glazing Layout</small>
            </figcaption>
          </figure>

          <figure class="gallery-item" onclick="openGalleryLightbox('https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1600&q=85', 'Eurocode 3 Structural Steel Rigour', 'Universal Column Moment Connection & Padstone Bearings')">
            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=900&q=80" alt="Universal Steel Beam Installation" loading="lazy">
            <div class="gallery-zoom-badge">⤢</div>
            <figcaption class="gallery-caption">
              <span class="gallery-tag">Structural Steel</span>
              <strong>Eurocode 3 Structural Steel Rigour</strong>
              <small>Padstone Bearings &amp; Moment Connections</small>
            </figcaption>
          </figure>

          <figure class="gallery-item" onclick="openGalleryLightbox('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1600&q=85', 'Commercial Office Spatial Reconfiguration', 'Hayes Executive Boardroom & Acoustic Separation')">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=900&q=80" alt="Commercial Fit-Out Boardroom Layout" loading="lazy">
            <div class="gallery-zoom-badge">⤢</div>
            <figcaption class="gallery-caption">
              <span class="gallery-tag">Commercial Fit-Out</span>
              <strong>Commercial Office Spatial Reconfiguration</strong>
              <small>Hayes Boardroom &amp; Acoustic Partitions</small>
            </figcaption>
          </figure>

          <figure class="gallery-item" onclick="openGalleryLightbox('https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=1600&q=85', 'Ground Bearing & Substructure Audit', 'Approved Document A Foundation Trench Inspection')">
            <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=900&q=80" alt="Substructure Excavation and Foundation Sign-Off" loading="lazy">
            <div class="gallery-zoom-badge">⤢</div>
            <figcaption class="gallery-caption">
              <span class="gallery-tag">Site Inspection</span>
              <strong>Ground Bearing &amp; Trench Audit</strong>
              <small>Approved Document A Pre-Pour Verification</small>
            </figcaption>
          </figure>

          <figure class="gallery-item" onclick="openGalleryLightbox('https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1600&q=85', 'BIM Modeling & Working Drawings', 'Building Regulations Full Plans Technical Specification')">
            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=900&q=80" alt="Architectural Plan Drafting and CAD Modeling" loading="lazy">
            <div class="gallery-zoom-badge">⤢</div>
            <figcaption class="gallery-caption">
              <span class="gallery-tag">Drafting Pack</span>
              <strong>BIM Modeling &amp; Working Drawings</strong>
              <small>Full Building Control Statutory Package</small>
            </figcaption>
          </figure>

          <figure class="gallery-item" onclick="openGalleryLightbox('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1600&q=85', 'Commercial to Residential Repurposing', 'Class MA Prior Approval Multi-Unit Conversion Scheme')">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=900&q=80" alt="Commercial Class MA Conversion Facade" loading="lazy">
            <div class="gallery-zoom-badge">⤢</div>
            <figcaption class="gallery-caption">
              <span class="gallery-tag">Class MA Conversion</span>
              <strong>Commercial to Residential Repurposing</strong>
              <small>Northern England Multi-Unit Scheme</small>
            </figcaption>
          </figure>

        </div>
      </div>
    </section>

    <!-- =========================================================
         04. GOOGLE MAP & REGIONAL PROJECT MANAGEMENT HUB
         ========================================================= -->
    <section class="management-map-section" id="management-map">
      <div class="container">
        
        <div class="management-map-deck" data-reveal>
          
          <div class="management-info-pane">
            <div>
              <div class="mono-tag" style="background: rgba(225, 29, 42, 0.08); color: var(--vpdl-red); border-color: rgba(225, 29, 42, 0.25);">Regional Delivery</div>
              <h2>ON-SITE PROJECT MANAGEMENT &amp; COVERAGE</h2>
              <p>Our chartered engineers and project administrators oversee live schemes, coordinate with local Building Control officers, and audit critical structural bearings across our regional operational hubs.</p>

              <div class="hub-list">
                <div class="hub-item is-active" data-hub="newport">
                  <span class="hub-dot"></span>
                  <div class="hub-item-body">
                    <div class="hub-title-row">
                      <strong>South Wales &amp; Newport Hub</strong>
                      <span class="hub-status-pill">Active Lead Hub</span>
                    </div>
                    <small>Coverage: Newport, Cardiff, Caerphilly, Monmouthshire, Swansea</small>
                  </div>
                </div>

                <div class="hub-item" data-hub="bristol">
                  <span class="hub-dot"></span>
                  <div class="hub-item-body">
                    <div class="hub-title-row">
                      <strong>Bristol &amp; West of England Hub</strong>
                      <span class="hub-status-pill">Active Live Sites</span>
                    </div>
                    <small>Coverage: Clifton, Bedminster, Filton, Bath, North Somerset</small>
                  </div>
                </div>

                <div class="hub-item" data-hub="london">
                  <span class="hub-dot"></span>
                  <div class="hub-item-body">
                    <div class="hub-title-row">
                      <strong>Greater London &amp; Hayes Hub</strong>
                      <span class="hub-status-pill">Active Live Sites</span>
                    </div>
                    <small>Coverage: Hayes, Hillingdon, Ealing, Hounslow, West London</small>
                  </div>
                </div>

                <div class="hub-item" data-hub="north">
                  <span class="hub-dot"></span>
                  <div class="hub-item-body">
                    <div class="hub-title-row">
                      <strong>Northern England Regional Hub</strong>
                      <span class="hub-status-pill">Active Conversions</span>
                    </div>
                    <small>Coverage: Leeds, Manchester, Sheffield commercial Class MA conversions</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="hub-pane-actions">
              <a class="btn-calc-fast" href="quote-calculator.php">
                <span>Calculate Project in 60s</span>
                <span class="calc-pill-time">Free</span>
                <i>↗</i>
              </a>
              <a class="btn-ghost-dark" href="consultation.php">Book Site Inspection</a>
            </div>
          </div>

          <!-- Embedded Map View Container -->
          <div class="management-map-frame">
            <iframe 
              id="regionalMapIframe"
              title="VPDL Regional Project Management Coverage Map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.4734005888!2d-3.0805569!3d51.5877429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4871e44fefb4d7f5%3A0x6b9d62d2948bc8c4!2sNewport%2C%20UK!5e0!3m2!1sen!2suk!4v1710000000000!5m2!1sen!2suk"
              width="100%" 
              height="100%" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>

        <!-- Bottom Feasibility Prompt Ribbon -->
        <div class="field-equal-footer" data-reveal style="margin-top: 45px;">
          <div class="field-equal-footer-left">
            <span class="start-badge">START</span>
            <div>
              <strong style="font-size: 15px; display: block; color: var(--vpdl-black); font-weight: 800;">Have a Site Requiring Engineering or Management Oversight?</strong>
              <small style="color: var(--vpdl-muted); font-size: 13px;">Arrange a preliminary feasibility audit and structural review with our practice directors free of charge.</small>
            </div>
          </div>
          <a class="btn-brand-submit" href="consultation.php">
            <span>Book Free Consultation</span>
            <i aria-hidden="true">↗</i>
          </a>
        </div>

      </div>
    </section>

    <!-- =========================================================
         05. FULL-SCREEN LIGHTBOX MODAL
         ========================================================= -->
    <div class="gallery-lightbox-modal" id="galleryLightbox" onclick="closeGalleryLightbox(event)" role="dialog" aria-modal="true" aria-label="Visual Gallery Lightbox">
      <div class="gallery-lightbox-box">
        <button class="lightbox-close-btn" onclick="closeGalleryLightbox(event)" aria-label="Close image viewer">&times;</button>
        <img id="lightboxImage" src="" alt="Zoomed Technical Specification Plate">
        <div class="lightbox-caption-card">
          <strong id="lightboxTitle"></strong>
          <small id="lightboxDesc"></small>
        </div>
      </div>
    </div>

  </main>

  <style>
    /* =========================================================
       PROJECTS & GALLERY EXECUTIVE STYLING
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
    }

    .projects-page-wrapper {
      background: var(--vpdl-bg-canvas);
      color: var(--vpdl-black);
      position: relative;
      overflow-x: hidden;
      padding-bottom: 90px;
    }

    /* 1. Header Datum & Hero */
    .projects-top-backdrop {
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

    /* 2. Filter Deck */
    .filter-deck-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 16px;
      margin-bottom: 34px;
      padding-bottom: 18px;
      border-bottom: 1px solid var(--vpdl-border);
    }
    .filter-deck {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
    }
    .filter-btn {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      padding: 8px 16px;
      border-radius: 999px;
      font-size: 12.5px;
      font-weight: 600;
      color: var(--vpdl-black);
      cursor: pointer;
      transition: all 0.2s ease;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
    }
    .filter-btn:hover {
      background: #f1f5f9;
      color: var(--vpdl-red);
      border-color: #cbd5e1;
    }
    .filter-btn.active {
      background: var(--vpdl-black);
      color: #ffffff;
      border-color: var(--vpdl-black);
      box-shadow: 0 4px 12px rgba(17, 24, 39, 0.15);
    }
    .filter-count {
      font-size: 10px;
      font-weight: 800;
      background: rgba(0, 0, 0, 0.06);
      padding: 2px 6px;
      border-radius: 999px;
      color: inherit;
    }
    .filter-btn.active .filter-count {
      background: rgba(255, 255, 255, 0.2);
      color: #ffffff;
    }
    .filter-view-note {
      font-size: 12px;
      color: var(--vpdl-muted);
      font-weight: 600;
    }

    /* Projects Grid */
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
    }
    .project-card {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 16px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.2s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
    }
    .project-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 16px 35px rgba(0, 0, 0, 0.06);
      border-color: #cbd5e1;
    }
    .project-card-img {
      position: relative;
      height: 230px;
      display: block;
      overflow: hidden;
    }
    .project-card-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    .project-card:hover .project-card-img img {
      transform: scale(1.05);
    }
    .project-card-badge {
      position: absolute;
      top: 14px;
      left: 14px;
      background: rgba(17, 24, 39, 0.88);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      color: #ffffff;
      font-size: 10.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      padding: 4px 10px;
      border-radius: 6px;
      border: 1px solid rgba(255, 255, 255, 0.15);
    }
    .project-card-uplift {
      position: absolute;
      bottom: 14px;
      right: 14px;
      background: var(--vpdl-red);
      color: #ffffff;
      font-size: 10px;
      font-weight: 800;
      padding: 3px 8px;
      border-radius: 4px;
      letter-spacing: 0.02em;
    }
    .project-card-body {
      padding: 24px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      flex-grow: 1;
    }
    .project-card-discipline {
      display: block;
      font-size: 11px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--vpdl-blue);
      margin-bottom: 6px;
    }
    .project-card-body h3 {
      font-size: 18px;
      font-weight: 800;
      margin: 0 0 10px 0;
      line-height: 1.35;
    }
    .project-card-body h3 a {
      color: var(--vpdl-black);
      text-decoration: none;
      transition: color 0.15s ease;
    }
    .project-card-body h3 a:hover {
      color: var(--vpdl-red);
    }
    .project-card-body p {
      font-size: 13px;
      color: var(--vpdl-muted);
      line-height: 1.65;
      margin-bottom: 22px;
    }
    .project-card-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 14px;
      border-top: 1px solid #f1f5f9;
      font-size: 12px;
    }
    .project-location-meta {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      color: var(--vpdl-muted);
      font-weight: 600;
    }
    .project-card-link {
      color: var(--vpdl-red);
      font-weight: 700;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 4px;
      transition: gap 0.15s ease;
    }
    .project-card-link:hover {
      gap: 7px;
    }

    /* =========================================================
       3. VISUAL GALLERY & LIGHTBOX
       ========================================================= */
    .gallery-section {
      padding: 80px 0;
      background: #ffffff;
      border-top: 1px solid var(--vpdl-border);
      border-bottom: 1px solid var(--vpdl-border);
    }
    .section-head-centered {
      text-align: center;
      max-width: 680px;
      margin: 0 auto 40px;
    }
    .section-head-centered h2 {
      font-size: clamp(26px, 3.5vw, 36px);
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 6px 0 12px;
    }
    .section-head-centered p {
      color: var(--vpdl-muted);
      font-size: 14.5px;
      line-height: 1.65;
      margin: 0;
    }
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .gallery-item {
      position: relative;
      border-radius: 14px;
      overflow: hidden;
      border: 1px solid var(--vpdl-border);
      margin: 0;
      background: var(--vpdl-bg-canvas);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
      cursor: pointer;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .gallery-item:hover {
      transform: translateY(-4px);
      box-shadow: 0 14px 30px rgba(0, 0, 0, 0.08);
    }
    .gallery-item img {
      width: 100%;
      height: 260px;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }
    .gallery-item:hover img {
      transform: scale(1.05);
    }
    .gallery-zoom-badge {
      position: absolute;
      top: 14px;
      right: 14px;
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: rgba(17, 24, 39, 0.8);
      color: #ffffff;
      display: grid;
      place-items: center;
      font-size: 14px;
      opacity: 0;
      transition: opacity 0.2s ease;
    }
    .gallery-item:hover .gallery-zoom-badge {
      opacity: 1;
    }
    .gallery-caption {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(180deg, transparent 0%, rgba(15, 23, 42, 0.92) 100%);
      color: #ffffff;
      padding: 34px 20px 16px;
    }
    .gallery-tag {
      display: inline-block;
      background: var(--vpdl-red);
      color: #ffffff;
      font-size: 9px;
      font-weight: 800;
      text-transform: uppercase;
      padding: 2px 6px;
      border-radius: 3px;
      margin-bottom: 4px;
    }
    .gallery-caption strong {
      display: block;
      font-size: 14px;
      margin-bottom: 2px;
      line-height: 1.3;
    }
    .gallery-caption small {
      color: rgba(255, 255, 255, 0.75);
      font-size: 11.5px;
    }

    /* Lightbox Modal */
    .gallery-lightbox-modal {
      position: fixed;
      inset: 0;
      background: rgba(15, 23, 42, 0.94);
      z-index: 999999;
      display: none;
      place-items: center;
      padding: 24px;
    }
    .gallery-lightbox-modal.is-open {
      display: grid;
    }
    .gallery-lightbox-box {
      max-width: 960px;
      width: 100%;
      position: relative;
      text-align: center;
    }
    .gallery-lightbox-box img {
      max-width: 100%;
      max-height: 75vh;
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
    }
    .lightbox-caption-card {
      margin-top: 14px;
      color: #ffffff;
    }
    .lightbox-caption-card strong {
      display: block;
      font-size: 16px;
      margin-bottom: 4px;
    }
    .lightbox-caption-card small {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.7);
    }
    .lightbox-close-btn {
      position: absolute;
      top: -44px;
      right: 0;
      background: none;
      border: none;
      color: #ffffff;
      font-size: 34px;
      cursor: pointer;
    }

    /* =========================================================
       4. GOOGLE MAP & PROJECT MANAGEMENT HUB
       ========================================================= */
    .management-map-section {
      padding: 80px 0;
    }
    .management-map-deck {
      background: #ffffff;
      border: 1px solid var(--vpdl-border);
      border-radius: 18px;
      overflow: hidden;
      display: grid;
      grid-template-columns: 1.2fr 1.35fr;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }
    .management-info-pane {
      padding: 44px 38px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      border-right: 1px solid var(--vpdl-border);
    }
    .management-info-pane h2 {
      font-size: clamp(22px, 2.5vw, 28px);
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 8px 0 12px;
      line-height: 1.25;
    }
    .management-info-pane p {
      color: var(--vpdl-muted);
      font-size: 13.5px;
      line-height: 1.7;
      margin: 0 0 24px;
    }
    .hub-list {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }
    .hub-item {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      padding: 14px 16px;
      background: var(--vpdl-bg-canvas);
      border: 1px solid var(--vpdl-border);
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.2s ease;
    }
    .hub-item:hover, .hub-item.is-active {
      border-color: var(--vpdl-red);
      background: #ffffff;
      box-shadow: 0 4px 14px rgba(225, 29, 42, 0.08);
      transform: translateX(3px);
    }
    .hub-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: var(--vpdl-red);
      margin-top: 5px;
      flex-shrink: 0;
    }
    .hub-item-body {
      flex-grow: 1;
    }
    .hub-title-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2px;
    }
    .hub-item strong {
      font-size: 13px;
      color: var(--vpdl-black);
    }
    .hub-status-pill {
      font-size: 9.5px;
      font-weight: 800;
      text-transform: uppercase;
      padding: 2px 6px;
      border-radius: 4px;
      background: #ffffff;
      border: 1px solid var(--vpdl-border);
      color: var(--vpdl-muted);
    }
    .hub-item.is-active .hub-status-pill {
      background: rgba(225, 29, 42, 0.08);
      color: var(--vpdl-red);
      border-color: rgba(225, 29, 42, 0.2);
    }
    .hub-item small {
      color: var(--vpdl-muted);
      font-size: 11.5px;
      line-height: 1.4;
      display: block;
    }
    .hub-pane-actions {
      display: flex;
      gap: 12px;
      margin-top: 26px;
      align-items: center;
      flex-wrap: wrap;
    }
    .management-map-frame {
      min-height: 520px;
      background: #e2e8f0;
    }

    /* Fast Action Ribbon CTA */
    .btn-calc-fast {
      background: var(--vpdl-black);
      color: #ffffff !important;
      border: 1px solid var(--vpdl-black);
      border-bottom: 2px solid var(--vpdl-red);
      padding: 10px 18px;
      border-radius: 6px;
      font-size: 12.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.2s ease;
    }
    .btn-calc-fast:hover {
      background: #1e2638;
      border-bottom-color: var(--vpdl-red);
      transform: translateY(-1px);
    }
    .calc-pill-time {
      background: var(--vpdl-red);
      color: #ffffff;
      font-size: 9px;
      font-weight: 800;
      padding: 2px 6px;
      border-radius: 4px;
    }

    .btn-ghost-dark {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 10px 18px;
      font-size: 12.5px;
      font-weight: 700;
      color: var(--vpdl-black) !important;
      background: transparent;
      border: 1px solid var(--vpdl-border);
      border-radius: 6px;
      text-decoration: none;
      transition: all 0.15s ease;
    }
    .btn-ghost-dark:hover {
      background: #ffffff;
      border-color: #cbd5e1;
      color: var(--vpdl-red) !important;
    }

    /* Bottom Prompt Ribbon */
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
    .start-badge {
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

    /* =========================================================
       RESPONSIVE BREAKPOINTS
       ========================================================= */
    @media (max-width: 1100px) {
      .projects-grid, .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .management-map-deck {
        grid-template-columns: 1fr;
      }
      .management-info-pane {
        border-right: none;
        border-bottom: 1px solid var(--vpdl-border);
      }
      .management-map-frame {
        min-height: 400px;
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
      .projects-grid, .gallery-grid {
        grid-template-columns: 1fr;
      }
      .field-equal-footer {
        flex-direction: column;
        align-items: flex-start;
      }
      .btn-brand-submit {
        width: 100%;
      }
      .management-info-pane {
        padding: 28px 20px;
      }
      .hub-pane-actions {
        flex-direction: column;
      }
      .hub-pane-actions a {
        width: 100%;
        justify-content: center;
      }
    }
  </style>

  <!-- =========================================================
       INTERACTIVE ENGINES: FILTER, MAP SWITCHER & LIGHTBOX
       ========================================================= -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // 1. Dynamic Category Filter with Counters
      const filterBtns = document.querySelectorAll('.filter-btn');
      const cards = document.querySelectorAll('.project-card');

      filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          filterBtns.forEach(b => {
            b.classList.remove('active');
            b.setAttribute('aria-pressed', 'false');
          });
          this.classList.add('active');
          this.setAttribute('aria-pressed', 'true');

          const filter = this.getAttribute('data-filter');

          cards.forEach(card => {
            if (filter === 'all' || card.getAttribute('data-category') === filter) {
              card.style.display = 'flex';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });

      // 2. Regional Project Management Google Map Switcher
      const hubItems = document.querySelectorAll('.hub-item');
      const mapIframe = document.getElementById('regionalMapIframe');

      const hubLocations = {
        newport: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.4734005888!2d-3.0805569!3d51.5877429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4871e44fefb4d7f5%3A0x6b9d62d2948bc8c4!2sNewport%2C%20UK!5e0!3m2!1sen!2suk!4v1710000000000!5m2!1sen!2suk",
        bristol: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80016.92989269785!2d-2.6841289!3d51.4684534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4871836681b3d861%3A0x8ee4b22e4b9ad71f!2sBristol%2C%20UK!5e0!3m2!1sen!2suk!4v1710000000001!5m2!1sen!2suk",
        london: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.4734005888!2d-0.4500000!3d51.5000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876722026197171%3A0xb35a3962635905d!2sHayes%2C%20UK!5e0!3m2!1sen!2suk!4v1710000000002!5m2!1sen!2suk",
        north: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d151248.8893708307!2d-1.617439!3d53.800755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48795c1e49c5e317%3A0x89292a83e07f9c9!2sLeeds%2C%20UK!5e0!3m2!1sen!2suk!4v1710000000003!5m2!1sen!2suk"
      };

      hubItems.forEach(item => {
        item.addEventListener('click', function() {
          hubItems.forEach(h => h.classList.remove('is-active'));
          this.classList.add('is-active');

          const hub = this.getAttribute('data-hub');
          if (mapIframe && hubLocations[hub]) {
            mapIframe.src = hubLocations[hub];
          }
        });
      });
    });

    // 3. Fullscreen Lightbox Controls
    function openGalleryLightbox(imgSrc, title, desc) {
      const modal = document.getElementById('galleryLightbox');
      const img = document.getElementById('lightboxImage');
      const t = document.getElementById('lightboxTitle');
      const d = document.getElementById('lightboxDesc');
      if (modal && img && t && d) {
        img.src = imgSrc;
        t.innerText = title;
        d.innerText = desc;
        modal.classList.add('is-open');
        document.body.style.overflow = 'hidden';
      }
    }

    function closeGalleryLightbox(e) {
      const modal = document.getElementById('galleryLightbox');
      if (modal && (e.target.id === 'galleryLightbox' || e.target.classList.contains('lightbox-close-btn'))) {
        modal.classList.remove('is-open');
        document.body.style.overflow = '';
      }
    }

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        const modal = document.getElementById('galleryLightbox');
        if (modal && modal.classList.contains('is-open')) {
          modal.classList.remove('is-open');
          document.body.style.overflow = '';
        }
      }
    });
  </script>

<?php include ('footer.php'); ?>