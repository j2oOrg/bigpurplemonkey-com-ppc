// Site interactions for the static raffle pages.
document.addEventListener("DOMContentLoaded", () => {
  // Scroll to top
  const scrollBtn = document.getElementById("hubScrollTop");
  if (scrollBtn) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) scrollBtn.classList.add("show");
      else scrollBtn.classList.remove("show");
    });
    scrollBtn.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));
  }

  // Signup modal (front page)
  const signupModal = document.getElementById("signupModal");
  const openSignup = document.querySelectorAll("[data-signup-btn]");
  const closeSignup = signupModal ? signupModal.querySelector("[data-modal-close]") : null;
  const toggleModal = (show) => {
    if (!signupModal) return;
    signupModal.classList.toggle("active", show);
    signupModal.setAttribute("aria-hidden", show ? "false" : "true");
  };
  if (signupModal) {
    openSignup.forEach((btn) =>
      btn.addEventListener("click", (e) => {
        e.preventDefault();
        toggleModal(true);
      })
    );
    closeSignup?.addEventListener("click", () => toggleModal(false));
    signupModal.addEventListener("click", (e) => {
      if (e.target === signupModal) toggleModal(false);
    });
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") toggleModal(false);
    });
  }

  // Countdown timer (front page)
  const daysEl = document.getElementById("countdownDays");
  const hoursEl = document.getElementById("countdownHours");
  const minutesEl = document.getElementById("countdownMinutes");
  const secondsEl = document.getElementById("countdownSeconds");
  const countdownOrb = document.getElementById("countdownOrb");
  const countdownFill = document.getElementById("countdownFill");

  if (daysEl && hoursEl && minutesEl && secondsEl) {
    const target = new Date("March 30, 2026 19:00:00").getTime();
    const campaignStart = new Date("January 15, 2026 00:00:00").getTime();
    const campaignDuration = Math.max(target - campaignStart, 1);

    const updateCountdown = () => {
      const now = Date.now();
      const diff = Math.max(target - now, 0);
      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
      const minutes = Math.floor((diff / (1000 * 60)) % 60);
      const seconds = Math.floor((diff / 1000) % 60);

      daysEl.textContent = String(days).padStart(2, "0");
      hoursEl.textContent = String(hours).padStart(2, "0");
      minutesEl.textContent = String(minutes).padStart(2, "0");
      secondsEl.textContent = String(seconds).padStart(2, "0");

      const elapsed = Math.min(Math.max(now - campaignStart, 0), campaignDuration);
      const progressPct = Math.min(Math.max((elapsed / campaignDuration) * 100, 0), 100);
      const progressDeg = (progressPct / 100) * 360;
      countdownOrb?.style.setProperty("--orb-progress", `${progressDeg}deg`);
      if (countdownFill) countdownFill.style.width = `${Math.max(4, progressPct)}%`;
    };

    updateCountdown();
    setInterval(updateCountdown, 1000);
  }

  // Footer year
  document.querySelectorAll("[data-year]").forEach((el) => {
    el.textContent = new Date().getFullYear();
  });
});

