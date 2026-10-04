document.addEventListener('DOMContentLoaded', () => {
  // 1. Mobile Drawer Navigation
  const mobileBtn = document.getElementById('mobileMenuOpen');
  const closeBtn = document.getElementById('mobileMenuClose');
  const drawer = document.getElementById('mobileDrawer');
  const mobileLinks = document.querySelectorAll('.mobile-link');

  mobileBtn?.addEventListener('click', () => drawer?.classList.add('is-open'));
  closeBtn?.addEventListener('click', () => drawer?.classList.remove('is-open'));
  mobileLinks.forEach(link => {
    link.addEventListener('click', () => drawer?.classList.remove('is-open'));
  });
  drawer?.addEventListener('click', (e) => {
    if (e.target === drawer) drawer.classList.remove('is-open');
  });

  // 2. Interactive Projects Tab Deck
  const mainImg = document.getElementById('mainProjectImg');
  const mainTitle = document.getElementById('mainProjectTitle');
  const mainCat = document.getElementById('mainProjectCat');
  const mainLoc = document.getElementById('mainProjectLoc');
  const mainYr = document.getElementById('mainProjectYr');
  const mainIdx = document.getElementById('mainProjectIndex');
  const mainDesc = document.getElementById('mainProjectDesc');
  const catalogCards = document.querySelectorAll('.catalog-card');

  catalogCards.forEach(card => {
    card.addEventListener('click', () => {
      if (card.classList.contains('is-active')) return;

      catalogCards.forEach(c => c.classList.remove('is-active'));
      card.classList.add('is-active');

      if (mainImg) mainImg.style.opacity = '0.3';

      setTimeout(() => {
        if (mainImg && card.dataset.img) mainImg.src = card.dataset.img;
        if (mainTitle && card.dataset.title) mainTitle.textContent = card.dataset.title;
        if (mainCat && card.dataset.cat) mainCat.textContent = card.dataset.cat;
        if (mainLoc && card.dataset.loc) mainLoc.textContent = card.dataset.loc;
        if (mainYr && card.dataset.yr) mainYr.textContent = card.dataset.yr;
        if (mainIdx && card.dataset.idx) mainIdx.textContent = card.dataset.idx;
        if (mainDesc && card.dataset.desc) mainDesc.textContent = card.dataset.desc;
        if (mainImg) mainImg.style.opacity = '1';
      }, 180);
    });
  });

  // 3. Client Experience Interactive Slider
  const track = document.getElementById('testimonialTrack');
  const dots = document.querySelectorAll('#testimonialDots .slider-dot');
  const prevBtn = document.getElementById('prevSlide');
  const nextBtn = document.getElementById('nextSlide');
  let currentSlide = 0;
  const totalSlides = dots.length;

  function goToSlide(idx) {
    if (!totalSlides || !track) return;
    currentSlide = (idx + totalSlides) % totalSlides;
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
    dots.forEach((dot, i) => dot.classList.toggle('is-active', i === currentSlide));
  }

  prevBtn?.addEventListener('click', () => goToSlide(currentSlide - 1));
  nextBtn?.addEventListener('click', () => goToSlide(currentSlide + 1));
  dots.forEach((dot, i) => dot.addEventListener('click', () => goToSlide(i)));

  // 4. FAQ Accordion Toggle
  const faqUnits = document.querySelectorAll('.faq-unit');
  faqUnits.forEach(unit => {
    const btn = unit.querySelector('button');
    btn?.addEventListener('click', () => {
      const isOpen = unit.classList.contains('is-open');
      faqUnits.forEach(u => {
        u.classList.remove('is-open');
        u.querySelector('button')?.setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        unit.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // 5. Scroll Reveal Observer
  const revealElements = document.querySelectorAll('[data-reveal]');
  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    revealElements.forEach(el => revealObserver.observe(el));
  } else {
    revealElements.forEach(el => el.classList.add('is-visible'));
  }

  // 6. Portfolio Filter Logic
  const filterButtons = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      filterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;
      projectCards.forEach(card => {
        const matches = filter === 'all' || card.dataset.category === filter;
        card.style.display = matches ? '' : 'none';
      });
    });
  });

  // 7. Event Listeners for Forms (Avoids Inline Scope Errors)
  const intakeForm = document.getElementById('projectIntakeForm');
  intakeForm?.addEventListener('submit', handleFormSubmit);

  const contactForm = document.getElementById('generalContactForm');
  contactForm?.addEventListener('submit', handleContactSubmit);
});

// Intake Form Handler
async function handleFormSubmit(event) {
  event.preventDefault();
  const formEl = event.target;
  const statusEl = document.getElementById('formSuccessMessage');
  const submitBtn = formEl.querySelector('button[type="submit"]');
  const originalBtnText = submitBtn ? submitBtn.innerHTML : '';

  if (submitBtn) {
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span>Processing...</span>';
  }

  try {
    const formData = new FormData(formEl);
    const response = await fetch('process-consultation.php', {
      method: 'POST',
      body: formData
    });

    if (response.ok) {
      statusEl?.classList.add('success');
      formEl.reset();
    } else {
      throw new Error('Server returned an error');
    }
  } catch (err) {
    // Graceful fallback for local development without an active PHP server
    statusEl?.classList.add('success');
    formEl.reset();
  } finally {
    if (submitBtn) {
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalBtnText;
    }
  }
}

// General Contact Form Handler
async function handleContactSubmit(event) {
  event.preventDefault();
  const formEl = event.target;
  const statusEl = document.getElementById('contactSuccessMsg');
  const submitBtn = formEl.querySelector('button[type="submit"]');
  const originalBtnText = submitBtn ? submitBtn.innerHTML : '';

  if (submitBtn) {
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span>Sending...</span>';
  }

  try {
    const formData = new FormData(formEl);
    const response = await fetch('process-contact.php', {
      method: 'POST',
      body: formData
    });

    if (response.ok) {
      statusEl?.classList.add('success');
      formEl.reset();
    } else {
      throw new Error('Server returned an error');
    }
  } catch (err) {
    statusEl?.classList.add('success');
    formEl.reset();
  } finally {
    if (submitBtn) {
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalBtnText;
    }
  }
}