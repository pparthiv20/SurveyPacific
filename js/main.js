/**
 * SurveyPacific - Main JavaScript
 * Handles navigation, animations, and interactive elements
 */

document.addEventListener('DOMContentLoaded', function() {
  // ==================== SELECTED EXPERIENCE MOBILE CAROUSEL ====================
  const experience = document.querySelector('#selected-experience');
  const experienceCards = experience && experience.querySelector('.grid');
  if (experienceCards) {
    const items = Array.from(experienceCards.children);
    if (items.length > 1) {
      const controls = document.createElement('div');
      controls.className = 'experience-mobile-controls';
      controls.innerHTML = '<button type="button" aria-label="Previous case study">&#8249;</button><span class="experience-count" aria-live="polite">1 / ' + items.length + '</span><button type="button" aria-label="Next case study">&#8250;</button>';
      experienceCards.after(controls);
      let active = 0;
      controls.querySelectorAll('button').forEach((button, direction) => button.addEventListener('click', function() {
        active = (active + (direction === 0 ? items.length - 1 : 1)) % items.length;
        experienceCards.scrollTo({ left: items[active].offsetLeft, behavior: 'smooth' });
        controls.querySelector('.experience-count').textContent = (active + 1) + ' / ' + items.length;
      }));
      experienceCards.addEventListener('scroll', function() {
        active = Math.round(experienceCards.scrollLeft / experienceCards.clientWidth);
        active = Math.max(0, Math.min(active, items.length - 1));
        controls.querySelector('.experience-count').textContent = (active + 1) + ' / ' + items.length;
      }, { passive: true });

      const loadMoreButton = document.getElementById('loadMoreCaseStudies');
      if (loadMoreButton) {
        loadMoreButton.addEventListener('click', function() {
          const expanded = experience.classList.toggle('is-expanded');
          loadMoreButton.setAttribute('aria-expanded', expanded ? 'true' : 'false');
          loadMoreButton.textContent = expanded ? 'Show Fewer Case Studies' : 'Load More Case Studies';
          if (expanded) experience.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
      }
    }
  }

  // ==================== DESKTOP DROPDOWNS ====================
  const dropdowns = document.querySelectorAll('[data-dropdown]');

  function closeDropdown(dropdown) {
    const toggle = dropdown.querySelector('[data-dropdown-toggle]');
    const menu = dropdown.querySelector('.mega-menu');

    if (!toggle || !menu) return;

    dropdown.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
    menu.setAttribute('aria-hidden', 'true');
    menu.classList.remove('pointer-events-auto', 'visible', 'translate-y-0', 'opacity-100');
    menu.classList.add('pointer-events-none', 'invisible', 'translate-y-2', 'opacity-0');
  }

  function openDropdown(dropdown) {
    dropdowns.forEach(function(item) {
      if (item !== dropdown) closeDropdown(item);
    });

    const toggle = dropdown.querySelector('[data-dropdown-toggle]');
    const menu = dropdown.querySelector('.mega-menu');

    if (!toggle || !menu) return;

    dropdown.classList.add('is-open');
    toggle.setAttribute('aria-expanded', 'true');
    menu.setAttribute('aria-hidden', 'false');
    menu.classList.remove('pointer-events-none', 'invisible', 'translate-y-2', 'opacity-0');
    menu.classList.add('pointer-events-auto', 'visible', 'translate-y-0', 'opacity-100');
  }

  dropdowns.forEach(function(dropdown) {
    const toggle = dropdown.querySelector('[data-dropdown-toggle]');
    let closeTimer;

    if (!toggle) return;

    dropdown.addEventListener('mouseenter', function() {
      clearTimeout(closeTimer);
      openDropdown(dropdown);
    });

    dropdown.addEventListener('mouseleave', function() {
      closeTimer = setTimeout(function() {
        closeDropdown(dropdown);
      }, 120);
    });

    toggle.addEventListener('click', function() {
      clearTimeout(closeTimer);

      if (dropdown.classList.contains('is-open')) {
        closeDropdown(dropdown);
      } else {
        openDropdown(dropdown);
      }
    });
  });

  document.addEventListener('click', function(event) {
    if (!event.target.closest('[data-dropdown]')) {
      dropdowns.forEach(closeDropdown);
    }
  });

  document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
      dropdowns.forEach(closeDropdown);
    }
  });

  // ==================== MOBILE MENU ====================
  const mobileMenuBtn = document.getElementById('mobileMenuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  
  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', function() {
      const isOpening = !mobileMenu.classList.contains('is-open');
      mobileMenu.classList.toggle('is-open', isOpening);
      mobileMenu.setAttribute('aria-hidden', isOpening ? 'false' : 'true');
      mobileMenuBtn.setAttribute('aria-expanded', isOpening ? 'true' : 'false');
      mobileMenuBtn.setAttribute('aria-label', isOpening ? 'Close navigation' : 'Open navigation');
    });

    mobileMenu.querySelectorAll('.mobile-nav-group').forEach(function(group) {
      const summary = group.querySelector('summary');
      const submenu = group.querySelector('.mobile-nav-submenu');
      if (!summary || !submenu) return;

      summary.addEventListener('click', function(event) {
        event.preventDefault();
        if (group.open) {
          submenu.style.maxHeight = submenu.scrollHeight + 'px';
          submenu.offsetHeight;
          submenu.style.maxHeight = '0px';
          submenu.style.opacity = '0';
          submenu.addEventListener('transitionend', function finishClose(e) {
            if (e.propertyName !== 'max-height') return;
            group.open = false;
            submenu.removeEventListener('transitionend', finishClose);
          });
        } else {
          group.open = true;
          submenu.style.maxHeight = '0px';
          submenu.style.opacity = '0';
          requestAnimationFrame(function() {
            submenu.style.maxHeight = submenu.scrollHeight + 'px';
            submenu.style.opacity = '1';
          });
        }
      });
    });
    
    // Close menu when clicking links
    const menuLinks = mobileMenu.querySelectorAll('a');
    menuLinks.forEach(link => {
      link.addEventListener('click', function() {
        mobileMenu.classList.remove('is-open');
        mobileMenu.setAttribute('aria-hidden', 'true');
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
        mobileMenuBtn.setAttribute('aria-label', 'Open navigation');
      });
    });
  }

  // ==================== SERVICES BAR STICK ON SCROLL ====================
  const servicesBar = document.getElementById('servicesBar');

  if (servicesBar) {
    const stickyPoint = 672;

    function updateServicesBar() {
      if (window.pageYOffset >= stickyPoint) {
        servicesBar.style.position = 'fixed';
        servicesBar.style.top = '0';
      } else {
        servicesBar.style.position = 'absolute';
        servicesBar.style.top = stickyPoint + 'px';
      }
    }

    window.addEventListener('scroll', updateServicesBar);
    updateServicesBar();
  }

  // ==================== BACK TO TOP BUTTON ====================
  const backToTopBtn = document.getElementById('backToTop');
  
  if (backToTopBtn) {
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 300) {
        backToTopBtn.style.opacity = '1';
        backToTopBtn.style.visibility = 'visible';
      } else {
        backToTopBtn.style.opacity = '0';
        backToTopBtn.style.visibility = 'hidden';
      }
    });
    
    backToTopBtn.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // ==================== SMOOTH SCROLL FOR ANCHOR LINKS ====================
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        const headerOffset = 80;
        const elementPosition = target.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
        
        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    });
  });

  // ==================== NAVBAR BACKGROUND ON SCROLL ====================
  const nav = document.querySelector('header');
  
  if (nav) {
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 50) {
        nav.classList.add('shadow-lg');
        nav.style.background = 'rgba(255, 255, 255, 0.45)';
      } else {
        nav.classList.remove('shadow-lg');
        nav.style.background = 'rgba(255, 255, 255, 0.35)';
      }
    });
  }

  // ==================== INTERSECTION OBSERVER FOR ANIMATIONS ====================
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };
  
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fade-in-up');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  // Observe elements for animation
  const animateElements = document.querySelectorAll('.animate-on-scroll');
  animateElements.forEach(el => observer.observe(el));

  // ==================== FILTER TABS ====================
  const filterTabs = document.querySelectorAll('.filter-tab');
  const clientsGrid = document.getElementById('clientsGrid');
  const dragScrollContainers = document.querySelectorAll('.drag-scroll');

  dragScrollContainers.forEach(function(container) {
    let isDragging = false;
    let hasMoved = false;
    let startX = 0;
    let startScrollLeft = 0;

    container.addEventListener('pointerdown', function(event) {
      if (event.pointerType === 'mouse' && event.button !== 0) return;

      isDragging = true;
      hasMoved = false;
      startX = event.clientX;
      startScrollLeft = container.scrollLeft;
      container.setPointerCapture(event.pointerId);
      container.classList.add('is-dragging');
    });

    container.addEventListener('pointermove', function(event) {
      if (!isDragging) return;

      const distance = event.clientX - startX;
      if (Math.abs(distance) > 4) hasMoved = true;
      container.scrollLeft = startScrollLeft - distance;
    });

    function stopDragging() {
      if (!isDragging) return;
      isDragging = false;
      container.classList.remove('is-dragging');
    }

    container.addEventListener('pointerup', stopDragging);
    container.addEventListener('pointercancel', stopDragging);
    container.addEventListener('lostpointercapture', stopDragging);
    container.addEventListener('click', function(event) {
      if (hasMoved) {
        event.preventDefault();
        event.stopPropagation();
        hasMoved = false;
      }
    }, true);
  });

  const borderColors = ['border-brand-blue', 'border-brand-gold', 'border-brand-green', 'border-brand-red'];

  const clientLogos = {
    financial: [
      { src: 'assets/imgs/mcx.png', alt: 'MCX', maxh: 'max-h-[59px]' },
      { src: 'assets/imgs/fabit.png', alt: 'Fabit', maxh: 'max-h-[44px]' },
      { src: 'assets/imgs/dizzy.png', alt: 'Dizzy', maxh: 'max-h-[50px]' },
      { src: 'assets/imgs/thi.png', alt: 'THI', maxh: 'max-h-[58px]' },
      { src: 'assets/imgs/piramal_finance_logo.svg.png', alt: 'Piramal Finance', maxh: 'max-h-[66px]' }
    ],
    consultancy: [
      { src: 'assets/imgs/better.png?v=2', alt: 'Better', maxh: 'max-h-[50px]' },
      { src: 'assets/imgs/schbang.png', alt: 'Schbang', maxh: 'max-h-[50px]' },
      { src: 'assets/imgs/pavlino.png', alt: 'Pavlino', maxh: 'max-h-[50px]' },
      { src: 'assets/imgs/prastut.png', alt: 'Prastut', maxh: 'max-h-[50px]' },
      { src: 'assets/imgs/lcg.png', alt: 'LCG', maxh: 'max-h-[50px]' },
      { src: 'assets/imgs/cgk.png', alt: 'CGK', maxh: 'max-h-[50px]' },
      { src: 'assets/imgs/ideosphere.png', alt: 'Ideosphere', maxh: 'max-h-[50px]' },
      { src: 'assets/imgs/frost.png', alt: 'Frost', maxh: 'max-h-[50px]' }
    ]
  };

  function renderClients(filter) {
    if (!clientsGrid) return;

    const logos = clientLogos[filter];

    if (!logos || !logos.length) {
      clientsGrid.innerHTML = '<div class="col-span-4 text-center text-[14px] text-brand-muted py-12">Client logos for this category are coming soon.</div>';
      return;
    }

    const displayLogos = logos;
    clientsGrid.innerHTML = displayLogos.map((logo, i) => {
      const borderColor = borderColors[i % borderColors.length];
      return '<div class="bg-white rounded-xl border ' + borderColor + ' p-6 flex items-center justify-center h-[98px]">' +
             '<img src="' + logo.src + '" alt="' + logo.alt + '" class="' + logo.maxh + ' object-contain">' +
             '</div>';
    }).join('');
  }

  filterTabs.forEach(tab => {
    tab.addEventListener('click', function() {
      // Remove active class from all tabs
      filterTabs.forEach(t => {
        t.classList.remove('active');
        t.style.background = 'transparent';
        t.style.color = '#102633';
        t.style.borderColor = '#D4DAE0';
      });

      // Add active class to clicked tab
      this.classList.add('active');
      this.style.background = '#1D56D4';
      this.style.color = 'white';
      this.style.borderColor = '#1D56D4';

      // Render compatible logos
      renderClients(this.dataset.filter);
    });
  });

  // Render default tab on load
  const defaultTab = document.querySelector('.filter-tab[data-filter="financial"]');
  if (defaultTab) {
    defaultTab.classList.add('active');
    renderClients('financial');
  }

  // ==================== STATS COUNTER ANIMATION ====================
  function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16);
    const suffix = element.textContent.includes('+') ? '+' : '';
    const prefix = element.textContent.includes('M') ? 'M' : '';
    
    function updateCounter() {
      start += increment;
      if (start < target) {
        element.textContent = Math.floor(start) + suffix + prefix;
        requestAnimationFrame(updateCounter);
      } else {
        element.textContent = target + suffix + prefix;
      }
    }
    
    updateCounter();
  }
  
  // Observe stats for counter animation
  const statsSection = document.querySelector('.hero-stats');
  
  if (statsSection) {
    const statsObserver = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const statNumbers = entry.target.querySelectorAll('.stat-number');
          statNumbers.forEach(stat => {
            const text = stat.textContent;
            let target = parseInt(text);
            if (!isNaN(target)) {
              animateCounter(stat, target);
            }
          });
          statsObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    
    statsObserver.observe(statsSection);
  }

  // ==================== ACTIVE NAVIGATION LINK ====================
  const sections = document.querySelectorAll('section[id]');
  
  function highlightNavLink() {
    const scrollPos = window.scrollY + 100;
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute('id');
      const navLink = document.querySelector(`nav a[href="#${sectionId}"]`);
      
      if (navLink) {
        if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
          navLink.classList.add('text-brand-blue');
          navLink.classList.remove('text-brand-dark');
        } else {
          navLink.classList.remove('text-brand-blue');
          navLink.classList.add('text-brand-dark');
        }
      }
    });
  }
  
  window.addEventListener('scroll', highlightNavLink);

  // ==================== LAZY LOADING IMAGES ====================
  const lazyImages = document.querySelectorAll('img[data-src]');
  
  if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.removeAttribute('data-src');
          imageObserver.unobserve(img);
        }
      });
    });
    
    lazyImages.forEach(img => imageObserver.observe(img));
  }

  // ==================== TOOLTIP INITIALIZATION ====================
  const tooltips = document.querySelectorAll('[data-tooltip]');
  
  tooltips.forEach(tooltip => {
    tooltip.addEventListener('mouseenter', function() {
      const tooltipText = this.dataset.tooltip;
      const tooltipEl = document.createElement('div');
      tooltipEl.className = 'tooltip';
      tooltipEl.textContent = tooltipText;
      this.appendChild(tooltipEl);
      this.style.position = 'relative';
    });
    
    tooltip.addEventListener('mouseleave', function() {
      const tooltipEl = this.querySelector('.tooltip');
      if (tooltipEl) {
        tooltipEl.remove();
      }
    });
  });

  // ==================== KEYBOARD NAVIGATION ====================
  document.addEventListener('keydown', function(e) {
    // ESC key closes mobile menu
    if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('is-open')) {
      mobileMenu.classList.remove('is-open');
      mobileMenu.setAttribute('aria-hidden', 'true');
      mobileMenuBtn.setAttribute('aria-expanded', 'false');
      mobileMenuBtn.setAttribute('aria-label', 'Open navigation');
    }
  });
});

// ==================== UTILITY FUNCTIONS ====================
function debounce(func, wait = 20, immediate = true) {
  let timeout;
  return function() {
    const context = this, args = arguments;
    const later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

function throttle(func, limit) {
  let inThrottle;
  return function() {
    const args = arguments;
    const context = this;
    if (!inThrottle) {
      func.apply(context, args);
      inThrottle = true;
      setTimeout(() => inThrottle = false, limit);
    }
  };
}

// Export functions for use in other scripts
window.SurveyPacific = {
  debounce,
  throttle
};
