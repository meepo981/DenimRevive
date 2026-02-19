
document.addEventListener("DOMContentLoaded", function () {
  // --- 1. Parallax Effect ---
  const heroBg = document.getElementById("parallax-bg");
  if (heroBg) {
    window.addEventListener("scroll", function () {
      let scrollPosition = window.pageYOffset;
      heroBg.style.transform = "translateY(" + scrollPosition * 0.4 + "px)";
    });
  }

  // --- 2. Scroll Reveal Animation ---
  const reveals = document.querySelectorAll(".reveal");
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
        }
      });
    },
    { threshold: 0.1 }
  );
  reveals.forEach((el) => observer.observe(el));

  // --- 3. Cookie Banner ---
  const banner = document.getElementById("cookie-consent");
  const acceptBtn = document.getElementById("accept-cookies");

  if (banner && acceptBtn) {
    // Проверяем, есть ли кука cookieAccepted
    const cookies = document.cookie.split(";").map((c) => c.trim());
    const accepted = cookies.some((c) => c.startsWith("cookieAccepted="));

    if (!accepted) {
      banner.classList.add("active");
    }

    acceptBtn.addEventListener("click", function () {
      document.cookie =
        "cookieAccepted=true; path=/; max-age=" + 60 * 60 * 24 * 365;
      banner.classList.remove("active");
    });
  }

  // --- 4. FAQ Accordion ---
  const accordion = document.getElementById("faq-accordion");
  if (accordion) {
    const items = Array.from(accordion.querySelectorAll(".accordion-item"));
    const panels = Array.from(accordion.querySelectorAll(".accordion-panel"));

    function collapseAll() {
      items.forEach((b) => b.setAttribute("aria-expanded", "false"));
      panels.forEach((p) => {
        p.style.maxHeight = null;
        p.style.padding = "0 16px";
      });
    }

    items.forEach((btn) => {
      btn.addEventListener("click", function () {
        const expanded = this.getAttribute("aria-expanded") === "true";
        if (expanded) {
          this.setAttribute("aria-expanded", "false");
          const panel = this.nextElementSibling;
          if (panel) {
            panel.style.maxHeight = null;
            panel.style.padding = "0 16px";
          }
          return;
        }

        collapseAll();
        this.setAttribute("aria-expanded", "true");
        const panel = this.nextElementSibling;
        if (panel) {
          panel.style.padding = "12px 16px";
          panel.style.maxHeight = panel.scrollHeight + 24 + "px";
        }
      });
    });

    // Open first item by default
    const firstBtn = items[0];
    if (firstBtn) {
      firstBtn.setAttribute("aria-expanded", "true");
      const firstPanel = firstBtn.nextElementSibling;
      if (firstPanel) {
        firstPanel.style.padding = "12px 16px";
        firstPanel.style.maxHeight = firstPanel.scrollHeight + 24 + "px";
      }
    }
  }

  // --- 5. Smooth scroll for FAQ TOC links ---
  document.querySelectorAll('.faq-toc a[href^="#"]').forEach((a) => {
    a.addEventListener("click", function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (!target) return;
      const rect = target.getBoundingClientRect();
      const offset = window.pageYOffset + rect.top - 80;
      window.scrollTo({ top: offset, behavior: "smooth" });
      setTimeout(() => target.setAttribute("tabindex", "-1") && target.focus(), 600);
    });
  });

  // --- 6. Sticky CTA hide on scroll ---
  const sticky = document.querySelector(".sticky-cta");
  if (sticky) {
    let lastY = window.pageYOffset;
    window.addEventListener("scroll", () => {
      const y = window.pageYOffset;
      if (y > lastY && y > 200) {
        sticky.style.transform = "translateY(20px)";
        sticky.style.opacity = "0";
      } else {
        sticky.style.transform = "translateY(0)";
        sticky.style.opacity = "1";
      }
      lastY = y;
    });
  }

  // --- 7. Testimonials Carousel ---
  const testimonials = document.getElementById("testimonials");
  if (testimonials) {
    const track = testimonials;
    const viewport = document.querySelector(".testimonials-viewport");
    const cards = Array.from(track.querySelectorAll(".testimonial-card"));
    const dotsContainer = document.getElementById("test-dots");

    function getVisibleCount() {
      return window.innerWidth > 1000 ? 3 : 1;
    }

    let currentPage = 0;
    let pages = 1;
    let intervalId = null;
    let startX = 0;
    let deltaX = 0;

    function buildDots(p) {
      dotsContainer.innerHTML = "";
      for (let i = 0; i < p; i++) {
        const btn = document.createElement("button");
        btn.className = "dot" + (i === 0 ? " active" : "");
        btn.dataset.index = i;
        btn.setAttribute("aria-label", `Go to slide ${i + 1}`);
        dotsContainer.appendChild(btn);
      }
      Array.from(dotsContainer.querySelectorAll(".dot")).forEach((d) =>
        d.addEventListener("click", () => showPage(Number(d.dataset.index)))
      );
    }

    function layoutCarousel() {
      const visible = getVisibleCount();
      const gap = parseFloat(getComputedStyle(track).gap) || 0;
      pages = Math.max(1, Math.ceil(cards.length / visible));
      const vpWidth = viewport.clientWidth;
      const cardWidth = (vpWidth - gap * (visible - 1)) / visible;
      cards.forEach((card) => {
        card.style.width = `${cardWidth}px`;
      });
      const totalWidth =
        cards.reduce((sum, c) => sum + c.getBoundingClientRect().width, 0) +
        gap * (cards.length - 1);
      track.style.width = `${totalWidth}px`;
      buildDots(pages);
      if (currentPage >= pages) currentPage = pages - 1;
      showPage(currentPage, true);
    }

    function showPage(page, instant = false) {
      const visible = getVisibleCount();
      if (page < 0) page = 0;
      if (page >= pages) page = pages - 1;
      currentPage = page;
      const gap = parseFloat(getComputedStyle(track).gap) || 0;
      const startIndex = Math.min(page * visible, Math.max(0, cards.length - visible));
      const firstCard = cards[0];
      if (!firstCard) return;
      const cardW = firstCard.getBoundingClientRect().width;
      const move = (cardW + gap) * startIndex;
      track.style.transition = instant ? "none" : "transform 0.8s cubic-bezier(.22,.9,.31,1)";
      track.style.transform = `translateX(-${move}px)`;
      cards.forEach((c) => c.classList.remove("visible"));
      for (let i = 0; i < visible; i++) {
        const idx = startIndex + i;
        if (cards[idx]) cards[idx].classList.add("visible");
      }
      Array.from(dotsContainer.children).forEach((d, idx) =>
        d.classList.toggle("active", idx === page)
      );
    }

    function startAutoRotate() {
      stopAutoRotate();
      intervalId = setInterval(() => {
        showPage((currentPage + 1) % pages);
      }, 3000);
    }

    function stopAutoRotate() {
      if (intervalId) {
        clearInterval(intervalId);
        intervalId = null;
      }
    }

    track.addEventListener("mouseenter", stopAutoRotate);
    track.addEventListener("mouseleave", startAutoRotate);
    track.addEventListener(
      "touchstart",
      (e) => {
        stopAutoRotate();
        startX = e.touches[0].clientX;
        deltaX = 0;
      },
      { passive: true }
    );
    track.addEventListener(
      "touchmove",
      (e) => {
        deltaX = e.touches[0].clientX - startX;
      },
      { passive: true }
    );
    track.addEventListener("touchend", () => {
      const threshold = 40;
      if (deltaX > threshold) showPage(currentPage - 1);
      else if (deltaX < -threshold) showPage(currentPage + 1);
      startAutoRotate();
    });

    track.setAttribute("tabindex", "0");
    track.addEventListener("keydown", (e) => {
      if (e.key === "ArrowRight") showPage(currentPage + 1);
      if (e.key === "ArrowLeft") showPage(currentPage - 1);
    });

    layoutCarousel();
    window.addEventListener("resize", () => layoutCarousel());
    startAutoRotate();
  }
});
