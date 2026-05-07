/**
 * main.js — School Profile Landing Page
 * Vanilla JavaScript: smooth scroll, sticky navbar, hamburger menu, lightbox
 * Requirements: 2.2, 2.3, 2.4, 6.2, 6.3
 */

document.addEventListener('DOMContentLoaded', () => {

  /* ---------------------------------------------------------------
     8.1 Smooth Scroll & Sticky Navbar
  --------------------------------------------------------------- */

  // Smooth scroll for all anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (e) => {
      const targetId = anchor.getAttribute('href');
      // Skip if it's just "#" with no target
      if (targetId === '#') return;

      const targetEl = document.querySelector(targetId);
      if (targetEl) {
        e.preventDefault();
        targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // Sticky navbar: toggle "scrolled" class on scroll
  const navbar = document.getElementById('navbar');
  if (navbar) {
    const handleScroll = () => {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    // Run once on load in case page is already scrolled
    handleScroll();
  }

  /* ---------------------------------------------------------------
     8.2 Hamburger Menu
  --------------------------------------------------------------- */

  const hamburger = document.getElementById('hamburger');
  const navMenu   = document.getElementById('nav-menu');

  /**
   * Close the mobile nav menu.
   */
  const closeMenu = () => {
    if (!navMenu || !hamburger) return;
    navMenu.classList.remove('open');
    hamburger.setAttribute('aria-expanded', 'false');
  };

  /**
   * Open the mobile nav menu.
   */
  const openMenu = () => {
    if (!navMenu || !hamburger) return;
    navMenu.classList.add('open');
    hamburger.setAttribute('aria-expanded', 'true');
  };

  if (hamburger && navMenu) {
    // Toggle menu on hamburger click
    hamburger.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = navMenu.classList.contains('open');
      if (isOpen) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    // Close menu when any nav link is clicked
    navMenu.querySelectorAll('.nav-link').forEach((link) => {
      link.addEventListener('click', () => {
        closeMenu();
      });
    });

    // Close menu when clicking outside the navbar
    document.addEventListener('click', (e) => {
      const navbarEl = document.querySelector('.navbar');
      if (navbarEl && !navbarEl.contains(e.target)) {
        closeMenu();
      }
    });
  }

  /* ---------------------------------------------------------------
     8.3 Lightbox Gallery
  --------------------------------------------------------------- */

  const lightbox     = document.getElementById('lightbox');
  const lightboxImg  = document.getElementById('lightbox-img');
  const lightboxClose = lightbox ? lightbox.querySelector('.lightbox-close') : null;
  const lightboxBackdrop = lightbox ? lightbox.querySelector('.lightbox-backdrop') : null;

  /**
   * Open the lightbox and display the given image.
   * @param {string} src  - Image source URL
   * @param {string} alt  - Image alt text
   */
  const openLightbox = (src, alt) => {
    if (!lightbox || !lightboxImg) return;

    lightboxImg.src = src;
    lightboxImg.alt = alt;

    lightbox.removeAttribute('hidden');
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';

    // Focus the close button for accessibility
    if (lightboxClose) {
      lightboxClose.focus();
    }
  };

  /**
   * Close the lightbox.
   */
  const closeLightbox = () => {
    if (!lightbox || !lightboxImg) return;

    lightbox.classList.remove('active');
    lightbox.setAttribute('hidden', '');
    lightboxImg.src = '';
    lightboxImg.alt = '';
    document.body.style.overflow = '';
  };

  // Open lightbox when a gallery item is clicked
  document.querySelectorAll('.gallery-item').forEach((img) => {
    img.addEventListener('click', () => {
      const src = img.getAttribute('data-src') || img.getAttribute('src') || '';
      const alt = img.getAttribute('alt') || '';
      openLightbox(src, alt);
    });
  });

  // Close lightbox via close button
  if (lightboxClose) {
    lightboxClose.addEventListener('click', closeLightbox);
  }

  // Close lightbox via backdrop click
  if (lightboxBackdrop) {
    lightboxBackdrop.addEventListener('click', closeLightbox);
  }

  // Close lightbox via Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && lightbox && lightbox.classList.contains('active')) {
      closeLightbox();
    }
  });

  /* ---------------------------------------------------------------
     Alert Auto-Dismiss & URL Cleanup
  --------------------------------------------------------------- */

  const alerts = document.querySelectorAll('.alert');

  alerts.forEach((alert) => {
    // Auto hilang setelah 10 detik dengan fade out
    const timer = setTimeout(() => {
      alert.style.transition = 'opacity 0.6s ease';
      alert.style.opacity = '0';
      setTimeout(() => {
        alert.remove();
        // Bersihkan ?sent=1 atau ?error=1 dari URL tanpa reload halaman
        const url = new URL(window.location.href);
        url.searchParams.delete('sent');
        url.searchParams.delete('error');
        window.history.replaceState({}, '', url.pathname + (url.hash || ''));
      }, 600);
    }, 10000);

    // Juga bisa ditutup manual dengan klik
    alert.style.cursor = 'pointer';
    alert.title = 'Klik untuk menutup';
    alert.addEventListener('click', () => {
      clearTimeout(timer);
      alert.style.transition = 'opacity 0.3s ease';
      alert.style.opacity = '0';
      setTimeout(() => {
        alert.remove();
        const url = new URL(window.location.href);
        url.searchParams.delete('sent');
        url.searchParams.delete('error');
        window.history.replaceState({}, '', url.pathname + (url.hash || ''));
      }, 300);
    });
  });

}); // end DOMContentLoaded
