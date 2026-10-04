<?php include ('header.php'); ?>

  <!-- =========================================================
       PROJECTS PAGE BODY CONTENT
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
          <span class="current" aria-current="page">Projects Portfolio</span>
        </nav>
      </div>
    </div>

    <!-- Projects Hero -->
    <section class="projects-hero">
      <div class="container" data-reveal>
        <div class="mono-tag">Portfolio Archive</div>
        <h1>PROJECTS SHAPED<br><span>WITH PURPOSE.</span></h1>
        <p style="color: var(--text-muted); font-size: 16px; max-width: 650px; margin-top: 14px; line-height: 1.6;">Explore verified projects across residential extensions, multi-storey developments, commercial office fit-outs, industrial warehouse schemes, and high-yield property investment portfolios.</p>
      </div>
    </section>

    <section class="container">
      <!-- Filter Bar -->
      <div class="filter-deck" role="toolbar" aria-label="Project category filter">
        <button type="button" class="filter-btn active" data-filter="all" aria-pressed="true">All Projects</button>
        <button type="button" class="filter-btn" data-filter="residential" aria-pressed="false">Residential</button>
        <button type="button" class="filter-btn" data-filter="commercial" aria-pressed="false">Commercial &amp; Fit-Out</button>
        <button type="button" class="filter-btn" data-filter="industrial" aria-pressed="false">Industrial &amp; Logistics</button>
        <button type="button" class="filter-btn" data-filter="investment" aria-pressed="false">Property Investment</button>
      </div>

      <!-- Portfolio Grid -->
      <div class="projects-grid" id="projectsGrid" data-reveal>
        
        <!-- Project 1: House Extension (Bentry Road, UK)[cite: 2] -->
        <article class="project-card" data-category="residential">
          <a href="project-single.php?id=bentry-road" class="project-card-img" aria-label="View Bentry Road project details">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80" alt="Bentry Road Residential Kitchen and Utility Extension" loading="lazy">
            <span class="project-card-badge">Residential Extension</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">RIBA Stage 4 · Planning &amp; Building Control</span>
              <h3><a href="project-single.php?id=bentry-road">House Extension &amp; Garden Integration</a></h3>
              <p>House extension drawings for planning and building control up to RIBA Stage 4. Kitchen enlarged from 500 sqm to 800 sqm, incorporating a utility room, linked living area, and redesigned garden access.</p>
            </div>
            <div class="project-card-meta">
              <span>Bentry Road, UK</span>
              <a href="project-single.php?id=bentry-road" style="color: var(--brand-red); font-weight: 700;">View Details →</a>
            </div>
          </div>
        </article>

        <!-- Project 2: Office Fit-out Design Extension (Hayes, UK)[cite: 2] -->
        <article class="project-card" data-category="commercial">
          <a href="project-single.php?id=hayes-fitout" class="project-card-img" aria-label="View Hayes Office Fit-Out project details">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=80" alt="Hayes Commercial Office Fit-Out and Spatial Design Extension" loading="lazy">
            <span class="project-card-badge">Commercial Fit-Out</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">Commercial Extension · Spatial Design</span>
              <h3><a href="project-single.php?id=hayes-fitout">Office Fit-Out Design &amp; Extension</a></h3>
              <p>Comprehensive layout reconfiguration creating expansive office space, modern client waiting area, board meeting rooms, employee breakout facilities, and health-focused circulation pathways.</p>
            </div>
            <div class="project-card-meta">
              <span>Hayes, UK</span>
              <a href="project-single.php?id=hayes-fitout" style="color: var(--brand-red); font-weight: 700;">View Details →</a>
            </div>
          </div>
        </article>

        <!-- Project 3: Major Industrial Warehouse Design (Johor, Malaysia)[cite: 3] -->
        <article class="project-card" data-category="industrial">
          <a href="project-single.php?id=johor-warehouse" class="project-card-img" aria-label="View Johor Industrial Warehouse project details">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80" alt="Johor Multi-Use Industrial Warehouse Facility Design" loading="lazy">
            <span class="project-card-badge">Industrial &amp; Logistics</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">Industrial Design · Logistics Layout</span>
              <h3><a href="project-single.php?id=johor-warehouse">Major Industrial Warehouse Complex</a></h3>
              <p>Multi-use industrial/office warehouse design delivering high-capacity logistics space, integrated administration suites, meeting hubs, staff facilities, and functional vehicular circulation.</p>
            </div>
            <div class="project-card-meta">
              <span>Johor, Malaysia</span>
              <a href="project-single.php?id=johor-warehouse" style="color: var(--brand-red); font-weight: 700;">View Details →</a>
            </div>
          </div>
        </article>

        <!-- Project 4: Residential Multi-Storey Development (Dhaka, Bangladesh)[cite: 3] -->
        <article class="project-card" data-category="residential">
          <a href="project-single.php?id=dhaka-residential" class="project-card-img" aria-label="View Dhaka Residential Development project details">
            <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=1200&q=80" alt="Dhaka Vertical Residential Development and Engineering Design" loading="lazy">
            <span class="project-card-badge">Vertical Development</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">Structural Design · Planning Stage</span>
              <h3><a href="project-single.php?id=dhaka-residential">Vertical Residential Development</a></h3>
              <p>Planning and structural engineering drawings for a major vertical residential extension, scaling total gross building area from 700 sqm up to 1,800 sqm with modern open-plan living and landscape integration.</p>
            </div>
            <div class="project-card-meta">
              <span>Dhaka, Bangladesh</span>
              <a href="project-single.php?id=dhaka-residential" style="color: var(--brand-red); font-weight: 700;">View Details →</a>
            </div>
          </div>
        </article>

        <!-- Project 5: High-Yield Buy-to-Let Sourcing & Conversion (Newport / Bristol Hub)[cite: 6, 8, 10] -->
        <article class="project-card" data-category="investment">
          <a href="project-single.php?id=welsh-investment" class="project-card-img" aria-label="View Welsh Buy-to-Let Portfolio details">
            <img src="https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?auto=format&fit=crop&w=1200&q=80" alt="UK Welsh Property Investment Portfolio" loading="lazy">
            <span class="project-card-badge">Property Investment</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">Acquisition · Turnkey Refurbishment</span>
              <h3><a href="project-single.php?id=welsh-investment">High-Yield Buy-to-Let Portfolio Scheme</a></h3>
              <p>End-to-end investment journey covering property acquisition, structural reconfiguration, building control certification, and full lettings onboarding across high-demand regional growth zones.</p>
            </div>
            <div class="project-card-meta">
              <span>Newport &amp; Bristol, UK</span>
              <a href="project-single.php?id=welsh-investment" style="color: var(--brand-red); font-weight: 700;">View Details →</a>
            </div>
          </div>
        </article>

        <!-- Project 6: Commercial Class MA Conversion Scheme (Northern England)[cite: 1, 6, 8] -->
        <article class="project-card" data-category="commercial">
          <a href="project-single.php?id=northern-conversion" class="project-card-img" aria-label="View Northern England Conversion Scheme details">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80" alt="Northern England Commercial Conversion" loading="lazy">
            <span class="project-card-badge">Commercial Conversion</span>
          </a>
          <div class="project-card-body">
            <div>
              <span class="project-card-discipline">Class MA · Development Consulting</span>
              <h3><a href="project-single.php?id=northern-conversion">Commercial to Multi-Unit Conversion</a></h3>
              <p>Development consulting, permitted development prior approval, structural beam engineering, and spatial optimization to repurpose an underutilised commercial asset into multi-unit residential accommodation.</p>
            </div>
            <div class="project-card-meta">
              <span>Northern England, UK</span>
              <a href="project-single.php?id=northern-conversion" style="color: var(--brand-red); font-weight: 700;">View Details →</a>
            </div>
          </div>
        </article>

      </div>

      <!-- Bottom Consultation Prompt -->
      <div class="field-equal-footer" data-reveal style="margin: 40px 0 80px;">
        <div class="field-equal-footer-left">
          <span style="font-family: var(--font-display); font-size: 18px; font-weight: 800; color: var(--brand-red);">START</span>
          <div>
            <strong style="font-size: 14px; display: block; color: var(--ink-base);">Have a Development Site or Project in Mind?</strong>
            <small style="color: var(--text-muted);">Arrange a preliminary feasibility appraisal and planning discussion with our directors free of charge.</small>
          </div>
        </div>
        <a class="btn-core btn-core-dark" href="consultation.php"><span>Book Free Consultation</span> <i aria-hidden="true">↗</i></a>
      </div>
    </section>
  </main>

  <!-- Filter & Component Styles -->
  <style>
    .projects-hero {
      padding: 60px 0 36px;
    }
    .filter-deck {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 36px;
      padding-bottom: 16px;
      border-bottom: 1px solid var(--border-color, #e2e8f0);
    }
    .filter-btn {
      background: #f8fafc;
      border: 1px solid var(--border-color, #e2e8f0);
      padding: 8px 18px;
      border-radius: 999px;
      font-size: 13px;
      font-weight: 600;
      color: var(--text-dark, #1e293b);
      cursor: pointer;
      transition: all 0.2s ease;
    }
    .filter-btn:hover {
      background: #e2e8f0;
      color: #0284c7;
    }
    .filter-btn.active {
      background: #0f172a;
      color: #ffffff;
      border-color: #0f172a;
    }
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
    }
    .project-card {
      background: #ffffff;
      border: 1px solid var(--border-color, #e2e8f0);
      border-radius: 14px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .project-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 16px 35px rgba(0, 0, 0, 0.06);
    }
    .project-card-img {
      position: relative;
      height: 220px;
      display: block;
      overflow: hidden;
    }
    .project-card-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }
    .project-card:hover .project-card-img img {
      transform: scale(1.05);
    }
    .project-card-badge {
      position: absolute;
      top: 14px;
      left: 14px;
      background: rgba(15, 23, 42, 0.85);
      backdrop-filter: blur(8px);
      color: #ffffff;
      font-size: 10.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      padding: 4px 10px;
      border-radius: 6px;
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
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: #0284c7;
      margin-bottom: 6px;
    }
    .project-card-body h3 {
      font-family: var(--font-display, sans-serif);
      font-size: 18px;
      font-weight: 700;
      margin-bottom: 10px;
      line-height: 1.3;
    }
    .project-card-body h3 a {
      color: var(--text-dark, #0f172a);
      text-decoration: none;
      transition: color 0.15s ease;
    }
    .project-card-body h3 a:hover {
      color: #0284c7;
    }
    .project-card-body p {
      font-size: 13px;
      color: var(--text-muted, #64748b);
      line-height: 1.6;
      margin-bottom: 20px;
    }
    .project-card-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 14px;
      border-top: 1px solid var(--border-color, #f1f5f9);
      font-size: 12px;
      color: var(--text-muted, #64748b);
      font-weight: 600;
    }
    .project-card-meta a {
      text-decoration: none;
    }
    .project-card-meta a:hover {
      text-decoration: underline;
    }

    @media (max-width: 1080px) {
      .projects-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 680px) {
      .projects-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>

  <!-- Interactive Project Filter Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
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
    });
  </script>

<?php include ('footer.php'); ?>