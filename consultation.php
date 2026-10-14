<?php
/**
 * Template Name: Project Consultation & Advisory Portal
 * Description: Client intake and advisory booking portal for VPDL.
 *
 * @package VPDL
 */

// Capture optional hand-off parameters from quote-calculator.php
$incoming_scope    = isset($_POST['project_scope']) ? htmlspecialchars(trim($_POST['project_scope']), ENT_QUOTES, 'UTF-8') : '';
$incoming_sqm      = isset($_POST['project_sqm']) ? htmlspecialchars(trim($_POST['project_sqm']), ENT_QUOTES, 'UTF-8') : '';
$incoming_fee      = isset($_POST['estimated_fee']) ? htmlspecialchars(trim($_POST['estimated_fee']), ENT_QUOTES, 'UTF-8') : '';
$incoming_services = isset($_POST['selected_services']) ? htmlspecialchars(trim($_POST['selected_services']), ENT_QUOTES, 'UTF-8') : '';

$prefill_summary = '';
if (!empty($incoming_fee)) {
    $prefill_summary = "Estimated Budget / Fee: {$incoming_fee}\nFloor Area: {$incoming_sqm} sq m\nDisciplines: {$incoming_services}";
}

include ('header.php');
?>

  <!-- =========================================================
       CONSULTATION PAGE BODY CONTENT (ALIGNED WITH VPDL PALETTE)
       ========================================================= -->
  <main class="consultation-page-wrapper">

    <!-- Top Light Backdrop: Brand Gradient Tint + Architectural Grid -->
    <div class="consultation-top-backdrop">
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
            <span class="current" aria-current="page">Project Consultation</span>
          </nav>
        </div>
      </div>

      <!-- Centered Consultation Hero -->
      <section class="consultation-hero centered-hero">
        <div class="container hero-container" data-reveal>
          <h1>EXPERT PROJECT <span class="highlight-brand">CONSULTATION.</span></h1>
          <p class="hero-lead">Before embarking on any planning application or structural build, sit down with our directors to align your aspirations with robust, realistic delivery frameworks.</p>
        </div>
      </section>
    </div>

    <!-- Value Proposition Features -->
    <section class="container" style="padding-top: 50px; padding-bottom: 40px;">
      <div class="consultation-features-grid" data-reveal>
        <div class="consultation-feature-box">
          <span class="feature-step">01 / ASSESSMENT</span>
          <h3>Initial Site Review</h3>
          <p>We analyze regulatory constraints, planning precedents, and property potential to identify immediate opportunities.</p>
        </div>
        <div class="consultation-feature-box">
          <span class="feature-step">02 / STRATEGY</span>
          <h3>Scope &amp; Budgeting</h3>
          <p>Receive preliminary financial brackets and phased timelines tailored specifically to your development goals.</p>
        </div>
        <div class="consultation-feature-box">
          <span class="feature-step">03 / DIRECTION</span>
          <h3>Integrated Roadmaps</h3>
          <p>Understand exactly how planning, design, engineering, and construction sync together under our unified approach.</p>
        </div>
      </div>
    </section>

    <!-- Consultation Intake Form -->
    <section class="intake-zone" style="padding-bottom: 90px;">
      <div class="container">
        <div class="intake-card" data-reveal>
          <!-- Left Intake Information Deck -->
          <div class="intake-side-deck">
            <div>
              <div class="mono-tag" style="background: rgba(225,29,42,0.08); color: var(--vpdl-red); border-color: rgba(225,29,42,0.25);">Direct Submission</div>
              <h2>BOOK YOUR SESSION.</h2>
              <p>Complete the briefing parameters. Our planning and development directors will review your submission and contact you within 1 business day.</p>
            </div>

            <div class="direct-callout-box">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
              </svg>
              <div>
                <strong>Prefer To Call Directly?</strong>
                <a href="tel:+443333445807">+44 (0) 3333 44 5807</a>
              </div>
            </div>
          </div>

          <!-- Right Intake Form -->
          <div class="intake-form-deck">
            <form id="projectIntakeForm" method="POST" action="consultation.php" novalidate autocomplete="on">
              <div class="intake-form-grid">
                
                <div class="form-group-full">
                  <label class="form-label">Project Scope</label>
                  <div class="pill-select-grid">
                    <div class="pill-radio">
                      <input type="radio" id="scope1" name="project_scope" value="New Build" <?php echo ($incoming_scope === 'New Build (Up to 2 Units)') ? 'checked' : 'checked'; ?>>
                      <label for="scope1">New Build</label>
                    </div>
                    <div class="pill-radio">
                      <input type="radio" id="scope2" name="project_scope" value="Renovation" <?php echo (strpos($incoming_scope, 'Extension') !== false || strpos($incoming_scope, 'Loft') !== false) ? 'checked' : ''; ?>>
                      <label for="scope2">Extension / Loft</label>
                    </div>
                    <div class="pill-radio">
                      <input type="radio" id="scope3" name="project_scope" value="Commercial" <?php echo (strpos($incoming_scope, 'Conversion') !== false) ? 'checked' : ''; ?>>
                      <label for="scope3">Commercial / HMO</label>
                    </div>
                    <div class="pill-radio">
                      <input type="radio" id="scope4" name="project_scope" value="Planning Only">
                      <label for="scope4">Planning Only</label>
                    </div>
                  </div>
                </div>

                <div>
                  <label class="form-label" for="clientName">Full Name <span class="required-star">*</span></label>
                  <input class="form-control" type="text" id="clientName" name="client_name" required placeholder="John Smith">
                </div>

                <div>
                  <label class="form-label" for="clientEmail">Email Address <span class="required-star">*</span></label>
                  <input class="form-control" type="email" id="clientEmail" name="client_email" required placeholder="john@example.com">
                </div>

                <div>
                  <label class="form-label" for="clientPhone">Phone Number <span class="required-star">*</span></label>
                  <input class="form-control" type="tel" id="clientPhone" name="client_phone" required placeholder="+44 7000 000000">
                </div>

                <div>
                  <label class="form-label" for="projectLocation">Site Location (Postcode / City)</label>
                  <input class="form-control" type="text" id="projectLocation" name="project_location" placeholder="e.g. London, E6 or Newport, NP20">
                </div>

                <div class="form-group-full">
                  <label class="form-label">Target Investment Bracket</label>
                  <div class="pill-select-grid">
                    <div class="pill-radio">
                      <input type="radio" id="budget1" name="project_budget" value="£50k-£150k">
                      <label for="budget1">£50k – £150k</label>
                    </div>
                    <div class="pill-radio">
                      <input type="radio" id="budget2" name="project_budget" value="£150k-£350k" checked>
                      <label for="budget2">£150k – £350k</label>
                    </div>
                    <div class="pill-radio">
                      <input type="radio" id="budget3" name="project_budget" value="£350k-£750k">
                      <label for="budget3">£350k – £750k</label>
                    </div>
                    <div class="pill-radio">
                      <input type="radio" id="budget4" name="project_budget" value="£750k+">
                      <label for="budget4">£750k+</label>
                    </div>
                  </div>
                </div>

                <div class="form-group-full">
                  <label class="form-label" for="projectSummary">Project Brief &amp; Key Requirements</label>
                  <textarea class="form-control" id="projectSummary" name="project_summary" placeholder="Tell us about the property, planning status, or timeline objectives..."><?php echo $prefill_summary; ?></textarea>
                </div>

                <div class="form-group-full">
                  <button type="submit" id="consultationSubmitBtn" class="btn-brand-submit" style="width: 100%;">
                    <span id="btnSubmitText">Submit Consultation Request</span>
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <line x1="7" y1="17" x2="17" y2="7"></line>
                      <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                  </button>
                </div>
              </div>
              
              <div id="formSuccessMessage" class="form-status" style="display: none; margin-top: 18px;" role="status" aria-live="polite">
                Thank you. Your consultation brief has been recorded. Our planning and development directors will review your parameters and follow up within 1 business day.
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <style>
    /* =========================================================
       CONSULTATION PAGE BRANDING (VPDL PALETTE & AMBIENT BG)
       ========================================================= */
    :root {
      --vpdl-red: #E11D2A;         /* 'V' & Center Roofline Accent */
      --vpdl-purple: #E11D2A;      /* Main Arch Roofline */
      --vpdl-blue: #4F83B7;        /* Outer Accent Roofline */
      --vpdl-black: #111827;       /* Core 'PDL' Charcoal/Black */
      --vpdl-muted: #64748B;
      --vpdl-border: #E2E8F0;
      --vpdl-surface: #FFFFFF;
      --vpdl-bg-canvas: #F8FAFC;
    }

    .consultation-page-wrapper {
      background: var(--vpdl-bg-canvas);
      color: var(--vpdl-black);
      position: relative;
      overflow-x: hidden;
    }

    /* Top Light Backdrop: Brand Gradient Tint + Architectural Grid */
    .consultation-top-backdrop {
      position: relative;
      padding-top: 28px;
      padding-bottom: 40px;
      background: 
        radial-gradient(circle at 45% -10%, rgba(225, 29, 42, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 75% 20%, rgba(107, 91, 149, 0.08) 0%, transparent 45%),
        linear-gradient(to bottom, #ffffff 0%, #f8fafc 100%);
      border-bottom: 1px solid var(--vpdl-border);
    }

    .consultation-top-backdrop::before {
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
    .hero-lead {
      color: var(--vpdl-muted);
      font-size: 16px;
      max-width: 680px;
      margin: 0 auto;
      line-height: 1.7;
    }

    /* Value Proposition Features Grid */
    .consultation-features-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .consultation-feature-box {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 16px;
      padding: 30px 26px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .consultation-feature-box:hover {
      transform: translateY(-4px);
      box-shadow: 0 14px 30px rgba(0, 0, 0, 0.05);
      border-color: #cbd5e1;
    }
    .feature-step {
      display: block;
      font-size: 11px;
      font-weight: 800;
      letter-spacing: 0.1em;
      color: var(--vpdl-purple);
      margin-bottom: 8px;
    }
    .consultation-feature-box h3 {
      font-size: 18px;
      font-weight: 800;
      color: var(--vpdl-black);
      margin: 0 0 8px 0;
    }
    .consultation-feature-box p {
      font-size: 13.5px;
      color: var(--vpdl-muted);
      line-height: 1.6;
      margin: 0;
    }

    /* Intake Layout Card */
    .intake-card {
      background: var(--vpdl-surface);
      border: 1px solid var(--vpdl-border);
      border-radius: 18px;
      display: grid;
      grid-template-columns: 1fr 1.6fr;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.03);
      overflow: hidden;
    }
    .intake-side-deck {
      background: #0f172a;
      color: #ffffff;
      padding: 44px 38px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .intake-side-deck h2 {
      font-size: 26px;
      font-weight: 800;
      margin: 14px 0 0 0;
      line-height: 1.2;
    }
    .intake-side-deck p {
      color: rgba(255, 255, 255, 0.7);
      font-size: 13.5px;
      line-height: 1.7;
      margin-top: 14px;
    }
    .direct-callout-box {
      margin-top: 30px;
      display: flex;
      align-items: center;
      gap: 14px;
      background: rgba(255, 255, 255, 0.06);
      padding: 16px 20px;
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.1);
      color: #38bdf8;
    }
    .direct-callout-box strong {
      display: block;
      font-size: 11px;
      text-transform: uppercase;
      color: rgba(255, 255, 255, 0.5);
      margin-bottom: 2px;
    }
    .direct-callout-box a {
      color: #ffffff;
      text-decoration: none;
      font-size: 15px;
      font-weight: 700;
    }
    .direct-callout-box a:hover {
      color: #38bdf8;
    }

    .intake-form-deck {
      padding: 44px 38px;
    }
    .intake-form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }
    .form-group-full {
      grid-column: 1 / -1;
    }
    .form-label {
      display: block;
      font-size: 12.5px;
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
      min-height: 110px;
      resize: vertical;
    }

    /* Pill Selection Grids */
    .pill-select-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    }
    .pill-radio {
      position: relative;
    }
    .pill-radio input {
      position: absolute;
      opacity: 0;
      pointer-events: none;
    }
    .pill-radio label {
      display: block;
      padding: 11px 8px;
      border-radius: 8px;
      border: 1px solid var(--vpdl-border);
      background: var(--vpdl-bg-canvas);
      font-size: 12.5px;
      font-weight: 600;
      color: #334155;
      text-align: center;
      cursor: pointer;
      transition: all 0.15s ease;
    }
    .pill-radio:hover label {
      border-color: #cbd5e1;
    }
    .pill-radio input:checked + label {
      background: rgba(107, 91, 149, 0.08);
      border-color: var(--vpdl-purple);
      color: var(--vpdl-purple);
      font-weight: 700;
      box-shadow: 0 0 0 1px var(--vpdl-purple);
    }

    /* Button System */
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

    .form-status {
      padding: 12px 16px;
      border-radius: 8px;
      font-size: 13px;
      font-weight: 600;
      line-height: 1.5;
      background: rgba(16, 185, 129, 0.1);
      border: 1px solid #10b981;
      color: #065f46;
    }

    @media (max-width: 960px) {
      .consultation-features-grid {
        grid-template-columns: 1fr;
      }
      .intake-card {
        grid-template-columns: 1fr;
      }
      .intake-side-deck, .intake-form-deck {
        padding: 32px 24px;
      }
      .intake-form-grid {
        grid-template-columns: 1fr;
      }
      .pill-select-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
  </style>

  <!-- Client-Side Form Simulation Script -->
  <script>
  (function() {
    var form = document.getElementById('projectIntakeForm');
    if (!form) return;

    form.addEventListener('submit', function(e) {
      e.preventDefault();

      var nameInput  = document.getElementById('clientName');
      var emailInput = document.getElementById('clientEmail');
      var phoneInput = document.getElementById('clientPhone');
      var submitBtn  = document.getElementById('consultationSubmitBtn');
      var statusBox  = document.getElementById('formSuccessMessage');
      var btnText    = document.getElementById('btnSubmitText');

      var name  = nameInput ? nameInput.value.trim() : '';
      var email = emailInput ? emailInput.value.trim() : '';
      var phone = phoneInput ? phoneInput.value.trim() : '';

      if (!name || !email || !phone) {
        statusBox.style.display = 'block';
        statusBox.style.background = 'rgba(225, 29, 42, 0.09)';
        statusBox.style.border = '1px solid var(--vpdl-red)';
        statusBox.style.color = 'var(--vpdl-red)';
        statusBox.innerText = 'Please complete all required fields marked with an asterisk (*).';
        return;
      }

      submitBtn.disabled = true;
      if (btnText) btnText.innerText = 'Securing & Transmitting Brief...';

      setTimeout(function() {
        statusBox.style.display = 'block';
        statusBox.style.background = 'rgba(16, 185, 129, 0.1)';
        statusBox.style.border = '1px solid #10b981';
        statusBox.style.color = '#065f46';
        statusBox.innerText = 'Thank you. Your consultation brief has been recorded. Our planning and development directors will review your parameters and follow up within 1 business day.';

        form.reset();
        submitBtn.disabled = false;
        if (btnText) btnText.innerText = 'Submit Consultation Request';
      }, 1000);
    });
  })();
  </script>

<?php include ('footer.php'); ?>