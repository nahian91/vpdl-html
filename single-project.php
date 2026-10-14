<?php
/**
 * Template Name: Single Project Case Study (Consolidated & Self-Contained)
 * Description: Technical multidisciplinary presentation featuring Before/After interactive slider, engineering metrics, tabbed scope breakdown, responsive sidebar, full-screen lightbox, and integrated CSS utilities.
 * File: project-single.php
 *
 * @package VPDL
 */

// 1. Technical Project Registry Data
$projects = [
  'bentry-road' => [
    'title'          => 'House Extension & Garden Integration',
    'scheme_type'    => 'Residential Extension & Structural Remodeling',
    'location'       => 'Bentry Road, UK',
    'riba_stage'     => 'RIBA Stage 4 · Building Control Sign-Off',
    'lpa'            => 'London Borough Planning Authority',
    'duration'       => '14 Weeks (Design, Calculations & Sign-Off)',
    'area_uplift'    => '+60% Usable Footprint',
    'steel_tonnage'  => '2.4 Tonnes Structural Steel',
    'compliance'     => 'Approved Docs A, B & L Cleared',
    'disciplines'    => ['Town Planning', '3D Architectural Modeling', 'Structural Engineering', 'Building Control Liaison'],
    'hero_img'       => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1800&q=80',
    'before_img'     => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=1200&q=80',
    'after_img'      => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80',
    'summary'        => 'A complete ground-floor transformation reconfiguring a restricted 500 sq ft rear footprint into an expansive 800 sq ft open-plan living hub with bespoke floor-to-ceiling structural glazed apertures.',
    'challenge'      => 'The existing loadbearing masonry rear elevation and an unsupported internal chimney breast restricted spatial flow. The client required removing 7.2 meters of internal brickwork without intrusive columns breaking sightlines.',
    'solution'       => 'VPDL engineered an integrated structural steel goalpost frame using twin universal beams (UB) connected with full-depth web moment plates, dispersing point loads onto bespoke C35 reinforced concrete padstones.',
    'deliverables'   => [
      'planning'     => [
        'title'  => 'Statutory Planning & Permitted Development',
        'points' => [
          'Lawful Development Certificate (LDC) application prepared and submitted with zero LPA pushback.',
          'Permitted development rights audited against Article 4 boundary constraints.',
          'Full party wall notices served under Sections 2 & 6 of the Party Wall etc. Act 1996.'
        ]
      ],
      'architecture' => [
        'title'  => 'Architectural BIM & Spatial Detailing',
        'points' => [
          'High-density 3D Revit digital twin coordinating mechanical ducts with ceiling joist heights.',
          'Sun-path daylight calculations optimizing roof lantern orientation.',
          'Bespoke flush-threshold detailing ensuring zero trip hazard between living zone and terrace.'
        ]
      ],
      'structural'   => [
        'title'  => 'Structural Calculations & Eurocode Verification',
        'points' => [
          'Eurocode 3 structural steel design with deflection limits restricted to span/360.',
          'Foundation trial pit assessments and soil bearing capacity sign-off (150 kN/m²).',
          'Padstone bearing calculations avoiding localized masonry crushing under point loads.'
        ]
      ]
    ],
    'gallery'        => [
      ['img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80', 'cap' => 'Completed Rear Elevation & Terrace Integration'],
      ['img' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1200&q=80', 'cap' => 'Moment Connection & Universal Steel Beam Audit'],
      ['img' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1200&q=80', 'cap' => 'Approved Stage 4 Construction Blueprint Pack'],
      ['img' => 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=1200&q=80', 'cap' => 'Substructure Ground Bearing & Trench Sign-Off']
    ]
  ],
  'hayes-fitout' => [
    'title'          => 'Office Fit-Out Design & Extension',
    'scheme_type'    => 'Commercial Fit-Out & Spatial Reconfiguration',
    'location'       => 'Hayes, Greater London, UK',
    'riba_stage'     => 'RIBA Stage 5 · Practical Completion',
    'lpa'            => 'London Borough of Hillingdon',
    'duration'       => '18 Weeks',
    'area_uplift'    => '140+ Workstations Added',
    'steel_tonnage'  => 'Reinforced Plant Risers',
    'compliance'     => 'Part B (Fire) & Part M (DDA)',
    'disciplines'    => ['Space Planning', 'Structural Alterations', 'Fire Strategy', 'JCT Contract Admin'],
    'hero_img'       => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1800&q=80',
    'before_img'     => 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=1200&q=80',
    'after_img'      => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=80',
    'summary'        => 'Corporate headquarters overhaul converting cellular partitions into high-density agile zones, board meeting pods, and certified fire escape circulation corridors.',
    'challenge'      => 'Balancing high-density open-plan layout demands while adhering to travel distance safety regulations under Approved Document B and acoustic separation thresholds.',
    'solution'       => 'Implemented acoustic glass partitions with structural steel trimming trimmers supporting heavier plant equipment on upper levels, fully administered under JCT Minor Works.',
    'deliverables'   => [
      'planning'     => [
        'title'  => 'Statutory Compliance & Building Notice',
        'points' => [
          'Approved Document B compliance with 30-minute fire compartmentation partitions.',
          'DDA accessibility clearance and step-free disabled access verification.',
          'Landlord license-for-alterations (LTA) structural approval pack.'
        ]
      ],
      'architecture' => [
        'title'  => 'Acoustic & Interior Architecture',
        'points' => [
          '48dB acoustic sound attenuation between executive suites and open bullpens.',
          'Integrated mechanical ventilation heat recovery (MVHR) ceiling coffer design.',
          'Ergonomic workstation density mapping maximizing natural light penetration.'
        ]
      ],
      'structural'   => [
        'title'  => 'Structural Modifications',
        'points' => [
          'Roof plant load-distribution grillages for industrial chiller units.',
          'Floor core penetration checks for M&E riser additions.',
          'Lintel replacement for widened structural emergency exit openings.'
        ]
      ]
    ],
    'gallery'        => [
      ['img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=80', 'cap' => 'Executive Boardroom & Acoustic Glazing'],
      ['img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80', 'cap' => 'Facade & Entrance Circulation Hub'],
      ['img' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=1200&q=80', 'cap' => 'On-Site Milestone Sign-Off & Inspection']
    ]
  ],
  'johor-warehouse' => [
    'title'          => 'Major Industrial Logistics Complex',
    'scheme_type'    => 'Industrial Infrastructure & Civil Design',
    'location'       => 'Johor, Malaysia',
    'riba_stage'     => 'RIBA Stages 2–4 · Masterplanning',
    'lpa'            => 'Regional Development Authority',
    'duration'       => '28 Weeks',
    'area_uplift'    => '120,000 sq ft Logistics Capacity',
    'steel_tonnage'  => '140 Tonnes Portal Frame',
    'compliance'     => 'Heavy Civil 45 kN/m² Rated',
    'disciplines'    => ['Portal Frame Design', 'Geotechnical Engineering', 'Heavy Apron Civil Design'],
    'hero_img'       => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1800&q=80',
    'before_img'     => 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=1200&q=80',
    'after_img'      => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80',
    'summary'        => 'State-of-the-art 34-meter clear-span portal frame distribution warehouse incorporating high-bay automated racking and dual-storey operational administration suites.',
    'challenge'      => 'Variable alluvial soil with high water table posing high differential settlement risks under 45 kN/m² dynamic floor loads.',
    'solution'       => 'Engineered driven precast displacement piles tied directly with continuous ground tie beams and steel-fiber reinforced floor slabs with saw-cut movement joints.',
    'deliverables'   => [
      'planning'     => [
        'title'  => 'Civil Masterplanning & Traffic Flow',
        'points' => [
          'HGV turning circle modeling ensuring seamless articulated truck turnaround.',
          'Surface water attenuation ponds calculated for 1-in-100 year storm events.',
          'Industrial boundary zoning and environmental acoustic mitigation buffers.'
        ]
      ],
      'architecture' => [
        'title'  => 'Industrial Spatial Planning',
        'points' => [
          '6 high-dock levelers with automated inflatable shelter seals.',
          'Cantilevered canopy design for weather-protected external staging.',
          'Natural smoke and heat exhaust ventilation (SHEV) roof lights.'
        ]
      ],
      'structural'   => [
        'title'  => 'Portal Frame Structural Calculations',
        'points' => [
          '34-meter clear span tapered portal rafters with haunch reinforcements.',
          'Dynamic wind uplift calculations and horizontal roof-bracing diaphragm.',
          'Steel-fiber concrete slab calculation checking punch-shear under forklift wheel loads.'
        ]
      ]
    ],
    'gallery'        => [
      ['img' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80', 'cap' => 'Main Logistics Clear Span & Racking Layout'],
      ['img' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1200&q=80', 'cap' => 'Steel Haunch & Column Base Plate Detail'],
      ['img' => 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=1200&q=80', 'cap' => 'Substructure Piling & Tie Beam Reinforcement']
    ]
  ]
];

// 2. Dynamic Router / Fallback Handler
$project_id = isset($_GET['id']) && array_key_exists($_GET['id'], $projects) ? $_GET['id'] : 'bentry-road';
$p = $projects[$project_id];

$page_title = "{$p['title']} | Technical Case Study | VPDL";
$page_desc  = $p['summary'];
include ('header.php');
?>

<main class="single-project-wrapper">

  <!-- =========================================================
       01. ARCHITECTURAL HERO BANNER
       ========================================================= -->
  <header class="project-hero-deck">
    <div class="container">
      <nav class="breadcrumb-glass" aria-label="Breadcrumb">
        <a href="index.php">Practice</a>
        <span class="separator">/</span>
        <a href="projects.php">Projects</a>
        <span class="separator">/</span>
        <span class="current"><?= htmlspecialchars($p['title']) ?></span>
      </nav>

      <div class="project-title-area" data-reveal>
        <div class="project-badges-row">
          <span class="badge-red"><?= htmlspecialchars($p['scheme_type']) ?></span>
          <span class="badge-subtle"><?= htmlspecialchars($p['riba_stage']) ?></span>
          <span class="badge-subtle">Verified Delivery</span>
        </div>
        <h1><?= htmlspecialchars($p['title']) ?></h1>
        <p class="project-standfirst"><?= htmlspecialchars($p['summary']) ?></p>
      </div>

      <!-- Quick Metrics Ribbon -->
      <div class="project-metrics-grid" data-reveal>
        <div class="p-metric-cell">
          <small>Spatial Transformation</small>
          <strong><?= htmlspecialchars($p['area_uplift']) ?></strong>
        </div>
        <div class="p-metric-cell">
          <small>Structural Specification</small>
          <strong><?= htmlspecialchars($p['steel_tonnage']) ?></strong>
        </div>
        <div class="p-metric-cell">
          <small>Statutory Clearance</small>
          <strong><?= htmlspecialchars($p['compliance']) ?></strong>
        </div>
        <div class="p-metric-cell">
          <small>Location &amp; Hub</small>
          <strong style="color: var(--vpdl-red);"><?= htmlspecialchars($p['location']) ?></strong>
        </div>
      </div>
    </div>
  </header>

  <!-- =========================================================
       02. INTERACTIVE BEFORE / AFTER SLIDER
       ========================================================= -->
  <section class="container" style="margin-top: 40px;">
    <div class="slider-wrapper-deck" data-reveal>
      <div class="slider-head">
        <div>
          <span class="project-kicker">Interactive Project Verification</span>
          <h3>TRANSFORMATION: PRE-EXISTING VS. COMPLETED</h3>
        </div>
        <small class="slider-instruction">◀ Drag the slider to compare before &amp; after ▶</small>
      </div>

      <div class="ba-slider-container" id="baSlider">
        <!-- After Image (Base) -->
        <img class="ba-img ba-after" src="<?= htmlspecialchars($p['after_img']) ?>" alt="After Completion" loading="eager">
        <span class="ba-badge ba-badge-after">Completed Works</span>

        <!-- Before Image (Clipped Overlay) -->
        <div class="ba-before-wrapper" id="baBeforeWrapper">
          <img class="ba-img ba-before" src="<?= htmlspecialchars($p['before_img']) ?>" alt="Pre-existing Site Condition" loading="eager">
          <span class="ba-badge ba-badge-before">Pre-Existing Condition</span>
        </div>

        <!-- Slider Handle -->
        <div class="ba-handle" id="baHandle">
          <div class="ba-handle-line"></div>
          <div class="ba-handle-button">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================
       03. TECHNICAL CASE STUDY NARRATIVE & TABS
       ========================================================= -->
  <section class="container project-detail-section">
    <div class="project-grid-layout">
      
      <!-- Main Content Column -->
      <div class="project-main-column">
        <!-- Narrative Block: Challenge -->
        <div class="narrative-card" data-reveal>
          <div class="card-icon-kicker">
            <span class="num-chip">01</span>
            <h3>THE STRUCTURAL &amp; SPATIAL CHALLENGE</h3>
          </div>
          <p><?= htmlspecialchars($p['challenge']) ?></p>
        </div>

        <!-- Narrative Block: Solution -->
        <div class="narrative-card solution-border" data-reveal>
          <div class="card-icon-kicker">
            <span class="num-chip" style="background: var(--vpdl-red); color: #fff;">02</span>
            <h3>THE VPDL ENGINEERED SOLUTION</h3>
          </div>
          <p><?= htmlspecialchars($p['solution']) ?></p>
        </div>

        <!-- Interactive Deliverable Tabs -->
        <div class="deliverable-tabs-deck" data-reveal>
          <div class="d-tabs-nav" role="tablist">
            <button class="d-tab-btn active" data-target="d-tab-planning" role="tab" aria-selected="true">Planning (PDM)</button>
            <button class="d-tab-btn" data-target="d-tab-architecture" role="tab" aria-selected="false">Architecture &amp; BIM</button>
            <button class="d-tab-btn" data-target="d-tab-structural" role="tab" aria-selected="false">Structural (SDM)</button>
          </div>

          <div class="d-tab-body">
            <!-- Planning Panel -->
            <div class="d-tab-panel active" id="d-tab-planning" role="tabpanel">
              <h4><?= htmlspecialchars($p['deliverables']['planning']['title']) ?></h4>
              <ul class="d-checklist">
                <?php foreach ($p['deliverables']['planning']['points'] as $pt): ?>
                  <li>
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="var(--vpdl-red)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span><?= htmlspecialchars($pt) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <!-- Architecture Panel -->
            <div class="d-tab-panel" id="d-tab-architecture" role="tabpanel">
              <h4><?= htmlspecialchars($p['deliverables']['architecture']['title']) ?></h4>
              <ul class="d-checklist">
                <?php foreach ($p['deliverables']['architecture']['points'] as $pt): ?>
                  <li>
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="var(--vpdl-red)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span><?= htmlspecialchars($pt) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <!-- Structural Panel -->
            <div class="d-tab-panel" id="d-tab-structural" role="tabpanel">
              <h4><?= htmlspecialchars($p['deliverables']['structural']['title']) ?></h4>
              <ul class="d-checklist">
                <?php foreach ($p['deliverables']['structural']['points'] as $pt): ?>
                  <li>
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="var(--vpdl-red)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span><?= htmlspecialchars($pt) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Sticky Technical Sidebar -->
      <aside class="project-sidebar-column">
        <div class="sidebar-sticky-box" data-reveal>
          <div class="blueprint-stamp">VPDL / APPROVED SCHEME</div>
          <h3>Need a Similar Project Delivered?</h3>
          <p>Our integrated team resolves architectural design, statutory planning permissions, and structural calculations under one contract.</p>

          <div class="sidebar-meta-list">
            <div class="s-meta-row">
              <span>Authority</span>
              <strong><?= htmlspecialchars($p['lpa']) ?></strong>
            </div>
            <div class="s-meta-row">
              <span>Lead Time</span>
              <strong><?= htmlspecialchars($p['duration']) ?></strong>
            </div>
            <div class="s-meta-row">
              <span>Delivery Scope</span>
              <strong>RIBA Stages 0–4+</strong>
            </div>
          </div>

          <div class="sidebar-action-group">
            <a class="btn-calc-fast" style="width: 100%; justify-content: center;" href="quote-calculator.php">
              <span>Calculate Project in 60s</span>
              <span class="calc-pill-time">Free</span>
              <i>↗</i>
            </a>
            <a class="btn-ghost-dark" style="width: 100%; justify-content: center;" href="consultation.php">
              <span>Book Feasibility Consultation</span>
              <i>→</i>
            </a>
          </div>

          <div class="desk-direct-contact">
            <small>Direct Principal Engineering Desk:</small>
            <a href="tel:+443333445807">+44 (0) 3333 44 5807</a>
          </div>
        </div>
      </aside>

    </div>
  </section>

  <!-- =========================================================
       04. TECHNICAL SCHEME GALLERY WITH LIGHTBOX ZOOM
       ========================================================= -->
  <section class="gallery-light-deck">
    <div class="container">
      <div class="section-head-centered" data-reveal>
        <div class="mono-tag">Drawing &amp; Milestone Archive</div>
        <h2>VERIFIED STAGE PHOTOGRAPHY &amp; PLANS</h2>
        <p>Click any technical plate below to inspect drawings, structural node details, and verified on-site milestone audits.</p>
      </div>

      <div class="lightbox-gallery-grid" data-reveal>
        <?php foreach ($p['gallery'] as $idx => $gItem): ?>
          <figure class="gallery-photo-card" onclick="openLightbox('<?= htmlspecialchars($gItem['img']) ?>', '<?= htmlspecialchars($gItem['cap']) ?>')">
            <img src="<?= htmlspecialchars($gItem['img']) ?>" alt="<?= htmlspecialchars($gItem['cap']) ?>" loading="lazy">
            <div class="gallery-hover-overlay">
              <span class="zoom-icon">⤢</span>
              <strong><?= htmlspecialchars($gItem['cap']) ?></strong>
            </div>
          </figure>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================
       05. RELATED SCHEMES CAROUSEL
       ========================================================= -->
  <section class="container" style="padding: 70px 0 90px;">
    <div class="related-strip-head" data-reveal>
      <div>
        <span class="project-kicker">Cross-Disciplinary Portfolio</span>
        <h3 style="font-size: 22px; font-weight: 800; color: var(--vpdl-black); margin: 4px 0 0 0;">OTHER FEATURED PRACTICE SCHEMES</h3>
      </div>
      <a href="projects.php" class="btn-ghost-dark"><span>All Projects</span> <i>→</i></a>
    </div>

    <div class="related-schemes-grid" data-reveal>
      <?php foreach ($projects as $key => $proj): ?>
        <?php if ($key !== $project_id): ?>
          <a class="related-card" href="project-single.php?id=<?= urlencode($key) ?>">
            <div class="related-card-img">
              <img src="<?= htmlspecialchars($proj['hero_img']) ?>" alt="<?= htmlspecialchars($proj['title']) ?>" loading="lazy">
              <span class="related-card-tag"><?= htmlspecialchars($proj['scheme_type']) ?></span>
            </div>
            <div class="related-card-body">
              <h4><?= htmlspecialchars($proj['title']) ?></h4>
              <p><?= htmlspecialchars($proj['location']) ?> · <?= htmlspecialchars($proj['riba_stage']) ?></p>
            </div>
          </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Lightbox Modal Container -->
  <div class="lightbox-modal" id="imageLightbox" onclick="closeLightbox(event)" role="dialog" aria-modal="true" aria-label="Image Zoom">
    <div class="lightbox-content">
      <button class="lightbox-close-btn" onclick="closeLightbox(event)" aria-label="Close Lightbox">&times;</button>
      <img id="lightboxImg" src="" alt="Zoomed Technical Plate">
      <p id="lightboxCaption"></p>
    </div>
  </div>

</main>

<style>
  /* =========================================================
     VPDL CORE DESIGN SYSTEM & SINGLE PROJECT STYLES
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

  /* Global Layout Container */
  .container {
    width: 100%;
    max-width: 1240px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
    box-sizing: border-box;
  }

  /* Monospaced Technical Kickers */
  .mono-tag,
  .project-kicker {
    display: inline-block;
    background: rgba(225, 29, 42, 0.08);
    border: 1px solid rgba(225, 29, 42, 0.25);
    color: var(--vpdl-red);
    font-size: 11px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    padding: 5px 12px;
    border-radius: 4px;
    font-weight: 800;
    line-height: 1;
  }

  /* Action Buttons & Badges */
  .btn-calc-fast {
    background: var(--vpdl-black);
    color: #ffffff !important;
    border: 1px solid var(--vpdl-black);
    border-bottom: 2px solid var(--vpdl-red);
    padding: 11px 18px;
    border-radius: 6px;
    font-size: 12.5px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.2s ease;
    box-sizing: border-box;
  }
  .btn-calc-fast:hover {
    background: #1e2638;
    border-bottom-color: var(--vpdl-red);
    transform: translateY(-1px);
  }
  .calc-pill-time {
    background: var(--vpdl-red);
    color: #ffffff;
    font-size: 9.5px;
    font-weight: 800;
    padding: 2px 6px;
    border-radius: 4px;
    letter-spacing: 0.02em;
  }

  .btn-ghost-dark {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 10px 18px;
    font-size: 13px;
    font-weight: 700;
    color: var(--vpdl-black) !important;
    background: transparent;
    border: 1px solid var(--vpdl-border);
    border-radius: 6px;
    text-decoration: none;
    transition: all 0.15s ease;
    box-sizing: border-box;
  }
  .btn-ghost-dark:hover {
    background: #ffffff;
    border-color: #cbd5e1;
    color: var(--vpdl-red) !important;
  }

  .btn-brand-submit {
    background: var(--vpdl-black) !important;
    color: #ffffff !important;
    border: 1px solid var(--vpdl-black) !important;
    border-radius: 8px;
    padding: 12px 22px;
    font-size: 13.5px;
    font-weight: 700;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    text-decoration: none;
    transition: all 0.2s ease;
    box-shadow: 0 4px 15px rgba(17, 24, 39, 0.12);
    box-sizing: border-box;
  }
  .btn-brand-submit:hover {
    background: var(--vpdl-red) !important;
    border-color: var(--vpdl-red) !important;
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(225, 29, 42, 0.25);
  }

  /* Single Project Header Deck */
  .single-project-wrapper {
    background: var(--vpdl-bg-canvas);
    color: var(--vpdl-black);
    position: relative;
    overflow-x: hidden;
  }

  .project-hero-deck {
    padding: 35px 0 40px;
    background: 
      radial-gradient(circle at 50% -10%, rgba(225, 29, 42, 0.08) 0%, transparent 50%),
      linear-gradient(to bottom, #ffffff 0%, #f8fafc 100%);
    border-bottom: 1px solid var(--vpdl-border);
  }

  .breadcrumb-glass {
    background: rgba(255, 255, 255, 0.9) !important;
    backdrop-filter: blur(10px) !important;
    -webkit-backdrop-filter: blur(10px) !important;
    border: 1px solid var(--vpdl-border) !important;
    border-radius: 9999px;
    padding: 7px 18px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 12.5px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
  }
  .breadcrumb-glass a {
    color: var(--vpdl-muted);
    text-decoration: none;
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

  .project-badges-row {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    margin-bottom: 14px;
  }
  .badge-red {
    background: var(--vpdl-red);
    color: #ffffff;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    padding: 4px 10px;
    border-radius: 4px;
  }
  .badge-subtle {
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    color: var(--vpdl-muted);
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 4px 10px;
    border-radius: 4px;
  }

  .project-title-area {
    margin-top: 20px;
    max-width: 860px;
  }
  .project-title-area h1 {
    font-size: clamp(30px, 4.2vw, 50px);
    font-weight: 800;
    color: var(--vpdl-black);
    line-height: 1.15;
    margin: 0 0 16px 0;
    letter-spacing: -0.02em;
  }
  .project-standfirst {
    font-size: 16px;
    color: var(--vpdl-muted);
    line-height: 1.75;
    margin: 0;
  }

  /* Metrics Ribbon */
  .project-metrics-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    border-radius: 12px;
    padding: 20px 24px;
    margin-top: 36px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.02);
  }
  .p-metric-cell small {
    display: block;
    font-size: 10.5px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: var(--vpdl-muted);
    margin-bottom: 2px;
  }
  .p-metric-cell strong {
    font-size: 14.5px;
    font-weight: 800;
    color: var(--vpdl-black);
  }

  /* Before / After Slider */
  .slider-wrapper-deck {
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    border-radius: 16px;
    padding: 26px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
  }
  .slider-head {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 18px;
    flex-wrap: wrap;
    gap: 12px;
  }
  .slider-head h3 {
    margin: 4px 0 0;
    font-size: 18px;
    font-weight: 800;
    color: var(--vpdl-black);
  }
  .slider-instruction {
    font-size: 12px;
    font-weight: 700;
    color: var(--vpdl-red);
  }
  .ba-slider-container {
    position: relative;
    width: 100%;
    height: 500px;
    border-radius: 12px;
    overflow: hidden;
    user-select: none;
    -webkit-user-select: none;
    cursor: ew-resize;
  }
  .ba-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .ba-before-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    overflow: hidden;
    z-index: 2;
  }
  .ba-before-wrapper .ba-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .ba-badge {
    position: absolute;
    top: 20px;
    padding: 6px 14px;
    border-radius: 6px;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    z-index: 4;
  }
  .ba-badge-before {
    left: 20px;
    background: rgba(17, 24, 39, 0.85);
    color: #ffffff;
  }
  .ba-badge-after {
    right: 20px;
    background: var(--vpdl-red);
    color: #ffffff;
  }
  .ba-handle {
    position: absolute;
    top: 0;
    left: 50%;
    width: 4px;
    height: 100%;
    background: #ffffff;
    z-index: 5;
    transform: translateX(-50%);
    pointer-events: none;
  }
  .ba-handle-button {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #ffffff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--vpdl-black);
  }

  /* Narrative & Deliverables Grid */
  .project-detail-section {
    padding-top: 50px;
  }
  .project-grid-layout {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 40px;
    align-items: start;
  }
  .narrative-card {
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    border-radius: 14px;
    padding: 28px;
    margin-bottom: 24px;
  }
  .solution-border {
    border-left: 4px solid var(--vpdl-red);
  }
  .card-icon-kicker {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
  }
  .num-chip {
    width: 28px;
    height: 28px;
    border-radius: 6px;
    background: var(--vpdl-bg-canvas);
    color: var(--vpdl-black);
    font-size: 12px;
    font-weight: 800;
    display: grid;
    place-items: center;
    border: 1px solid var(--vpdl-border);
  }
  .card-icon-kicker h3 {
    margin: 0;
    font-size: 16px;
    font-weight: 800;
    letter-spacing: -0.01em;
    color: var(--vpdl-black);
  }
  .narrative-card p {
    color: #334155;
    font-size: 14.5px;
    line-height: 1.75;
    margin: 0;
  }

  /* Deliverable Tabs */
  .deliverable-tabs-deck {
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    border-radius: 14px;
    overflow: hidden;
  }
  .d-tabs-nav {
    display: flex;
    border-bottom: 1px solid var(--vpdl-border);
    background: var(--vpdl-bg-canvas);
  }
  .d-tab-btn {
    flex: 1;
    background: none;
    border: none;
    padding: 14px;
    font-family: inherit;
    font-size: 13px;
    font-weight: 700;
    color: var(--vpdl-muted);
    cursor: pointer;
    border-bottom: 2px solid transparent;
    transition: all 0.2s ease;
  }
  .d-tab-btn.active {
    background: #ffffff;
    color: var(--vpdl-black);
    border-bottom-color: var(--vpdl-red);
  }
  .d-tab-body {
    padding: 26px;
  }
  .d-tab-panel {
    display: none;
  }
  .d-tab-panel.active {
    display: block;
  }
  .d-tab-panel h4 {
    margin: 0 0 14px;
    font-size: 15px;
    font-weight: 800;
    color: var(--vpdl-black);
  }
  .d-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  .d-checklist li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-size: 13px;
    color: #334155;
    line-height: 1.55;
  }
  .d-checklist svg {
    flex-shrink: 0;
    margin-top: 3px;
  }

  /* Sticky Sidebar */
  .sidebar-sticky-box {
    position: sticky;
    top: 90px;
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
  }
  .blueprint-stamp {
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 0.1em;
    color: var(--vpdl-red);
    margin-bottom: 8px;
  }
  .sidebar-sticky-box h3 {
    font-size: 19px;
    font-weight: 800;
    margin: 0 0 10px;
    color: var(--vpdl-black);
  }
  .sidebar-sticky-box p {
    font-size: 13px;
    color: var(--vpdl-muted);
    line-height: 1.6;
    margin: 0 0 20px;
  }
  .sidebar-meta-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding: 16px 0;
    border-top: 1px solid var(--vpdl-border);
    border-bottom: 1px solid var(--vpdl-border);
    margin-bottom: 22px;
  }
  .s-meta-row {
    display: flex;
    justify-content: space-between;
    font-size: 12.5px;
  }
  .s-meta-row span {
    color: var(--vpdl-muted);
  }
  .s-meta-row strong {
    color: var(--vpdl-black);
  }
  .sidebar-action-group {
    display: grid;
    gap: 10px;
  }
  .desk-direct-contact {
    margin-top: 20px;
    text-align: center;
  }
  .desk-direct-contact small {
    display: block;
    font-size: 11px;
    color: var(--vpdl-muted);
  }
  .desk-direct-contact a {
    color: var(--vpdl-black);
    font-weight: 800;
    text-decoration: none;
    font-size: 13px;
  }

  /* Lightbox Gallery */
  .gallery-light-deck {
    margin-top: 70px;
    padding: 60px 0;
    background: #ffffff;
    border-top: 1px solid var(--vpdl-border);
    border-bottom: 1px solid var(--vpdl-border);
  }
  .section-head-centered {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 36px;
  }
  .section-head-centered h2 {
    font-size: clamp(24px, 3.2vw, 34px);
    font-weight: 800;
    color: var(--vpdl-black);
    margin: 8px 0 10px;
    line-height: 1.2;
  }
  .section-head-centered p {
    color: var(--vpdl-muted);
    font-size: 14px;
    line-height: 1.65;
    margin: 0;
  }

  .lightbox-gallery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
    margin-top: 30px;
  }
  .gallery-photo-card {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    height: 220px;
    cursor: pointer;
    margin: 0;
    border: 1px solid var(--vpdl-border);
  }
  .gallery-photo-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
  }
  .gallery-hover-overlay {
    position: absolute;
    inset: 0;
    background: rgba(15, 23, 42, 0.75);
    color: #ffffff;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 16px;
    opacity: 0;
    transition: opacity 0.25s ease;
  }
  .gallery-photo-card:hover .gallery-hover-overlay {
    opacity: 1;
  }
  .gallery-photo-card:hover img {
    transform: scale(1.06);
  }
  .zoom-icon {
    font-size: 24px;
    margin-bottom: 6px;
  }
  .gallery-hover-overlay strong {
    font-size: 12px;
    line-height: 1.4;
  }

  /* Lightbox Modal */
  .lightbox-modal {
    position: fixed;
    inset: 0;
    background: rgba(15, 23, 42, 0.95);
    z-index: 9999999;
    display: none;
    place-items: center;
    padding: 24px;
  }
  .lightbox-modal.is-open {
    display: grid;
  }
  .lightbox-content {
    max-width: 900px;
    width: 100%;
    text-align: center;
    position: relative;
  }
  .lightbox-content img {
    max-width: 100%;
    max-height: 80vh;
    border-radius: 8px;
    border: 2px solid rgba(255, 255, 255, 0.2);
  }
  .lightbox-content p {
    color: #ffffff;
    font-size: 14px;
    margin-top: 12px;
  }
  .lightbox-close-btn {
    position: absolute;
    top: -40px;
    right: 0;
    background: none;
    border: none;
    color: #ffffff;
    font-size: 36px;
    cursor: pointer;
  }

  /* Related Schemes */
  .related-strip-head {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 28px;
  }
  .related-schemes-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }
  .related-card {
    background: #ffffff;
    border: 1px solid var(--vpdl-border);
    border-radius: 14px;
    overflow: hidden;
    text-decoration: none;
    display: flex;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }
  .related-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
  }
  .related-card-img {
    width: 40%;
    position: relative;
    overflow: hidden;
  }
  .related-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .related-card-tag {
    position: absolute;
    top: 10px;
    left: 10px;
    background: rgba(17, 24, 39, 0.85);
    color: #ffffff;
    font-size: 9.5px;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 4px;
  }
  .related-card-body {
    width: 60%;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .related-card-body h4 {
    margin: 0 0 6px 0;
    font-size: 15px;
    font-weight: 800;
    color: var(--vpdl-black);
  }
  .related-card-body p {
    margin: 0;
    font-size: 12px;
    color: var(--vpdl-muted);
    font-weight: 600;
  }

  /* Responsive Breakpoints */
  @media (max-width: 1080px) {
    .project-grid-layout {
      grid-template-columns: 1fr;
    }
    .lightbox-gallery-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .project-metrics-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }
  @media (max-width: 680px) {
    .ba-slider-container {
      height: 320px;
    }
    .project-metrics-grid {
      grid-template-columns: 1fr;
    }
    .lightbox-gallery-grid {
      grid-template-columns: 1fr;
    }
    .related-schemes-grid {
      grid-template-columns: 1fr;
    }
    .related-card {
      flex-direction: column;
    }
    .related-card-img, .related-card-body {
      width: 100%;
    }
    .related-card-img {
      height: 180px;
    }
  }
</style>

<!-- =========================================================
     INTERACTIVE JAVASCRIPT ENGINES
     ========================================================= -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // 1. Interactive Before/After Drag Slider
    const slider = document.getElementById('baSlider');
    const beforeWrapper = document.getElementById('baBeforeWrapper');
    const handle = document.getElementById('baHandle');
    let isDragging = false;

    function setSliderPosition(xPos) {
      if (!slider || !beforeWrapper || !handle) return;
      const rect = slider.getBoundingClientRect();
      let offsetX = xPos - rect.left;
      if (offsetX < 0) offsetX = 0;
      if (offsetX > rect.width) offsetX = rect.width;
      const percentage = (offsetX / rect.width) * 100;
      beforeWrapper.style.width = percentage + '%';
      handle.style.left = percentage + '%';
    }

    if (slider) {
      slider.addEventListener('mousedown', () => isDragging = true);
      window.addEventListener('mouseup', () => isDragging = false);
      slider.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        setSliderPosition(e.clientX);
      });

      // Mobile Touch Interaction
      slider.addEventListener('touchstart', () => isDragging = true);
      window.addEventListener('touchend', () => isDragging = false);
      slider.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        setSliderPosition(e.touches[0].clientX);
      });
    }

    // 2. Technical Deliverable Tabs
    const tabBtns = document.querySelectorAll('.d-tab-btn');
    const tabPanels = document.querySelectorAll('.d-tab-panel');

    tabBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        tabBtns.forEach(b => {
          b.classList.remove('active');
          b.setAttribute('aria-selected', 'false');
        });
        tabPanels.forEach(p => p.classList.remove('active'));
        this.classList.add('active');
        this.setAttribute('aria-selected', 'true');
        const targetId = this.getAttribute('data-target');
        const targetPanel = document.getElementById(targetId);
        if (targetPanel) targetPanel.classList.add('active');
      });
    });
  });

  // 3. Full-screen Lightbox Zoom Controls
  function openLightbox(imgSrc, caption) {
    const modal = document.getElementById('imageLightbox');
    const img = document.getElementById('lightboxImg');
    const cap = document.getElementById('lightboxCaption');
    if (modal && img && cap) {
      img.src = imgSrc;
      cap.innerText = caption;
      modal.classList.add('is-open');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeLightbox(e) {
    const modal = document.getElementById('imageLightbox');
    if (modal && (e.target.id === 'imageLightbox' || e.target.classList.contains('lightbox-close-btn'))) {
      modal.classList.remove('is-open');
      document.body.style.overflow = '';
    }
  }

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      const modal = document.getElementById('imageLightbox');
      if (modal && modal.classList.contains('is-open')) {
        modal.classList.remove('is-open');
        document.body.style.overflow = '';
      }
    }
  });
</script>

<?php include ('footer.php'); ?>