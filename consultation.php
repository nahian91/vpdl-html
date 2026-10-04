<?php include ('header.php'); ?>

  <!-- =========================================================
       CONSULTATION PAGE BODY CONTENT
       ========================================================= -->
  <main>
    <!-- Breadcrumb Trail -->
    <div class="breadcrumb-section">
      <div class="container">
        <nav class="breadcrumb-glass" aria-label="Breadcrumb">
          <a href="index.php">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            Home
          </a>
          <span class="separator" aria-hidden="true">/</span>
          <span class="current" aria-current="page">Project Consultation</span>
        </nav>
      </div>
    </div>

    <!-- Consultation Hero -->
    <section class="consultation-hero">
      <div class="container" data-reveal>
        <div class="mono-tag">Advisory Hub</div>
        <h1>EXPERT PROJECT<br><span>CONSULTATION.</span></h1>
        <p style="color: var(--text-muted); font-size: 16px; max-width: 620px; margin-top: 14px;">Before embarking on any planning application or structural build, sit down with our directors to align your aspirations with robust, realistic delivery frameworks.</p>
      </div>
    </section>

    <!-- Value Proposition Features -->
    <section class="container">
      <div class="consultation-features-grid" data-reveal>
        <div class="consultation-feature-box">
          <span>01 / ASSESSMENT</span>
          <h3>Initial Site Review</h3>
          <p>We analyze regulatory constraints, planning precedents, and property potential to identify immediate opportunities.</p>
        </div>
        <div class="consultation-feature-box">
          <span>02 / STRATEGY</span>
          <h3>Scope &amp; Budgeting</h3>
          <p>Receive preliminary financial brackets and phased timelines tailored specifically to your development goals.</p>
        </div>
        <div class="consultation-feature-box">
          <span>03 / DIRECTION</span>
          <h3>Integrated Roadmaps</h3>
          <p>Understand exactly how planning, design, engineering, and construction sync together under our unified approach.</p>
        </div>
      </div>
    </section>

    <!-- Consultation Intake Form -->
    <section class="intake-zone">
      <div class="container">
        <div class="intake-card" data-reveal>
          <div>
            <div class="mono-tag" style="background: rgba(255,255,255,0.08); color: #FFF; border-color: rgba(255,255,255,0.2);">Direct Submission</div>
            <h2>BOOK YOUR<br>SESSION.</h2>
            <p style="color: rgba(255,255,255,0.7); font-size: 13px; line-height: 1.75; margin-top: 18px;">Complete the briefing parameters below. Our planning and development directors will review your submission and contact you within 1 business day.</p>
          </div>

          <form id="projectIntakeForm">
            <div class="intake-form-grid">
              <div class="form-group-full">
                <label class="form-label">Project Scope</label>
                <div class="pill-select-grid">
                  <div class="pill-radio">
                    <input type="radio" id="scope1" name="project_scope" value="New Build" checked>
                    <label for="scope1">New Build</label>
                  </div>
                  <div class="pill-radio">
                    <input type="radio" id="scope2" name="project_scope" value="Renovation">
                    <label for="scope2">Renovation</label>
                  </div>
                  <div class="pill-radio">
                    <input type="radio" id="scope3" name="project_scope" value="Commercial">
                    <label for="scope3">Commercial</label>
                  </div>
                  <div class="pill-radio">
                    <input type="radio" id="scope4" name="project_scope" value="Planning Only">
                    <label for="scope4">Planning Only</label>
                  </div>
                </div>
              </div>

              <div>
                <label class="form-label" for="clientName">Full Name *</label>
                <input class="form-control" type="text" id="clientName" name="client_name" required placeholder="John Smith">
              </div>

              <div>
                <label class="form-label" for="clientEmail">Email Address *</label>
                <input class="form-control" type="email" id="clientEmail" name="client_email" required placeholder="john@example.com">
              </div>

              <div>
                <label class="form-label" for="clientPhone">Phone Number</label>
                <input class="form-control" type="tel" id="clientPhone" name="client_phone" placeholder="+44 7000 000000">
              </div>

              <div>
                <label class="form-label" for="projectLocation">Site Location (Postcode / City)</label>
                <input class="form-control" type="text" id="projectLocation" name="project_location" placeholder="Cardiff, CF10">
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
                <textarea class="form-control" id="projectSummary" name="project_summary" placeholder="Tell us about the property, planning status, or timeline objectives..."></textarea>
              </div>

              <div class="form-group-full">
                <button type="submit" class="btn-core btn-core-light" style="width: 100%;">
                  <span>Submit Consultation Request</span>
                  <i aria-hidden="true">↗</i>
                </button>
              </div>
            </div>
            
            <div id="formSuccessMessage" class="form-status" role="status" aria-live="polite">
              Thank you. Your consultation brief has been recorded. Our planning and development directors will review your parameters and follow up within 1 business day.
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

<?php include ('footer.php'); ?>