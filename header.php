<?php
/**
 * Global Header Template: VPDL
 * File: header.php
 *
 * Streamlined Clean Navigation:
 * - Direct links only (No dropdowns)
 * - Topbar simplified to essential contact & hours
 * - Fixed scroll-pinned header engine
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>VPDL — Planning · Architecture · Engineering · Construction</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    /* =========================================================
       CLEAN DIRECT HEADER SYSTEM (ZERO DROPDOWNS)
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
      --topbar-height: 38px;
      --nav-height: 72px;
    }

    *, *::before, *::after {
      box-sizing: border-box;
    }

    html, body {
      max-width: 100%;
      overflow-x: clip;
      margin: 0;
      padding: 0;
    }

    body {
      padding-top: calc(var(--topbar-height) + var(--nav-height)) !important;
    }

    /* Fixed Header Wrapper */
    .site-header-master {
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      width: 100% !important;
      z-index: 9999 !important;
      transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1);
      box-shadow: 0 4px 20px rgba(17, 24, 39, 0.04);
    }

    .site-header-master.is-scrolled {
      transform: translateY(calc(-1 * var(--topbar-height)));
      box-shadow: 0 8px 25px rgba(17, 24, 39, 0.08);
    }

    /* Topbar Strip */
    .topbar {
      height: var(--topbar-height);
      background: #0f172a;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }
    .topbar-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 100%;
      gap: 14px;
    }
    .topbar-contact {
      display: flex;
      align-items: center;
      gap: 14px;
      font-size: 11.5px;
      color: rgba(255, 255, 255, 0.7);
    }
    .topbar-contact a {
      color: #ffffff;
      text-decoration: none;
      font-weight: 600;
    }
    .topbar-contact a span {
      color: var(--vpdl-red);
      font-weight: 800;
      font-size: 10px;
      margin-right: 2px;
    }

    /* Navigation Dock */
    .nav-dock {
      height: var(--nav-height);
      background: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      border-bottom: 1px solid var(--vpdl-border);
    }
    .nav-dock-inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 100%;
      gap: 16px;
    }

    /* Desktop Navigation */
    .nav-menu {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    .nav-link {
      color: #1e293b;
      font-size: 13.5px;
      font-weight: 600;
      text-decoration: none;
      display: inline-block;
      padding: 8px 0;
      transition: color 0.15s ease;
      letter-spacing: -0.01em;
    }
    .nav-link:hover {
      color: var(--vpdl-red);
    }

    /* Calculator CTA Button */
    .btn-calc-fast {
      background: var(--vpdl-black);
      color: #ffffff !important;
      border: 1px solid var(--vpdl-black);
      border-bottom: 2px solid var(--vpdl-red);
      padding: 9px 16px;
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
      white-space: nowrap;
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
      letter-spacing: 0.02em;
    }

    /* Mobile Drawer */
    .mobile-drawer {
      position: fixed;
      inset: 0;
      background: rgba(15, 23, 42, 0.6);
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      z-index: 999999;
      display: flex;
      justify-content: flex-end;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
      overscroll-behavior: contain;
    }
    .mobile-drawer-body {
      width: 100%;
      max-width: 350px;
      height: 100vh;
      height: 100dvh;
      background: #ffffff;
      padding: 24px;
      overflow-y: auto;
      -webkit-overflow-scrolling: touch;
      transform: translateX(100%);
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      box-shadow: -10px 0 30px rgba(0, 0, 0, 0.15);
      display: flex;
      flex-direction: column;
      box-sizing: border-box;
    }
    .mobile-drawer.is-open {
      opacity: 1;
      visibility: visible;
    }
    .mobile-drawer.is-open .mobile-drawer-body {
      transform: translateX(0);
    }
    .mobile-menu-btn {
      background: none;
      border: none;
      cursor: pointer;
      padding: 6px;
      display: none;
      align-items: center;
      justify-content: center;
      min-width: 44px;
      min-height: 44px;
      border-radius: 6px;
      color: inherit;
    }
    .mobile-drawer-nav a {
      color: inherit;
      text-decoration: none;
      display: block;
      padding: 10px 0;
      font-size: 15px;
      font-weight: 600;
      border-bottom: 1px solid #f1f5f9;
    }
    .mobile-drawer-nav a:hover {
      color: var(--vpdl-red);
    }

    @media (max-width: 1080px) {
      .nav-menu { display: none !important; }
      .mobile-menu-btn { display: flex !important; }
    }
    @media (max-width: 768px) {
      :root {
        --topbar-height: 32px;
        --nav-height: 64px;
      }
      .topbar-wrapper {
        justify-content: center;
      }
      .btn-calc-fast {
        display: none !important;
      }
    }
  </style>
</head>
<body>

  <!-- MASTER FIXED HEADER -->
  <div class="site-header-master" id="siteHeaderMaster">
    
    <!-- TOPBAR -->
    <aside class="topbar">
      <div class="container topbar-wrapper">
        <div class="topbar-contact">
          <a href="tel:+443333445807"><span>DIRECT</span> +44 (0) 3333 445 807</a>
          <a href="mailto:vpdl.uk@gmail.com"><span>EMAIL</span> vpdl.uk@gmail.com</a>
          <span class="topbar-hours">Mon–Fri · 08:30–17:30 GMT</span>
        </div>
      </div>
    </aside>

    <!-- NAVIGATION DOCK: DIRECT FLAT MENU (NO DROPDOWNS) -->
    <header class="nav-dock">
      <div class="container">
        <div class="nav-dock-inner">
          <!-- Logo acts as Home -->
          <a class="brand-mark" href="index.php" aria-label="VPDL Homepage">
            <img src="assets/img/logo.png" alt="VPDL - Volume Planning and Developments">
          </a>

          <!-- Simple Direct Links -->
          <nav class="nav-menu" aria-label="Main Navigation">
            <a class="nav-link" href="index.php">Practice</a>
            <a class="nav-link" href="services.php">Services</a>
            <a class="nav-link" href="projects.php">Projects</a>
            <a class="nav-link" href="resources.php">Guidelines</a>
            <a class="nav-link" href="projects.php#gallery">Gallery</a>
            <a class="nav-link" href="careers.php">Careers</a>
            <a class="nav-link" href="contact.php">Contact</a>
          </nav>

          <!-- 60-Second Calculator Action Button -->
          <div style="display: flex; align-items: center; gap: 10px;">
            <a class="btn-calc-fast" href="quote-calculator.php">
              <span>Calculate in 60s</span>
              <span class="calc-pill-time">Free</span>
              <i>↗</i>
            </a>

            <button class="mobile-menu-btn" id="mobileMenuOpen" aria-label="Open mobile navigation menu" aria-controls="mobileDrawer" aria-expanded="false">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </header>
  </div>

  <!-- MOBILE NAVIGATION DRAWER -->
  <div class="mobile-drawer" id="mobileDrawer" role="dialog" aria-modal="true" aria-label="Mobile Navigation">
    <div class="mobile-drawer-body">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <div class="brand-mark">
          <img src="assets/img/logo.png" alt="VPDL" style="height: 32px;">
        </div>
        <button id="mobileMenuClose" aria-label="Close menu" style="font-size: 26px; font-weight: 700; background: none; border: none; cursor: pointer; color: #64748b; width: 44px; height: 44px; display: grid; place-items: center;">&times;</button>
      </div>

      <!-- Simple Direct Mobile Links -->
      <nav class="mobile-drawer-nav" style="display: grid; gap: 2px; font-family: var(--font-display, sans-serif); border-bottom: 1px solid var(--border-color, #e2e8f0); padding-bottom: 16px;">
        <a href="index.php">Home Overview</a>
        <a href="process.php">Practice &amp; Process</a>
        <a href="services.php">Services</a>
        <a href="projects.php">Projects Portfolio</a>
        <a href="resources.php">Project Guidelines</a>
        <a href="projects.php#gallery">Gallery</a>
        <a href="careers.php">Careers</a>
        <a href="contact.php">Contact Practice</a>
      </nav>

      <div style="margin-top: 24px; display: grid; gap: 12px;">
        <a class="btn-calc-fast" style="width: 100%; justify-content: center; display: inline-flex !important;" href="quote-calculator.php">
          <span>Calculate in 60s</span>
          <span class="calc-pill-time">Free</span>
          <i>↗</i>
        </a>
        <a href="tel:+443333445807" style="text-align: center; font-size: 13px; font-weight: 700; color: var(--text-muted, #64748b); text-decoration: none; padding: 8px 0;">
          Direct: +44 (0) 3333 445 807
        </a>
      </div>
    </div>
  </div>

  <!-- SCRIPT ENGINE -->
  <script>
    (function() {
      // 1. Header Elevation & Scroll Offset
      const masterHeader = document.getElementById('siteHeaderMaster');
      const scrollThreshold = 38;

      function onScroll() {
        if (!masterHeader) return;
        if (window.pageYOffset > scrollThreshold) {
          masterHeader.classList.add('is-scrolled');
        } else {
          masterHeader.classList.remove('is-scrolled');
        }
      }

      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();

      // 2. Mobile Drawer Controls
      const openBtn = document.getElementById('mobileMenuOpen');
      const closeBtn = document.getElementById('mobileMenuClose');
      const drawer = document.getElementById('mobileDrawer');

      function openDrawer() {
        if (!drawer) return;
        drawer.classList.add('is-open');
        if (openBtn) openBtn.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
      }

      function closeDrawer() {
        if (!drawer) return;
        drawer.classList.remove('is-open');
        if (openBtn) openBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      }

      if (openBtn) openBtn.addEventListener('click', openDrawer);
      if (closeBtn) closeBtn.addEventListener('click', closeDrawer);

      if (drawer) {
        drawer.addEventListener('click', function(e) {
          if (e.target === drawer) closeDrawer();
        });
      }

      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && drawer && drawer.classList.contains('is-open')) {
          closeDrawer();
        }
      });
    })();
  </script>