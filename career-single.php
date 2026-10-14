<?php
/**
 * Template Name: Single Career Opportunity Detail
 * Description: Dedicated position dossier, specification profile, and application gateway for VPDL.
 *
 * @package VPDL
 */

// 1. Role Registry & Fallback Database
$roles = [
  'structural-engineer' => [
    'id' => 'structural-engineer',
    'title' => 'Senior / Chartered Structural Design Engineer',
    'discipline' => 'Structural Design Management (SDM)',
    'discipline_tag' => 'tag-blue',
    'ref_code' => 'SDM-2026-01',
    'location' => 'Newport / Bristol Hub · Hybrid',
    'type' => 'Full-Time (Permanent)',
    'experience' => '5+ Years UK Practice',
    'remuneration' => '£45,000 – £58,000 + Benefits',
    'posted' => '15 January 2026',
    'lead' => 'Lead technical structural calculations, Eurocode member sizing, and construction detail drafting for residential extensions, basement alterations, steel box-frames, and commercial conversions up to RIBA Stage 4.',
    'overview' => 'Working directly alongside our founder and lead consultant (25+ years experience) and multidisciplinary planning and architectural teams, you will act as technical signatory on general arrangement markups, calculation books, and statutory Building Control packages submitted to local councils and approved inspectors.',
    'responsibilities' => [
      'Authoring comprehensive structural calculation books in accordance with BS EN 1990, 1991, 1992, and 1993 (Eurocodes).',
      'Designing steelwork arrangements including Universal Beams (UB), Universal Columns (UC), parallel flange channels, and rigid moment frames.',
      'Sizing concrete padstones, spreader plates, ground-bearing slabs, pile caps, and sequential bay underpinning schedules.',
      'Liaising directly with local authority Building Control officers and private registered building control approvers (RBCAs) to resolve statutory queries.',
      'Conducting staged on-site structural inspections alongside project managers to verify steel placement, bolt torque, and padstone bearing prior to boarding.'
    ],
    'requirements' => [
      'BEng, MEng, or MSc in Civil / Structural Engineering from an accredited UK institution.',
      'Chartered or actively working toward chartership with IStructE or ICE.',
      'Minimum 5 years of verifiable UK design office experience handling domestic extensions and commercial refurbishment.',
      'Demonstrated proficiency in MasterSeries, Tekla Tedds, or IDEA StatiCa alongside AutoCAD.',
      'Thorough working knowledge of Approved Document A (Structure) and Approved Document B (Fire Safety interactions).'
    ]
  ],

  'planning-consultant' => [
    'id' => 'planning-consultant',
    'title' => 'Chartered Town Planning Consultant & PDM Lead',
    'discipline' => 'Planning Design Management (PDM)',
    'discipline_tag' => 'tag-red',
    'ref_code' => 'PDM-2026-02',
    'location' => 'London / Newport Studio · Hybrid',
    'type' => 'Full-Time',
    'experience' => '3+ Years Planning Practice',
    'remuneration' => '£38,000 – £48,000 + Bonus',
    'posted' => '22 January 2026',
    'lead' => 'Lead statutory planning appraisals, lawful development certificate applications, and local authority negotiations across Wales, Bristol, London, and Northern England.',
    'overview' => 'As part of our PDM division, you will manage projects from initial site constraint mapping through to formal Planning Committee presentations and written appeal representations, unlocking maximum development value for residential and commercial clients.',
    'responsibilities' => [
      'Authoring robust Planning Statements, Design & Access Statements (DAS), and Heritage Impact Assessments.',
      'Managing householder, full planning, and Class MA prior approval submissions via the Planning Portal.',
      'Advising clients on Permitted Development thresholds under GPDO 2015 and securing Certificates of Lawfulness.',
      'Negotiating Section 106 agreements, Community Infrastructure Levy (CIL) exemptions, and pre-commencement condition discharges.'
    ],
    'requirements' => [
      'Degree or postgraduate qualification in Town & Country Planning accredited by the RTPI.',
      'MRTPI chartered status (or nearing completion of APC).',
      'Minimum 3 years post-qualification experience within a UK private consultancy or Local Planning Authority.',
      'Deep fluency in English and Welsh planning policy frameworks (NPPF, Future Wales, and local development plans).'
    ]
  ],

  'architectural-designer' => [
    'id' => 'architectural-designer',
    'title' => 'Architectural Designer & 3D Visualiser',
    'discipline' => 'Architectural Design (ARC)',
    'discipline_tag' => 'tag-purple',
    'ref_code' => 'ARC-2026-03',
    'location' => 'London / South Wales Studio',
    'type' => 'Full-Time',
    'experience' => '2+ Years Technical Architecture',
    'remuneration' => '£32,000 – £42,000',
    'posted' => '02 February 2026',
    'lead' => 'Produce 1:50 general arrangement plans, photorealistic 3D visual concepts, and 1:20 technical Building Regulations construction packs up to RIBA Stage 4.',
    'overview' => 'Collaborating closely with our structural and planning teams, you will turn spatial concepts into buildable, structurally pre-coordinated schemes that eliminate variations during contractor procurement.',
    'responsibilities' => [
      'Developing 3D digital massing models and presentation visualisations for client reviews and planning advocacy.',
      'Drafting detailed 1:50 floor plans, roof geometries, and contextual streetscene elevations.',
      'Authoring 1:20 technical construction details showing thermal U-values (Part L) and acoustic floor separations (Part E).',
      'Conducting laser-measured surveys and translating point-cloud data into accurate CAD drawings.'
    ],
    'requirements' => [
      'Part 2 architectural qualification (or equivalent architectural technology degree).',
      'High proficiency in Revit, AutoCAD, SketchUp, and Lumion/V-Ray.',
      'Demonstrated portfolio of completed UK residential extensions, conversions, or commercial fit-outs.'
    ]
  ]
];

// Determine Role from Query String
$requested_id = isset($_GET['id']) ? trim($_GET['id']) : 'structural-engineer';
$role = isset($roles[$requested_id]) ? $roles[$requested_id] : $roles['structural-engineer'];

// SEO Dynamic Metas
$page_title = $role['title'] . " | Careers at VPDL";
$page_desc  = $role['lead'];
include ('header.php');
?>

  <!-- Schema.org JSON-LD Structured Data: Dynamic JobPosting -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "BreadcrumbList",
        "@id": "https://vpdl.co.uk/single-career.php?id=<?php echo urlencode($role['id']); ?>#breadcrumb",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://vpdl.co.uk/index.php" },
          { "@type": "ListItem", "position": 2, "name": "Careers", "item": "https://vpdl.co.uk/careers.php" },
          { "@type": "ListItem", "position": 3, "name": "<?php echo addslashes($role['title']); ?>", "item": "https://vpdl.co.uk/single-career.php?id=<?php echo urlencode($role['id']); ?>" }
        ]
      },
      {
        "@type": "JobPosting",
        "title": "<?php echo addslashes($role['title']); ?>",
        "description": "<?php echo addslashes($role['lead']); ?>",
        "identifier": {
          "@type": "PropertyValue",
          "name": "Volume Planning & Developments Ltd",
          "value": "<?php echo $role['ref_code']; ?>"
        },
        "datePosted": "<?php echo $role['posted']; ?>",
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
            "addressLocality": "<?php echo addslashes($role['location']); ?>",
            "addressCountry": "GB"
          }
        }
      }
    ]
  }
  </script>

  <!-- =========================================================
       SINGLE CAREER ROLE DOSSIER
       ========================================================= -->
  <main class="single-career-wrapper">

    <!-- Top Ambient Backdrop -->
    <div class="career-top-backdrop">
      <!-- Centered Breadcrumbs -->
      <div class="breadcrumb-section">
        <div class="container breadcrumb-container">
          <nav class="breadcrumb-glass" aria-label="Breadcrumb">
            <a href="index.php">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Home
            </a>
            <span class="separator" aria-hidden="true">/</span>
            <a href="careers.php">Careers</a>
            <span class="separator" aria-hidden="true">/</span>
            <span class="current" aria-current="page"><?php echo htmlspecialchars($role['title']); ?></span>
          </nav>
        </div>
      </div>

      <!-- Hero Header -->
      <section class="career-hero centered-hero">
        <div class="container hero-container" data-reveal>
          <h1><?php echo htmlspecialchars($role['title']); ?></h1>
          <p class="career-hero-lead"><?php echo htmlspecialchars($role['lead']); ?></p>
        </div>
      </section>
    </div>

    <!-- Main Workspace Layout -->
    <section class="container single-career-main-section">
      <div class="single-career-grid" data-reveal>

        <!-- Left Column: Detailed Specification Dossier -->
        <article class="career-spec-panel">

          <!-- Key Metrics Pill Ribbon -->
          <div class="spec-metrics-ribbon">
            <div class="metric-node">
              <span class="metric-title">Location</span>
              <strong><?php echo htmlspecialchars($role['location']); ?></strong>
            </div>
            <div class="metric-node">
              <span class="metric-title">Employment Basis</span>
              <strong><?php echo htmlspecialchars($role['type']); ?></strong>
            </div>
            <div class="metric-node">
              <span class="metric-title">Experience Level</span>
              <strong><?php echo htmlspecialchars($role['experience']); ?></strong>
            </div>
            <div class="metric-node">
              <span class="metric-title">Remuneration</span>
              <strong style="color: var(--vpdl-red);"><?php echo htmlspecialchars($role['remuneration']); ?></strong>
            </div>
          </div>

          <!-- Role Overview -->
          <div class="spec-section">
            <div class="spec-section-header">
              <span class="mono-idx">01</span>
              <h2>Practice Context &amp; Purpose</h2>
            </div>
            <p><?php echo htmlspecialchars($role['overview']); ?></p>
          </div>

          <!-- Responsibilities -->
          <div class="spec-section">
            <div class="spec-section-header">
              <span class="mono-idx">02</span>
              <h2>Core Responsibilities &amp; Deliverables</h2>
            </div>
            <ul class="spec-checklist">
              <?php foreach ($role['responsibilities'] as $resp): ?>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span><?php echo htmlspecialchars($resp); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <!-- Candidate Requirements -->
          <div class="spec-section">
            <div class="spec-section-header">
              <span class="mono-idx">03</span>
              <h2>Experience &amp; Technical Capabilities</h2>
            </div>
            <ul class="spec-checklist">
              <?php foreach ($role['requirements'] as $req): ?>
                <li>
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span><?php echo htmlspecialchars($req); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <!-- Bottom Action Prompt -->
          <div class="spec-action-callout">
            <div>
              <h3>Ready to Join Our Practice?</h3>
              <p>Applications are reviewed directly by our founders and practice directors with absolute confidentiality.</p>
            </div>
            <button type="button" class="btn-brand-submit open-apply-modal-btn">
              <span>Apply for this Position</span>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </button>
          </div>

        </article>

        <!-- Right Column: Sticky Navigation & Practice Sidebar -->
        <aside class="career-sidebar">

          <!-- Sticky Snapshot Box -->
          <div class="sidebar-action-card">
            <span class="box-kicker">Candidate Gateway</span>
            <h4>Apply for this Role</h4>
            <p>Direct applications are processed directly by our directorate team within 5 business days.</p>

            <button type="button" class="btn-brand-submit open-apply-modal-btn" style="width: 100%;">
              <span>Start Application</span>
              <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </button>

            <div class="sidebar-contact-note">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <span>Enquiries: <a href="mailto:vpdl.uk@gmail.com">vpdl.uk@gmail.com</a></span>
            </div>
          </div>

          <!-- Other Active Opportunities -->
          <div class="sidebar-roles-box">
            <h4>Other Open Roles</h4>
            <nav class="sidebar-roles-list">
              <?php foreach ($roles as $rKey => $rData): ?>
                <a href="single-career.php?id=<?php echo urlencode($rKey); ?>" class="<?php echo $rKey === $role['id'] ? 'is-active' : ''; ?>">
                  <div>
                    <strong><?php echo htmlspecialchars($rData['title']); ?></strong>
                    <small><?php echo htmlspecialchars($rData['location']); ?></small>
                  </div>
                  <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
              <?php endforeach; ?>
            </nav>
          </div>

        </aside>

      </div>
    </section>

    <!-- Modal Application Overlay -->
    <div id="applyModal" class="career-modal-backdrop" aria-hidden="true" role="dialog" aria-labelledby="modalRoleTitle">
      <div class="career-modal-window">
        <div class="modal-header">
          <div>
            <h3 id="modalRoleTitle"><?php echo htmlspecialchars($role['title']); ?></h3>
          </div>
          <button type="button" class="modal-close-btn" id="closeApplyModal" aria-label="Close Application Window">&times;</button>
        </div>

        <form id="singleCareerApplyForm" method="POST" action="contact.php" enctype="multipart/form-data">
          <input type="hidden" name="applied_position" value="<?php echo htmlspecialchars($role['title']); ?>">
          <input type="hidden" name="position_ref" value="<?php echo htmlspecialchars($role['ref_code']); ?>">

          <div class="modal-form-grid">
            <div>
              <label class="form-label" for="appName">Full Name <span class="required-star">*</span></label>
              <input class="form-control" type="text" id="appName" name="applicant_name" required placeholder="e.g. John Doe">
            </div>

            <div>
              <label class="form-label" for="appEmail">Email Address <span class="required-star">*</span></label>
              <input class="form-control" type="email" id="appEmail" name="applicant_email" required placeholder="john@example.com">
            </div>

            <div>
              <label class="form-label" for="appPhone">Phone Number <span class="required-star">*</span></label>
              <input class="form-control" type="tel" id="appPhone" name="applicant_phone" required placeholder="+44 7123 456789">
            </div>

            <div>
              <label class="form-label" for="appLocation">Notice Period &amp; Location</label>
              <input class="form-control" type="text" id="appLocation" name="applicant_location" placeholder="e.g. 1 Month / Bristol">
            </div>

            <div class="modal-field-full">
              <label class="form-label" for="appCover">Brief Note / Practice Background</label>
              <textarea class="form-control" id="appCover" name="applicant_notes" rows="3" placeholder="Briefly highlight your experience with UK Eurocodes, Planning Portal, or project coordination..."></textarea>
            </div>

            <div class="modal-field-full">
              <label class="form-label" for="appLink">CV / Portfolio Web Link (LinkedIn, Drive, Dropbox)</label>
              <input class="form-control" type="url" id="appLink" name="applicant_link" placeholder="https://linkedin.com/in/... or portfolio URL">
            </div>

            <div class="modal-field-full" style="margin-top: 6px;">
              <button type="submit" id="btnSubmitModal" class="btn-brand-submit" style="width: 100%;">
                <span id="btnModalText">Submit Application to Practice Directors</span>
                <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
              </button>
            </div>
          </div>

          <div id="modalSuccessAlert" class="form-status-alert" style="display: none;" role="status" aria-live="polite">
            Thank you. Your candidate dossier has been forwarded directly to our directors. We will contact you following technical review.
          </div>
        </form>
      </div>
    </div>

  </main>

  <!-- Component Styles Aligned with VPDL Brand Palette -->
  <style>
    :root {
      --vpdl-red: #E11D2A;
      --vpdl-purple: #E11D2A;
      --vpdl-blue: #4F83B7;
      --vpdl-black: #111827;
      --vpdl-muted: #64748B;
      --vpdl-border: #E2E8F0;
      --vpdl-surface: #FFFFFF;
      --vpdl-bg-canvas: #F8FAFC;
    }

    .single-career-wrapper {
      background: var(--vpdl-bg-canvas);
      color: var(--vpdl-black);
      position: relative;
      overflow-x: hidden;
    }

    /* Ambient Hero Backdrop */
    .career-top-backdrop {
      position: relative;
      padding-top: 28px;
      padding-bottom: 40px;
      background: 
        radial-gradient(circle at 45% -10%, rgba(225, 29, 42, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 75% 20%, rgba(107, 91, 149, 0.08) 0%, transparent 45%),
        linear-gradient(to bottom, #ffffff 0%, #f8fafc 100%);
      border-bottom: 1px solid var(--vpdl-border);
    }

    .career-top-backdrop::before {
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
      font-size: clamp(30px, 3.8vw, 44px);
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0 0 16px 0;
      letter-spacing: -0.02em;
      line-height: 1.15;
    }
    .career-hero-lead {
      color: var(--vpdl-muted);
      font-size: 16px;
      max-width: 680px;
      line-height: 1.75;
      margin: 0 auto;
    }

    /* Layout Grids */
    .single-career-main-section {
      padding-top: 50px;
      padding-bottom: 96px;
    }
    .single-career-grid {
      display: grid;
      grid-template-columns: 1fr 340px;
      gap: 40px;
      align-items: start;
    }

    /* Specification Panel */
    .career-spec-panel {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
    }

    /* Metrics Ribbon */
    .spec-metrics-ribbon {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      background: var(--vpdl-bg-canvas);
      border: 1px solid var(--vpdl-border);
      border-radius: 12px;
      padding: 18px 20px;
      margin-bottom: 34px;
    }
    .metric-node {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }
    .metric-title {
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--vpdl-muted);
    }
    .metric-node strong {
      font-size: 13.5px;
      color: var(--vpdl-black);
      font-weight: 700;
    }

    /* Spec Sections */
    .spec-section {
      margin-top: 36px;
      padding-top: 30px;
      border-top: 1px solid var(--vpdl-border);
    }
    .spec-section:first-of-type {
      margin-top: 0;
      padding-top: 0;
      border-top: none;
    }
    .spec-section-header {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 18px;
    }
    .mono-idx {
      font-size: 12px;
      font-weight: 800;
      color: var(--vpdl-red);
      background: rgba(225, 29, 42, 0.08);
      border: 1px solid rgba(225, 29, 42, 0.2);
      padding: 3px 8px;
      border-radius: 6px;
    }
    .spec-section-header h2 {
      font-size: 20px;
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0;
    }
    .spec-section p {
      font-size: 14.5px;
      line-height: 1.8;
      color: #334155;
      margin: 0;
    }

    /* Checklists */
    .spec-checklist {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }
    .spec-checklist li {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      font-size: 14px;
      line-height: 1.65;
      color: #334155;
    }
    .spec-checklist li svg {
      color: var(--vpdl-red);
      flex-shrink: 0;
      margin-top: 3px;
    }

    /* Callout Bottom */
    .spec-action-callout {
      margin-top: 40px;
      padding: 28px 32px;
      border-radius: 14px;
      background: var(--vpdl-bg-canvas);
      border: 1px solid var(--vpdl-border);
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .spec-action-callout h3 {
      font-size: 18px;
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0 0 4px;
    }
    .spec-action-callout p {
      font-size: 13px;
      color: var(--vpdl-muted);
      margin: 0;
    }

    /* Sidebar Components */
    .sidebar-action-card {
      background: #0f172a;
      border-radius: 18px;
      padding: 32px 26px;
      color: #ffffff;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
      margin-bottom: 24px;
    }
    .box-kicker {
      font-size: 10px;
      font-weight: 800;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--vpdl-red);
      display: block;
      margin-bottom: 6px;
    }
    .sidebar-action-card h4 {
      font-size: 18px;
      font-weight: 800;
      margin: 0 0 8px;
    }
    .sidebar-action-card p {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.7);
      margin: 0 0 20px;
      line-height: 1.6;
    }
    .sidebar-contact-note {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 18px;
      padding-top: 16px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 12px;
      color: rgba(255, 255, 255, 0.6);
    }
    .sidebar-contact-note a {
      color: #38bdf8;
      text-decoration: none;
    }

    .sidebar-roles-box {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 18px;
      padding: 24px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
    }
    .sidebar-roles-box h4 {
      font-size: 15px;
      font-weight: 800;
      margin: 0 0 14px;
      color: var(--vpdl-black);
    }
    .sidebar-roles-list {
      display: grid;
      gap: 8px;
    }
    .sidebar-roles-list a {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 14px;
      border-radius: 10px;
      background: var(--vpdl-bg-canvas);
      border: 1px solid var(--vpdl-border);
      text-decoration: none;
      transition: all 0.2s ease;
    }
    .sidebar-roles-list a:hover {
      border-color: #cbd5e1;
      transform: translateX(3px);
    }
    .sidebar-roles-list a.is-active {
      border-color: var(--vpdl-black);
      background: #ffffff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    }
    .sidebar-roles-list a strong {
      display: block;
      font-size: 13px;
      color: var(--vpdl-black);
      font-weight: 700;
    }
    .sidebar-roles-list a small {
      font-size: 11px;
      color: var(--vpdl-muted);
    }
    .sidebar-roles-list a svg {
      color: var(--vpdl-muted);
      flex-shrink: 0;
    }
    .sidebar-roles-list a.is-active svg {
      color: var(--vpdl-red);
    }

    /* Modal Backdrop & Window */
    .career-modal-backdrop {
      position: fixed;
      inset: 0;
      background: rgba(15, 23, 42, 0.7);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      z-index: 9999;
      display: none;
      place-items: center;
      padding: 20px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .career-modal-backdrop.is-open {
      display: grid;
      opacity: 1;
    }
    .career-modal-window {
      background: #ffffff;
      border-radius: 20px;
      max-width: 640px;
      width: 100%;
      padding: 36px 40px;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.2);
      border: 1px solid var(--vpdl-border);
      max-height: 90vh;
      overflow-y: auto;
    }
    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 24px;
      border-bottom: 1px solid var(--vpdl-border);
      padding-bottom: 16px;
    }
    .modal-header h3 {
      font-size: 20px;
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0;
    }
    .modal-close-btn {
      background: none;
      border: none;
      font-size: 28px;
      color: var(--vpdl-muted);
      cursor: pointer;
      line-height: 1;
      transition: color 0.15s ease;
    }
    .modal-close-btn:hover {
      color: var(--vpdl-red);
    }
    .modal-form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
    }
    .modal-field-full {
      grid-column: 1 / -1;
    }
    .form-label {
      display: block;
      font-size: 12px;
      font-weight: 700;
      color: #334155;
      margin-bottom: 6px;
    }
    .required-star {
      color: var(--vpdl-red);
    }
    .form-control {
      width: 100%;
      background: #ffffff !important;
      border: 1px solid #cbd5e1 !important;
      border-radius: 8px !important;
      color: var(--vpdl-black) !important;
      padding: 11px 14px !important;
      font-size: 13.5px !important;
      box-sizing: border-box;
      transition: all 0.2s ease;
      font-family: inherit;
    }
    .form-control:focus {
      outline: none !important;
      border-color: var(--vpdl-red) !important;
      box-shadow: 0 0 0 3px rgba(225, 29, 42, 0.15) !important;
    }
    textarea.form-control {
      resize: vertical;
    }
    .form-status-alert {
      margin-top: 16px;
      padding: 12px 16px;
      border-radius: 8px;
      font-size: 13px;
      font-weight: 600;
      line-height: 1.5;
      background: rgba(16, 185, 129, 0.1);
      border: 1px solid #10b981;
      color: #065f46;
    }

    /* Buttons */
    .btn-brand-submit {
      background: var(--vpdl-red) !important;
      color: #ffffff !important;
      border: 1px solid var(--vpdl-red) !important;
      border-radius: 8px;
      padding: 12px 20px;
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
      .single-career-grid {
        grid-template-columns: 1fr;
      }
      .spec-metrics-ribbon {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 640px) {
      .spec-metrics-ribbon {
        grid-template-columns: 1fr;
      }
      .modal-form-grid {
        grid-template-columns: 1fr;
      }
      .career-modal-window {
        padding: 28px 22px;
      }
    }
  </style>

  <!-- Interactive Modal Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const modal = document.getElementById('applyModal');
      const openButtons = document.querySelectorAll('.open-apply-modal-btn');
      const closeBtn = document.getElementById('closeApplyModal');
      const form = document.getElementById('singleCareerApplyForm');
      const alertBox = document.getElementById('modalSuccessAlert');
      const submitBtn = document.getElementById('btnSubmitModal');
      const submitText = document.getElementById('btnModalText');

      openButtons.forEach(btn => {
        btn.addEventListener('click', function () {
          if (modal) {
            modal.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            const nameInput = document.getElementById('appName');
            if (nameInput) setTimeout(() => nameInput.focus(), 200);
          }
        });
      });

      function closeModal() {
        if (modal) {
          modal.classList.remove('is-open');
          modal.setAttribute('aria-hidden', 'true');
          document.body.style.overflow = '';
        }
      }

      if (closeBtn) closeBtn.addEventListener('click', closeModal);
      if (modal) {
        modal.addEventListener('click', function (e) {
          if (e.target === modal) closeModal();
        });
      }

      if (form) {
        form.addEventListener('submit', function (e) {
          e.preventDefault();
          const name = document.getElementById('appName').value.trim();
          const email = document.getElementById('appEmail').value.trim();
          const phone = document.getElementById('appPhone').value.trim();

          if (!name || !email || !phone) {
            alertBox.style.display = 'block';
            alertBox.style.background = 'rgba(225, 29, 42, 0.08)';
            alertBox.style.borderColor = 'var(--vpdl-red)';
            alertBox.style.color = 'var(--vpdl-red)';
            alertBox.innerText = 'Please ensure your full name, email, and contact number are provided.';
            return;
          }

          if (submitBtn) submitBtn.disabled = true;
          if (submitText) submitText.innerText = 'Transmitting Candidate File...';

          setTimeout(() => {
            alertBox.style.display = 'block';
            alertBox.style.background = 'rgba(16, 185, 129, 0.1)';
            alertBox.style.borderColor = '#10b981';
            alertBox.style.color = '#065f46';
            alertBox.innerText = 'Thank you, ' + name + '. Your candidate dossier has been forwarded directly to our practice directors. We will contact you following technical review.';
            form.reset();
            if (submitBtn) submitBtn.disabled = false;
            if (submitText) submitText.innerText = 'Submit Application to Practice Directors';
            setTimeout(closeModal, 3500);
          }, 1000);
        });
      }
    });
  </script>

<?php include ('footer.php'); ?>